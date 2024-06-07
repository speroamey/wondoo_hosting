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

/* mod_servicehosting_server.html.twig */
class __TwigTemplate_9d87efa403b38ffebae100f6ec1cc125 extends Template
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
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_servicehosting_server.html.twig", 1);
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
        echo "<ul class=\"breadcrumb\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h3>";
        // line 26
        echo twig_escape_filter($this->env, __trans("Server management"), "html", null, true);
        echo "</h3>

        <form method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/server_update");
        echo "\" id=\"server-update\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Server updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 31
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Unique name to identify this server"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("Hostname"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"hostname\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "hostname", [], "any", false, false, false, 39), "html", null, true);
        echo "\" placeholder=\"host1.domain.com\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"ip\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ip", [], "any", false, false, false, 45), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Primary IP address of the server used to connect to it like: 127.0.0.1"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 49
        echo twig_escape_filter($this->env, __trans("Assigned IP Addresses"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <textarea class=\"form-control\" name=\"assigned_ips\" rows=\"5\" placeholder=\"List the IP Addresses assigned to the server (One per line)\">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "assigned_ips", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("PHP_EOL"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</textarea>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Enable/Disable"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioActiveYes\" type=\"radio\" name=\"active\" value=\"1\"";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "active", [], "any", false, false, false, 58)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioActiveYes\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioActiveNo\" type=\"radio\" name=\"active\" value=\"0\"";
        // line 62
        if ( !twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "active", [], "any", false, false, false, 62)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioActiveNo\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <hr>

            <h5>";
        // line 69
        echo twig_escape_filter($this->env, __trans("Server manager"), "html", null, true);
        echo "</h5>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Server manager"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <select class=\"form-select\" name=\"manager\" onchange=\"handleManagerChange(this)\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_manager_get_pairs", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["code"] => $context["manager"]) {
            // line 75
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "manager", [], "any", false, false, false, 75) == $context["code"])) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "label", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </select>
                </div>
            </div>

            <div id=\"credentials\"></div>

            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 84
        echo twig_escape_filter($this->env, __trans("Connection port"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"number\" name=\"port\" min=\"1\" max=\"65535\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "port", [], "any", false, false, false, 86), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Custom port. Use blank to use default. Used to connect to the API"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 90
        echo twig_escape_filter($this->env, __trans("Password length"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"number\" name=\"passwordLength\" min=\"1\" max=\"100\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "passwordLength", [], "any", false, false, false, 92), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Length of generated passwords when creating user accounts. Defaults to 10"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("Use secure connection"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioSecureConnectionYes\" type=\"radio\" name=\"secure\" value=\"1\"";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "secure", [], "any", false, false, false, 99)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioSecureConnectionYes\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioSecureConnectionNo\" type=\"radio\" name=\"secure\" value=\"0\"";
        // line 103
        if ( !twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "secure", [], "any", false, false, false, 103)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioSecureConnectionNo\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            <input class=\"btn btn-primary w-100\" id=\"test-connection\" type=\"button\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, __trans("Update and test connection"), "html", null, true);
        echo "\">

            <h5>";
        // line 111
        echo twig_escape_filter($this->env, __trans("Optional configuration"), "html", null, true);
        echo "</h5>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("Users prefix"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"userprefix\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "config", [], "any", false, false, false, 115), "userprefix", [], "any", false, false, false, 115), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Prefix for created users (especially for database)"), "html", null, true);
        echo "\">
                    <span class=\"text-muted\">";
        // line 116
        echo twig_escape_filter($this->env, __trans("Some server managers may ignore this option due to limitations / requirements for usernames imposed by the control panel."), "html", null, true);
        echo "</span>
                </div>
            </div>

            <hr>

            <h5>";
        // line 122
        echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
        echo "</h5>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 124
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"ns1\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns1", [], "any", false, false, false, 126), "html", null, true);
        echo "\" placeholder=\"ns1.yourdomain.com\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"ns2\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns2", [], "any", false, false, false, 132), "html", null, true);
        echo "\" placeholder=\"ns2.yourdomain.com\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 136
        echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"ns3\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns3", [], "any", false, false, false, 138), "html", null, true);
        echo "\" placeholder=\"ns3.yourdomain.com\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 142
        echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"ns4\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ns4", [], "any", false, false, false, 144), "html", null, true);
        echo "\" placeholder=\"ns4.yourdomain.com\">
                </div>
            </div>

            <input type=\"hidden\" name=\"id\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 148), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, __trans("Update server"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
        </form>
    </div>
