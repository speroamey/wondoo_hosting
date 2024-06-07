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

/* mod_servicehosting_manage.html.twig */
class __TwigTemplate_24cab63913f5e6ff09bab2e053eeb8db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicehosting_manage.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["server"] = twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 3);
        // line 4
        $context["hp"] = twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "hosting_plan", [], "any", false, false, false, 4);
        // line 5
        echo "
<div class=\"card-body\">
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
        echo "</h3>
</div>
<table class=\"table card-table table-vcenter table-striped text-nowrap\">
    <tbody>
        <tr>
            <td class=\"w-50 text-end\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</td>
            <td>";
        // line 13
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 16
        echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
        echo ":</td>
            <td>
                <a target=\"_blank\" href=\"https://";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 18), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
            </td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Server Name"), "html", null, true);
        echo ":</td>
            <td><a href=\"";
        // line 23
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting/server");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Hosting plan"), "html", null, true);
        echo ":</td>
            <td><a href=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting/plan");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Server IP"), "html", null, true);
        echo ":</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ip", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Account IP"), "html", null, true);
        echo ":</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ip", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Username"), "html", null, true);
        echo ":</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo ":</td>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns1", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 46
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo ":</td>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns2", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns3", [], "any", false, false, false, 49)) {
            // line 50
            echo "        <tr>
            <td class=\"text-end\">";
            // line 51
            echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
            echo ":</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns3", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 55
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns4", [], "any", false, false, false, 55)) {
            // line 56
            echo "        <tr>
            <td class=\"text-end\">";
            // line 57
            echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
            echo ":</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns4", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 61
        echo "        <tr>
            <td class=\"text-end\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Bandwidth"), "html", null, true);
        echo ":</td>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "bandwidth", [], "any", false, false, false, 63), "html", null, true);
        echo " MB / ";
        echo twig_escape_filter($this->env, __trans("per month"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 66
        echo twig_escape_filter($this->env, __trans("Disk quota"), "html", null, true);
        echo ":</td>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "quota", [], "any", false, false, false, 67), "html", null, true);
        echo " MB</td>
        </tr>
    </tbody>
</table>

<div class=\"card-footer text-center\">
    ";
        // line 73
        echo twig_escape_filter($this->env, ($context["order_actions"] ?? null), "html", null, true);
        echo "
    <a class=\"btn btn-primary\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "cpanel_url", [], "any", false, false, false, 74), "html", null, true);
        echo "\" target=\"_blank\">
        <svg class=\"icon\" width=\"24\" height=\"24\">
            <use xlink:href=\"#server\" />
        </svg>
        <span>";
        // line 78
        echo twig_escape_filter($this->env, __trans("Jump to control panel"), "html", null, true);
        echo "</span>
    </a>
    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "reseller", [], "any", false, false, false, 80)) {
            // line 81
            echo "    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "reseller_cpanel_url", [], "any", false, false, false, 81), "html", null, true);
            echo "\" target=\"_blank\">
        <svg class=\"icon\" width=\"24\" height=\"24\">
            <use xlink:href=\"#server\" />
        </svg>
        <span>";
            // line 85
            echo twig_escape_filter($this->env, __trans("Reseller control panel"), "html", null, true);
            echo "</span>
    </a>
    ";
        }
        // line 88
        echo "
    <a class=\"btn btn-primary api-link\"
        href=\"";
        // line 90
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/sync", ["order_id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 90), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
        data-api-confirm=\"";
        // line 91
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\"
        data-api-msg=\"";
        // line 92
        echo twig_escape_filter($this->env, __trans("Account was synced"), "html", null, true);
        echo "\">
        <svg class=\"icon\" width=\"24\" height=\"24\">
            <use xlink:href=\"#refresh\" />
        </svg>
        <span>";
        // line 96
        echo twig_escape_filter($this->env, __trans("Sync with server"), "html", null, true);
        echo "</span>
    </a>
</div>

