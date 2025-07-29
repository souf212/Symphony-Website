pipeline {
    agent any

    environment {
        DOCKERHUB = credentials('dockerhub-credentials')
        SONARQUBE = credentials('sonarqube-token')
        SONAR_URL = 'http://localhost:9000'
    }

    stages {

        stage('1. Clone') {
            steps {
                checkout([
                    $class: 'GitSCM',
                    branches: [[name: '*/main']],
                    userRemoteConfigs: [[
                        url: 'git@github.com:oussamaelamranii/symfony-crm.git',
                        credentialsId: 'github-credentials'
                    ]]
                ])
            }
        }

        stage('2. Patch Compose for Jenkins') {
            steps {
                sh '''
                    echo "Temporarily disabling problematic mounts in compose.yaml for Jenkins"

                     # Disable www.conf mount
                        sed -i 's|^\\s*[-] ./infra/php/php-fpm.d/www.conf.*|# JENKINS_DISABLED: &|' compose.yaml

                    # Disable prometheus.yml mount
                        sed -i 's|^\\s*[-] ./monitoring/prometheus.yml.*|# JENKINS_DISABLED: &|' compose.yaml

                    echo "Neutralizing prometheus volumes if required"
                    awk '
                      /prometheus:/ { inside=1 }
                      inside && /volumes:/ { print "    volumes: []"; inside=0; next }
                      { print }
                    ' compose.yaml > compose.patched.yaml && mv compose.patched.yaml compose.yaml
                '''
            }
        }


        stage('2.1 Patch Prometheus Config') {
            steps {
                sh '''
                    echo "Creating prometheus.yml with cadvisor scrape config..."

                    mkdir -p monitoring

                    cat > monitoring/prometheus.yml <<'EOF'
global:
  scrape_interval: 15s
  evaluation_interval: 15s

scrape_configs:
  - job_name: "prometheus"
    static_configs:
      - targets: ["localhost:9090"]
        labels:
          app: "prometheus"

  - job_name: "cadvisor"
    static_configs:
      - targets: ["cadvisor:18080"]
        labels:
          app: "cadvisor"
EOF

                    echo "prometheus.yml written to monitoring/prometheus.yml"
                '''
            }
        }

        stage('3. Fix Nginx Config') {
            steps {
                sh '''
                    echo "Writing default.conf for Nginx..."

                    mkdir -p infra/nginx/conf.d

                    cat > infra/nginx/conf.d/default.conf <<'EOF'
server {
    listen 80;
    server_name localhost;

    root /var/www/html/symfony-crm/code/public;
    index index.php index.html;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ \\.php$ {
        include fastcgi_params;
        fastcgi_pass symfony:9000;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
EOF

                    echo "Nginx config created!"
                    ls -l infra/nginx/conf.d
                    cat infra/nginx/conf.d/default.conf
                '''
            }
        }

        stage('4. Composer & Cache') {
            steps {
                sh '''
                    docker compose -f compose.yaml up -d

                    docker compose exec symfony composer install --no-interaction --working-dir=/var/www/html/symfony-crm/code

                    docker compose exec symfony php /var/www/html/symfony-crm/code/bin/console cache:clear --no-warmup
                '''
            }
        }

        stage('4.1 Fix Symfony Permissions') {
            steps {
                sh '''
                    echo "Fixing permissions on var directory..."
                    docker compose exec symfony chmod -R 777 /var/www/html/symfony-crm/code/var
                    echo "Permissions fixed"
                '''
            }
        }

        stage('5. SonarQube Analysis') {
            steps {
                withCredentials([string(credentialsId: 'sonarqube-token', variable: 'SONARQUBE')]) {
                    sh '''
                        curl -sL https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-5.0.1.3006-linux.zip -o sonar-scanner.zip
                        unzip -oq sonar-scanner.zip -d sonar-scanner

                        SONAR_SCANNER_DIR=$(find sonar-scanner -type d -name "sonar-scanner-*")
                        export PATH="$PATH:$SONAR_SCANNER_DIR/bin"

                        sonar-scanner \
                            -Dsonar.projectKey=symfony-crm \
                            -Dsonar.sources=code/src \
                            -Dsonar.host.url=http://sonarqube:9000 \
                            -Dsonar.token=$SONARQUBE
                    '''
                }
            }
        }

        stage('6. Build & Push Docker') {
            steps {
                withCredentials([usernamePassword(credentialsId: 'dockerhub-credentials', usernameVariable: 'DOCKER_USER', passwordVariable: 'DOCKER_PASS')]) {
                    sh '''
                        echo "$DOCKER_PASS" | docker login -u "$DOCKER_USER" --password-stdin
                        docker build -t aouissianass/symfony-crm:latest -f infra/php/Dockerfile .
                        docker push aouissianass/symfony-crm:latest
                    '''
                }
            }
        }

        stage('7. Restart All Containers') {
            steps {
                sh '''
                    echo "Restarting all containers to reload Nginx config..."

                    docker compose down
                    docker compose up -d --build

                    echo "All services restarted."
                '''
            }
        }

        stage('7.5 Force Inject Nginx Config') {
            steps {
                sh '''
                    echo "Manually copying default.conf into Nginx container..."

                    CONTAINER_ID=$(docker ps -qf "name=nginx")

                    if [ -n "$CONTAINER_ID" ]; then
                        docker cp infra/nginx/conf.d/default.conf $CONTAINER_ID:/etc/nginx/conf.d/default.conf
                        docker exec -i $CONTAINER_ID nginx -s reload
                        echo "Nginx config injected and reloaded"
                    else
                        echo "Nginx container not found!"
                        exit 1
                    fi
                '''
            }
        }

        stage('8. Deploy via Ansible') {
            steps {
                sh '''
                    echo "Running Ansible deployment..."
                    ansible-playbook -i ansible/inventory.ini ansible/deploy.yml
                '''
            }
        }
        stage('9. Inject Prometheus Config into Container') {
    steps {
        sh '''
            echo "Injecting prometheus.yml directly into the running container..."

            cat <<'EOF' | docker exec -i prometheus tee /etc/prometheus/prometheus.yml > /dev/null
global:
  scrape_interval: 15s
  evaluation_interval: 15s

scrape_configs:
  - job_name: "prometheus"
    static_configs:
      - targets: ["localhost:9090"]
        labels:
          app: "prometheus"

  - job_name: "cadvisor"
    static_configs:
      - targets: ["cadvisor:8080"]
        labels:
          app: "cadvisor"
EOF

            echo "File successfully written inside Prometheus container"
        '''
    }
}
        stage('9.1 Restart Prometheus') {
    steps {
        sh '''
            echo "🔄 Restarting Prometheus container..."
            docker restart prometheus
            echo "✅ Restarted"
        '''
    }
}


    }
}
