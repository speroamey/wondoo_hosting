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

/* default-pdf.twig */
class __TwigTemplate_474d9081d8b512e7cfc0e4a58dc3e1f6 extends Template
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
        if ((($context["buyer_lines"] ?? null) >= ($context["seller_lines"] ?? null))) {
            // line 2
            echo "\t";
            $context["top"] = (275 + (25 * ($context["buyer_lines"] ?? null)));
        } else {
            // line 4
            echo "\t";
            $context["top"] = (275 + (25 * ($context["seller_lines"] ?? null)));
        }
        // line 6
        echo "
";
        // line 7
        $context["address_lines"] = [];
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_1", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_2", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_3", [], "any", false, false, false, 8)]);
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 9
            echo "\t";
            if ((twig_length_filter($this->env, $context["line"]) > 0)) {
                // line 10
                echo "\t\t";
                $context["address_lines"] = twig_array_merge(($context["address_lines"] ?? null), [$context["line"]]);
                // line 11
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $context["address"] = twig_join_filter(($context["address_lines"] ?? null), ",");
        // line 14
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
\t\t<title>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 19), "html", null, true);
        echo "</title>
\t\t<style>
\t\t";
        // line 21
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "
\t\t</style>
\t</head>
\t<body>
\t\t";
        // line 25
        if ( !twig_test_empty(($context["logo_source"] ?? null))) {
            // line 26
            echo "\t\t\t<img src='";
            echo twig_escape_filter($this->env, ($context["logo_source"] ?? null), "html", null, true);
            echo "' height='50' class='CompanyLogo'>
\t\t";
        }
        // line 28
        echo "\t\t<hr class='Rounded'>
\t\t<div class='InvoiceInfo'>
\t\t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, __trans("Invoice number"), "html", null, true);
        echo ":
\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 32
        echo twig_escape_filter($this->env, __trans("Invoice date"), "html", null, true);
        echo ":
\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 33)), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, __trans("Due date"), "html", null, true);
        echo ":
\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 35)), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Invoice status"), "html", null, true);
        echo ":
\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 37)), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<h3 class='CompanyInfo'>";
        // line 40
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo "</h3>
\t\t<div class='CompanyInfo'>
\t\t\t<p>
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seller"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 44
            echo "\t\t\t\t\t";
            if (($context["key"] == "Name")) {
                // line 45
                echo "\t\t\t\t\t\t<b>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t";
            if (($context["key"] == "Phone")) {
                // line 48
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
                echo "
\t\t\t\t\t\t\t:
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t";
            // line 52
            if (($context["key"] == "Name")) {
                // line 53
                echo "\t\t\t\t\t\t</b>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</p>
\t\t</div>

\t\t<h3 class='ClientInfo'>";
        // line 59
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</h3>
\t\t<div class='ClientInfo'>
\t\t\t<p>
\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buyer"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 63
            echo "\t\t\t\t\t";
            if (($context["key"] == "Company")) {
                // line 64
                echo "\t\t\t\t\t\t<b>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t";
            if (($context["key"] == "Phone ")) {
                // line 67
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
                echo "
\t\t\t\t\t\t\t:
\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
\t\t\t\t\t\t";
            // line 71
            if (($context["key"] == "Company")) {
                // line 72
                echo "\t\t\t\t\t\t</b>
\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</p>
\t\t</div>

\t\t<div class='Breakdown' style='top: ";
        // line 78
        echo twig_escape_filter($this->env, ($context["top"] ?? null), "html", null, true);
        echo "px'>
\t\t\t<table style='width:100%'>
\t\t\t\t<tr>
\t\t\t\t\t<th style='text-align: center; width:25px;'>#</th>
\t\t\t\t\t<th style='text-align: left'>";
        // line 82
        echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 83
        echo twig_escape_filter($this->env, __trans("Quantity & Price"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 84
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 86
        $context["nr"] = 0;
        // line 87
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 88
            echo "\t\t\t\t\t";
            $context["nr"] = (($context["nr"] ?? null) + 1);
            // line 89
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style='text-align: center; width:25px;'>";
            // line 90
            echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style='text-align: left'>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style='text-align: right'>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 92), "html", null, true);
            echo "x
\t\t\t\t\t\t\t";
            // line 93
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 93), ($context["currency_code"] ?? null));
            echo "</td>
\t\t\t\t\t\t<td style='text-align: right'>";
            // line 94
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 94), ($context["currency_code"] ?? null));
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan='4'>_________________________________________________________________________________________</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 100) > 0)) {
            // line 101
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style='text-align: right' colspan='3'>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 102), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 103), "html", null, true);
            echo "% Tax:</th>
