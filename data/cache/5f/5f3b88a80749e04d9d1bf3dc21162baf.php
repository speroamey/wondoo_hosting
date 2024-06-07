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

/* mod_servicehosting_hp.html.twig */
class __TwigTemplate_2d99a587c5845bcf1dbc21414fbe3d6b extends Template
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
        // line 5
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_servicehosting_hp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Hosting management"), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Hosting plans and servers"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h5>";
        // line 26
        echo twig_escape_filter($this->env, __trans("Manage hosting plan"), "html", null, true);
        echo "</h5>
        <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/hp_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Hosting plan updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Unique name to identify this hosting plan"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Disk quota"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"quota\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "quota", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Bandwidth"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"bandwidth\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "bandwidth", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Max Addon domains"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_addon\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_addon", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("Max FTP accounts"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_ftp\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_ftp", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 60
        echo twig_escape_filter($this->env, __trans("Max SQL Databases"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_sql\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_sql", [], "any", false, false, false, 62), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 66
        echo twig_escape_filter($this->env, __trans("Max Email Accounts"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_pop\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_pop", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 72
        echo twig_escape_filter($this->env, __trans("Max Subdomains"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_sub\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_sub", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 78
        echo twig_escape_filter($this->env, __trans("Max Parked Domains"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"max_park\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "max_park", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                </div>
            </div>
            ";
        // line 83
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "config", [], "any", false, false, false, 83)) > 0)) {
            // line 84
            echo "                <h3>";
            echo twig_escape_filter($this->env, __trans("Server manager specific parameters"), "html", null, true);
            echo "</h3>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "config", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 86
                echo "                <div class=\"mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
                // line 87
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ":</label>
                    <div class=\"col\">
                        <textarea class=\"form-control\" name=\"config[";
                // line 89
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "]\" rows=\"1\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</textarea>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            ";
        }
        // line 94
        echo "
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "id", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
            <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("Update hosting plan"), "html", null, true);
        echo "</button>
        </form>
        <hr>

        <h3>";
        // line 100
        echo twig_escape_filter($this->env, __trans("Hosting plan additional parameters"), "html", null, true);
        echo "</h3>
        <p class=\"text-muted\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Depending on server manager used to setup hosting account you may require provide additional parameters. List of parameters server managers requires you can find on extensions page."), "html", null, true);
        echo "</p>

        <form method=\"post\" action=\"";
        // line 103
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/hp_update");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row g-2\">
                <div class=\"col\">
                    <label class=\"form-label\">";
        // line 107
        echo twig_escape_filter($this->env, __trans("Parameter name"), "html", null, true);
        echo ":</label>
                    <input class=\"form-control\" type=\"text\" name=\"new_config_name\">
                </div>
                <div class=\"col\">
                    <label class=\"form-label\">";
        // line 111
        echo twig_escape_filter($this->env, __trans("Parameter value"), "html", null, true);
        echo ":</label>
                    <textarea class=\"form-control\" name=\"new_config_value\" rows=\"1\"></textarea>
                </div>
            </div>
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "id", [], "any", false, false, false, 115), "html", null, true);
        echo "\">
            <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 116
        echo twig_escape_filter($this->env, __trans("Add new field"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicehosting_hp.html.twig";
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
        return array (  307 => 116,  303 => 115,  296 => 111,  289 => 107,  283 => 104,  279 => 103,  274 => 101,  270 => 100,  263 => 96,  259 => 95,  256 => 94,  253 => 93,  241 => 89,  236 => 87,  233 => 86,  229 => 85,  224 => 84,  222 => 83,  216 => 80,  211 => 78,  204 => 74,  199 => 72,  192 => 68,  187 => 66,  180 => 62,  175 => 60,  168 => 56,  163 => 54,  156 => 50,  151 => 48,  144 => 44,  139 => 42,  132 => 38,  127 => 36,  118 => 32,  113 => 30,  108 => 28,  102 => 27,  98 => 26,  94 => 24,  90 => 23,  83 => 19,  76 => 17,  66 => 10,  62 => 8,  58 => 7,  51 => 3,  46 => 1,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_hp.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Servicehosting/html_admin/mod_servicehosting_hp.html.twig");
    }
}
