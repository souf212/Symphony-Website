<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Profiler/settings.html.twig */
class __TwigTemplate_c25465a092fef1d62411a92c87685f4d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/settings.html.twig"));

        // line 1
        yield "<style>
:root {
    --settings-modal-shadow: 0 0 0 1px var(--gray-400), 5px 5px 20px 0 var(--gray-800);
    --settings-modal-header-background: var(--gray-200);
    --settings-modal-content-background: var(--gray-100);
    --settings-option-background: var(--page-background);
    --settings-option-border-color: var(--gray-300);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-400);
    --settings-option-active-border-color: #3b82f6;
    --settings-option-active-background: #eff6ff;
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: var(--gray-400);
}
.theme-dark {
    --settings-modal-shadow: 0 0 0 1px var(--gray-600), 5px 5px 10px 0 var(--gray-900);
    --settings-modal-header-background: var(--gray-800);
    --settings-modal-content-background: var(--gray-700);
    --settings-option-background: transparent;
    --settings-option-border-color: var(--gray-500);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-300);
    --settings-option-active-border-color: #93c5fd;
    --settings-option-active-background: var(--gray-700);
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: #93c5fd;
}

#open-settings {
    color: var(--color-muted);
    align-items: center;
    display: flex;
    margin: 10px 0 5px;
}
#open-settings .icon {
    margin-right: 4px;
}
#open-settings .icon, #open-settings svg {
    height: 18px;
    width: 18px;
}

.modal-wrap {
    -webkit-transition-duration: 0.3s;
    -webkit-transition-property: opacity, visibility;
    -webkit-transition-timing-function: ease-in-out;
    align-items: center;
    background: rgba(0, 0, 0, 0.70);
    display: flex;
    backdrop-filter: blur(2px);
    height: 100%;
    justify-content: center;
    left: 0;
    opacity: 0;
    overflow: auto;
    position: fixed;
    top: 0;
    transition-duration: 0.3s;
    transition-property: opacity, visibility;
    transition-timing-function: ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 100000;
}
.modal-wrap.visible {
    opacity: 1;
    visibility: visible;
}
.modal-wrap .modal-container {
    border-radius: 6px;
    box-shadow: var(--settings-modal-shadow);
    color: var(--color-text);
    margin: 1em;
    max-width: 94%;
    width: 600px;
}

.modal-wrap .modal-header {
    align-items: center;
    background: var(--settings-modal-header-background);
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
}
.modal-wrap .modal-header h3 {
    margin: 0;
}
.modal-wrap .modal-header .close-modal {
    background: transparent;
    border: 0;
    color: var(--color-muted);
    cursor: pointer;
    font-size: 28px;
    line-height: 1;
}

.modal-wrap .modal-header .close-modal:hover { opacity: 1; }

.modal-wrap .modal-content {
  background: var(--settings-modal-content-background);
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
  margin: 0;
  padding: 15px 30px;
  z-index: 100000;
}
.modal-content h4 {
    font-size: 18px;
    margin: 0 0 10px;
}
.modal-content .settings-group + h4 {
    margin-top: 30px;
}
.modal-content .settings-group {
    border: 1px solid var(--settings-option-border-color);
    border-radius: 4px;
    display: flex;
    margin-bottom: 15px;
}
.modal-content .settings-group label {
    cursor: pointer;
    display: flex;
    flex: 1;
    font-size: 16px;
    margin: 0;
}
.modal-content .settings-group label input {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
    opacity: 0;
}
.modal-content .settings-group:has(input:focus-visible) {
    outline: 2px dotted var(--settings-option-active-border-color);
    outline-offset: 2px;
}
.modal-content .settings-group label input:checked + p {
    box-shadow: inset 0 0 0 2px var(--settings-option-active-border-color);
    background-color: var(--settings-option-active-background);
    color: var(--settings-option-active-color);
}
.modal-content .settings-group label input:checked + p svg {
    color: var(--settings-option-active-icon-color);
}
.modal-content .settings-group label p {
    align-items: center;
    background: var(--settings-option-background);

    color: var(--settings-option-color);
    flex: 1;
    font-size: 14px;
    margin: 0;
    padding: 10px 15px;
    text-align: center;
}
.modal-content .settings-group label:first-child p {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.modal-content .settings-group label:last-child p {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.modal-content .settings-group label + label p {
    border-left: 1px solid var(--settings-option-border-color);
}
.modal-content label p span {
    display: block;
    font-size: 16px;
}
.modal-content label p abbr {
    border: 0;
    text-decoration: none;
}
.modal-content label svg {
    color: var(--settings-option-icon-color);
    height: 36px;
    width: 36px;
}

@media (max-width: 768px) {
    #open-settings {
        color: transparent;
    }
    #sidebar:hover #open-settings, #sidebar.expanded #open-settings {
        color: var(--color-muted);
    }
}
</style>

