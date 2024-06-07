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

/* layout_default.html.twig */
class __TwigTemplate_9ea81be3d6c65dd6ceac97ddb3bd44eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
            'footerjs' => [$this, 'block_footerjs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 2), ["_" => "-"]), "html", null, true);
        echo "\"";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 2), ["ar_EG", "ar_SA", "he_IL"])) {
            echo " ";
            echo "dir=\"rtl\"";
        }
        echo ">
   <head>
      <meta charset=\"utf-8\"/>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
      <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
      <meta name=\"msapplication-TileColor\" content=\"\"/>
      <meta name=\"theme-color\" content=\"\"/>
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"HandheldFriendly\" content=\"True\"/>
      <meta name=\"MobileOptimized\" content=\"320\"/>
      <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 15), "favicon_url", [], "any", false, false, false, 15), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 16), "favicon_url", [], "any", false, false, false, 16), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\"/>
      <meta property=\"bb:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      <meta property=\"bb:client_area\" content=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">
      <meta name=\"csrf-token\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
      <meta name=\"robots\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
      <meta name=\"author\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
      <meta name=\"generator\" content=\"FOSSBilling ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
      <meta name=\"canonical\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      ";
        // line 25
        $this->displayBlock('opengraph', $context, $blocks);
        // line 26
        echo "      <!-- CSS files -->
      <link href=\"";
        // line 27
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 27), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 28
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 28), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-flags.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-flags.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 29
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 29), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-payments.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-payments.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 30
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 30), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-vendors.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-vendors.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
\t  <link href=\"";
        // line 31
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/custom.css");
        echo "\" rel=\"stylesheet\"/>
      <script src=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_library_url(("Api/API.js?v=" . twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 32)));
        echo "\"></script>
      <script src=\"";
        // line 33
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/jquery-3.7.0.min.js");
        echo "\"></script>
      <script src=\"";
        // line 34
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css\" />

      <style>
         @import url('https://rsms.me/inter/inter.css');
         :root {
         --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
         }
         body {
         font-feature-settings: \"cv03\", \"cv04\", \"cv11\";
         }
      </style>
      ";
        // line 46
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "      ";
        $this->displayBlock('js', $context, $blocks);
        // line 48
        echo "   </head>
   <body>
      ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "cookieconsent"]], "method", false, false, false, 50)) {
            // line 51
            echo "      ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("mod_cookieconsent_index.html.twig", "layout_default.html.twig", 51);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 52
            echo "      ";
        }
        // line 53
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 603
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 603)) {
            // line 604
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 604);
            echo "
      ";
        }
        // line 606
        echo "      ";
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_default.html.twig", 606);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 607
        echo "      ";
        $this->displayBlock('footerjs', $context, $blocks);
        // line 608
        echo "      <script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/tabler.min.js");
        echo "\" defer></script>
   </body>
