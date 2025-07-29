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

/* client/show.html.twig */
class __TwigTemplate_9b0e0ac2ca3f746cc4e518b72baa85d9 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Client Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "    ";
        yield from $this->load("Partials/header.html.twig", 6)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "    <div class=\"container py-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">

                <h1 class=\"h2 mb-4\">
                    <i class=\"fas fa-building me-2\"></i>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 15, $this->source); })()), "companyName", [], "any", false, false, false, 15), "html", null, true);
        yield "
                </h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\"> Client Information</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Manager</h6>
                                    <p class=\"mb-0 fw-bold\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 31, $this->source); })()), "managerFirstName", [], "any", false, false, false, 31), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 31, $this->source); })()), "managerLastName", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Phone</h6>
                                    <p class=\"mb-0\">
                                        <i class=\"fas fa-phone me-1\"></i>
                                        ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 39, $this->source); })()), "phone", [], "any", false, false, false, 39), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Address</h6>
                                    <p class=\"mb-0\">
                                        ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "address", [], "any", false, false, false, 47), "html", null, true);
        yield "<br>
                                        ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 48, $this->source); })()), "city", [], "any", false, false, false, 48), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 48, $this->source); })()), "country", [], "any", false, false, false, 48), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">Actions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-grid gap-2\">
                            <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-1\"></i>Update
                            </a>
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-list me-1\"></i>Return to liste
                            </a>
                            ";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "client/_delete_form.html.twig");
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/show.html.twig";
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
        return array (  213 => 70,  207 => 67,  201 => 64,  180 => 48,  176 => 47,  165 => 39,  152 => 31,  133 => 15,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Client Details{% endblock %}

{% block head %}
    {% include 'Partials/header.html.twig' %}
{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">

                <h1 class=\"h2 mb-4\">
                    <i class=\"fas fa-building me-2\"></i>{{ client.companyName }}
                </h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\"> Client Information</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Manager</h6>
                                    <p class=\"mb-0 fw-bold\">{{ client.managerFirstName }} {{ client.managerLastName }}</p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Phone</h6>
                                    <p class=\"mb-0\">
                                        <i class=\"fas fa-phone me-1\"></i>
                                        {{ client.phone }}
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"p-3 border rounded bg-light\">
                                    <h6 class=\"mb-2\">Address</h6>
                                    <p class=\"mb-0\">
                                        {{ client.address }}<br>
                                        {{ client.city }}, {{ client.country }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"card-title mb-0\">Actions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-grid gap-2\">
                            <a href=\"{{ path('app_client_edit', {'id': client.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-1\"></i>Update
                            </a>
                            <a href=\"{{ path('app_client_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-list me-1\"></i>Return to liste
                            </a>
                            {{ include('client/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "client/show.html.twig", "/var/www/html/templates/client/show.html.twig");
    }
}