<a href=\"#\" id=\"open-settings\">
    <span class=\"icon\">";
        // line 194
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings.svg");
        yield "</span>
    Profiler settings
</a>

<div class=\"modal-wrap\" id=\"profiler-settings\">
    <div class=\"modal-container\">
        <div class=\"modal-header\">
            <h3>Configuration Settings</h3>
            <button aria-label=\"Close\" class=\"close-modal\">&times;</button>
        </div>

        <div class=\"modal-content\">
            <h4>Theme</h4>

            <div class=\"settings-group\">
                <label for=\"settings-theme-auto\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"auto\" id=\"settings-theme-auto\">
                    <p>
                        ";
        // line 212
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings-theme-system.svg");
        yield "
                        <span>System / OS</span>
                    </p>
                </label>

                <label for=\"settings-theme-light\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"light\" id=\"settings-theme-light\">
                    <p>
                        ";
        // line 220
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings-theme-light.svg");
        yield "
                        <span>Light</span>
                    </p>
                </label>

                <label for=\"settings-theme-dark\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"dark\" id=\"settings-theme-dark\">
                    <p>
                        ";
        // line 228
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings-theme-dark.svg");
        yield "
                        <span>Dark</span>
                    </p>
                </label>
            </div>

            <h4>Page Width</h4>

            <div class=\"settings-group\">
                <label for=\"settings-width-normal\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"normal\" id=\"settings-width-normal\">
                    <p>
                        ";
        // line 240
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings-width-fixed.svg");
        yield "
                        <span>Fixed width</span>
                    </p>
                </label>

                <label for=\"settings-width-full\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"full\" id=\"settings-width-full\">
                    <p>
                        ";
        // line 248
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/settings-width-fitted.svg");
        yield "
                        <span>Fit to window</span>
                    </p>
                </label>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const configOptions = document.querySelectorAll('.config-option');
    [...configOptions].forEach(option => {
        option.addEventListener('change', function (event) {
            const optionName = option.name;
            const optionValue = option.value;
            const settingName = 'symfony/profiler/' + optionName;
            const settingValue = optionName + '-' + optionValue;

            localStorage.setItem(settingName, settingValue);

            document.body.classList.forEach((cssClass) => {
                if (cssClass.startsWith(optionName)) {
                    document.body.classList.remove(cssClass);
                }
            });

            const resolvedSettingValue = 'theme-auto' === settingValue
                ? (matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light')
                : settingValue;
            document.body.classList.add(resolvedSettingValue);

            if (resolvedSettingValue.startsWith('theme-')) {
                document.body.style.colorScheme = resolvedSettingValue.endsWith('-light') ? 'light' : 'dark';
            }
        });
    });

    const openModalButton = document.getElementById('open-settings');
    const modalWindow = document.getElementById('profiler-settings');
    const closeModalButton = document.getElementsByClassName('close-modal')[0];
    const modalWrapper = document.getElementsByClassName('modal-wrap')[0];
    const closeModal = () => {
        modalWindow.classList.remove('visible');
        setTimeout(() => openModalButton.focus(), 30);
    };

    openModalButton.addEventListener('click', function(event) {
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/theme') || 'theme-auto')).checked = 'checked';
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/width') || 'width-normal')).checked = 'checked';

        modalWindow.classList.toggle('visible');
        setTimeout(() => closeModalButton.focus(), 30);
        event.preventDefault();
    });

    closeModalButton.addEventListener('click', closeModal);
    modalWrapper.addEventListener('click', function(event) {
        if (event.target == event.currentTarget) {
            closeModal();
        }
    });
    modalWrapper.addEventListener('keydown', function(event) {
        if (event.key === 'Esc' || event.key === 'Escape') {
            closeModal();
        }
    });
})();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/settings.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  312 => 248,  301 => 240,  286 => 228,  275 => 220,  264 => 212,  243 => 194,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
:root {
    --settings-modal-shadow: 0 0 0 1px var(--gray-400), 5px 5px 20px 0 var(--gray-800);
    --settings-modal-header-background: var(--gray-200);
    --settings-modal-content-background: var(--gray-100);
    --settings-option-background: var(--page-background);
    --settings-option-border-color: var(--gray-300);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-400);
    --settings-option-active-border-color: #3b82f6;
    --settings-option-active-background: #eff6ff;
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: var(--gray-400);
}
.theme-dark {
    --settings-modal-shadow: 0 0 0 1px var(--gray-600), 5px 5px 10px 0 var(--gray-900);
    --settings-modal-header-background: var(--gray-800);
    --settings-modal-content-background: var(--gray-700);
    --settings-option-background: transparent;
    --settings-option-border-color: var(--gray-500);
    --settings-option-color: var(--color-text);
    --settings-option-icon-color: var(--gray-300);
    --settings-option-active-border-color: #93c5fd;
    --settings-option-active-background: var(--gray-700);
    --settings-option-active-color: var(--color-text);
    --settings-option-active-icon-color: #93c5fd;
}

