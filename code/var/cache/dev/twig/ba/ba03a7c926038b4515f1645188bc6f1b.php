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

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_9958cde8b169add9109033ff6adc8178 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.css.twig"));

        // line 1
        yield ".sf-toolbarreset {
    --sf-toolbar-font-family-system: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    --sf-toolbar-font-family-monospace: \"Ubuntu Mono\", \"JetBrains Mono\", ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas,\"Liberation Mono\", \"Courier New\", monospace;

    --sf-toolbar-white: #fff;
    --sf-toolbar-black: #000;
    --sf-toolbar-gray-50: #fafafa;
    --sf-toolbar-gray-100: #f5f5f5;
    --sf-toolbar-gray-200: #e5e5e5;
    --sf-toolbar-gray-300: #d4d4d4;
    --sf-toolbar-gray-400: #a3a3a3;
    --sf-toolbar-gray-500: #737373;
    --sf-toolbar-gray-600: #525252;
    --sf-toolbar-gray-700: #404040;
    --sf-toolbar-gray-800: #262626;
    --sf-toolbar-gray-900: #171717;
    --sf-toolbar-red-50: #FEFBFC;
    --sf-toolbar-red-100: #FCE9ED;
    --sf-toolbar-red-200: #F5B8C5;
    --sf-toolbar-red-300: #EF869C;
    --sf-toolbar-red-400: #E85574;
    --sf-toolbar-red-500: #E1244B;
    --sf-toolbar-red-600: #B41939;
    --sf-toolbar-red-700: #83122A;
    --sf-toolbar-red-800: #510B1A;
    --sf-toolbar-red-900: #20040A;
    --sf-toolbar-yellow-50: #fef7e1;
    --sf-toolbar-yellow-100: #fef2cd;
    --sf-toolbar-yellow-200: #fde496;
    --sf-toolbar-yellow-300: #fcd55f;
    --sf-toolbar-yellow-400: #fbc728;
    --sf-toolbar-yellow-500: #e6af05;
    --sf-toolbar-yellow-600: #af8503;
    --sf-toolbar-yellow-700: #785b02;
    --sf-toolbar-yellow-800: #413101;
    --sf-toolbar-yellow-900: #0a0800;
    --sf-toolbar-green-50: #eff5f5;
    --sf-toolbar-green-100: #deeaea;
    --sf-toolbar-green-200: #bbd5d5;
    --sf-toolbar-green-300: #99bfbf;
    --sf-toolbar-green-400: #76a9a9;
    --sf-toolbar-green-500: #598e8e;
    --sf-toolbar-green-600: #436c6c;
    --sf-toolbar-green-700: #2e4949;
    --sf-toolbar-green-800: #182727;
    --sf-toolbar-green-900: #030404;
}

