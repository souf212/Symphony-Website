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

/* invoice/show.html.twig */
class __TwigTemplate_c3d165d38623ac95cb389826fe86d87a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/show.html.twig"));

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

        yield "Invoice #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 3, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    ";
        yield from $this->load("Partials/header.html.twig", 5)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"container py-4\">
        <!-- Invoice Header with Logo and Company Info -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <h2 class=\"fw-bold text-primary mb-1\">Symfony Crm</h2>
                <address class=\"mb-0\">
                    EHEI<br>
                    Oujda, Oriental, 60000<br>
                    Country<br>
                    <i class=\"fas fa-phone-alt me-1\"></i> 0766649772<br>
                    <i class=\"fas fa-envelope me-1\"></i> symfonycrm@gmail.com<br>
                </address>
            </div>
            <div class=\"col-md-6 text-md-end\">
                <h1 class=\"display-6 fw-bold text-uppercase mb-0\">Invoice</h1>
                <p class=\"fs-5 mb-1\">#";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 23, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                ";
        // line 24
        $context["status_class"] = (((CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29)), [], "array", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29)), [], "array", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29)), [], "array", false, false, false, 25)) : ("primary"));
        // line 30
        yield "                <span class=\"badge bg-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 30, $this->source); })()), "html", null, true);
        yield " fs-6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>
            </div>
        </div>

        <!-- Billing Information -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-user me-2\"></i>Bill To</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 42, $this->source); })()), "client", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                            <h5 class=\"fw-bold mb-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 43), "name", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 43, $this->source); })()), "client", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), ("Client #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 43, $this->source); })()), "client", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)))) : (("Client #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 43, $this->source); })()), "client", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)))), "html", null, true);
            yield "</h5>
                            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 44), "address", [], "any", true, true, false, 44)) {
                // line 45
                yield "                                <address>
                                    ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 46, $this->source); })()), "client", [], "any", false, false, false, 46), "address", [], "any", false, false, false, 46), "html", null, true);
                yield "<br>
                                    ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 47), "city", [], "any", true, true, false, 47)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 47, $this->source); })()), "client", [], "any", false, false, false, 47), "city", [], "any", false, false, false, 47), "html", null, true);
                }
                // line 48
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 48), "state", [], "any", true, true, false, 48)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 48, $this->source); })()), "client", [], "any", false, false, false, 48), "state", [], "any", false, false, false, 48), "html", null, true);
                }
                // line 49
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 49), "postalCode", [], "any", true, true, false, 49)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 49, $this->source); })()), "client", [], "any", false, false, false, 49), "postalCode", [], "any", false, false, false, 49), "html", null, true);
                }
                yield "<br>
                                    ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 50), "country", [], "any", true, true, false, 50)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 50, $this->source); })()), "client", [], "any", false, false, false, 50), "country", [], "any", false, false, false, 50), "html", null, true);
                }
                yield "<br>
                                    ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 51), "phone", [], "any", true, true, false, 51)) {
                    // line 52
                    yield "                                        <i class=\"fas fa-phone-alt me-1\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 52, $this->source); })()), "client", [], "any", false, false, false, 52), "phone", [], "any", false, false, false, 52), "html", null, true);
                    yield "<br>
                                    ";
                }
                // line 54
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, true, false, 54), "email", [], "any", true, true, false, 54)) {
                    // line 55
                    yield "                                        <i class=\"fas fa-envelope me-1\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 55, $this->source); })()), "client", [], "any", false, false, false, 55), "email", [], "any", false, false, false, 55), "html", null, true);
                    yield "
                                    ";
                }
                // line 57
                yield "                                </address>
                            ";
            } else {
                // line 59
                yield "                                <p>Client ID: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 59, $this->source); })()), "client", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
                yield "</p>
                            ";
            }
            // line 61
            yield "                        ";
        } else {
            // line 62
            yield "                            <p class=\"text-muted mb-0\">No client information available</p>
                        ";
        }
        // line 64
        yield "                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-calendar-alt me-2\"></i>Invoice Details</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-borderless mb-0\">
                            <tbody>
                            <tr>
                                <th class=\"ps-0 text-muted\" style=\"width: 40%\">Invoice Date</th>
                                <td class=\"pe-0\">";
        // line 77
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 77, $this->source); })()), "invoiceDate", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 77, $this->source); })()), "invoiceDate", [], "any", false, false, false, 77), "F d, Y"), "html", null, true)) : ("-"));
        yield "</td>
                            </tr>
                            ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "dueDate", [], "any", true, true, false, 79)) {
            // line 80
            yield "                                <tr>
                                    <th class=\"ps-0 text-muted\">Due Date</th>
                                    <td class=\"pe-0\">";
            // line 82
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 82, $this->source); })()), "dueDate", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 82, $this->source); })()), "dueDate", [], "any", false, false, false, 82), "F d, Y"), "html", null, true)) : ("-"));
            yield "</td>
                                </tr>
                            ";
        }
        // line 85
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "paymentTerms", [], "any", true, true, false, 85)) {
            // line 86
            yield "                                <tr>
                                    <th class=\"ps-0 text-muted\">Payment Terms</th>
                                    <td class=\"pe-0\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 88, $this->source); })()), "paymentTerms", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        // line 91
        yield "                            <tr>
                                <th class=\"ps-0 text-muted\">Invoice ID</th>
                                <td class=\"pe-0\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th class=\"ps-0 text-muted\">Client ID</th>
                                <td class=\"pe-0\">";
        // line 97
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 97, $this->source); })()), "client", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 97, $this->source); })()), "client", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true)) : ("-"));
        yield "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Items -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-light\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Invoice Items</h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped mb-0\">
                        <thead class=\"bg-light\">
                        <tr>
                            <th style=\"width: 5%\">#</th>
                            <th style=\"width: 40%\">Description</th>
                            <th style=\"width: 15%\" class=\"text-center\">Quantity</th>
                            <th style=\"width: 20%\" class=\"text-end\">Unit Price</th>
                            <th style=\"width: 20%\" class=\"text-end\">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "items", [], "any", true, true, false, 124) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 124, $this->source); })()), "items", [], "any", false, false, false, 124)) > 0))) {
            // line 125
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 125, $this->source); })()), "items", [], "any", false, false, false, 125));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                yield "                                <tr>
                                    <td>";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 127), "html", null, true);
                yield "</td>
                                    <td>
                                        <div class=\"fw-bold\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 129), "html", null, true);
                yield "</div>
                                        ";
                // line 130
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "details", [], "any", true, true, false, 130) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "details", [], "any", false, false, false, 130))) {
                    // line 131
                    yield "                                            <small class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "details", [], "any", false, false, false, 131), "html", null, true);
                    yield "</small>
                                        ";
                }
                // line 133
                yield "                                    </td>
                                    <td class=\"text-center\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 134), "html", null, true);
                yield "</td>
                                    <td class=\"text-end\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 135), "html", null, true);
                yield " MAD</td>
                                    <td class=\"text-end\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 136) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 136)), 2), "html", null, true);
                yield " MAD</td>
                                </tr>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "                        ";
        } else {
            // line 140
            yield "                            <tr>
                                <td>1</td>
                                <td>Services Rendered</td>
                                <td class=\"text-center\">1</td>
                                <td class=\"text-end\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 144, $this->source); })()), "amount", [], "any", false, false, false, 144), "html", null, true);
            yield " MAD</td>
                                <td class=\"text-end\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 145, $this->source); })()), "amount", [], "any", false, false, false, 145), "html", null, true);
            yield " MAD</td>
                            </tr>
                        ";
        }
        // line 148
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Totals and Notes -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-comment me-2\"></i>Notes</h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"mb-0\">";
        // line 162
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 162, $this->source); })()), "note", [], "any", false, false, false, 162)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 162, $this->source); })()), "note", [], "any", false, false, false, 162), "html", null, true)) : ("Thank you for your business."));
        yield "</p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <small class=\"text-muted\">Payment Instructions: Please include the invoice number in your payment reference.</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-borderless mb-0\">
                            <tbody>
                            <tr>
                                <th class=\"text-end\" style=\"width: 50%\">Subtotal:</th>
                                <td class=\"text-end\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 176, $this->source); })()), "amount", [], "any", false, false, false, 176), "html", null, true);
        yield " MAD</td>
                            </tr>
                            ";
        // line 178
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "taxRate", [], "any", true, true, false, 178) || CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "taxAmount", [], "any", true, true, false, 178))) {
            // line 179
            yield "                                <tr>
                                    <th class=\"text-end\">Tax";
            // line 180
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "taxRate", [], "any", true, true, false, 180)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 180, $this->source); })()), "taxRate", [], "any", false, false, false, 180), "html", null, true);
                yield "%)";
            }
            yield ":</th>
                                    <td class=\"text-end\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "taxAmount", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 181, $this->source); })()), "taxAmount", [], "any", false, false, false, 181), "0.00")) : ("0.00")), "html", null, true);
            yield " MAD</td>
                                </tr>
                            ";
        }
        // line 184
        yield "                            <tr class=\"border-top\">
                                <th class=\"text-end fs-5\">Total:</th>
                                <td class=\"text-end fs-5 fw-bold\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 186, $this->source); })()), "amount", [], "any", false, false, false, 186), "html", null, true);
        yield " MAD</td>
                            </tr>
                            ";
        // line 188
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["invoice"] ?? null), "amountPaid", [], "any", true, true, false, 188)) {
            // line 189
            yield "                                <tr>
                                    <th class=\"text-end\">Amount Paid:</th>
                                    <td class=\"text-end\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 191, $this->source); })()), "amountPaid", [], "any", false, false, false, 191), "html", null, true);
            yield " MAD</td>
                                </tr>
                                <tr class=\"bg-light\">
                                    <th class=\"text-end text-primary fs-5\">Balance Due:</th>
                                    <td class=\"text-end fs-5 fw-bold text-primary\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 195, $this->source); })()), "amount", [], "any", false, false, false, 195) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 195, $this->source); })()), "amountPaid", [], "any", false, false, false, 195)), "html", null, true);
            yield " MAD</td>
                                </tr>
                            ";
        } else {
            // line 198
            yield "                                <tr class=\"bg-light\">
                                    <th class=\"text-end text-primary fs-5\">Balance Due:</th>
                                    <td class=\"text-end fs-5 fw-bold text-primary\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 200, $this->source); })()), "amount", [], "any", false, false, false, 200), "html", null, true);
            yield " MAD</td>
                                </tr>
                            ";
        }
        // line 203
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i>Back to list
            </a>
            <div>
