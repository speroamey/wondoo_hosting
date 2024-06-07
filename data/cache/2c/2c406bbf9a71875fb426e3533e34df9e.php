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

/* __string_template__afbc7a1c2230669eb1d164b13a7e79c0 */
class __TwigTemplate_2160049da199bb153dbb402f1f1ce1df extends Template
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
        echo "
<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<style type=\"text/css\">
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tcolor: #333333;
\t\t}

\t\th1 {
\t\t\tfont-size: 24px;
\t\t\tfont-weight: bold;
\t\t\tmargin: 0 0 20px;
\t\t}

        h2 {
\t\t\tfont-size: 20px;
\t\t\tfont-weight: bold;
\t\t\tmargin: 0 0 20px;
\t\t}

\t\tp {
\t\t\tmargin: 0 0 10px;
\t\t}

\t\tstrong {
\t\t\tfont-weight: bold;
\t\t}

\t\t.signature {
\t\t\tfont-style: italic;
\t\t\tcolor: #999999;
\t\t\tmargin-top: 20px;
\t\t\tborder-top: 1px solid #cccccc;
\t\t\tpadding-top: 10px;
\t\t}
\t</style>
</head>
<body>
\t<h1>Order activated</h1>
\t<p>Hello ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 44), "html", null, true);
        echo ",</p>
\t<p>Thank you for ordering with us! Your hosting account has now been set up. This email contains all the information you will need in order to begin using your service.</p>
    <p>Please keep in mind that if you ordered a domain, it may not be visible online instantly due to the propagation process which can take up to 48 hours. </p>

    <h2>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 48), "html", null, true);
        echo "</h2>

    <ul>
        <li><strong>Activated:</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 51)), "html", null, true);
        echo "</li>
        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 52)) {
            echo "<li><strong>Expires:</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 52)), "html", null, true);
            echo "</li>";
        }
        // line 53
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 53)) {
            echo "<li><strong>Billing period:</strong> ";
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 53));
            echo " every ";
            echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 53));
            echo "</li>";
        }
        // line 54
        echo "    </ul>

    <p>Account information:<p>
    <ul>
        <li><strong>Hosting package:</strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "hosting_plan", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "</li>
        <li><strong>Domain:</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 59), "html", null, true);
        echo "</li>
        <li><strong>IP address:</strong> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 60), "ip", [], "any", false, false, false, 60), "html", null, true);
        echo "</li>
    </ul>

    <p>Control panel login details:<p>
    <ul>
        <li><strong>Username:</strong> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 65), "html", null, true);
        echo "</li>
        <li><strong>Password:</strong> ";
        // line 66
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</li>
        <li><strong>Control panel URL:</strong> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 67), "cpanel_url", [], "any", false, false, false, 67), "html", null, true);
        echo "</li>
    </ul>

    <p>Server information:<p>
    <ul>
        <li><strong>Server Name:</strong> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "</li>
        <li><strong>Server IP:</strong> ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 73), "ip", [], "any", false, false, false, 73), "html", null, true);
        echo "</li>
        <li><strong>Control panel URL:</strong> ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 74), "cpanel_url", [], "any", false, false, false, 74), "html", null, true);
        echo "</li>
        <li><strong>Nameserver 1:</strong> ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 75), "ns1", [], "any", false, false, false, 75), "html", null, true);
        echo "</li>
        <li><strong>Nameserver 2:</strong> ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 76), "ns2", [], "any", false, false, false, 76), "html", null, true);
        echo "</li>
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 77), "ns3", [], "any", false, false, false, 77)) {
            echo "<li><strong>Nameserver 4:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 77), "ns3", [], "any", false, false, false, 77), "html", null, true);
            echo "</li>";
        }
        // line 78
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 78), "ns3", [], "any", false, false, false, 78)) {
            echo "<li><strong>Nameserver 4:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 78), "ns4", [], "any", false, false, false, 78), "html", null, true);
            echo "</li>";
        }
        // line 79
        echo "    </ul>

    <p>FTP information:<p>
    <ul>
        <li><strong>Temporary FTP Hostname:</strong> ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 83), "ip", [], "any", false, false, false, 83), "html", null, true);
        echo "  </li>
        <li><strong>Full FTP Hostname:</strong> ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 84), "html", null, true);
        echo "</li>
        <li><strong>FTP Username:</strong> ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "username", [], "any", false, false, false, 85), "html", null, true);
        echo "</li>
        <li><strong>FTP Password:</strong> ";
        // line 86
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</li>
    </ul>

    <p>You may <a href=\"";
        // line 89
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 89)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("servicedownloadable/get-file");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "\" target=\"_blank\">download your order now.</a>

\t<p class=\"signature\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 91), "signature", [], "any", false, false, false, 91), "html", null, true);
        echo "</p>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__afbc7a1c2230669eb1d164b13a7e79c0";
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
        return array (  220 => 91,  211 => 89,  205 => 86,  201 => 85,  197 => 84,  193 => 83,  187 => 79,  180 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  146 => 67,  142 => 66,  138 => 65,  130 => 60,  126 => 59,  122 => 58,  116 => 54,  107 => 53,  101 => 52,  97 => 51,  91 => 48,  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__afbc7a1c2230669eb1d164b13a7e79c0", "");
    }
}