#open-settings {
    color: var(--color-muted);
    align-items: center;
    display: flex;
    margin: 10px 0 5px;
}
#open-settings .icon {
    margin-right: 4px;
}
#open-settings .icon, #open-settings svg {
    height: 18px;
    width: 18px;
}

.modal-wrap {
    -webkit-transition-duration: 0.3s;
    -webkit-transition-property: opacity, visibility;
    -webkit-transition-timing-function: ease-in-out;
    align-items: center;
    background: rgba(0, 0, 0, 0.70);
    display: flex;
    backdrop-filter: blur(2px);
    height: 100%;
    justify-content: center;
    left: 0;
    opacity: 0;
    overflow: auto;
    position: fixed;
    top: 0;
    transition-duration: 0.3s;
    transition-property: opacity, visibility;
    transition-timing-function: ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 100000;
}
.modal-wrap.visible {
    opacity: 1;
    visibility: visible;
}
.modal-wrap .modal-container {
    border-radius: 6px;
    box-shadow: var(--settings-modal-shadow);
    color: var(--color-text);
    margin: 1em;
    max-width: 94%;
    width: 600px;
}

.modal-wrap .modal-header {
    align-items: center;
    background: var(--settings-modal-header-background);
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
}
.modal-wrap .modal-header h3 {
    margin: 0;
}
.modal-wrap .modal-header .close-modal {
    background: transparent;
    border: 0;
    color: var(--color-muted);
    cursor: pointer;
    font-size: 28px;
    line-height: 1;
}

.modal-wrap .modal-header .close-modal:hover { opacity: 1; }

.modal-wrap .modal-content {
  background: var(--settings-modal-content-background);
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
  margin: 0;
  padding: 15px 30px;
  z-index: 100000;
}
.modal-content h4 {
    font-size: 18px;
    margin: 0 0 10px;
}
.modal-content .settings-group + h4 {
    margin-top: 30px;
}
.modal-content .settings-group {
    border: 1px solid var(--settings-option-border-color);
    border-radius: 4px;
    display: flex;
    margin-bottom: 15px;
}
.modal-content .settings-group label {
    cursor: pointer;
    display: flex;
    flex: 1;
    font-size: 16px;
    margin: 0;
}
.modal-content .settings-group label input {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
    opacity: 0;
}
.modal-content .settings-group:has(input:focus-visible) {
    outline: 2px dotted var(--settings-option-active-border-color);
    outline-offset: 2px;
}
.modal-content .settings-group label input:checked + p {
    box-shadow: inset 0 0 0 2px var(--settings-option-active-border-color);
    background-color: var(--settings-option-active-background);
    color: var(--settings-option-active-color);
}
.modal-content .settings-group label input:checked + p svg {
    color: var(--settings-option-active-icon-color);
}
.modal-content .settings-group label p {
    align-items: center;
    background: var(--settings-option-background);

    color: var(--settings-option-color);
    flex: 1;
    font-size: 14px;
    margin: 0;
    padding: 10px 15px;
    text-align: center;
}
.modal-content .settings-group label:first-child p {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.modal-content .settings-group label:last-child p {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.modal-content .settings-group label + label p {
    border-left: 1px solid var(--settings-option-border-color);
}
.modal-content label p span {
    display: block;
    font-size: 16px;
}
.modal-content label p abbr {
    border: 0;
    text-decoration: none;
}
.modal-content label svg {
    color: var(--settings-option-icon-color);
    height: 36px;
    width: 36px;
}

@media (max-width: 768px) {
    #open-settings {
        color: transparent;
    }
    #sidebar:hover #open-settings, #sidebar.expanded #open-settings {
        color: var(--color-muted);
    }
}
</style>

