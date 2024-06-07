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

/* mod_index_dashboard.html.twig */
class __TwigTemplate_4347f61ad47cff1bf4e1866f261c285a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
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
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_index_dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_cas_messages", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 9
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 9)) ? ("alert-dismissible") : (""));
            echo "\" role=\"alert\">
        <h3 class=\"mb-1\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
        <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "message", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        ";
            // line 12
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 12)) > 0)) {
                // line 13
                echo "            <div class=\"btn-list\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 15
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "link", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"btn ";
                    ((twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, ("btn-" . twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)), "html", null, true))) : (print ("")));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 15), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </div>
        ";
            }
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 19)) {
                // line 20
                echo "            <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
        ";
            }
            // line 22
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "danger"]], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 25
            echo "    <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 26
            echo twig_escape_filter($this->env, __trans("Danger!"), "html", null, true);
            echo "</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                echo " ";
            }
            // line 27
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "warning"]], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            echo "    <div class=\"alert alert-warning alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 32
            echo twig_escape_filter($this->env, __trans("Warning"), "html", null, true);
            echo ":</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
            }
            // line 33
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "info"]], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 37
            echo "    <div class=\"alert alert-primary alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 38
            echo twig_escape_filter($this->env, __trans("Information"), "html", null, true);
            echo ":</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                echo " ";
            }
            // line 39
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
<div class=\"row row-deck row-cards\">
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 44)) {
            // line 45
            echo "        ";
            $context["stats"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary", [], "any", false, false, false, 45);
            // line 46
            echo "        ";
            $context["income"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary_income", [], "any", false, false, false, 46);
            // line 47
            echo "        ";
            $context["client_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_statuses", [], "any", false, false, false, 47);
            // line 48
            echo "        ";
            $context["order_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_statuses", [], "any", false, false, false, 48);
            // line 49
            echo "        ";
            $context["invoice_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_statuses", [], "any", false, false, false, 49);
            // line 50
            echo "        ";
            $context["support_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [], "any", false, false, false, 50);
            // line 51
            echo "
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 53
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 55) > 0)) {
                // line 56
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                    ";
            }
            // line 58
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#contacts\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("clients"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 68), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 75
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 77) > 0)) {
                // line 78
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 78), "html", null, true);
                echo "</span>
                    ";
            }
            // line 80
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-green text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#orders\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 89), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("orders"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 90), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 97
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 99) > 0)) {
                // line 100
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 100), "html", null, true);
                echo "</span>
                    ";
            }
            // line 102
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#currency-dollar\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 111), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("invoices"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 112), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("unpaid"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 119
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 121) > 0)) {
                // line 122
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 122), "html", null, true);
                echo "</span>
                    ";
            }
            // line 124
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-warning text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#support\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 133), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("tickets"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 134), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("waiting for staff reply"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"col-12\">
            <div class=\"card overflow-x-auto\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 144
            echo twig_escape_filter($this->env, __trans("Statistics"), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th></th>
                            <th class=\"text-center\">";
            // line 151
            echo twig_escape_filter($this->env, __trans("Today"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 152
            echo twig_escape_filter($this->env, __trans("Yesterday"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 153
            echo twig_escape_filter($this->env, __trans("This month so far"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 154
            echo twig_escape_filter($this->env, __trans("Last month"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 155
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
            // line 160
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 162
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "today", [], "any", false, false, false, 162)], 162, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 165
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "yesterday", [], "any", false, false, false, 165)], 165, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 168
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "this_month", [], "any", false, false, false, 168)], 168, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 171
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "last_month", [], "any", false, false, false, 171)], 171, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 174
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "total", [], "any", false, false, false, 174)], 174, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 178
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 180
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_today", [], "any", false, false, false, 180), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 183
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_yesterday", [], "any", false, false, false, 183), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 186
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_this_month", [], "any", false, false, false, 186), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 189
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_last_month", [], "any", false, false, false, 189), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 192
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 192), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 196
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 198
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_today", [], "any", false, false, false, 198), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 201
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_yesterday", [], "any", false, false, false, 201), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 204
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_this_month", [], "any", false, false, false, 204), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 207
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_last_month", [], "any", false, false, false, 207), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 210
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 210), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 214
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 216
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_today", [], "any", false, false, false, 216), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 219
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_yesterday", [], "any", false, false, false, 219), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 222
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_this_month", [], "any", false, false, false, 222), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 225
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_last_month", [], "any", false, false, false, 225), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 228
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 228), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 232
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 234
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_today", [], "any", false, false, false, 234), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 237
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_yesterday", [], "any", false, false, false, 237), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 240
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_this_month", [], "any", false, false, false, 240), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 243
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_last_month", [], "any", false, false, false, 243), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 246
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 246), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 255
        echo "
    ";
        // line 256
        $context["invoicesUnpaid"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 256);
        // line 257
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 257)) > 0)) {
            // line 258
            echo "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 261
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</h3>
                <div class=\"card-actions\">
                    <a href=\"";
            // line 263
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice");
            echo "\" class=\"btn-action\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#dots-vertical\" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 274));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 275
                echo "                        <tr>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 277
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 277), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "serie_nr", [], "any", false, false, false, 277), "html", null, true);
                echo "</a>
                            </td>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 280
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280), "html", null, true);
                echo "\">
                                    <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 281), "email", [], "any", false, false, false, 281)), "html", null, true);
                echo "&size=24\"></span>
                                </a>
                            </td>
                            <td>
                                <a href=\"";
                // line 285
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 285), "id", [], "any", false, false, false, 285), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 285), "first_name", [], "any", false, false, false, 285), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 285), "last_name", [], "any", false, false, false, 285), "html", null, true);
                echo "</a>
                            </td>
                            <td class=\"text-center\">";
                // line 287
                echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 287), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 287)], 287, $context, $this->getSourceContext());
                echo "</td>
                            <td class=\"text-center\">";
                // line 288
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 288)), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 290
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 290) == "paid")) {
                    // line 291
                    echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
                }
                // line 293
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 293) == "unpaid")) {
                    // line 294
                    echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
                }
                // line 296
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 296) == "refunded")) {
                    // line 297
                    echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
                }
                // line 299
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 299) == "canceled")) {
                    // line 300
                    echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
                }
                // line 302
                echo "                                ";
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 302)], 302, $context, $this->getSourceContext());
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 312
        echo "
    ";
        // line 313
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [["per_page" => "5", "status" => "active"]], "method", false, false, false, 313);
        // line 314
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 314)) > 0)) {
            // line 315
            echo "        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 318
            echo twig_escape_filter($this->env, __trans("Latest orders"), "html", null, true);
            echo "</h3>
                    <span class=\"ms-2 badge bg-success\">
                        <a href=\"";
            // line 320
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-white\">+";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "total", [], "any", false, false, false, 320), "html", null, true);
            echo "</a>
                    </span>
                    <div class=\"card-actions\">
                        <a href=\"";
            // line 323
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order");
            echo "\" class=\"btn-action\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#dots-vertical\" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <tbody>
                        ";
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 334));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 335
                echo "                            <tr title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["order"], "created_at", [], "any", false, false, false, 335)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "\">
                                <td>
                                    <a href=\"";
                // line 337
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 337), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 337), "first_name", [], "any", false, false, false, 337), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 337), "last_name", [], "any", false, false, false, 337), "html", null, true);
                echo "</a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 340
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 340), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 340), 35), "html", null, true);
                echo "</a>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 344
                echo "                        <tr>
                            <td colspan=\"2\" align=\"center\">";
                // line 345
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        ";
            // line 385
            echo "    ";
        }
        // line 386
        echo "
    ";
        // line 387
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 387)) {
            // line 388
            echo "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
            // line 391
            echo twig_escape_filter($this->env, __trans("Define date interval for graphs"), "html", null, true);
            echo "</h5>
                <form method=\"get\" action=\"\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 393
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"_url\" value=\"";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 394), "html", null, true);
            echo "\">
                    <div class=\"input-group\">
                        <div class=\"input-icon\">
                            <input class=\"form-control datepicker\"
                                   style=\"width: 16rem\"
                                   id=\"graph_interval\"
                                   value=\"";
            // line 400
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 400)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 400), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 400)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 400), "Y-m-d"), "html", null, true);
            }
            echo "\"
                                   data-name-from=\"date_from\"
                                   data-name-to=\"date_to\"
                            >
                            <span class=\"input-icon-addon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z\"></path>
                                    <path d=\"M16 3l0 4\"></path>
                                    <path d=\"M8 3l0 4\"></path>
                                    <path d=\"M4 11l16 0\"></path>
                                    <path d=\"M11 15l1 0\"></path>
                                    <path d=\"M12 15l0 3\"></path>
                                </svg>
                            </span>
                        </div>
                        <input type=\"submit\" value=\"";
            // line 416
            echo twig_escape_filter($this->env, __trans("Update graphs"), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 426
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "</h3>
            </div>
            <div id=\"chart-income\" style=\"width: 100%; height: 200px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 435
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-orders\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 444
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-invoices\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 453
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-clients\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 462
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-tickets\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>
    ";
        }
        // line 468
        echo "
    ";
        // line 469
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "activity"]], "method", false, false, false, 469)) {
            // line 470
            echo "    <div class=\"col-12 d-block\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 473
            echo twig_escape_filter($this->env, __trans("Recent clients activity"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-staff\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 476
            echo twig_escape_filter($this->env, __trans("Recent staff activity"), "html", null, true);
            echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\" id=\"tabs\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 485
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_clients" => 1]], "method", false, false, false, 485);
            // line 486
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 486));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 487
                echo "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 489
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 489), "id", [], "any", false, false, false, 489), "html", null, true);
                echo "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 490
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 490), "email", [], "any", false, false, false, 490)), "html", null, true);
                echo "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 494
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 494), "id", [], "any", false, false, false, 494), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 494), "name", [], "any", false, false, false, 494), 40), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 496
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 496), 50), "html", null, true);
                echo "</td>
                                <td>";
                // line 497
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 497)), "html", null, true);
                echo "</td>
                                <td>";
                // line 498
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 498)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 501
                echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 502
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 505
            echo "                        </tbody>
                    </table>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-staff\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 512
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_staff" => 1]], "method", false, false, false, 512);
            // line 513
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 513));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 514
                echo "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 516
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 516), "id", [], "any", false, false, false, 516), "html", null, true);
                echo "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 517
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 517), "email", [], "any", false, false, false, 517)), "html", null, true);
                echo "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 521
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 521), "id", [], "any", false, false, false, 521), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 521), "name", [], "any", false, false, false, 521), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 523
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 523), 50), "html", null, true);
                echo "</td>
                                <td>";
                // line 524
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 524)), "html", null, true);
                echo "</td>
                                <td>";
                // line 525
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 525)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 528
                echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 529
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 539
        echo "</div>
