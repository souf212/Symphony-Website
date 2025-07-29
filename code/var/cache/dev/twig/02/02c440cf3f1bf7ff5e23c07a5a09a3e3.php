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

/* invoice/index.html.twig */
class __TwigTemplate_6f79aaba927201b9dc58d2ee3ba3023f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

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

        yield "Liste des Factures";
        
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
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h2 mb-0\"><i class=\"fas fa-file-invoice me-2\"></i>Factures</h1>
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus me-1\"></i>Nouvelle Facture
            </a>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped mb-0\">
                    <thead class=\"table-light\">
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Facture</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Statut</th>
                        <th>Note</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 35
            yield "                        <tr>
                            <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                            <td>";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 37), "companyName", [], "any", false, false, false, 37), "html", null, true)) : ("-"));
            yield "</td>
                            <td class=\"fw-bold\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "invoiceNumber", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                            <td>";
            // line 39
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "invoiceDate", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "invoiceDate", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                            <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "amount", [], "any", false, false, false, 40), "html", null, true);
            yield " MAD</td>
                            <td>
                                ";
            // line 42
            $context["status_class"] = (((CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["invoice"], "status", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)), [], "array", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)), [], "array", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["paid" => "success", "unpaid" => "warning", "overdue" => "danger", "draft" => "secondary"], Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)), [], "array", false, false, false, 43)) : ("primary"));
            // line 48
            yield "                                <span class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)), "html", null, true);
            yield "</span>
                            </td>
                            <td>
                                ";
            // line 51
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "note", [], "any", false, false, false, 51)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "note", [], "any", false, false, false, 51), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "note", [], "any", false, false, false, 51), "html", null, true)));
            yield "
                            </td>
                            <td class=\"text-end\">
                                <div class=\"btn-group btn-group-sm\">
                                    <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                        <tr>
                            <td colspan=\"8\" class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-inbox fa-2x mb-2\"></i><br>
                                Aucune facture trouvée.
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invoice'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    </tbody>
                </table>
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
        return "invoice/index.html.twig";
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
        return array (  234 => 72,  222 => 65,  220 => 64,  209 => 58,  203 => 55,  196 => 51,  187 => 48,  185 => 47,  184 => 42,  179 => 40,  175 => 39,  171 => 38,  167 => 37,  163 => 36,  160 => 35,  155 => 34,  131 => 13,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Factures{% endblock %}

{% block head %}
    {% include 'Partials/header.html.twig' %}
{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h2 mb-0\"><i class=\"fas fa-file-invoice me-2\"></i>Factures</h1>
            <a href=\"{{ path('app_invoice_new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus me-1\"></i>Nouvelle Facture
            </a>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped mb-0\">
                    <thead class=\"table-light\">
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Facture</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Statut</th>
                        <th>Note</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for invoice in invoices %}
                        <tr>
                            <td>{{ invoice.id }}</td>
                            <td>{{ invoice.client ? invoice.client.companyName : '-' }}</td>
                            <td class=\"fw-bold\">{{ invoice.invoiceNumber }}</td>
                            <td>{{ invoice.invoiceDate ? invoice.invoiceDate|date('d/m/Y') : '-' }}</td>
                            <td>{{ invoice.amount }} MAD</td>
                            <td>
                                {% set status_class = {
                                    'paid': 'success',
                                    'unpaid': 'warning',
                                    'overdue': 'danger',
                                    'draft': 'secondary'
                                }[invoice.status.value|lower] ?? 'primary' %}
                                <span class=\"badge bg-{{ status_class }}\">{{ invoice.status.value|capitalize }}</span>
                            </td>
                            <td>
                                {{ invoice.note|length > 30 ? invoice.note|slice(0, 30) ~ '...' : invoice.note }}
                            </td>
                            <td class=\"text-end\">
                                <div class=\"btn-group btn-group-sm\">
                                    <a href=\"{{ path('app_invoice_show', {'id': invoice.id}) }}\" class=\"btn btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_invoice_edit', {'id': invoice.id}) }}\" class=\"btn btn-outline-secondary\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\" class=\"text-center py-4 text-muted\">
                                <i class=\"fas fa-inbox fa-2x mb-2\"></i><br>
                                Aucune facture trouvée.
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "invoice/index.html.twig", "/var/www/html/templates/invoice/index.html.twig");
    }
}