<a href=\"#\" id=\"open-settings\">
    <span class=\"icon\">{{ source('@WebProfiler/Icon/settings.svg') }}</span>
    Profiler settings
</a>

<div class=\"modal-wrap\" id=\"profiler-settings\">
    <div class=\"modal-container\">
        <div class=\"modal-header\">
            <h3>Configuration Settings</h3>
            <button aria-label=\"Close\" class=\"close-modal\">&times;</button>
        </div>

        <div class=\"modal-content\">
            <h4>Theme</h4>

            <div class=\"settings-group\">
                <label for=\"settings-theme-auto\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"auto\" id=\"settings-theme-auto\">
                    <p>
                        {{ source('@WebProfiler/Icon/settings-theme-system.svg') }}
                        <span>System / OS</span>
                    </p>
                </label>

                <label for=\"settings-theme-light\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"light\" id=\"settings-theme-light\">
                    <p>
                        {{ source('@WebProfiler/Icon/settings-theme-light.svg') }}
                        <span>Light</span>
                    </p>
                </label>

                <label for=\"settings-theme-dark\">
                    <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"dark\" id=\"settings-theme-dark\">
                    <p>
                        {{ source('@WebProfiler/Icon/settings-theme-dark.svg') }}
                        <span>Dark</span>
                    </p>
                </label>
            </div>

            <h4>Page Width</h4>

            <div class=\"settings-group\">
                <label for=\"settings-width-normal\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"normal\" id=\"settings-width-normal\">
                    <p>
                        {{ source('@WebProfiler/Icon/settings-width-fixed.svg') }}
                        <span>Fixed width</span>
                    </p>
                </label>

                <label for=\"settings-width-full\">
                    <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"full\" id=\"settings-width-full\">
                    <p>
                        {{ source('@WebProfiler/Icon/settings-width-fitted.svg') }}
                        <span>Fit to window</span>
                    </p>
                </label>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const configOptions = document.querySelectorAll('.config-option');
    [...configOptions].forEach(option => {
        option.addEventListener('change', function (event) {
            const optionName = option.name;
            const optionValue = option.value;
            const settingName = 'symfony/profiler/' + optionName;
            const settingValue = optionName + '-' + optionValue;

            localStorage.setItem(settingName, settingValue);

            document.body.classList.forEach((cssClass) => {
                if (cssClass.startsWith(optionName)) {
                    document.body.classList.remove(cssClass);
                }
            });

            const resolvedSettingValue = 'theme-auto' === settingValue
                ? (matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light')
                : settingValue;
            document.body.classList.add(resolvedSettingValue);

            if (resolvedSettingValue.startsWith('theme-')) {
                document.body.style.colorScheme = resolvedSettingValue.endsWith('-light') ? 'light' : 'dark';
            }
        });
    });

    const openModalButton = document.getElementById('open-settings');
    const modalWindow = document.getElementById('profiler-settings');
    const closeModalButton = document.getElementsByClassName('close-modal')[0];
    const modalWrapper = document.getElementsByClassName('modal-wrap')[0];
    const closeModal = () => {
        modalWindow.classList.remove('visible');
        setTimeout(() => openModalButton.focus(), 30);
    };

    openModalButton.addEventListener('click', function(event) {
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/theme') || 'theme-auto')).checked = 'checked';
        document.getElementById('settings-' + (localStorage.getItem('symfony/profiler/width') || 'width-normal')).checked = 'checked';

        modalWindow.classList.toggle('visible');
        setTimeout(() => closeModalButton.focus(), 30);
        event.preventDefault();
    });

    closeModalButton.addEventListener('click', closeModal);
    modalWrapper.addEventListener('click', function(event) {
        if (event.target == event.currentTarget) {
            closeModal();
        }
    });
    modalWrapper.addEventListener('keydown', function(event) {
        if (event.key === 'Esc' || event.key === 'Escape') {
            closeModal();
        }
    });
})();
</script>
", "@WebProfiler/Profiler/settings.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/settings.html.twig");
    }
}
