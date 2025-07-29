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

/* invoice/_form.html.twig */
class __TwigTemplate_0d6ad2ce363b7294ab00088f83403966 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)) > 0)) {
            // line 4
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 5
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
            yield "
    </div>
";
        }
        // line 8
        yield "
<div class=\"row mb-3\">
    <div class=\"col-md-6\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 11), 'label');
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "valid", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 13), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
        <small class=\"form-text text-muted\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invoiceNumber", [], "any", false, true, false, 14), "vars", [], "any", false, true, false, 14), "help", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "help", [], "any", false, false, false, 14), "")) : ("")), "html", null, true);
        yield "</small>
    </div>
    <div class=\"col-md-6\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "invoiceDate", [], "any", false, false, false, 17), 'label');
        yield "
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "invoiceDate", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "invoiceDate", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "valid", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "invoiceDate", [], "any", false, false, false, 19), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
        <small class=\"form-text text-muted\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invoiceDate", [], "any", false, true, false, 20), "vars", [], "any", false, true, false, 20), "help", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "invoiceDate", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "help", [], "any", false, false, false, 20), "")) : ("")), "html", null, true);
        yield "</small>
    </div>
</div>

<div class=\"row mb-3\">
    <div class=\"col-md-6\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "amount", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "amount", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "amount", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "valid", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "amount", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
        <small class=\"form-text text-muted\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, true, false, 29), "vars", [], "any", false, true, false, 29), "help", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "amount", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "help", [], "any", false, false, false, 29), "")) : ("")), "html", null, true);
        yield "</small>
    </div>
    <div class=\"col-md-6\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), 'label');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "valid", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
        <small class=\"form-text text-muted\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, true, false, 35), "vars", [], "any", false, true, false, 35), "help", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "help", [], "any", false, false, false, 35), "")) : ("")), "html", null, true);
        yield "</small>
    </div>
</div>

<div class=\"mb-3\">
    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40), 'label');
        yield "
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "note", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "note", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid"))), "rows" => "3"]]);
        yield "
    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "note", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
    <small class=\"form-text text-muted\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, true, false, 43), "vars", [], "any", false, true, false, 43), "help", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "note", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "help", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
        yield "</small>
</div>

<div class=\"mb-3\">
    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "client", [], "any", false, false, false, 47), 'label');
        yield "
    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "client", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "client", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "valid", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "client", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
    <small class=\"form-text text-muted\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client", [], "any", false, true, false, 50), "vars", [], "any", false, true, false, 50), "help", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "client", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "help", [], "any", false, false, false, 50), "")) : ("")), "html", null, true);
        yield "</small>
</div>

<div class=\"mt-4\">
    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"fas fa-save me-1\"></i> Enregistrer
    </button>
    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
    </a>
</div>
";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "invoice/_form.html.twig";
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
        return array (  193 => 61,  186 => 57,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  63 => 8,  57 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
{# Message d'erreur global #}
{% if form.vars.errors|length > 0 %}
    <div class=\"alert alert-danger\">
        {{ form_errors(form) }}
    </div>
{% endif %}

<div class=\"row mb-3\">
    <div class=\"col-md-6\">
        {{ form_label(form.invoiceNumber) }}
        {{ form_widget(form.invoiceNumber, {'attr': {'class': 'form-control' ~ (form.invoiceNumber.vars.valid ? '' : ' is-invalid')}}) }}
        {{ form_errors(form.invoiceNumber, {'attr': {'class': 'invalid-feedback'}}) }}
        <small class=\"form-text text-muted\">{{ form.invoiceNumber.vars.help|default('') }}</small>
    </div>
    <div class=\"col-md-6\">
        {{ form_label(form.invoiceDate) }}
        {{ form_widget(form.invoiceDate, {'attr': {'class': 'form-control' ~ (form.invoiceDate.vars.valid ? '' : ' is-invalid')}}) }}
        {{ form_errors(form.invoiceDate, {'attr': {'class': 'invalid-feedback'}}) }}
        <small class=\"form-text text-muted\">{{ form.invoiceDate.vars.help|default('') }}</small>
    </div>
</div>

<div class=\"row mb-3\">
    <div class=\"col-md-6\">
        {{ form_label(form.amount) }}
        {{ form_widget(form.amount, {'attr': {'class': 'form-control' ~ (form.amount.vars.valid ? '' : ' is-invalid')}}) }}
        {{ form_errors(form.amount, {'attr': {'class': 'invalid-feedback'}}) }}
        <small class=\"form-text text-muted\">{{ form.amount.vars.help|default('') }}</small>
    </div>
    <div class=\"col-md-6\">
        {{ form_label(form.status) }}
        {{ form_widget(form.status, {'attr': {'class': 'form-control' ~ (form.status.vars.valid ? '' : ' is-invalid')}}) }}
        {{ form_errors(form.status, {'attr': {'class': 'invalid-feedback'}}) }}
        <small class=\"form-text text-muted\">{{ form.status.vars.help|default('') }}</small>
    </div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.note) }}
    {{ form_widget(form.note, {'attr': {'class': 'form-control' ~ (form.note.vars.valid ? '' : ' is-invalid'), 'rows': '3'}}) }}
    {{ form_errors(form.note, {'attr': {'class': 'invalid-feedback'}}) }}
    <small class=\"form-text text-muted\">{{ form.note.vars.help|default('') }}</small>
</div>

<div class=\"mb-3\">
    {{ form_label(form.client) }}
    {{ form_widget(form.client, {'attr': {'class': 'form-control' ~ (form.client.vars.valid ? '' : ' is-invalid')}}) }}
    {{ form_errors(form.client, {'attr': {'class': 'invalid-feedback'}}) }}
    <small class=\"form-text text-muted\">{{ form.client.vars.help|default('') }}</small>
</div>

<div class=\"mt-4\">
    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"fas fa-save me-1\"></i> Enregistrer
    </button>
    <a href=\"{{ path('app_invoice_index') }}\" class=\"btn btn-secondary\">
        <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
    </a>
</div>
{{ form_end(form) }}", "invoice/_form.html.twig", "/var/www/html/templates/invoice/_form.html.twig");
    }
}
