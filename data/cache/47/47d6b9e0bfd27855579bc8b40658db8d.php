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
class __TwigTemplate_48f1f7eb3c60e6ec462e570e05629aac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 1) == "active")) {
            // line 2
            echo "<div class=\"row row-deck row-cards mt-1\">
   <div class=\"col-md-12\">
      <div class=\"card border border-bottom-0\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 6
            echo twig_escape_filter($this->env, __trans("Manage hosting account"), "html", null, true);
            echo "</h3>
            <div class=\"card-actions\">
                ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain_order_id", [], "any", false, false, false, 8)) {
                // line 9
                echo "                <a class=\"btn btn-primary\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain_order_id", [], "any", false, false, false, 9), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Manage domain"), "html", null, true);
                echo "</a>
                ";
            }
            // line 11
            echo "                <a class=\"btn btn-info api-link\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/servicehosting/get_login_url", ["order_id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 11), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-jsonp=\"onAfterLoginLinkCreated\" target=\"_blank\">";
            echo twig_escape_filter($this->env, __trans("Jump to cPanel"), "html", null, true);
            echo "</a>
                ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "reseller", [], "any", false, false, false, 12)) {
                // line 13
                echo "                <a class=\"btn btn-secondary\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "reseller_cpanel_url", [], "any", false, false, false, 13), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("Reseller control panel"), "html", null, true);
                echo "</a>
                ";
            }
            // line 15
            echo "            </div>
         </div>
      </div>
   </div>
</div>
<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card border border-top-0\">
         <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
               <li class=\"nav-item\">
                  <a href=\"#tabs-details\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
            // line 26
            echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-change-pass\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 29
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-change-domain\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 32
            echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-change-username\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 35
            echo twig_escape_filter($this->env, __trans("Username"), "html", null, true);
            echo "</a>
               </li>
            </ul>
         </div>
         <div class=\"card-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane active show\" id=\"tabs-details\">
                  <h4>";
            // line 42
            echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
            echo "</h4>
                  ";
            // line 43
            $context["server"] = twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 43);
            // line 44
            echo "                  ";
            $context["hp"] = twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "hosting_plan", [], "any", false, false, false, 44);
            // line 45
            echo "                  <div class=\"table-responsive\">
                     <table class=\"table text-nowrap table-striped table-bordered\">
                        <tbody>
                           <tr>
                              <td>";
            // line 49
            echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
            echo ":</td>
                              <td>
                                 <a target=\"_blank\" href=\"http://";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>
                              </td>
                           </tr>
                           ";
            // line 58
            echo "                           <tr>
                              <td>";
            // line 59
            echo twig_escape_filter($this->env, __trans("Server Hostname"), "html", null, true);
            echo ":</td>
                              <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "hostname", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                           </tr>
                           <tr>
                              <td>";
            // line 63
            echo twig_escape_filter($this->env, __trans("Username"), "html", null, true);
            echo ":</td>
                              <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                           </tr>
                           <tr>
                              <td>";
            // line 67
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo ":</td>
                              <td>******</td>
                           </tr>
                           <tr>
                              <td>";
            // line 71
            echo twig_escape_filter($this->env, __trans("Hosting plan"), "html", null, true);
            echo ":</td>
                              <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                           </tr>
                           <tr>
                              <td>";
            // line 75
            echo twig_escape_filter($this->env, __trans("Bandwidth"), "html", null, true);
            echo ":</td>
                              <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "bandwidth", [], "any", false, false, false, 76), "html", null, true);
            echo " MB / ";
            echo twig_escape_filter($this->env, __trans("per month"), "html", null, true);
            echo "</td>
                           </tr>
                           <tr>
                              <td>";
            // line 79
            echo twig_escape_filter($this->env, __trans("Disk quota"), "html", null, true);
            echo ":</td>
                              <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hp"] ?? null), "quota", [], "any", false, false, false, 80), "html", null, true);
            echo " MB</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class=\"tab-pane\" id=\"tabs-change-pass\">
                  <h4>";
            // line 87
            echo twig_escape_filter($this->env, __trans("Change your FTP/cPanel/SSH password."), "html", null, true);
            echo "</h4>
                  <form action=\"\" method=\"post\" id=\"change-password\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                     <fieldset class=\"form-fieldset\">
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
            // line 92
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo ": </label>
                           <input type=\"password\" name=\"password\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 93), "html", null, true);
            echo "\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label required\" >";
            // line 96
            echo twig_escape_filter($this->env, __trans("Password Confirm"), "html", null, true);
            echo ": </label>
                           <input type=\"password\" name=\"password_confirm\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password_confirm", [], "any", false, false, false, 97), "html", null, true);
            echo "\" class=\"form-control\" required=\"required\">
                        </div>
                        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                        <div class=\"mb-3\">
                           <button class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, __trans("Change password"), "html", null, true);
            echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                                 <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                              </svg>
                              ";
            // line 107
            echo twig_escape_filter($this->env, __trans("Change password"), "html", null, true);
            echo "
                           </button>
                        </div>
                     </fieldset>
                  </form>
               </div>
            <div class=\"tab-pane\" id=\"tabs-change-domain\">
                <h4>";
            // line 114
            echo twig_escape_filter($this->env, __trans("Change domain"), "html", null, true);
            echo "</h4>
                <form action=\"\" method=\"post\" id=\"change-domain\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                    <fieldset class=\"form-fieldset\">
                        <div class=\"mb-3\">
                           <label class=\"form-label required\" >";
            // line 119
            echo twig_escape_filter($this->env, __trans("New domain"), "html", null, true);
            echo ": </label>
                           <div class=\"row g-2\">
                              <div class=\"col-5\">
                                 <input type=\"text\" name=\"sld\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "sld", [], "any", false, false, false, 122))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "sld", [], "any", false, false, false, 122))), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\">
                              </div>
                              <div class=\"col-2\">
                                 <input type=\"text\" name=\"tld\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "domain", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "tld", [], "any", false, false, false, 125))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "tld", [], "any", false, false, false, 125))), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\">
                              </div>
                           </div>
                        </div>
                        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 129), "html", null, true);
            echo "\">
                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, __trans("Change domain"), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path><path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path></svg> ";
            echo twig_escape_filter($this->env, __trans("Change domain"), "html", null, true);
            echo "</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"tab-pane\" id=\"tabs-change-username\">
               <h4>";
            // line 137
            echo twig_escape_filter($this->env, __trans("Change username"), "html", null, true);
            echo "</h4>
               <form action=\"\" method=\"post\" id=\"change-username\">
                  <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                  <fieldset class=\"form-fieldset\">
                     <div class=\"mb-3\">
                        <label class=\"form-label required\">";
            // line 142
            echo twig_escape_filter($this->env, __trans("Username"), "html", null, true);
            echo ": </label>
                        <input type=\"text\" class=\"form-control\" name=\"username\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "username", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "username", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 143))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 143))), "html", null, true);
            echo "\" required=\"required\">
                     </div>
                     <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 145), "html", null, true);
            echo "\">
                     <div class=\"mb-3\">
                        <button class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 147
            echo twig_escape_filter($this->env, __trans("Change username"), "html", null, true);
            echo "\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                              <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                           </svg>
                           ";
            // line 153
            echo twig_escape_filter($this->env, __trans("Change username"), "html", null, true);
            echo "
                        </button>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
