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

/* mod_servicehosting_config.html.twig */
class __TwigTemplate_b2f06d470a5aedd139aa48d88771a24d extends Template
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicehosting_config.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"card-body\">
    <h5>";
        // line 4
        echo twig_escape_filter($this->env, __trans("Hosting settings"), "html", null, true);
        echo "</h5>
    <form method=\"post\" action=\"";
        // line 5
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update_config");
        echo "\" class=\"api-form save\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Hosting settings updated"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 8
        echo twig_escape_filter($this->env, __trans("Server"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                ";
        // line 10
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["config[server_id]", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_server_get_pairs", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 10), "server_id", [], "any", false, false, false, 10), 0, "Select server"], 10, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Hosting plan"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                ";
        // line 16
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["config[hosting_plan_id]", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_hp_get_pairs", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 16), "hosting_plan_id", [], "any", false, false, false, 16), 0, "Select hosting plan"], 16, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 20
        echo twig_escape_filter($this->env, __trans("Reseller hosting"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioResellerYes\" type=\"radio\" name=\"config[reseller]\" value=\"1\"";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 23), "reseller", [], "any", false, false, false, 23)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioResellerYes\">";
        // line 24
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioResellerNo\" type=\"radio\" name=\"config[reseller]\" value=\"0\"";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 27), "reseller", [], "any", false, false, false, 27)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioResellerNo\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                </div>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Free domain registration"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioFreeRegistrationYes\" type=\"radio\" name=\"config[free_domain]\" value=\"1\"";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 36), "free_domain", [], "any", false, false, false, 36)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioFreeRegistrationYes\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioFreeRegistrationNo\" type=\"radio\" name=\"config[free_domain]\" value=\"0\"";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 40), "free_domain", [], "any", false, false, false, 40)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioFreeRegistrationNo\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                </div>
            </div>
        </div>
        <div class=\"mb-3 row free-tlds-row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 46
        echo twig_escape_filter($this->env, __trans("Select free TLDs"), "html", null, true);
        echo "</label>
            <div class=\"col\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                ";
        // line 50
        $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [["allow_register" => 1]], "method", false, false, false, 50);
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tlds"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["tld"]) {
            // line 52
            echo "                    <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_tlds][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 52), "html", null, true);
            echo "\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 52), "free_tlds", [], "any", false, false, false, 52))) {
                echo " checked";
            }
            echo "/></td><td >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 52), "html", null, true);
            echo "</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </div>
        </div>
            <!-- Select periods to offer free domains -->
            <div class=\"mb-3 row free-periods-row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 60
        echo twig_escape_filter($this->env, __trans("Select free periods"), "html", null, true);
        echo "</label>
            <div class=\"col\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"1M\" ";
        // line 64
        if (twig_in_filter("1M", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 64), "free_domain_periods", [], "any", false, false, false, 64))) {
            echo " checked";
        }
        echo "/></td><td>1 ";
        echo twig_escape_filter($this->env, __trans("Month"), "html", null, true);
        echo "</td></tr>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"2M\" ";
        // line 65
        if (twig_in_filter("2M", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 65), "free_domain_periods", [], "any", false, false, false, 65))) {
            echo " checked";
        }
        echo "/></td><td>2 ";
        echo twig_escape_filter($this->env, __trans("Months"), "html", null, true);
        echo "</td></tr>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"3M\" ";
        // line 66
        if (twig_in_filter("3M", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 66), "free_domain_periods", [], "any", false, false, false, 66))) {
            echo " checked";
        }
        echo "/></td><td>3 ";
        echo twig_escape_filter($this->env, __trans("Months"), "html", null, true);
        echo "</td></tr>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"1Y\" ";
        // line 67
        if (twig_in_filter("1Y", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 67), "free_domain_periods", [], "any", false, false, false, 67))) {
            echo " checked";
        }
        echo "/></td><td>1 ";
        echo twig_escape_filter($this->env, __trans("Year"), "html", null, true);
        echo "</td></tr>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"2Y\" ";
        // line 68
        if (twig_in_filter("2Y", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 68), "free_domain_periods", [], "any", false, false, false, 68))) {
            echo " checked";
        }
        echo "/></td><td>2 ";
        echo twig_escape_filter($this->env, __trans("Years"), "html", null, true);
        echo "</td></tr>
                        <tr><td class=\"w-1\"><input type=\"checkbox\" name=\"config[free_domain_periods][]\" value=\"3Y\" ";
        // line 69
        if (twig_in_filter("3Y", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 69), "free_domain_periods", [], "any", false, false, false, 69))) {
            echo " checked";
        }
        echo "/></td><td>3 ";
        echo twig_escape_filter($this->env, __trans("Years"), "html", null, true);
        echo "</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("Free domain transfer"), "html", null, true);
        echo ":</label>
            <div class=\"col\">
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioFreeTransferYes\" type=\"radio\" name=\"config[free_transfer]\" value=\"1\"";
        // line 78
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 78), "free_transfer", [], "any", false, false, false, 78)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioFreeTransferYes\">";
        // line 79
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"radioFreeTransferNo\" type=\"radio\" name=\"config[free_transfer]\" value=\"0\"";
        // line 82
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 82), "free_transfer", [], "any", false, false, false, 82)) {
            echo " checked";
        }
        echo ">
                    <label class=\"form-check-label\" for=\"radioFreeTransferNo\">";
        // line 83
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
        <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 89
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
    </form>
    <hr>

    <div class=\"d-flex align-items-center mb-3\">
        <h5 class=\"mb-0\">";
        // line 94
        echo twig_escape_filter($this->env, __trans("Hosting plans"), "html", null, true);
        echo "</h5>
        <a href=\"";
        // line 95
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting#tab-new-server");
        echo "\" class=\"ms-auto btn btn-primary\">
            <svg class=\"icon me-2\">
                <use xlink:href=\"#plus\" />
            </svg>
            ";
        // line 99
        echo twig_escape_filter($this->env, __trans("New hosting plan"), "html", null, true);
        echo "
        </a>
    </div>
    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th>";
        // line 105
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_hp_get_pairs", [], "any", false, false, false, 110));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["plan"]) {
            // line 111
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 113
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/plan");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["plan"], "html", null, true);
            echo "</a>
                </td>
                <td>
                    <a class=\"btn btn-icon\" href=\"";
            // line 116
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/plan");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#edit\" />
                        </svg>
                    </a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "            <tr>
                <td class=\"text-muted\" colspan=\"2\">";
            // line 125
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        </tbody>
    </table>
    <hr>

    <div class=\"d-flex align-items-center mb-3\">
        <h5 class=\"mb-0\">";
        // line 133
        echo twig_escape_filter($this->env, __trans("Servers"), "html", null, true);
        echo "</h5>
        <a href=\"";
        // line 134
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting#tab-new-server");
        echo "\" class=\"ms-auto btn btn-primary\">
            <svg class=\"icon me-2\">
                <use xlink:href=\"#plus\" />
            </svg>
            ";
        // line 138
        echo twig_escape_filter($this->env, __trans("New server"), "html", null, true);
        echo "
        </a>
    </div>
    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th>";
        // line 144
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_server_get_pairs", [], "any", false, false, false, 149));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["server"]) {
            // line 150
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 152
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/server");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "</a>
                </td>
                <td>
                    <a class=\"btn btn-icon\" href=\"";
            // line 155
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/server");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#edit\" />
                        </svg>
                    </a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 163
            echo "            <tr>
                <td class=\"text-muted\" colspan=\"7\">";
            // line 164
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        </tbody>
    </table>
