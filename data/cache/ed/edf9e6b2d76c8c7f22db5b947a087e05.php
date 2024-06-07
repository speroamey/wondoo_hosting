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
class __TwigTemplate_c4258649437f20eccf39fbd6e12ce197 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_index_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 23)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Client Area"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\tdashboard
";
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_dashboard_breadcrumb", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t\t<div class=\"mb-1\">
\t\t\t<ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"";
            // line 14
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t<a href=\"#\">";
            // line 17
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t</ol>
\t\t</div>
\t";
        }
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 25)) {
            // line 26
            echo "\t\t<div
\t\t\tclass=\"row row-deck mb-3 bg-light-gre py-lg-5\">
\t\t\t";
            // line 41
            echo "\t\t\t<div class=\"pb-5\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-lg-8 mb-5 mb-sm-0 align-self-center text-center text-lg-left pb-5\">
\t\t\t\t\t\t<h1>Where Ideas Turn Into Websites.</h1>

\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span class=\"text-light-blue font-weight-bold\">Free web hosting</span>
\t\t\t\t\t\t\t+ a free subdomain, PHP, MySQL, App Installer, Email Sending &amp; No Ads
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/free-web-hosting-registration/\" class=\"aw-btn aw-btn-primary\">Get Started</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-block d-sm-none d-lg-block col-10 col-lg-4 text-center mx-auto\">
\t\t\t\t\t\t<img decoding=\"async\" class=\"img-fluid img-fluid\" src=\"data:image/png;base64,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\" alt=\"hero image icon\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"pt-5 pb-3\" style=\"background-color: #ffffff;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 text-center pt-5\">
\t\t\t\t\t\t<div class=\"cptxt\">Create Your Website With Ease</div>
\t\t\t\t\t\t<h2 class=\"main-heading\">Choose the Best Web Hosting Plan.</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"container pb-5 mb-5\" style=\"background-color: #ffffff;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 aw-box-plan col-lg-4 mt-lg-4 px-4 px-lg-0\">
\t\t\t\t\t\t<div class=\"widget rchr_plan_widget shared_plan_widget\">
\t\t\t\t\t\t\t<div class=\"singlebox-product-box\">
\t\t\t\t\t\t\t\t<div class=\"singlebox-inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-product-label\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"singlebox-product-name\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Basic</strong>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"singlebox-product-features\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">Great for Your First Site</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>2 websites</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Disk Space</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Monthly Traffic</li>
\t\t\t\t\t\t\t\t\t\t<li>Free SSL &amp; HTTPS</li>
\t\t\t\t\t\t\t\t\t\t<li>24 х 7 Support</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t1-hour response time
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/signup/?id=1603&amp;type=shared\" class=\"aw-btn aw-btn-primary aw-box-btn\">Order</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/web-hosting/shared-hosting/shared-hosting-features-table/\" class=\"aw-all-features\">Check full features</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-pricing-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-price\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_1_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">25</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_1_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">30</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_1_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">25</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_1_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">30</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-period\">/month*</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"singlebox-strikethrough-price-container\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-strikethrough-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_2_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$6.99</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_2_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$8.39</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_2_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>6.69€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_2_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>8.03€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>/month</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-regular-price-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_3_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>96%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_3_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>96%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br/><br/><a href=\"https://www.awardspace.com/signup/?id=1603&amp;type=shared\" class=\"singlebox-order-button\">Order</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 aw-box-plan col-lg-4 mt-lg-4 px-4 px-lg-0 py-4 py-lg-0 aw-middle-plan z-index-100\">
\t\t\t\t\t\t<div class=\"widget rchr_plan_widget shared_plan_widget\">
\t\t\t\t\t\t\t<div class=\"singlebox-product-box\">
\t\t\t\t\t\t\t\t<div class=\"singlebox-inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-product-label\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"singlebox-product-name\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Web Pro Plus</strong>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"singlebox-product-features\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">Great for Small Businesses</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>10 websites</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Disk Space</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Monthly Traffic</li>
\t\t\t\t\t\t\t\t\t\t<li>Free SSL &amp; HTTPS</li>
\t\t\t\t\t\t\t\t\t\t<li>24 х 7 Support</li>
\t\t\t\t\t\t\t\t\t\t<li>1-hour response time</li>
\t\t\t\t\t\t\t\t\t\t<li>1 Free Domain for Life</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/signup/?id=2224&amp;type=shared\" class=\"aw-btn aw-btn-primary aw-box-btn\">Order</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/web-hosting/shared-hosting/shared-hosting-features-table/\" class=\"aw-all-features\">Check full features</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-pricing-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-price\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_4_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">7</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">57</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_4_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">9</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">08</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_4_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">7</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">29</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_4_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">8</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">75</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-period\">/month*</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"singlebox-strikethrough-price-container\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-strikethrough-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_5_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$9.65</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_5_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$11.58</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_5_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>9.19€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_5_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>11.03€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>/month</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-regular-price-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_6_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>22%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_6_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>21%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br/><br/><a href=\"https://www.awardspace.com/signup/?id=2224&amp;type=shared\" class=\"singlebox-order-button\">Order</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 aw-box-plan col-lg-4 mt-lg-4 px-4 px-lg-0 z-index-99\">
\t\t\t\t\t\t<div class=\"widget rchr_plan_widget shared_plan_widget\">
\t\t\t\t\t\t\t<div class=\"singlebox-product-box\">
\t\t\t\t\t\t\t\t<div class=\"singlebox-inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-product-label\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"singlebox-product-name\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Max Pack Plus</strong>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"singlebox-product-features\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">Great for Grown Businesses</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited websites</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Disk Space</li>
\t\t\t\t\t\t\t\t\t\t<li>Unlimited Monthly Traffic</li>
\t\t\t\t\t\t\t\t\t\t<li>Free SSL &amp; HTTPS</li>
\t\t\t\t\t\t\t\t\t\t<li>24 х 7 Support</li>
\t\t\t\t\t\t\t\t\t\t<li>1-hour response time</li>
\t\t\t\t\t\t\t\t\t\t<li>2 Free Domains for Life</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/signup/?id=3337&amp;type=shared\" class=\"aw-btn aw-btn-primary aw-box-btn\">Order</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/web-hosting/shared-hosting/shared-hosting-features-table/\" class=\"aw-all-features\">Check full features</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"singlebox-pricing-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-price\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_7_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">9</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">83</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_7_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">11</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">80</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_7_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">9</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">49</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_7_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_whole_price\">11</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_dot\">.</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_remainder_price\">39</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FP_currency\">€</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-period\">/month*</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"singlebox-strikethrough-price-container\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-strikethrough-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_8_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$13.99</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_8_vat_USD\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$16.79</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_8_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>13.29€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_8_vat_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>15.95€</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>/month</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"singlebox-regular-price-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_9_USD\" style=\"visibility:visible; display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>30%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"price_9_EUR\" style=\"visibility:hidden; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>29%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br/><br/><a href=\"https://www.awardspace.com/signup/?id=3337&amp;type=shared\" class=\"singlebox-order-button\">Order</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"aw-pattern py-170\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-6 order-2 order-lg-1 text-justify\">
\t\t\t\t\t\t\tWe’ve tried to figure out what is it that stops people from creating their own websites. Was it a lack of ideas? Or maybe “creating a website” sounds like a lot of work? Probably it was the fact that a lot of people still believe that they need coding skills to do it. Or was it the price?
\t\t\t\t\t\t\t<p>AwardSpace decided to look for the answer at the only place where such could be valid, and truthful.</p>
\t\t\t\t\t\t\t<p>We asked you – our customers. The people to whom we owe everything we are.</p>
\t\t\t\t\t\t\t<p>You told us that the biggest obstacle was the lack of knowledge.</p>
\t\t\t\t\t\t\t<p>We heard you.</p>

\t\t\t\t\t\t\t<p>AwardSpace is the place Where Ideas Turn Into Websites.</p>
\t\t\t\t\t\t\t<p>It is time to create yours.</p>
\t\t\t\t\t\t\t<p>Welcome on board!</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-lg-6 order-1 order-lg-2 text-center text-lg-right my-3 mt-150\">
\t\t\t\t\t\t\t<div class=\"cptxt\">Awardspace</div>
\t\t\t\t\t\t\t<h2 class=\"main-heading \">Where Ideas Turn Into Websites.</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row mt-5\">
\t\t\t\t\t\t<!-- (it as my-5 before fix 02/09) pt-5 for these with images-->
\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/signup/\" class=\"aw-btn-v2 aw-btn-secondary\">Join Us!</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
            // line 365
            echo "\t\t\t<div class=\"container pt-4 pb-5\" style=\"background-color:#fff\">
\t\t\t\t<div class=\"row \">
\t\t\t\t\t<div class=\"col-12 text-center py-5\">
\t\t\t\t\t\t<div class=\"cptxt\">With a wide range of services AwardSpace offers</div>
\t\t\t\t\t\t<h2 class=\"main-heading\">Web Hosting Solution for Every Need.</h2>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4\">

\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(min-width: 0px)\" class=\"\" srcset=\"https://www.awardspace.com/wp-content/uploads/2019/03/megaphone.png\">
\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"Free Web Hosting\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/megaphone.png\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">Free Hosting</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>Truly
\t\t\t\t\t\t\t\t\t\t<strong>Free Web Hosting</strong>
\t\t\t\t\t\t\t\t\t\twith PHP &amp; MySQL. Create your first website for free, and tell your story to the world.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>The Free Web Hosting Service is suitable for small blog websites, news media, idea launching.</p>
\t\t\t\t\t\t\t\t\t<p>Approximate monthly visits:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">~5000/month.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/free-hosting/\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4\">

\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"Shared Hosting\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/rocket-150x150.png\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">Shared Hosting</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>Our
\t\t\t\t\t\t\t\t\t\t<strong>Shared Hosting Service</strong>
\t\t\t\t\t\t\t\t\t\tare for the for those of you who want to start big, and grow bigger.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>The Shared Hosting plans are appropriate for bigger blog websites, eCommerce shops, news media, and working businesses.</p>
\t\t\t\t\t\t\t\t\t<p>Approximate monthly visits:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">~15 000 to ~150 000/month.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/web-hosting/shared-hosting/\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4\">

\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(min-width: 0px)\" class=\"\" srcset=\"https://www.awardspace.com/wp-content/uploads/2019/03/hosting.png\">

\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"WordPress Hosting\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/hosting.png\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">WordPress Hosting</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>The
\t\t\t\t\t\t\t\t\t\t<strong>WordPress Web Hosting Service</strong>
\t\t\t\t\t\t\t\t\t\tis the perfect solution for anyone that wants to create a WordPress website.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>WordPress is the arguably the best Content Management System with which you can create nearly any type of website.</p>
\t\t\t\t\t\t\t\t\t<p>Approximate monthly visits:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">~15 000 to ~150 000/month.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/wordpress-hosting/\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4 mt-1 mt-lg-4\">

\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(min-width: 0px)\" class=\"\" srcset=\"https://www.awardspace.com/wp-content/uploads/2019/03/earth.png\">

\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"Free Domain\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/earth.png\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">Free Domain Name</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>Your website’s name, also known as a
\t\t\t\t\t\t\t\t\t\t<strong>domain name</strong>
\t\t\t\t\t\t\t\t\t\tis arguably the single most important element of your online presence.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>Get up to
\t\t\t\t\t\t\t\t\t\t<strong>two free domains.</strong>
\t\t\t\t\t\t\t\t\t\tIncluding, but not limited to a
\t\t\t\t\t\t\t\t\t\t<strong>free .com domain</strong>
\t\t\t\t\t\t\t\t\t\t.net, .org, .us.</p>
\t\t\t\t\t\t\t\t\t<p>Free domains are available with:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Shared and Semi-Dedicated Hosting.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/web-hosting/domains\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4 mt-1 mt-lg-4\">
\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(min-width: 0px)\" class=\"\" srcset=\"https://www.awardspace.com/wp-content/uploads/2019/03/shop.png\">
\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"Semi-Dedicated Hosting\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/shop.png\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">Semi-dedicated Hosting</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>The
\t\t\t\t\t\t\t\t\t\t<strong>Semi-Dedicated Hosting Service</strong>
\t\t\t\t\t\t\t\t\t\tis designed to support big websites. This is the home of the biggest eCommerce shops.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>Semi-Dedicated Plans are ideal for websites with a large amount of pages, and traffic.  Get fast and smooth load of your content.</p>
\t\t\t\t\t\t\t\t\t<p>Approximate monthly visits:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Unlimited.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/web-hosting/semi-dedicated-hosting/\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-lg-4 px-4 pb-4 mt-1 mt-lg-4\">

\t\t\t\t\t\t<div class=\"aw-box\">
\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t\t<source media=\"(min-width: 0px)\" class=\"\" srcset=\"https://www.awardspace.com/wp-content/uploads/2019/03/empire-state-building.png\">
\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"128\" height=\"128\" class=\"\" alt=\"VPS Hosting\" data-aw=\"1\" src=\"https://www.awardspace.com/wp-content/uploads/2019/03/empire-state-building.png\">
\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 pt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"cptxt text-dark-blue\">VPS Cloud Hosting</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 py-4 text-justify\">
\t\t\t\t\t\t\t\t\t<p>The
\t\t\t\t\t\t\t\t\t\t<strong>VPS Cloud Hosting</strong>
\t\t\t\t\t\t\t\t\t\tis crafted for those who appreciate their freedom. It is, of course, for the advanced hosting users.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>Get root server access, and install any software, configure your OS, make updates, maintain your own server.</p>
\t\t\t\t\t\t\t\t\t<p>Approximate monthly traffic:</p>
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">2TB – 8TB.</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 text-center pb-4 \">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.awardspace.com/web-hosting/vps-cloud-hosting/\" class=\"aw-btn aw-btn-primary\" target=\"\">Learn more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
            // line 588
            echo "
\t\t\t<div class=\"aw-why-awardspace container py-5 my-4\">
\t\t\t\t<div class=\"row text-center pb-5\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t<!-- it was - col-12 , changed for domain page \"Why\" section -->
\t\t\t\t\t\t<div class=\"cptxt\">Trusted by More Than 2.5 Million People Worldwide</div>
\t\t\t\t\t\t<h2 class=\"main-heading\">Why AwardSpace?</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row pb-0 pb-lg-4\">
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_hourglass icon-60 text-light-blue aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>99.9% Network Uptime</h4>
\t\t\t\t\t\t\t\t<p>The best in the free website hosting industry. We continuously optimize our free servers for speed and reliability.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_house_alt icon-60 text-light-red aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>Free website builder</h4>
\t\t\t\t\t\t\t\t<p>Every client can use our Website Builder and build the site of their dreams!</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row pb-0 pb-lg-4\">
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_headphones icon-60 text-light-red aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>24/7 customer support</h4>
\t\t\t\t\t\t\t\t<p>Every customer is important to us – even on the free website hosting service. Our customer support specialists are on standby 24/7 if you’re having trouble.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_box-checked icon-60 text-light-blue aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>One-Click CMS Installer</h4>
\t\t\t\t\t\t\t\t<p>With our Zacky Installer, you are going to have your favorite CMS installed in a matter of minutes.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row pb-0 pb-lg-4\">
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_blocked icon-60 text-light-blue aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>100% ad free</h4>
\t\t\t\t\t\t\t\t<p>Absolutely free website hosting without ads or annoying messages! As long as it fits your purpose you’re free to use it.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-3 col-sm-2\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\" class=\"icon_gift_alt icon-60 text-light-red aos-init\" data-aos=\"fade-down\" data-aos-duration=\"1000\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<h4>Free subdomains</h4>
\t\t\t\t\t\t\t\t<p>All customers, even the free hosting subscribers, can register free subdomains.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t<div class=\"col-12 my-4\">
\t\t\t\t\t\t<a href=\"https://www.awardspace.com/signup/\" class=\"aw-btn-v2 aw-btn-primary\">Join Us!</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

      ";
            // line 692
            echo "      <div class=\"container-fluid aw-free-signup bg-lighter-blue\"  style=\"background-color: #fff;\">
            <div class=\"row text-center\">
                <div class=\"col-10 col-sm-12 mx-auto my-4\">
                    <picture>
                                <source media=\"(max-width: 371px)\" class=\"\" srcset=\"";
            // line 696
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                                <source media=\"(max-width: 767px)\" class=\"\" srcset=\"";
            // line 697
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                                <source media=\"(max-width: 991px)\" class=\"\" srcset=\"";
            // line 698
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                                <source media=\"(max-width: 1199px)\" class=\"\" srcset=\"";
            // line 699
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                                <source media=\"(min-width: 1200px)\" class=\"\" srcset=\"";
            // line 700
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                                <img decoding=\"async\" alt=\"awardspace logo\" class=\"img-fluid\" data-aw=\"1\" src=\"";
            // line 701
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/Wondoo-4@4x-100.JPG");
            echo "\">
                            </picture>
                    <div class=\"cptxt\">
                        Where <strong>Ideas</strong> Turn Into <strong>Websites</strong>                    </div>
                </div>
                <div class=\"col-12 my-4\">
                    <a href=\"https://www.awardspace.com/free-web-hosting-registration/\" class=\"aw-btn-v2 aw-btn-secondary\">Free Sign Up!</a>
                </div>
            </div>
        </div>
\t\t</div>
\t";
        }
        // line 713
        echo "\t";
        if (($context["client"] ?? null)) {
            // line 714
            echo "\t\t";
            $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 714);
            // line 715
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "total", [], "any", false, false, false, 715) > 0)) {
                // line 716
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<article class=\"span12 data-block\">
\t\t\t\t\t<div class=\"data-container\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<h2>";
                // line 720
                echo twig_escape_filter($this->env, __trans("Tickets waiting your reply"), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<section id=\"slimScroll1\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 726
                echo twig_escape_filter($this->env, __trans("Id"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 727
                echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 728
                echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 729
                echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 730
                echo twig_escape_filter($this->env, __trans("Last Updated"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 731
                echo twig_escape_filter($this->env, __trans("Actions"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 735
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 735));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 736
                    echo "\t\t\t\t\t\t\t\t\t\t<tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 737
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 737), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 739
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 739), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 739), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 741
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 741), "name", [], "any", false, false, false, 741), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label\">";
                    // line 743
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 743)], 743, $context, $this->getSourceContext());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td title=\"";
                    // line 745
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 745)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 745)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 746
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 748
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 748), "html", null, true);
                    echo "\" class=\"btn btn-small btn-inverse\">";
                    echo twig_escape_filter($this->env, __trans("Reply"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 752
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">";
                    // line 753
                    echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 756
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t";
            }
            // line 763
            echo "\t\t<div class=\"row row-deck row-cards\">
\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t<div class=\"card card-sm\">
\t\t\t\t\t<div class=\"card-status-top bg-green\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<span class=\"bg-green text-white avatar\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M17 17h-11v-14h-2\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M6 5l14 1l-1 7h-13\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-medium\">";
            // line 781
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1]], "method", false, false, false, 781), "total", [], "any", false, false, false, 781), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 782
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 783
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1, "status" => "active"]], "method", false, false, false, 783), "total", [], "any", false, false, false, 783), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 784
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 785
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 785), "total", [], "any", false, false, false, 785), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 786
            echo twig_escape_filter($this->env, __trans("Expiring"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t<div class=\"card card-sm\">
\t\t\t\t\t<div class=\"card-status-top bg-danger\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<span class=\"bg-danger text-white avatar\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-currency-dollar\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M12 3v3m0 12v3\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-medium\">";
            // line 807
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [], "method", false, false, false, 807), "total", [], "any", false, false, false, 807), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 808
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 809
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "paid"]], "method", false, false, false, 809), "total", [], "any", false, false, false, 809), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 810
            echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 811
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 811), "total", [], "any", false, false, false, 811), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 812
            echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t<div class=\"card card-sm\">