<div class=\"card-body\">
    <h3>";
        // line 101
        echo twig_escape_filter($this->env, __trans("Change hosting plan"), "html", null, true);
        echo "</h3>

    <form action=\"";
        // line 103
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/change_plan");
        echo "\" method=\"post\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Hosting plan changed"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 106
        echo twig_escape_filter($this->env, __trans("New hosting plan"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                ";
        // line 108
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["plan_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_hp_get_pairs", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "id", [], "any", false, false, false, 108), 1], 108, $context, $this->getSourceContext());
        echo "
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 112), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, __trans("Change"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
    </form>
    <hr>

    <h3>";
        // line 117
        echo twig_escape_filter($this->env, __trans("Change account password"), "html", null, true);
        echo "</h3>
    <form action=\"";
        // line 118
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/change_password");
        echo "\" method=\"post\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Account password changed"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 121
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"password\" name=\"password\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 127
        echo twig_escape_filter($this->env, __trans("Password Confirm"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"password\" name=\"password_confirm\" required>
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 133), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, __trans("Change"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
    </form>
    <hr>

    <h3>";
        // line 138
        echo twig_escape_filter($this->env, __trans("Change IP"), "html", null, true);
        echo "</h3>
    <form method=\"post\" action=\"";
        // line 139
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/change_ip");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Account IP changed"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 142
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"ip\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ip", [], "any", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ip", [], "any", false, false, false, 144), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ip", [], "any", false, false, false, 144))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ip", [], "any", false, false, false, 144))), "html", null, true);
        echo "\" required>
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 148), "html", null, true);
        echo "\">
        <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 149
        echo twig_escape_filter($this->env, __trans("Change"), "html", null, true);
        echo "</button>
    </form>
    <hr>

    <h3>";
        // line 153
        echo twig_escape_filter($this->env, __trans("Change username"), "html", null, true);
        echo "</h3>
    <form method=\"post\" action=\"";
        // line 154
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/change_username");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Account username changed"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 157
        echo twig_escape_filter($this->env, __trans("Username"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"username\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "username", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "username", [], "any", false, false, false, 159), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 159))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 159))), "html", null, true);
        echo "\" required>
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 163), "html", null, true);
        echo "\">
        <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 164
        echo twig_escape_filter($this->env, __trans("Change"), "html", null, true);
        echo "</button>
    </form>
    <hr>

    <h3>";
        // line 168
        echo twig_escape_filter($this->env, __trans("Change domain"), "html", null, true);
        echo "</h3>
    <form method=\"post\" action=\"";
        // line 169
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/change_domain");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Account domain changed"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 172
        echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" name=\"sld\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", true, true, false, 175)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", false, false, false, 175), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "sld", [], "any", false, false, false, 175))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "sld", [], "any", false, false, false, 175))), "html", null, true);
        echo "\" required>
                    <input class=\"form-control\" type=\"text\" name=\"tld\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", true, true, false, 176)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", false, false, false, 176), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "tld", [], "any", false, false, false, 176))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "tld", [], "any", false, false, false, 176))), "html", null, true);
        echo "\" required>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 181), "html", null, true);
        echo "\">
        <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 182
        echo twig_escape_filter($this->env, __trans("Change"), "html", null, true);
        echo "</button>
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicehosting_manage.html.twig";
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
        return array (  473 => 182,  469 => 181,  461 => 176,  457 => 175,  451 => 172,  446 => 170,  440 => 169,  436 => 168,  429 => 164,  425 => 163,  418 => 159,  413 => 157,  408 => 155,  402 => 154,  398 => 153,  391 => 149,  387 => 148,  380 => 144,  375 => 142,  370 => 140,  364 => 139,  360 => 138,  353 => 134,  349 => 133,  340 => 127,  331 => 121,  326 => 119,  320 => 118,  316 => 117,  309 => 113,  305 => 112,  298 => 108,  293 => 106,  288 => 104,  282 => 103,  277 => 101,  269 => 96,  262 => 92,  258 => 91,  254 => 90,  250 => 88,  244 => 85,  236 => 81,  234 => 80,  229 => 78,  222 => 74,  218 => 73,  209 => 67,  205 => 66,  197 => 63,  193 => 62,  190 => 61,  184 => 58,  180 => 57,  177 => 56,  174 => 55,  168 => 52,  164 => 51,  161 => 50,  159 => 49,  154 => 47,  150 => 46,  144 => 43,  140 => 42,  134 => 39,  130 => 38,  124 => 35,  120 => 34,  114 => 31,  110 => 30,  100 => 27,  96 => 26,  86 => 23,  82 => 22,  73 => 18,  68 => 16,  62 => 13,  58 => 12,  50 => 7,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_manage.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Servicehosting/html_admin/mod_servicehosting_manage.html.twig");
    }
}