";
    }

    // line 542
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 543
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 543)) {
            // line 544
            echo "        <script>
            \$(function() {
                setPlotDataData('chart-income', ";
            // line 546
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_income", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 546), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 546)]], "method", false, false, false, 546)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-orders', ";
            // line 547
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_orders", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 547), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 547)]], "method", false, false, false, 547)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-invoices', ";
            // line 548
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_invoices", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 548), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 548)]], "method", false, false, false, 548)), "html", null, true);
            echo ",\"";
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-clients', ";
            // line 549
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_clients", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 549), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 549)]], "method", false, false, false, 549)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-tickets', ";
            // line 550
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_tickets", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 550), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 550)]], "method", false, false, false, 550)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "\");
            });

            function setPlotDataData(elementId, data, displayName=\"Name Placeholder\") {
                new ApexCharts(document.getElementById(elementId), {
                    chart: {
                        type: 'area',
                        fontFamily: 'inherit',
                        height: 140,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: \"round\",
                        curve: \"smooth\",
                    },
                    series: [{
                        name: displayName,
                        data: data
                    }],
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4
                        },
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            show: false
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            show: false
                        },
                    },
                    labels: {
                        show: false,
                    },
                    colors:  (localStorage.getItem('theme') === 'dark') ? [\"#91bbed\"] : [\"#206bc4\"] ,
                    theme : {
                        mode: (localStorage.getItem('theme') === 'dark') ? 'dark' : 'light',
                        monochrome: {
                            enabled: false,
                        }
                    }
                }).render();
            }
        </script>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_index_dashboard.html.twig";
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
        return array (  1247 => 550,  1241 => 549,  1235 => 548,  1229 => 547,  1223 => 546,  1219 => 544,  1216 => 543,  1212 => 542,  1207 => 539,  1198 => 532,  1189 => 529,  1186 => 528,  1176 => 525,  1172 => 524,  1168 => 523,  1159 => 521,  1152 => 517,  1146 => 516,  1142 => 514,  1136 => 513,  1134 => 512,  1125 => 505,  1116 => 502,  1113 => 501,  1103 => 498,  1099 => 497,  1095 => 496,  1086 => 494,  1079 => 490,  1073 => 489,  1069 => 487,  1063 => 486,  1061 => 485,  1049 => 476,  1043 => 473,  1038 => 470,  1036 => 469,  1033 => 468,  1024 => 462,  1012 => 453,  1000 => 444,  988 => 435,  976 => 426,  963 => 416,  938 => 400,  929 => 394,  925 => 393,  920 => 391,  915 => 388,  913 => 387,  910 => 386,  907 => 385,  899 => 348,  890 => 345,  887 => 344,  874 => 340,  862 => 337,  854 => 335,  849 => 334,  835 => 323,  827 => 320,  822 => 318,  817 => 315,  814 => 314,  812 => 313,  809 => 312,  801 => 306,  790 => 302,  786 => 300,  783 => 299,  779 => 297,  776 => 296,  772 => 294,  769 => 293,  765 => 291,  763 => 290,  758 => 288,  754 => 287,  743 => 285,  736 => 281,  730 => 280,  720 => 277,  716 => 275,  712 => 274,  698 => 263,  693 => 261,  688 => 258,  685 => 257,  683 => 256,  680 => 255,  666 => 246,  658 => 243,  650 => 240,  642 => 237,  634 => 234,  629 => 232,  620 => 228,  612 => 225,  604 => 222,  596 => 219,  588 => 216,  583 => 214,  574 => 210,  566 => 207,  558 => 204,  550 => 201,  542 => 198,  537 => 196,  528 => 192,  520 => 189,  512 => 186,  504 => 183,  496 => 180,  491 => 178,  482 => 174,  474 => 171,  466 => 168,  458 => 165,  450 => 162,  445 => 160,  437 => 155,  433 => 154,  429 => 153,  425 => 152,  421 => 151,  411 => 144,  396 => 134,  390 => 133,  379 => 124,  373 => 122,  371 => 121,  366 => 119,  354 => 112,  348 => 111,  337 => 102,  331 => 100,  329 => 99,  324 => 97,  312 => 90,  306 => 89,  295 => 80,  289 => 78,  287 => 77,  282 => 75,  270 => 68,  264 => 67,  253 => 58,  247 => 56,  245 => 55,  240 => 53,  236 => 51,  233 => 50,  230 => 49,  227 => 48,  224 => 47,  221 => 46,  218 => 45,  216 => 44,  212 => 42,  204 => 39,  190 => 38,  187 => 37,  182 => 36,  174 => 33,  160 => 32,  157 => 31,  152 => 30,  144 => 27,  130 => 26,  127 => 25,  122 => 24,  115 => 22,  111 => 20,  108 => 19,  104 => 17,  91 => 15,  87 => 14,  84 => 13,  82 => 12,  78 => 11,  74 => 10,  67 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/admin_default/html/mod_index_dashboard.html.twig");
    }
}
