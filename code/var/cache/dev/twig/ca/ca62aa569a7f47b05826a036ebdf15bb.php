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

/* client/_form.html.twig */
class __TwigTemplate_fca49afcca1d859a30e919e4737cddbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "


";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)) > 0)) {
            // line 5
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 6
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
            yield "
    </div>
";
        }
        // line 9
        yield "
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "managerFirstName", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "managerFirstName", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "managerFirstName", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "managerFirstName", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "managerFirstName", [], "any", false, true, false, 17), "vars", [], "any", false, true, false, 17), "help", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "managerFirstName", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "help", [], "any", false, false, false, 17), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "managerLastName", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "managerLastName", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "managerLastName", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "valid", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "managerLastName", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "managerLastName", [], "any", false, true, false, 23), "vars", [], "any", false, true, false, 23), "help", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "managerLastName", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "help", [], "any", false, false, false, 23), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "companyName", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "companyName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "companyName", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "valid", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "companyName", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            <small class=\"form-text text-muted\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyName", [], "any", false, true, false, 31), "vars", [], "any", false, true, false, 31), "help", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "companyName", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "help", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "</small>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "phone", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "phone", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "phone", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "valid", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, true, false, 39), "vars", [], "any", false, true, false, 39), "help", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "phone", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "help", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => ("form-select" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "valid", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, true, false, 45), "vars", [], "any", false, true, false, 45), "help", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "help", [], "any", false, false, false, 45), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "address", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "address", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "address", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "valid", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "address", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            <small class=\"form-text text-muted\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, true, false, 53), "vars", [], "any", false, true, false, 53), "help", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "address", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "help", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
        yield "</small>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "city", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "city", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "city", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "valid", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "city", [], "any", false, false, false, 60), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, true, false, 61), "vars", [], "any", false, true, false, 61), "help", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "city", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "help", [], "any", false, false, false, 61), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "country", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "country", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => ("form-select" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "country", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "valid", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "country", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
                <small class=\"form-text text-muted\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, true, false, 67), "vars", [], "any", false, true, false, 67), "help", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "country", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "help", [], "any", false, false, false, 67), "")) : ("")), "html", null, true);
        yield "</small>
            </div>
        </div>


        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'rest');
        yield "
    </div>
    <div class=\"card-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-1\"></i>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 76, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>
</div>
";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        yield "
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
        return "client/_form.html.twig";
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
        return array (  246 => 83,  238 => 78,  233 => 76,  226 => 72,  218 => 67,  214 => 66,  210 => 65,  206 => 64,  200 => 61,  196 => 60,  192 => 59,  188 => 58,  180 => 53,  176 => 52,  172 => 51,  168 => 50,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  65 => 9,  59 => 6,  56 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}


{% if form.vars.errors|length > 0 %}
    <div class=\"alert alert-danger\">
        {{ form_errors(form) }}
    </div>
{% endif %}

<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_label(form.managerFirstName, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.managerFirstName, {'attr': {'class': 'form-control' ~ (form.managerFirstName.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.managerFirstName, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.managerFirstName.vars.help|default('') }}</small>
            </div>
            <div class=\"col-md-6\">
                {{ form_label(form.managerLastName, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.managerLastName, {'attr': {'class': 'form-control' ~ (form.managerLastName.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.managerLastName, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.managerLastName.vars.help|default('') }}</small>
            </div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.companyName, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.companyName, {'attr': {'class': 'form-control' ~ (form.companyName.vars.valid ? '' : ' is-invalid')}}) }}
            {{ form_errors(form.companyName, {'attr': {'class': 'invalid-feedback'}}) }}
            <small class=\"form-text text-muted\">{{ form.companyName.vars.help|default('') }}</small>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_label(form.phone, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.phone, {'attr': {'class': 'form-control' ~ (form.phone.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.phone, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.phone.vars.help|default('') }}</small>
            </div>
            <div class=\"col-md-6\">
                {{ form_label(form.user, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.user, {'attr': {'class': 'form-select' ~ (form.user.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.user, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.user.vars.help|default('') }}</small>
            </div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.address, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.address, {'attr': {'class': 'form-control' ~ (form.address.vars.valid ? '' : ' is-invalid')}}) }}
            {{ form_errors(form.address, {'attr': {'class': 'invalid-feedback'}}) }}
            <small class=\"form-text text-muted\">{{ form.address.vars.help|default('') }}</small>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_label(form.city, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.city, {'attr': {'class': 'form-control' ~ (form.city.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.city, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.city.vars.help|default('') }}</small>
            </div>
            <div class=\"col-md-6\">
                {{ form_label(form.country, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.country, {'attr': {'class': 'form-select' ~ (form.country.vars.valid ? '' : ' is-invalid')}}) }}
                {{ form_errors(form.country, {'attr': {'class': 'invalid-feedback'}}) }}
                <small class=\"form-text text-muted\">{{ form.country.vars.help|default('') }}</small>
            </div>
        </div>


        {{ form_rest(form) }}
    </div>
    <div class=\"card-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-1\"></i>{{ button_label|default('Enregistrer') }}
        </button>
        <a href=\"{{ path('app_client_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>
</div>
{{ form_end(form) }}
", "client/_form.html.twig", "/var/www/html/templates/client/_form.html.twig");
    }
}