</html>
";
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 17
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 17), "html", null, true);
    }

    // line 25
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "      <script>
         if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
         } else {
            document.body.removeAttribute(\"data-bs-theme\");
         }
      </script>
      ";
        // line 61
        if (( !($context["client"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "require_login", [], "any", false, false, false, 61))) {
            // line 62
            echo "      <script>
         \$(function() {
             bb.redirect('";
            // line 64
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "');
         });
      </script>
      ";
        }
        // line 68
        echo "      ";
        if (($context["client"] ?? null)) {
            // line 69
            echo "      ";
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "profile_get", [], "any", false, false, false, 69);
            // line 70
            echo "      ";
        }
        // line 71
        echo "      ";
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 71);
        // line 72
        echo "      <div class=\"page\">
         <!-- Navbar -->
         <div class=\"sticky-top\">
            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_enabled", [], "any", false, false, false, 75)) {
            // line 76
            echo "               <header class=\"navbar navbar-expand-md d-print-none bg-";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 76) == 1)) {
                echo "primary";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 76) == 2)) {
                echo "purple";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 76) == 3)) {
                echo "red";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 76) == 4)) {
                echo "orange";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 76) == 5)) {
                echo "yellow";
            } else {
                echo "green";
            }
            echo " text-primary-fg border-bottom-0\">
                  <div class=\"container-xl ml-3\">
                     <strong>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_text", [], "any", false, false, false, 78), "html", null, true);
            echo "</strong>
                  </div>
               </header>
            ";
        }
        // line 82
        echo "            <header class=\"navbar navbar-expand-md d-print-none";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_enabled", [], "any", false, false, false, 82)) {
            echo " border-top-0";
        }
        echo "\">
               <div class=\"container-xl\">
                  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                  </button>
                  ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_logo", [], "any", false, false, false, 87)) {
            // line 88
            echo "                        <h1 class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
                           <a href=\"";
            // line 89
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">
                           <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 90), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"navbar-brand-image\">
                           </a>
                        </h1>
                  ";
        }
        // line 94
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_name", [], "any", false, false, false, 94)) {
            // line 95
            echo "                        <p class=\"mt-3 text-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
                  ";
        }
        // line 96
        echo "\t\t\t\t  
                  <div class=\"navbar-nav flex-row order-md-last\">
                     <div class=\"nav-item d-none d-md-flex me-3\">
                        <div class=\"btn-list\">
                           ";
        // line 100
        $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 100);
        // line 101
        echo "                           ";
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 102
            echo "                           ";
            $context["currentLang"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 102);
            // line 103
            echo "                           ";
            $context["countryCode"] = twig_slice($this->env, ($context["currentLang"] ?? null), 3, 2);
            // line 104
            echo "                           <div class=\"dropdown\">
                              <a href=\"#\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\"><span class=\"flag flag-country-";
            // line 105
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
            echo "\"></span>&nbsp;";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 106
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 106) == ($context["currentLang"] ?? null))) {
                    // line 107
                    echo "                              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 107), "html", null, true);
                    echo "
                              ";
                }
                // line 109
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</a>
                              <div class=\"dropdown-menu\">
                                 ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 112
                echo "                                 ";
                $context["countryCode"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 112), 3, 2);
                // line 113
                echo "                                 ";
                if (($context["lang"] != ($context["currentLang"] ?? null))) {
                    // line 114
                    echo "                                 <a href=\"javascript:;\" class=\"dropdown-item language_selector\" data-language-code=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 114), "html", null, true);
                    echo "\"><span class=\"flag flag-country-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
                    echo "\"></span>&nbsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 114), "html", null, true);
                    echo "</a>
                                 ";
                }
                // line 116
                echo "                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                              </div>
                           </div>
                           ";
        }
        // line 120
        echo "                           ";
        if ( !($context["client"] ?? null)) {
            // line 121
            echo "                           <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "\" class=\"btn btn-secondary\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2\"></path>
                                 <path d=\"M20 12h-13l3 -3m0 6l-3 -3\"></path>
                              </svg>
                              ";
            // line 127
            echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
            echo "
                           </a>
                           <a href=\"";
            // line 129
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
            echo "\" class=\"btn btn-primary\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                 <path d=\"M16 19h6\"></path>
                                 <path d=\"M19 16v6\"></path>
                                 <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4\"></path>
                              </svg>
                              ";
            // line 137
            echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
            echo "
                           </a>
                           ";
        }
        // line 140
        echo "                        </div>
                     </div>
                     <div class=\"d-none d-md-flex me-3\">
                        <a href=\"?theme=dark\" class=\"nav-link px-0 hide-theme-dark js-theme-toggler\" title=\"Enable dark mode\" data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"bottom\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                           <path d=\"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z\" />
                           </svg>
                        </a>
                        <a href=\"?theme=light\" class=\"nav-link px-0 hide-theme-light js-theme-toggler\" title=\"Enable light mode\" data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"bottom\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                           <path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\" />
                           <path d=\"M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7\" />
                           </svg>
                        </a>
                     </div>
                     ";
        // line 159
        if (($context["client"] ?? null)) {
            // line 160
            echo "                        <div class=\"nav-item dropdown\">
                           <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
                              <span class=\"avatar avatar-sm\" style=\"background-image: url(";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 162), 60), "html", null, true);
            echo ")\"></span>
                              <div class=\"d-none d-xl-block ps-2\">
                                 <div>Welcome, ";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 164), "html", null, true);
            echo "</div>
                                 <div class=\"mt-1 small text-muted\">Balance: ";
            // line 165
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 165), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 165));
            echo "</div>
                              </div>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                              <a href=\"";
            // line 169
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
            echo "</a>
                              <a href=\"";
            // line 170
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/email");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
            echo "</a>
                              <a href=\"";
            // line 171
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Sign out"), "html", null, true);
            echo "</a>
                           </div>
                        </div>
                     ";
        }
        // line 175
        echo "                  </div>
               </div>
            </header>
            <header class=\"navbar-expand-md d-print-none\">
               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                  <div class=\"navbar\">
                     <div class=\"container-xl\">
                        <ul class=\"navbar-nav\">
                           ";
        // line 183
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_home", [], "any", false, false, false, 183)) {
            // line 184
            echo "                              ";
            if (($context["client"] ?? null)) {
                // line 185
                echo "                                 <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 185) == "")) {
                    echo " active";
                }
                echo "\">
                                    <a class=\"nav-link\" href=\"";
                // line 186
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                             <path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" />
                                             <path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" />
                                             <path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" />
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 196
                echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
            } else {
                // line 201
                echo "                                 <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 201) == "")) {
                    echo " active";
                }
                echo "\">
                                    <a class=\"nav-link\" href=\"";
                // line 202
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                             <path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" />
                                             <path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" />
                                             <path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" />
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 212
                echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
            }
            // line 217
            echo "                              ";
        }
        // line 218
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_order", [], "any", false, false, false, 218)) {
            // line 219
            echo "                                 <li class=\"nav-item";
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 219) == "/order")) {
                echo " active";
            }
            echo "\">
                                    <a class=\"nav-link\" href=\"";
            // line 220
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                             <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                             <path d=\"M17 17h-11v-14h-2\"></path>
                                             <path d=\"M6 5l14 1l-1 7h-13\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
            // line 231
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
        }
        // line 236
        echo "                              ";
        if (($context["client"] ?? null)) {
            // line 237
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_services", [], "any", false, false, false, 237)) {
                // line 238
                echo "                                 <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 238) == "/order/service")) {
                    echo " active";
                }
                echo "\">
                                    <a class=\"nav-link\" href=\"";
                // line 239
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                                             <path d=\"M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                                             <path d=\"M7 8l0 .01\"></path>
                                             <path d=\"M7 16l0 .01\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 250
                echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
            }
            // line 255
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_invoices", [], "any", false, false, false, 255)) {
                // line 256
                echo "                                    <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 256) == "/invoice")) {
                    echo " active";
                }
                echo "\">
                                       <a class=\"nav-link\" href=\"";
                // line 257
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
                echo "\">
                                          <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                                <path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path>
                                                <path d=\"M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z\"></path>
                                                <path d=\"M9 7l1 0\"></path>
                                                <path d=\"M9 13l6 0\"></path>
                                                <path d=\"M13 17l2 0\"></path>
                                             </svg>
                                          </span>
                                          <span class=\"nav-link-title\">
                                          ";
                // line 269
                echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
                echo "
                                          </span>
                                       </a>
                                    </li>
                              ";
            }
            // line 274
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_payments", [], "any", false, false, false, 274)) {
                // line 275
                echo "                                 <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 275) == "/client/balance")) {
                    echo " active";
                }
                echo "\">
                                    <a class=\"nav-link\" href=\"";
                // line 276
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/client/balance");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path>
                                             <path d=\"M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z\"></path>
                                             <path d=\"M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5\"></path>
                                             <path d=\"M12 17v1m0 -8v1\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 287
                echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
            }
            // line 292
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_support", [], "any", false, false, false, 292)) {
                // line 293
                echo "                                 <li class=\"nav-item dropdown";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 293) == "/support")) {
                    echo " active";
                }
                echo "\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#support\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                                             <path d=\"M12 17l0 .01\"></path>
                                             <path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 304
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                       ";
                // line 308
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_tickets", [], "any", false, false, false, 308)) {
                    // line 309
                    echo "                                       <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support");
                    echo "\">
                                       ";
                    // line 310
                    echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                    echo "
                                       </a>
                                       ";
                }
                // line 313
                echo "                                       ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 313) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_news", [], "any", false, false, false, 313))) {
                    // line 314
                    echo "                                       <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">
                                       ";
                    // line 315
                    echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                    echo "
                                       </a>
                                       ";
                }
                // line 318
                echo "                                       ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 318) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_kb", [], "any", false, false, false, 318))) {
                    // line 319
                    echo "                                       <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
                    echo "\">
                                       ";
                    // line 320
                    echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                    echo "
                                       </a>
                                       ";
                }
                // line 323
                echo "                                    </div>
                                 </li>
                                 ";
            }
            // line 326
            echo "                              ";
        }
        // line 327
        echo "                              ";
        if ( !($context["client"] ?? null)) {
            // line 328
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_support", [], "any", false, false, false, 328)) {
                // line 329
                echo "                                 <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#navbar-help\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                                             <path d=\"M12 17l0 .01\"></path>
                                             <path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 340
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                       ";
                // line 344
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 344) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_news", [], "any", false, false, false, 344))) {
                    // line 345
                    echo "                                       <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">
                                       ";
                    // line 346
                    echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                    echo "
                                       </a>
                                       ";
                }
                // line 349
                echo "                                       ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 349) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_kb", [], "any", false, false, false, 349))) {
                    // line 350
                    echo "                                       <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
                    echo "\">
                                       ";
                    // line 351
                    echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                    echo "
                                       </a>
                                       ";
                }
                // line 354
                echo "                                       <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
                echo "\">
                                       ";
                // line 355
                echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
                echo "
                                       </a>
                                    </div>
                                 </li>
                              ";
            }
            // line 360
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_login", [], "any", false, false, false, 360)) {
                // line 361
                echo "                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 362
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2\"></path>
                                             <path d=\"M20 12h-13l3 -3m0 6l-3 -3\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 371
                echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                              ";
            }
            // line 376
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_register", [], "any", false, false, false, 376)) {
                // line 377
                echo "                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 378
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
                echo "\">
                                       <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                             <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                             <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                             <path d=\"M16 19h6\"></path>
                                             <path d=\"M19 16v6\"></path>
                                             <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4\"></path>
                                          </svg>
                                       </span>
                                       <span class=\"nav-link-title\">
                                       ";
                // line 389
                echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
                echo "
                                       </span>
                                    </a>
                                 </li>
                           ";
            }
            // line 394
            echo "                           ";
        }
        // line 395
        echo "                        </ul>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <div class=\"page-wrapper\">
            <!-- Page header -->
            <div class=\"page-header d-print-none\">
               <div class=\"container-xl\">
                  <div class=\"row g-2 align-items-center mw-100\">
                     <div class=\"col\">
                        ";
        // line 407
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumb", [], "any", false, false, false, 407)) {
            // line 408
            echo "                           ";
            $this->displayBlock('breadcrumbs', $context, $blocks);
            // line 418
            echo "                        ";
        }
        // line 419
        echo "                        <h2 class=\"page-title\">
                           <span class=\"text-truncate\">";
        // line 420
        $this->displayBlock('page_header', $context, $blocks);
        echo "</span>
                        </h2>
                        <div class=\"text-muted mt-1\">";
        // line 422
        $this->displayBlock('page_subheader', $context, $blocks);
        echo "</div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body -->
            
            
            





            
            ";
        // line 438
        echo "            <div class=\"page-body\">
               <div class=\"container-xl\">
                  ";
        // line 440
        $this->displayBlock('content_before', $context, $blocks);
        // line 441
        echo "                  ";
        $this->displayBlock('content', $context, $blocks);
        // line 442
        echo "                  <div class=\"row row-deck row-cards\">
                     ";
        // line 443
        $this->loadTemplate("partial_message.html.twig", "layout_default.html.twig", 443)->display($context);
        // line 444
        echo "                     ";
        if ( !($context["client"] ?? null)) {
            // line 445
            echo "                        ";
            // line 528
            echo "                     ";
        }
        // line 529
        echo "                     ";
        $this->displayBlock('content_after', $context, $blocks);
        // line 530
        echo "                  </div>
               </div>
            </div>
            <div id=\"push\"></div>
            ";
        // line 534
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_enabled", [], "any", false, false, false, 534)) {
            // line 535
            echo "            <footer class=\"footer footer-transparent d-print-none\">
               <div class=\"container-xl\">
                  <div class=\"row text-center align-items-center flex-row-reverse\">
                     ";
            // line 538
            $context["linksAvailable"] = false;
            // line 539
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 540
                echo "                     ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), (("footer_link_" . $context["i"]) . "_enabled"), [], "any", false, false, false, 540)) {
                    // line 541
                    echo "                     ";
                    $context["linksAvailable"] = true;
                    // line 542
                    echo "                     ";
                }
                // line 543
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 544
            echo "                     ";
            if (($context["linksAvailable"] ?? null)) {
                // line 545
                echo "                     <div class=\"col-lg-auto ms-lg-auto\">
                        <ul class=\"list-inline list-inline-dots mb-0\">
                           ";
                // line 547
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_enabled", [], "any", false, false, false, 547)) {
                    // line 548
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 548)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 548)))) {
                        // line 549
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 549), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 549), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 551
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 551));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 551), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 553
                    echo "                           ";
                }
                echo "\t  
                           ";
                // line 554
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_enabled", [], "any", false, false, false, 554)) {
                    // line 555
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 555)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 555)))) {
                        // line 556
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 556), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 556), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 558
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 558));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 558), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 560
                    echo "                           ";
                }
                echo "\t
                           ";
                // line 561
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_enabled", [], "any", false, false, false, 561)) {
                    // line 562
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 562)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 562)))) {
                        // line 563
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 563), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 563), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 565
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 565));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 565), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 567
                    echo "                           ";
                }
                echo "\t
                           ";
                // line 568
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_enabled", [], "any", false, false, false, 568)) {
                    // line 569
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 569)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 569)))) {
                        // line 570
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 570), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 570), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 572
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 572));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 572), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 574
                    echo "                           ";
                }
                echo "\t
                        </ul>
                     </div>
                     ";
            }
            // line 577
            echo "\t
                     <div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
                        <ul class=\"list-inline list-inline-dots mb-0\">
                           <li class=\"list-inline-item\">
                              &copy; ";
            // line 581
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 581)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 581), twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 581))) : (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 581))), "html", null, true);
            echo "
                           </li>
                           ";
            // line 583
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 583)) {
                // line 584
                echo "                           <li class=\"list-inline-item\">
                              <a href=\"https://fossbilling.org\" title=\"Billing Software\" target=\"_blank\">";
                // line 585
                echo twig_escape_filter($this->env, __trans("Powered by the FOSSBilling Community"), "html", null, true);
                echo "</a>
                           </li>
                           ";
            }
            // line 588
            echo "                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
            ";
        }
        // line 594
        echo "         </div>
      </div>
      <div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
         <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
            <img alt=\"loading gif\" src=\"";
        // line 598
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/loader.gif");
        echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
         </div>
      </div>
      <noscript>NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
      ";
    }

    // line 408
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 409
        echo "                              <div class=\"mb-1\">
                                 <ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 411
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
        echo "</a></li>
                                    ";
        // line 412
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 415
        echo "                                 </ol>
                              </div>
                           ";
    }

    // line 412
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 413
        echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
        echo "</a></li>
                                    ";
    }

    // line 420
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 422
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 440
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 441
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 529
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 607
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_default.html.twig";
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
        return array (  1293 => 607,  1287 => 529,  1281 => 441,  1275 => 440,  1269 => 422,  1263 => 420,  1256 => 413,  1252 => 412,  1246 => 415,  1244 => 412,  1238 => 411,  1234 => 409,  1230 => 408,  1221 => 598,  1215 => 594,  1207 => 588,  1201 => 585,  1198 => 584,  1196 => 583,  1189 => 581,  1183 => 577,  1175 => 574,  1167 => 572,  1159 => 570,  1156 => 569,  1154 => 568,  1149 => 567,  1141 => 565,  1133 => 563,  1130 => 562,  1128 => 561,  1123 => 560,  1115 => 558,  1107 => 556,  1104 => 555,  1102 => 554,  1097 => 553,  1089 => 551,  1081 => 549,  1078 => 548,  1076 => 547,  1072 => 545,  1069 => 544,  1063 => 543,  1060 => 542,  1057 => 541,  1054 => 540,  1049 => 539,  1047 => 538,  1042 => 535,  1040 => 534,  1034 => 530,  1031 => 529,  1028 => 528,  1026 => 445,  1023 => 444,  1021 => 443,  1018 => 442,  1015 => 441,  1013 => 440,  1009 => 438,  991 => 422,  986 => 420,  983 => 419,  980 => 418,  977 => 408,  975 => 407,  961 => 395,  958 => 394,  950 => 389,  936 => 378,  933 => 377,  930 => 376,  922 => 371,  910 => 362,  907 => 361,  904 => 360,  896 => 355,  891 => 354,  885 => 351,  880 => 350,  877 => 349,  871 => 346,  866 => 345,  864 => 344,  857 => 340,  844 => 329,  841 => 328,  838 => 327,  835 => 326,  830 => 323,  824 => 320,  819 => 319,  816 => 318,  810 => 315,  805 => 314,  802 => 313,  796 => 310,  791 => 309,  789 => 308,  782 => 304,  765 => 293,  762 => 292,  754 => 287,  740 => 276,  733 => 275,  730 => 274,  722 => 269,  707 => 257,  700 => 256,  697 => 255,  689 => 250,  675 => 239,  668 => 238,  665 => 237,  662 => 236,  654 => 231,  640 => 220,  633 => 219,  630 => 218,  627 => 217,  619 => 212,  606 => 202,  599 => 201,  591 => 196,  578 => 186,  571 => 185,  568 => 184,  566 => 183,  556 => 175,  547 => 171,  541 => 170,  535 => 169,  528 => 165,  524 => 164,  519 => 162,  515 => 160,  513 => 159,  492 => 140,  486 => 137,  475 => 129,  470 => 127,  460 => 121,  457 => 120,  452 => 117,  446 => 116,  436 => 114,  433 => 113,  430 => 112,  426 => 111,  417 => 109,  411 => 107,  408 => 106,  402 => 105,  399 => 104,  396 => 103,  393 => 102,  390 => 101,  388 => 100,  382 => 96,  376 => 95,  373 => 94,  364 => 90,  360 => 89,  357 => 88,  355 => 87,  344 => 82,  337 => 78,  319 => 76,  317 => 75,  312 => 72,  309 => 71,  306 => 70,  303 => 69,  300 => 68,  293 => 64,  289 => 62,  287 => 61,  278 => 54,  274 => 53,  268 => 47,  262 => 46,  256 => 25,  249 => 17,  242 => 7,  233 => 608,  230 => 607,  219 => 606,  213 => 604,  210 => 603,  207 => 53,  204 => 52,  193 => 51,  191 => 50,  187 => 48,  184 => 47,  182 => 46,  167 => 34,  163 => 33,  159 => 32,  155 => 31,  147 => 30,  139 => 29,  131 => 28,  123 => 27,  120 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  67 => 7,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/tide/html/layout_default.html.twig");
    }
}