</div>

<script>
    var free_domain_radios = \$('input:radio[name=\"config[free_domain]\"]');
    var freeTldsRow = \$('.free-tlds-row');
    var freePerdsRow = \$('.free-periods-row');

    free_domain_radios.on('click', function() {
        if (\$(this).val() == 1){
            freeTldsRow.fadeIn('slow');
            freePerdsRow.fadeIn('slow');
            \$('input[name=\"config[free_domain_periods][]\"]').prop('required', true);
            \$('input[name=\"config[free_tlds][]\"]').prop('required', true);
        }

        if (\$(this).val() == 0){
            \$('input[name=\"config[free_domain_periods][]\"]').prop('required', false);
            \$('input[name=\"config[free_tlds][]\"]').prop('required', false);
            \$('input[name=\"config[free_tlds][]\"]').prop( 'checked', false);
            \$('input[name=\"config[free_domain_periods][]\"]').prop( \"checked\", false);
            freeTldsRow.fadeOut('slow');
            freePerdsRow.fadeOut('slow');
        }
    });

    \$('input[name=\"config[free_tlds][]\"]').on('change', function(){
        var check = false;
        \$('input[name=\"config[free_tlds][]\"]').each(function (){ if(\$(this).prop('checked')==true){ check= true;} });
        if(check == true){
            \$('input[name=\"config[free_tlds][]\"]').prop('required', false);
        }else{
            \$('input[name=\"config[free_tlds][]\"]').prop('required', true);
        }
    });
    \$('input[name=\"config[free_domain_periods][]\"]').on('change', function(){
        var check = false;
        \$('input[name=\"config[free_domain_periods][]\"]').each(function (){ if(\$(this).prop('checked')==true){ check= true;} });
        if(check == true){
            \$('input[name=\"config[free_domain_periods][]\"]').prop('required', false);
        }else{
            \$('input[name=\"config[free_domain_periods][]\"]').prop('required', true);
        }
    });

    if (free_domain_radios.filter('[value=0]:checked').length > 0) {
        freeTldsRow.hide();
        freePerdsRow.hide();
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicehosting_config.html.twig";
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
        return array (  442 => 167,  433 => 164,  430 => 163,  415 => 155,  405 => 152,  401 => 150,  396 => 149,  388 => 144,  379 => 138,  372 => 134,  368 => 133,  361 => 128,  352 => 125,  349 => 124,  334 => 116,  324 => 113,  320 => 111,  315 => 110,  307 => 105,  298 => 99,  291 => 95,  287 => 94,  279 => 89,  275 => 88,  267 => 83,  261 => 82,  255 => 79,  249 => 78,  243 => 75,  230 => 69,  222 => 68,  214 => 67,  206 => 66,  198 => 65,  190 => 64,  183 => 60,  175 => 54,  160 => 52,  155 => 51,  153 => 50,  146 => 46,  138 => 41,  132 => 40,  126 => 37,  120 => 36,  114 => 33,  106 => 28,  100 => 27,  94 => 24,  88 => 23,  82 => 20,  75 => 16,  70 => 14,  63 => 10,  58 => 8,  53 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_config.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Servicehosting/html_admin/mod_servicehosting_config.html.twig");
    }
}