";
        // line 226
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">
                    <i class=\"fas fa-edit me-1\"></i>Edit
                </a>
                ";
        // line 229
        yield Twig\Extension\CoreExtension::include($this->env, $context, "invoice/_delete_form.html.twig");
        yield "
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
        return "invoice/show.html.twig";
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
        return array (  534 => 229,  527 => 226,  520 => 212,  509 => 203,  503 => 200,  499 => 198,  493 => 195,  486 => 191,  482 => 189,  480 => 188,  475 => 186,  471 => 184,  465 => 181,  457 => 180,  454 => 179,  452 => 178,  447 => 176,  430 => 162,  414 => 148,  408 => 145,  404 => 144,  398 => 140,  395 => 139,  378 => 136,  374 => 135,  370 => 134,  367 => 133,  361 => 131,  359 => 130,  355 => 129,  350 => 127,  347 => 126,  329 => 125,  327 => 124,  297 => 97,  290 => 93,  286 => 91,  280 => 88,  276 => 86,  273 => 85,  267 => 82,  263 => 80,  261 => 79,  256 => 77,  241 => 64,  237 => 62,  234 => 61,  228 => 59,  224 => 57,  218 => 55,  215 => 54,  209 => 52,  207 => 51,  201 => 50,  194 => 49,  189 => 48,  185 => 47,  181 => 46,  178 => 45,  176 => 44,  171 => 43,  169 => 42,  151 => 30,  149 => 29,  148 => 24,  144 => 23,  127 => 8,  114 => 7,  102 => 5,  89 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invoice #{{ invoice.invoiceNumber }}{% endblock %}
{% block head %}
    {% include 'Partials/header.html.twig' %}
{% endblock %}
{% block body %}
    <div class=\"container py-4\">
        <!-- Invoice Header with Logo and Company Info -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <h2 class=\"fw-bold text-primary mb-1\">Symfony Crm</h2>
                <address class=\"mb-0\">
                    EHEI<br>
                    Oujda, Oriental, 60000<br>
                    Country<br>
                    <i class=\"fas fa-phone-alt me-1\"></i> 0766649772<br>
                    <i class=\"fas fa-envelope me-1\"></i> symfonycrm@gmail.com<br>
                </address>
            </div>
            <div class=\"col-md-6 text-md-end\">
                <h1 class=\"display-6 fw-bold text-uppercase mb-0\">Invoice</h1>
                <p class=\"fs-5 mb-1\">#{{ invoice.invoiceNumber }}</p>
                {% set status_class = {
                    'paid': 'success',
                    'unpaid': 'warning',
                    'overdue': 'danger',
                    'draft': 'secondary'
                }[invoice.status.value|lower] ?? 'primary' %}
                <span class=\"badge bg-{{ status_class }} fs-6\">{{ invoice.status.value }}</span>
            </div>
        </div>

        <!-- Billing Information -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-user me-2\"></i>Bill To</h5>
                    </div>
                    <div class=\"card-body\">
                        {% if invoice.client %}
                            <h5 class=\"fw-bold mb-1\">{{ invoice.client.name|default('Client #' ~ invoice.client.id) }}</h5>
                            {% if invoice.client.address is defined %}
                                <address>
                                    {{ invoice.client.address }}<br>
                                    {% if invoice.client.city is defined %}{{ invoice.client.city }}{% endif %}
                                    {% if invoice.client.state is defined %}{{ invoice.client.state }}{% endif %}
                                    {% if invoice.client.postalCode is defined %}{{ invoice.client.postalCode }}{% endif %}<br>
                                    {% if invoice.client.country is defined %}{{ invoice.client.country }}{% endif %}<br>
                                    {% if invoice.client.phone is defined %}
                                        <i class=\"fas fa-phone-alt me-1\"></i> {{ invoice.client.phone }}<br>
                                    {% endif %}
                                    {% if invoice.client.email is defined %}
                                        <i class=\"fas fa-envelope me-1\"></i> {{ invoice.client.email }}
                                    {% endif %}
                                </address>
                            {% else %}
                                <p>Client ID: {{ invoice.client.id }}</p>
                            {% endif %}
                        {% else %}
                            <p class=\"text-muted mb-0\">No client information available</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-calendar-alt me-2\"></i>Invoice Details</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table table-borderless mb-0\">
                            <tbody>
                            <tr>
                                <th class=\"ps-0 text-muted\" style=\"width: 40%\">Invoice Date</th>
                                <td class=\"pe-0\">{{ invoice.invoiceDate ? invoice.invoiceDate|date('F d, Y') : '-' }}</td>
                            </tr>
                            {% if invoice.dueDate is defined %}
                                <tr>
                                    <th class=\"ps-0 text-muted\">Due Date</th>
                                    <td class=\"pe-0\">{{ invoice.dueDate ? invoice.dueDate|date('F d, Y') : '-' }}</td>
                                </tr>
                            {% endif %}
                            {% if invoice.paymentTerms is defined %}
                                <tr>
                                    <th class=\"ps-0 text-muted\">Payment Terms</th>
                                    <td class=\"pe-0\">{{ invoice.paymentTerms }}</td>
                                </tr>
                            {% endif %}
                            <tr>
                                <th class=\"ps-0 text-muted\">Invoice ID</th>
                                <td class=\"pe-0\">{{ invoice.id }}</td>
                            </tr>
                            <tr>
                                <th class=\"ps-0 text-muted\">Client ID</th>
                                <td class=\"pe-0\">{{ invoice.client ? invoice.client.id : '-' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Items -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-light\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Invoice Items</h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped mb-0\">
                        <thead class=\"bg-light\">
                        <tr>
                            <th style=\"width: 5%\">#</th>
                            <th style=\"width: 40%\">Description</th>
                            <th style=\"width: 15%\" class=\"text-center\">Quantity</th>
                            <th style=\"width: 20%\" class=\"text-end\">Unit Price</th>
                            <th style=\"width: 20%\" class=\"text-end\">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% if invoice.items is defined and invoice.items|length > 0 %}
                            {% for item in invoice.items %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        <div class=\"fw-bold\">{{ item.description }}</div>
                                        {% if item.details is defined and item.details %}
                                            <small class=\"text-muted\">{{ item.details }}</small>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">{{ item.quantity }}</td>
                                    <td class=\"text-end\">{{ item.unitPrice }} MAD</td>
                                    <td class=\"text-end\">{{ (item.quantity * item.unitPrice)|number_format(2) }} MAD</td>
                                </tr>
                            {% endfor %}
                        {% else %}
                            <tr>
                                <td>1</td>
                                <td>Services Rendered</td>
                                <td class=\"text-center\">1</td>
                                <td class=\"text-end\">{{ invoice.amount }} MAD</td>
                                <td class=\"text-end\">{{ invoice.amount }} MAD</td>
                            </tr>
                        {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Totals and Notes -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"fas fa-comment me-2\"></i>Notes</h5>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"mb-0\">{{ invoice.note ?: 'Thank you for your business.' }}</p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <small class=\"text-muted\">Payment Instructions: Please include the invoice number in your payment reference.</small>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-borderless mb-0\">
                            <tbody>
                            <tr>
                                <th class=\"text-end\" style=\"width: 50%\">Subtotal:</th>
                                <td class=\"text-end\">{{ invoice.amount }} MAD</td>
                            </tr>
                            {% if invoice.taxRate is defined or invoice.taxAmount is defined %}
                                <tr>
                                    <th class=\"text-end\">Tax{% if invoice.taxRate is defined %} ({{ invoice.taxRate }}%){% endif %}:</th>
                                    <td class=\"text-end\">{{ invoice.taxAmount|default('0.00') }} MAD</td>
                                </tr>
                            {% endif %}
                            <tr class=\"border-top\">
                                <th class=\"text-end fs-5\">Total:</th>
                                <td class=\"text-end fs-5 fw-bold\">{{ invoice.amount }} MAD</td>
                            </tr>
                            {% if invoice.amountPaid is defined %}
                                <tr>
                                    <th class=\"text-end\">Amount Paid:</th>
                                    <td class=\"text-end\">{{ invoice.amountPaid }} MAD</td>
                                </tr>
                                <tr class=\"bg-light\">
                                    <th class=\"text-end text-primary fs-5\">Balance Due:</th>
                                    <td class=\"text-end fs-5 fw-bold text-primary\">{{ (invoice.amount - invoice.amountPaid) }} MAD</td>
                                </tr>
                            {% else %}
                                <tr class=\"bg-light\">
                                    <th class=\"text-end text-primary fs-5\">Balance Due:</th>
                                    <td class=\"text-end fs-5 fw-bold text-primary\">{{ invoice.amount }} MAD</td>
                                </tr>
                            {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('app_invoice_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i>Back to list
            </a>
            <div>
{#                {% if path('app_invoice_print', {'id': invoice.id}) is defined %}#}
{#                    <a href=\"{{ path('app_invoice_print', {'id': invoice.id}) }}\" class=\"btn btn-info me-2\" target=\"_blank\">#}
{#                        <i class=\"fas fa-print me-1\"></i>Print#}
{#                    </a>#}
{#                {% endif %}#}
{#                {% if path('app_invoice_pdf', {'id': invoice.id}) is defined %}#}
{#                    <a href=\"{{ path('app_invoice_pdf', {'id': invoice.id}) }}\" class=\"btn btn-secondary me-2\">#}
{#                        <i class=\"fas fa-file-pdf me-1\"></i>Download PDF#}
{#                    </a>#}
{#                {% endif %}#}
                <a href=\"{{ path('app_invoice_edit', {'id': invoice.id}) }}\" class=\"btn btn-primary me-2\">
                    <i class=\"fas fa-edit me-1\"></i>Edit
                </a>
                {{ include('invoice/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}", "invoice/show.html.twig", "/var/www/html/templates/invoice/show.html.twig");
    }
}