\t\t\t\t\t\t<th style='text-align: right'>";
            // line 104
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 104), ($context["currency_code"] ?? null));
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t";
        if ((((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 107))) : ("")) && (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 107) > 0))) {
            // line 108
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style='text-align: right' colspan='3'>";
            // line 109
            echo twig_escape_filter($this->env, __trans("Discount"), "html", null, true);
            echo ":</th>
\t\t\t\t\t\t<th style='text-align: right'>";
            // line 110
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 110), ($context["currency_code"] ?? null));
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th style='text-align: right' colspan='3'>";
        // line 114
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo ":</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 115
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 115), ($context["currency_code"] ?? null));
        echo "</th>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<span class=\"muted-text\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "signature", [], "any", false, false, false, 118), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class='InvoiceFooter'>
\t\t\t";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "display_bank_info", [], "any", false, false, false, 121) == 1)) {
            // line 122
            echo "\t\t\t\t<b>";
            echo twig_escape_filter($this->env, __trans("Payment details"), "html", null, true);
            echo ":</b><br>
\t\t\t\t<b>";
            // line 123
            echo twig_escape_filter($this->env, __trans("Account Owner"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_name", [], "any", false, false, false, 124), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t\t<b>";
            // line 126
            echo twig_escape_filter($this->env, __trans("Bank"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "bank_name", [], "any", false, false, false, 127), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t\t<b>";
            // line 129
            echo twig_escape_filter($this->env, __trans("BIC / SWIFT Code"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "bic", [], "any", false, false, false, 130), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t\t<b>";
            // line 132
            echo twig_escape_filter($this->env, __trans("Account number"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "account_number", [], "any", false, false, false, 133), "html", null, true);
            echo "<br><br>
\t\t\t";
        }
        // line 135
        echo "
\t\t\t<b>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_name", [], "any", false, false, false, 136), "html", null, true);
        echo "</b>
\t\t\t";
        // line 137
        if (($context["address"] ?? null)) {
            // line 138
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t";
        }
        // line 141
        echo "\t\t\t<b>";
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</b>
\t\t\t";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "email", [], "any", false, false, false, 142), "html", null, true);
        echo "
\t\t\t|
\t\t\t<b>
\t\t\t\t";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "phone", [], "any", false, false, false, 145)) {
            // line 146
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "phone", [], "any", false, false, false, 147), "html", null, true);
            echo "<br>
\t\t\t";
        }
        // line 149
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_vat", [], "any", false, false, false, 149)) {
            // line 150
            echo "\t\t\t\t<b>";
            echo twig_escape_filter($this->env, __trans("VAT ID"), "html", null, true);
            echo ":</b>
\t\t\t\t";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_vat", [], "any", false, false, false, 151), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t";
        }
        // line 154
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_number", [], "any", false, false, false, 154)) {
            // line 155
            echo "\t\t\t\t<b>";
            echo twig_escape_filter($this->env, __trans("Company Registration #:"), "html", null, true);
            echo "</b>
\t\t\t\t";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_number", [], "any", false, false, false, 156), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t";
        }
        // line 159
        echo "\t\t\t<b>";
        echo twig_escape_filter($this->env, __trans("Website"), "html", null, true);
        echo ":
\t\t\t</b>
\t\t\t";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "www", [], "any", false, false, false, 161), "html", null, true);
        echo "
\t\t</div>
\t</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default-pdf.twig";
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
        return array (  467 => 161,  461 => 159,  455 => 156,  450 => 155,  447 => 154,  441 => 151,  436 => 150,  433 => 149,  428 => 147,  423 => 146,  421 => 145,  415 => 142,  410 => 141,  403 => 138,  401 => 137,  397 => 136,  394 => 135,  389 => 133,  385 => 132,  380 => 130,  376 => 129,  371 => 127,  367 => 126,  362 => 124,  358 => 123,  353 => 122,  351 => 121,  345 => 118,  339 => 115,  335 => 114,  332 => 113,  326 => 110,  322 => 109,  319 => 108,  316 => 107,  310 => 104,  306 => 103,  302 => 102,  299 => 101,  297 => 100,  292 => 97,  283 => 94,  279 => 93,  275 => 92,  271 => 91,  267 => 90,  264 => 89,  261 => 88,  256 => 87,  254 => 86,  249 => 84,  245 => 83,  241 => 82,  234 => 78,  229 => 75,  223 => 74,  219 => 72,  217 => 71,  212 => 70,  205 => 67,  202 => 66,  198 => 64,  195 => 63,  191 => 62,  185 => 59,  180 => 56,  174 => 55,  170 => 53,  168 => 52,  163 => 51,  156 => 48,  153 => 47,  149 => 45,  146 => 44,  142 => 43,  136 => 40,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 28,  92 => 26,  90 => 25,  83 => 21,  78 => 19,  71 => 14,  69 => 13,  62 => 11,  59 => 10,  56 => 9,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default-pdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/modules/Invoice/pdf_template/default-pdf.twig");
    }
}