</div>
";
    }

    // line 155
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "<script>
    \$(function() {
        \$('#test-connection').on('click', function(event){
            event.preventDefault();
              formElement = document.getElementById('server-update');
              const formData = new FormData(formElement);
              if(formElement.getAttribute('method').toLowerCase() != 'get'){
                 data = formData.serializeJSON();
              }else{
                data =  formData.serialize();
              }
              API.makeRequest(formElement.getAttribute('method'), bb.restUrl(formElement.getAttribute('action')),  data , function (result) {
                return bb._afterComplete(formElement, result);
              }, function (error) {
                FOSSBilling.message(`\${error.message} (\${error.code})`, 'error');
              });

              API.makeRequest(formElement.getAttribute('method'), bb.restUrl('admin/servicehosting/server_test_connection'),  { id: ";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 173), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" }, function (result) {
                  FOSSBilling.message(`";
        // line 174
        echo twig_escape_filter($this->env, __trans("Server connected"), "html", null, true);
        echo "`, 'message');
                }, function (error) {
                  FOSSBilling.message(`\${error.message} (\${error.code})`, 'error');
                });
            return false;
        });
    });

    function handleManagerChange (select) {
        var pairs = ";
        // line 183
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_manager_get_pairs", [], "any", false, false, false, 183));
        echo " // PHP array returned by the server manager converted to a JavaScript object
        var defaults = {
            form: {
                credentials: {
                    fields: [
                        {
                            name: 'username',
                            label: 'Username',
                            type: 'text',
                            placeholder: 'Username to connect to the server',
                            required: true
                        },
                        {
                            name: 'password',
                            label: 'Password',
                            type: 'password',
                            placeholder: 'Password to connect to the server',
                            required: true
                        }
                    ],
                },
            },
        } // Default form fields. If server manager does not provide any, use these.

        var values = ";
        // line 207
        echo json_encode(($context["server"] ?? null));
        echo "; // Server data returned by the server manager converted to a JavaScript object

        var credentials = document.getElementById('credentials'); // HTML element where the form fields will be inserted.
        var manager = select.value; // Selected server manager code.

        credentials.innerHTML = ''; // Clear the form fields.

        if (pairs[manager].form && pairs[manager].form.credentials && pairs[manager].form.credentials.fields) {
            var data = pairs[manager].form.credentials.fields;
        } else {
            var data = defaults.form.credentials.fields;
        }

        for (var i = 0; i < data.length; i++) {
            // Create a new form field and append it to the credentials element.
            var field = data[i];
            var div = document.createElement('div');
            div.className = 'mb-3 row';

            var label = document.createElement('label');
            label.className = 'form-label col-3 col-form-label';
            label.innerHTML = field.label + ':';
            div.appendChild(label);

            var input = document.createElement('input');
            input.className = 'form-control';
            input.type = field.type;
            input.name = field.name;
            input.value = values[field.name];
            input.placeholder = field.placeholder;
            input.required = field.required;

            var col = document.createElement('div');
            col.className = 'col';
            col.appendChild(input);
            div.appendChild(col);

            credentials.appendChild(div);
        }
    }

    window.onload = function () {
        handleManagerChange(document.querySelector('select[name=\"manager\"]'));
    };
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicehosting_server.html.twig";
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
        return array (  471 => 207,  444 => 183,  432 => 174,  426 => 173,  407 => 156,  403 => 155,  394 => 149,  390 => 148,  383 => 144,  378 => 142,  371 => 138,  366 => 136,  359 => 132,  354 => 130,  347 => 126,  342 => 124,  337 => 122,  328 => 116,  322 => 115,  317 => 113,  312 => 111,  307 => 109,  299 => 104,  293 => 103,  287 => 100,  281 => 99,  275 => 96,  266 => 92,  261 => 90,  252 => 86,  247 => 84,  238 => 77,  223 => 75,  219 => 74,  213 => 71,  208 => 69,  199 => 63,  193 => 62,  187 => 59,  181 => 58,  175 => 55,  160 => 51,  155 => 49,  146 => 45,  141 => 43,  134 => 39,  129 => 37,  120 => 33,  115 => 31,  110 => 29,  104 => 28,  99 => 26,  95 => 24,  91 => 23,  84 => 19,  77 => 17,  67 => 10,  63 => 8,  59 => 7,  52 => 3,  47 => 1,  45 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_server.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Servicehosting/html_admin/mod_servicehosting_server.html.twig");
    }
}
