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

/* mod_product_category.html.twig */
class __TwigTemplate_c270f3cd0fa2481419dc410b09764347 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_product_category.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "products";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_product_category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<ul class=\"breadcrumb\">
    <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
            <svg class=\"icon\">
                <use xlink:href=\"#home\" />
            </svg>
        </a>
    </li>
    <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "#tab-categories\">";
        echo twig_escape_filter($this->env, __trans("Categories"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"card\">
    <form method=\"post\" action=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/category_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Category updated"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"card-body\">
            <h3>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h3>

            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Icon"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"input-group\">
                        <input class=\"form-control\" type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "icon_url", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
            <div class=\"mb-3\">
                <textarea class=\"bb-textarea\" name=\"description\" rows=\"5\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 50), "html", null, true);
        echo "</textarea>
            </div>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\">

        <div class=\"card-footer d-flex gap-2\">
            <a href=\"";
        // line 57
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\" class=\"btn btn-secondary w-25\">
                <svg class=\"icon\">
                    <use xlink:href=\"#arrow-sm-left\" />
                </svg>
                ";
        // line 61
        echo twig_escape_filter($this->env, __trans("Go back"), "html", null, true);
        echo "
            </a>
            <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
        </div>
    </form>
</div>
";
    }

    // line 69
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 69, $context, $this->getSourceContext());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_product_category.html.twig";
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
        return array (  185 => 69,  176 => 63,  171 => 61,  164 => 57,  158 => 54,  151 => 50,  143 => 45,  137 => 42,  130 => 38,  125 => 36,  119 => 33,  114 => 31,  108 => 30,  105 => 29,  101 => 28,  94 => 24,  87 => 22,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  54 => 7,  49 => 1,  47 => 5,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_product_category.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Product/html_admin/mod_product_category.html.twig");
    }
}