.sf-minitoolbar {
    --sf-toolbar-gray-800: #262626;

    background-color: var(--sf-toolbar-gray-800);
    border-top-left-radius: 4px;
    bottom: 0;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar button {
    background-color: transparent;
    padding: 0;
    border: none;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    --sf-toolbar-gray-200: #e5e5e5;

    color: var(--sf-toolbar-gray-200);
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbar-clearer {
    clear: both;
    height: 36px;
}

.sf-display-none {
    display: none;
}

.sf-toolbarreset *:not(svg rect) {
    box-sizing: content-box;
    vertical-align: baseline;
    letter-spacing: normal;
    width: auto;
}

.sf-toolbarreset {
    background-color: var(--sf-toolbar-gray-800);
    bottom: 0;
    box-shadow: inset 0 1px 0 var(--sf-toolbar-black), 0 -1px 0 rgba(0, 0, 0, 0.5);
    color: var(--sf-toolbar-gray-200);
    font: 11px var(--sf-toolbar-font-family-system);
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;
    direction: ltr;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed var(--sf-toolbar-gray-500);
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    width: 20px;
    display: inline-block;
}

.sf-toolbarreset .sf-cancel-button {
    color: var(--sf-toolbar-gray-700);
}

.sf-toolbarreset .hide-button {
    background: var(--sf-toolbar-gray-800);
    color: var(--sf-toolbar-gray-300);
    display: block;
    position: absolute;
    top: 2px;
    right: 0;
    width: 36px;
    height: 34px;
    cursor: pointer;
    text-align: center;
    border: none;
    margin: 0;
    padding: 0;
}
.sf-toolbarreset .hide-button:hover {
    background: var(--sf-toolbar-gray-700);
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 1px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    position: relative;
    white-space: nowrap;
    max-width: 15%;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
    background-color: transparent;
    color: inherit;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: var(--sf-toolbar-gray-100);
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: var(--sf-toolbar-gray-400);
    font-size: 12px;
    margin-left: 2px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid var(--sf-toolbar-gray-500);
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    border-radius: 4px;
    padding: 2px 5px;
    margin-bottom: 0;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
div.sf-toolbar .sf-toolbar-block a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: var(--sf-toolbar-gray-400);
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {
    color: var(--sf-toolbar-gray-100);
}
.sf-toolbar-block .sf-toolbar-info-piece span {
    font-size: 12px;
}
div.sf-toolbar  .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-info-php-ext a {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: var(--sf-toolbar-gray-700);
    border-radius: 4px;
    border-bottom-left-radius: 0;
    bottom: 36px;
    color: var(--sf-toolbar-gray-100);
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block.sf-toolbar-block-right .sf-toolbar-info {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: var(--sf-toolbar-white);
    background-color: var(--sf-toolbar-gray-600);
    padding: 3px 6px;
    margin: 0 4px;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-green,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-green {
    background-color: #059669;
    color: var(--white);
}
.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-red,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-red {
    background-color: var(--sf-toolbar-red-500);
    color: var(--sf-toolbar-red-50);
}
.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-yellow,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-yellow {
    background-color: var(--sf-toolbar-yellow-300);
    color: var(--sf-toolbar-yellow-800);
}

.sf-toolbar-block.sf-toolbar-status-green::before,
.sf-toolbar-block.sf-toolbar-status-red::before,
.sf-toolbar-block.sf-toolbar-status-yellow::before {
    background: var(--sf-toolbar-yellow-400);
    border-radius: 6px;
    content: '';
    position: absolute;
    bottom: 1px;
    left: 0;
    width: 98%;
    height: 3px;
    z-index: 10005;
}
.sf-toolbar-block.sf-toolbar-status-red::before {
    background: var(--sf-toolbar-red-400);
}
.sf-toolbar-block.sf-toolbar-status-green::before {
    background: var(--sf-toolbar-green-400);
}
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-green::before,
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-red::before,
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-yellow::before {
    display: none;
}

.sf-toolbar-block-request .sf-toolbar-status {
    border-radius: 6px;
    color: #fff;
    display: inline-block;
    flex-shrink: 0;
    font-size: 13px;
    font-weight: 500;
    padding: 4px 8px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    background-color: transparent;
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}
.sf-toolbar-block-request .sf-toolbar-redirection-status {
    font-weight: normal;
    padding: 2px 4px;
    line-height: 18px;
}
.sf-toolbar-block.sf-toolbar-block-request .sf-toolbar-redirection-status.sf-toolbar-status-yellow {
    background-color: var(--sf-toolbar-yellow-300);
    border-radius: 4px;
    color: var(--sf-toolbar-yellow-800);
    padding: 1px 4px;
}
.sf-toolbar-block.sf-toolbar-block-request .sf-toolbar-info-piece .sf-toolbar-redirection-method {
    background: transparent;
    color: var(--sf-toolbar-gray-300);
    border: 1px solid var(--sf-toolbar-gray-400);
    padding: 1px 4px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {
    font-size: 12px;
    height: 17px;
    line-height: 17px;
    margin-right: 5px;
}
.sf-toolbar-block-request .sf-toolbar-request-icon svg {
    stroke-width: 3px;
}

.sf-toolbar-block-ajax .sf-toolbar-icon {
    cursor: pointer;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: var(--sf-toolbar-white);
}
.sf-toolbar-block-config svg path,
.sf-toolbar-block-config svg .sf-svg-path {
    fill: var(--sf-toolbar-white);
}

.sf-toolbar-block .sf-toolbar-icon {
    color: var(--sf-toolbar-gray-300);
    align-items: center;
    display: flex;
    height: 36px;
    padding: 0 7px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-block:hover .sf-toolbar-icon {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    box-shadow: 1px 0 0 var(--sf-toolbar-black), inset 0 -1px 0 var(--sf-toolbar-black);
}
.sf-toolbar-block.sf-toolbar-block-right:hover .sf-toolbar-icon {
    box-shadow: -1px 0 0 var(--sf-toolbar-black), inset 0 -1px 0 var(--sf-toolbar-black);
}

.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value,
.sf-toolbar-block.sf-toolbar-block-sf-cli .sf-toolbar-value {
    margin-left: 5px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-block.sf-toolbar-block-sf-cli .sf-toolbar-label {
    margin-left: 0;
}

.sf-toolbar-block:hover,
.sf-toolbar-block.hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon,
.sf-toolbar-block.hover .sf-toolbar-icon {
    background-color: var(--sf-toolbar-gray-700);
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block-ajax.hover .sf-toolbar-info {
    z-index: 10001;
}
.sf-toolbar-block:hover .sf-toolbar-info,
.sf-toolbar-block.hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 525px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: var(--sf-toolbar-gray-100);
}
.sf-toolbar-ajax-requests {
    border: 1px solid var(--sf-toolbar-gray-500);
    font-variant: tabular-nums;
    margin: 5px 0 0;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: var(--sf-toolbar-gray-700);
    border: 1px solid var(--sf-toolbar-gray-500);
    color: var(--sf-toolbar-gray-100);
    font-size: 12px;
    padding: 4px;
    vertical-align: middle;
}
.sf-toolbar-ajax-requests thead {
    border: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: var(--sf-toolbar-gray-800);
    border: 1px solid var(--sf-toolbar-gray-500);
    color: var(--sf-toolbar-gray-200);
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 250px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-ajax-requests .sf-toolbar-status {
    font-size: 11px;
    padding: 1px 3px;
}
.sf-ajax-request-loading {
    animation: sf-blink .5s ease-in-out infinite;
}
@keyframes sf-blink {
    0% { background: var(--sf-toolbar-gray-800); }
    50% { background: var(--sf-toolbar-gray-700); }
    100% { background: var(--sf-toolbar-gray-800); }
}

.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {
    max-width: none;
    width: 100%;
    position: fixed;
    box-sizing: border-box;
    left: 0;
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: var(--sf-toolbar-gray-800);
    border-color: var(--sf-toolbar-gray-500);
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {
    margin-bottom: 5px;
}
.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {
    color: #333;
    font-size: 12px;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: var(--sf-toolbar-gray-400);
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

.sf-toolbar-block-serializer .detailed-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 15px;
    margin-top: 15px;
}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label,
.sf-cli .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: var(--sf-toolbar-gray-400);
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: var(--sf-toolbar-white);
}

@media (min-width: 768px) {
    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        display: flex;
        align-items: center;
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-label {
        margin-left: 4px;
        margin-right: 1px;
    }
    .sf-toolbar-block-request .sf-toolbar-status + .sf-toolbar-request-icon {
        display: inline-flex;
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon .sf-toolbar-request-icon + .sf-toolbar-label {
        margin-left: 0;
     }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 5px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
    .sf-toolbarreset .sf-toolbar-block.sf-toolbar-block-right:not(.sf-toolbar-block-sf-cli) .sf-toolbar-info {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}

/***** Error Toolbar *****/
.sf-error-toolbar .sf-toolbarreset {
    background: var(--sf-toolbar-gray-800);
    color: var(--sf-toolbar-gray-100);
    font: 13px/36px var(--sf-toolbar-font-family-system);
    height: 36px;
    padding: 0 15px;
    text-align: left;
}

.sf-error-toolbar .sf-toolbarreset svg {
    height: auto;
}

.sf-error-toolbar .sf-toolbarreset a {
    color: #99cdd8;
    margin-left: 5px;
    text-decoration: underline;
}

.sf-error-toolbar .sf-toolbarreset a:hover {
    text-decoration: none;
}

.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {
    float: left;
    padding: 5px 0;
    margin-right: 10px;
}

.sf-full-stack {
    left: 0px;
    font-size: 12px;
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none !important;
    }
}
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
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(".sf-toolbarreset {
    --sf-toolbar-font-family-system: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    --sf-toolbar-font-family-monospace: \"Ubuntu Mono\", \"JetBrains Mono\", ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas,\"Liberation Mono\", \"Courier New\", monospace;

    --sf-toolbar-white: #fff;
    --sf-toolbar-black: #000;
    --sf-toolbar-gray-50: #fafafa;
    --sf-toolbar-gray-100: #f5f5f5;
    --sf-toolbar-gray-200: #e5e5e5;
    --sf-toolbar-gray-300: #d4d4d4;
    --sf-toolbar-gray-400: #a3a3a3;
    --sf-toolbar-gray-500: #737373;
    --sf-toolbar-gray-600: #525252;
    --sf-toolbar-gray-700: #404040;
    --sf-toolbar-gray-800: #262626;
    --sf-toolbar-gray-900: #171717;
    --sf-toolbar-red-50: #FEFBFC;
    --sf-toolbar-red-100: #FCE9ED;
    --sf-toolbar-red-200: #F5B8C5;
    --sf-toolbar-red-300: #EF869C;
    --sf-toolbar-red-400: #E85574;
    --sf-toolbar-red-500: #E1244B;
    --sf-toolbar-red-600: #B41939;
    --sf-toolbar-red-700: #83122A;
    --sf-toolbar-red-800: #510B1A;
    --sf-toolbar-red-900: #20040A;
    --sf-toolbar-yellow-50: #fef7e1;
    --sf-toolbar-yellow-100: #fef2cd;
    --sf-toolbar-yellow-200: #fde496;
    --sf-toolbar-yellow-300: #fcd55f;
    --sf-toolbar-yellow-400: #fbc728;
    --sf-toolbar-yellow-500: #e6af05;
    --sf-toolbar-yellow-600: #af8503;
    --sf-toolbar-yellow-700: #785b02;
    --sf-toolbar-yellow-800: #413101;
    --sf-toolbar-yellow-900: #0a0800;
    --sf-toolbar-green-50: #eff5f5;
    --sf-toolbar-green-100: #deeaea;
    --sf-toolbar-green-200: #bbd5d5;
    --sf-toolbar-green-300: #99bfbf;
    --sf-toolbar-green-400: #76a9a9;
    --sf-toolbar-green-500: #598e8e;
    --sf-toolbar-green-600: #436c6c;
    --sf-toolbar-green-700: #2e4949;
    --sf-toolbar-green-800: #182727;
    --sf-toolbar-green-900: #030404;
}

.sf-minitoolbar {
    --sf-toolbar-gray-800: #262626;

    background-color: var(--sf-toolbar-gray-800);
    border-top-left-radius: 4px;
    bottom: 0;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar button {
    background-color: transparent;
    padding: 0;
    border: none;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    --sf-toolbar-gray-200: #e5e5e5;

    color: var(--sf-toolbar-gray-200);
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbar-clearer {
    clear: both;
    height: 36px;
}

.sf-display-none {
    display: none;
}

.sf-toolbarreset *:not(svg rect) {
    box-sizing: content-box;
    vertical-align: baseline;
    letter-spacing: normal;
    width: auto;
}

.sf-toolbarreset {
    background-color: var(--sf-toolbar-gray-800);
    bottom: 0;
    box-shadow: inset 0 1px 0 var(--sf-toolbar-black), 0 -1px 0 rgba(0, 0, 0, 0.5);
    color: var(--sf-toolbar-gray-200);
    font: 11px var(--sf-toolbar-font-family-system);
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;
    direction: ltr;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed var(--sf-toolbar-gray-500);
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    width: 20px;
    display: inline-block;
}

.sf-toolbarreset .sf-cancel-button {
    color: var(--sf-toolbar-gray-700);
}

.sf-toolbarreset .hide-button {
    background: var(--sf-toolbar-gray-800);
    color: var(--sf-toolbar-gray-300);
    display: block;
    position: absolute;
    top: 2px;
    right: 0;
    width: 36px;
    height: 34px;
    cursor: pointer;
    text-align: center;
    border: none;
    margin: 0;
    padding: 0;
}
.sf-toolbarreset .hide-button:hover {
    background: var(--sf-toolbar-gray-700);
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 1px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    position: relative;
    white-space: nowrap;
    max-width: 15%;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
    background-color: transparent;
    color: inherit;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: var(--sf-toolbar-gray-100);
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: var(--sf-toolbar-gray-400);
    font-size: 12px;
    margin-left: 2px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid var(--sf-toolbar-gray-500);
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    border-radius: 4px;
    padding: 2px 5px;
    margin-bottom: 0;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
div.sf-toolbar .sf-toolbar-block a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: var(--sf-toolbar-gray-400);
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {
    color: var(--sf-toolbar-gray-100);
}
.sf-toolbar-block .sf-toolbar-info-piece span {
    font-size: 12px;
}
div.sf-toolbar  .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-info-php-ext a {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: var(--sf-toolbar-gray-700);
    border-radius: 4px;
    border-bottom-left-radius: 0;
    bottom: 36px;
    color: var(--sf-toolbar-gray-100);
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block.sf-toolbar-block-right .sf-toolbar-info {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: var(--sf-toolbar-white);
    background-color: var(--sf-toolbar-gray-600);
    padding: 3px 6px;
    margin: 0 4px;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-green,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-green {
    background-color: #059669;
    color: var(--white);
}
.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-red,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-red {
    background-color: var(--sf-toolbar-red-500);
    color: var(--sf-toolbar-red-50);
}
.sf-toolbar-block .sf-toolbar-status.sf-toolbar-status-yellow,
.sf-toolbar-block .sf-toolbar-info .sf-toolbar-status.sf-toolbar-status-yellow {
    background-color: var(--sf-toolbar-yellow-300);
    color: var(--sf-toolbar-yellow-800);
}

.sf-toolbar-block.sf-toolbar-status-green::before,
.sf-toolbar-block.sf-toolbar-status-red::before,
.sf-toolbar-block.sf-toolbar-status-yellow::before {
    background: var(--sf-toolbar-yellow-400);
    border-radius: 6px;
    content: '';
    position: absolute;
    bottom: 1px;
    left: 0;
    width: 98%;
    height: 3px;
    z-index: 10005;
}
.sf-toolbar-block.sf-toolbar-status-red::before {
    background: var(--sf-toolbar-red-400);
}
.sf-toolbar-block.sf-toolbar-status-green::before {
    background: var(--sf-toolbar-green-400);
}
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-green::before,
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-red::before,
.sf-toolbar-block-request.sf-toolbar-block.sf-toolbar-status-yellow::before {
    display: none;
}

.sf-toolbar-block-request .sf-toolbar-status {
    border-radius: 6px;
    color: #fff;
    display: inline-block;
    flex-shrink: 0;
    font-size: 13px;
    font-weight: 500;
    padding: 4px 8px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    background-color: transparent;
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}
.sf-toolbar-block-request .sf-toolbar-redirection-status {
    font-weight: normal;
    padding: 2px 4px;
    line-height: 18px;
}
.sf-toolbar-block.sf-toolbar-block-request .sf-toolbar-redirection-status.sf-toolbar-status-yellow {
    background-color: var(--sf-toolbar-yellow-300);
    border-radius: 4px;
    color: var(--sf-toolbar-yellow-800);
    padding: 1px 4px;
}
.sf-toolbar-block.sf-toolbar-block-request .sf-toolbar-info-piece .sf-toolbar-redirection-method {
    background: transparent;
    color: var(--sf-toolbar-gray-300);
    border: 1px solid var(--sf-toolbar-gray-400);
    padding: 1px 4px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {
    font-size: 12px;
    height: 17px;
    line-height: 17px;
    margin-right: 5px;
}
.sf-toolbar-block-request .sf-toolbar-request-icon svg {
    stroke-width: 3px;
}

.sf-toolbar-block-ajax .sf-toolbar-icon {
    cursor: pointer;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: var(--sf-toolbar-white);
}
.sf-toolbar-block-config svg path,
.sf-toolbar-block-config svg .sf-svg-path {
    fill: var(--sf-toolbar-white);
}

.sf-toolbar-block .sf-toolbar-icon {
    color: var(--sf-toolbar-gray-300);
    align-items: center;
    display: flex;
    height: 36px;
    padding: 0 7px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-block:hover .sf-toolbar-icon {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    box-shadow: 1px 0 0 var(--sf-toolbar-black), inset 0 -1px 0 var(--sf-toolbar-black);
}
.sf-toolbar-block.sf-toolbar-block-right:hover .sf-toolbar-icon {
    box-shadow: -1px 0 0 var(--sf-toolbar-black), inset 0 -1px 0 var(--sf-toolbar-black);
}

.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value,
.sf-toolbar-block.sf-toolbar-block-sf-cli .sf-toolbar-value {
    margin-left: 5px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-block.sf-toolbar-block-sf-cli .sf-toolbar-label {
    margin-left: 0;
}

.sf-toolbar-block:hover,
.sf-toolbar-block.hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon,
.sf-toolbar-block.hover .sf-toolbar-icon {
    background-color: var(--sf-toolbar-gray-700);
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block-ajax.hover .sf-toolbar-info {
    z-index: 10001;
}
.sf-toolbar-block:hover .sf-toolbar-info,
.sf-toolbar-block.hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 525px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: var(--sf-toolbar-gray-100);
}
.sf-toolbar-ajax-requests {
    border: 1px solid var(--sf-toolbar-gray-500);
    font-variant: tabular-nums;
    margin: 5px 0 0;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: var(--sf-toolbar-gray-700);
    border: 1px solid var(--sf-toolbar-gray-500);
    color: var(--sf-toolbar-gray-100);
    font-size: 12px;
    padding: 4px;
    vertical-align: middle;
}
.sf-toolbar-ajax-requests thead {
    border: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: var(--sf-toolbar-gray-800);
    border: 1px solid var(--sf-toolbar-gray-500);
    color: var(--sf-toolbar-gray-200);
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 250px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-ajax-requests .sf-toolbar-status {
    font-size: 11px;
    padding: 1px 3px;
}
.sf-ajax-request-loading {
    animation: sf-blink .5s ease-in-out infinite;
}
@keyframes sf-blink {
    0% { background: var(--sf-toolbar-gray-800); }
    50% { background: var(--sf-toolbar-gray-700); }
    100% { background: var(--sf-toolbar-gray-800); }
}

.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {
    max-width: none;
    width: 100%;
    position: fixed;
    box-sizing: border-box;
    left: 0;
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: var(--sf-toolbar-gray-800);
    border-color: var(--sf-toolbar-gray-500);
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {
    margin-bottom: 5px;
}
.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {
    color: #333;
    font-size: 12px;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: var(--sf-toolbar-gray-400);
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

.sf-toolbar-block-serializer .detailed-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 15px;
    margin-top: 15px;
}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label,
.sf-cli .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: var(--sf-toolbar-gray-400);
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: var(--sf-toolbar-white);
}

@media (min-width: 768px) {
    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        display: flex;
        align-items: center;
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-label {
        margin-left: 4px;
        margin-right: 1px;
    }
    .sf-toolbar-block-request .sf-toolbar-status + .sf-toolbar-request-icon {
        display: inline-flex;
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon .sf-toolbar-request-icon + .sf-toolbar-label {
        margin-left: 0;
     }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 5px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
    .sf-toolbarreset .sf-toolbar-block.sf-toolbar-block-right:not(.sf-toolbar-block-sf-cli) .sf-toolbar-info {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}

/***** Error Toolbar *****/
.sf-error-toolbar .sf-toolbarreset {
    background: var(--sf-toolbar-gray-800);
    color: var(--sf-toolbar-gray-100);
    font: 13px/36px var(--sf-toolbar-font-family-system);
    height: 36px;
    padding: 0 15px;
    text-align: left;
}

.sf-error-toolbar .sf-toolbarreset svg {
    height: auto;
}

.sf-error-toolbar .sf-toolbarreset a {
    color: #99cdd8;
    margin-left: 5px;
    text-decoration: underline;
}

.sf-error-toolbar .sf-toolbarreset a:hover {
    text-decoration: none;
}

.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {
    float: left;
    padding: 5px 0;
    margin-right: 10px;
}

.sf-full-stack {
    left: 0px;
    font-size: 12px;
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none !important;
    }
}
", "@WebProfiler/Profiler/toolbar.css.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar.css.twig");
    }
}