\t\t\t\t\t<div class=\"card-status-top bg-warning\"></div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<span class=\"bg-orange text-white avatar\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 9h8\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 13h6\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<div class=\"font-weight-medium\">";
            // line 834
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [], "method", false, false, false, 834), "total", [], "any", false, false, false, 834), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 835
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 836
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "open"]], "method", false, false, false, 836), "total", [], "any", false, false, false, 836), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 837
            echo twig_escape_filter($this->env, __trans("Open"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 838
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 838), "total", [], "any", false, false, false, 838), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 839
            echo twig_escape_filter($this->env, __trans("On Hold"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row row-deck row-cards mt-1\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">";
            // line 850
            echo twig_escape_filter($this->env, __trans("Recent orders"), "html", null, true);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table card-table table-vcenter text-nowrap table-hover table-striped\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 855
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 855), "hide_addons" => 1]], "method", false, false, false, 855), "list", [], "any", false, false, false, 855));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 856
                echo "\t\t\t\t\t\t\t\t\t<tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 858
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 858), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 858), 30), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-";
                // line 861
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 861) == "active")) {
                    // line 862
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 863
$context["order"], "status", [], "any", false, false, false, 863) == "pending_setup")) {
                    // line 864
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        ";
                }
                // line 865
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 866
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 866)], 866, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 871
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">";
                // line 872
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 875
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">";
            // line 883
            echo twig_escape_filter($this->env, __trans("Recent emails"), "html", null, true);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table card-table table-vcenter text-nowrap table-hover table-striped\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 888
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [["per_page" => 5]], "method", false, false, false, 888), "list", [], "any", false, false, false, 888));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 889
                echo "\t\t\t\t\t\t\t\t\t<tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 891
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 891), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 891), 30), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td title=\"";
                // line 893
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 893)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 893)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 894
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 897
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">";
                // line 898
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 901
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
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
        return array (  1209 => 901,  1200 => 898,  1197 => 897,  1189 => 894,  1183 => 893,  1174 => 891,  1168 => 889,  1163 => 888,  1155 => 883,  1145 => 875,  1136 => 872,  1133 => 871,  1123 => 866,  1120 => 865,  1116 => 864,  1114 => 863,  1111 => 862,  1109 => 861,  1099 => 858,  1093 => 856,  1088 => 855,  1080 => 850,  1066 => 839,  1062 => 838,  1058 => 837,  1054 => 836,  1050 => 835,  1046 => 834,  1021 => 812,  1017 => 811,  1013 => 810,  1009 => 809,  1005 => 808,  1001 => 807,  977 => 786,  973 => 785,  969 => 784,  965 => 783,  961 => 782,  957 => 781,  937 => 763,  928 => 756,  919 => 753,  916 => 752,  903 => 748,  898 => 746,  892 => 745,  887 => 743,  882 => 741,  873 => 739,  868 => 737,  863 => 736,  858 => 735,  851 => 731,  847 => 730,  843 => 729,  839 => 728,  835 => 727,  831 => 726,  822 => 720,  816 => 716,  813 => 715,  810 => 714,  807 => 713,  792 => 701,  788 => 700,  784 => 699,  780 => 698,  776 => 697,  772 => 696,  766 => 692,  661 => 588,  437 => 365,  112 => 41,  108 => 26,  105 => 25,  101 => 24,  91 => 17,  83 => 14,  78 => 11,  75 => 10,  71 => 9,  66 => 7,  62 => 6,  55 => 3,  51 => 2,  47 => 1,  45 => 23,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/tide/html/mod_index_dashboard.html.twig");
    }
}
