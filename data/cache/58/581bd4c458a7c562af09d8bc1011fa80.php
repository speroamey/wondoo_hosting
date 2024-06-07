<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_order_index.html.twig */
class __TwigTemplate_1301b6c150e1be6b80b1ceece05ad2a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [], "any", false, false, false, 2);
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_index.html.twig", 3)->unwrap();
        // line 7
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 7), "8")) : ("8"));
        // line 8
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Select Product"), "html", null, true);
        echo "&nbsp;<span class=\"badge bg-blue-lt\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "list", [], "any", false, false, false, 10)), "html", null, true);
        echo "
\t\t";
        // line 11
        echo twig_escape_filter($this->env, __trans("Items"), "html", null, true);
        echo "</span>
";
    }

    // line 13
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
        echo "
";
    }

    // line 16
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-index
";
    }

    // line 18
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t<div class=\"mb-1\">
\t\t<ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t<a href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "</a>
\t\t\t</li>
\t\t</ol>
\t</div>
";
    }

    // line 30
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "\t<div class=\"row row-deck row-cards\">
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_list", [], "any", false, false, false, 33), "list", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 34
            echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card card-md\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<span>";
            // line 38
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 38));
            echo "</span>
\t\t\t\t\t\t<div class=\"row row-cards\">
\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Box_TwigExtensions']->filteredSort(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 40), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "priority", [], "any", false, false, false, 40) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "priority", [], "any", false, false, false, 40)); }));
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
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 41) == 1)) {
                    echo "col-sm-12 col-lg-12";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 41) == 2)) {
                    echo "col-sm-6 col-lg-6";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 41) == 3)) {
                    echo "col-sm-6 col-lg-4";
                } else {
                    echo "col-sm-6 col-lg-3";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"card card-md\">
\t\t\t\t\t\t\t\t\t\t";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 43) == "domain")) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon ribbon-top ribbon-bookmark bg-green\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 10m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.75 16a8.015 8.015 0 1 0 9.25 -13\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 18l0 4\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 22l8 0\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 53
$context["product"], "type", [], "any", false, false, false, 53) == "hosting")) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon ribbon-top ribbon-bookmark bg-orange\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 8l0 .01\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 16l0 .01\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 63
$context["product"], "type", [], "any", false, false, false, 63) == "downloadable")) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon ribbon-top ribbon-bookmark bg-indigo\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 11l5 5l5 -5\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 4l0 12\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 72
$context["product"], "type", [], "any", false, false, false, 72) == "license")) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon ribbon-top ribbon-bookmark bg-pink\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 7l4 0\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 11l4 0\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon ribbon-top ribbon-bookmark bg-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 12l8 -4.5\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 12l0 9\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 12l-8 -4.5\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-uppercase text-muted font-weight-medium mb-4\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 93), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 94), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 96
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton", ["order" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 96), "show_custom_form_values" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 96)]);
                echo "\" class=\"btn ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 96) == "domain")) {
                    echo "btn-green";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 96) == "hosting")) {
                    echo "btn-orange";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 96) == "downloadable")) {
                    echo "btn-indigo";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 96) == "license")) {
                    echo "btn-pink";
                } else {
                    echo "btn-dark";
                }
                echo " w-100\">Choose</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  312 => 107,  302 => 102,  270 => 96,  265 => 94,  261 => 93,  258 => 92,  246 => 82,  235 => 73,  233 => 72,  223 => 64,  221 => 63,  210 => 54,  208 => 53,  197 => 44,  195 => 43,  181 => 41,  164 => 40,  159 => 38,  155 => 37,  150 => 34,  146 => 33,  143 => 32,  139 => 31,  133 => 30,  124 => 25,  116 => 22,  111 => 19,  107 => 18,  99 => 16,  92 => 14,  88 => 13,  82 => 11,  75 => 10,  71 => 9,  64 => 5,  60 => 4,  56 => 1,  54 => 8,  52 => 7,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/tide/html/mod_order_index.html.twig");
    }
}