";
            // line 164
            $this->displayBlock('js', $context, $blocks);
        }
    }

    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "<script type=\"text/javascript\">
   \$(function() {
       \$('.domain-tabs a').on('click', function(e) {
           e.preventDefault();
           \$(this).tab('show');
       });
   
       \$('#change-domain').on('submit', function(event) {
           bb.post(
               'client/servicehosting/change_domain',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Domain name was changed');
               }
           );
   
           return false;
       });
   
       \$('#change-username').on('submit', function(event) {
           bb.post(
               'client/servicehosting/change_username',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Account Username was changed');
               }
           );
   
           return false;
       });
   
       \$('#change-password').on('submit', function(event) {
           bb.post(
               'client/servicehosting/change_password',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Account Password was changed');
               }
           );
   
           return false;
       });
   
   });
</script>
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
        return array (  371 => 165,  363 => 164,  349 => 153,  340 => 147,  335 => 145,  330 => 143,  326 => 142,  320 => 139,  315 => 137,  304 => 131,  299 => 129,  292 => 125,  286 => 122,  280 => 119,  274 => 116,  269 => 114,  259 => 107,  250 => 101,  245 => 99,  240 => 97,  236 => 96,  230 => 93,  226 => 92,  220 => 89,  215 => 87,  205 => 80,  201 => 79,  193 => 76,  189 => 75,  183 => 72,  179 => 71,  172 => 67,  166 => 64,  162 => 63,  156 => 60,  152 => 59,  149 => 58,  141 => 51,  136 => 49,  130 => 45,  127 => 44,  125 => 43,  121 => 42,  111 => 35,  105 => 32,  99 => 29,  93 => 26,  80 => 15,  72 => 13,  70 => 12,  63 => 11,  53 => 9,  51 => 8,  46 => 6,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_manage.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/tide/html/mod_servicehosting_manage.html.twig");
    }
}
