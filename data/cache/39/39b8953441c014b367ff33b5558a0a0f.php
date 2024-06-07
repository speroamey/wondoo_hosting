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

/* mod_email_index.html.twig */
class __TwigTemplate_82367a212845db0407c5840242741f8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_email_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["emails"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 6)]], "method", false, false, false, 6);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
        echo "</a></li>";
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Here you can find all the emails we sent you. Please click on email topic in left column and it will be displayed in right side."), "html", null, true);
    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "email-index";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 13
        echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
        echo "</h3>
         </div>
         <div class=\"card-body\">
            ";
        // line 16
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["emails"] ?? null), "list", [], "any", false, false, false, 16))) {
            // line 17
            echo "            <div class=\"alert alert-info\" role=\"alert\">
               <h4 class=\"alert-title\" id=\"information-block\">";
            // line 18
            echo twig_escape_filter($this->env, __trans("There are no emails to display"), "html", null, true);
            echo "</h4>
            </div>
            ";
        } else {
            // line 21
            echo "            <div class=\"card\">
               <div class=\"card-header\">
                  <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
                     ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["emails"] ?? null), "list", [], "any", false, false, false, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 25
                echo "                     <li class=\"nav-item\">
                        <a href=\"#tab";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"nav-link ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                    echo "active";
                }
                echo "\" data-bs-toggle=\"tab\">Home</a>
                     </li>
                     ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                  </ul>
               </div>
               <div class=\"card-body\">
                  <div class=\"tab-content\">
                     ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["emails"] ?? null), "list", [], "any", false, false, false, 33));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 34
                echo "                     <div class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34)) {
                    echo "active show";
                }
                echo "\" id=\"tab";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                        <pre>
                                <p><strong>";
                // line 36
                echo twig_escape_filter($this->env, __trans("From:"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "sender", [], "any", false, false, false, 36), "html", null, true);
                echo "</p>
                                <p><strong>";
                // line 37
                echo twig_escape_filter($this->env, __trans("To:"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "recipients", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
                                <p><strong>";
                // line 38
                echo twig_escape_filter($this->env, __trans("Created at:"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 38)), "html", null, true);
                echo "</p>
                            </pre>
                        <pre>
                                <h3>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 41), "html", null, true);
                echo "</h3>
                                <p> ";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["email"], "content_html", [], "any", false, false, false, 42);
                echo "</p>
                            </pre>
                        <a class=\"btn btn-inverse email-resend\" href=\"#\" mail-id=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Resend"), "html", null, true);
                echo "</a>
                        <a class=\"btn btn-danger email-delete\" href=\"#\"  mail-id=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
                echo "</a>
                     </div>
                     ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                  </div>
               </div>
            </div>
            ";
            // line 51
            $this->loadTemplate("partial_pagination.html.twig", "mod_email_index.html.twig", 51)->display(twig_array_merge($context, ["list" => ($context["emails"] ?? null)]));
            // line 52
            echo "            ";
        }
        echo "\t\t
         </div>
      </div>
   </div>
</div>
";
    }

    // line 58
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "<script type=\"text/javascript\">
   \$(function() {
       \$('.email-resend').on('click', function(e){
           e.preventDefault();
           \$('.wait').show();
           var email_id = \$(this).attr('mail-id');
           bb.post(
               'client/email/resend',
               {id: email_id, CSRFToken: \"";
        // line 68
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "js", null, true);
        echo "\" },
               function(result) {
                   \$('.wait').hide();
                   bb.msg('Email resent');
                   return false;
               }
           );
       });
       \$('.email-delete').on('click', function(e){
           e.preventDefault();
           if (confirm('Are you sure?')){
               \$('.wait').show();
               var email_id = \$(this).attr('mail-id');
               bb.post(
                   'client/email/delete',
                   {id: email_id, CSRFToken: \"";
        // line 83
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "js", null, true);
        echo "\" },
                   function(result) {
                       bb.msg('Email deleted');
                       bb.redirect('";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email"), "js", null, true);
        echo "');
                       return false;
                   }
               );
           };
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
        return "mod_email_index.html.twig";
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
        return array (  307 => 86,  301 => 83,  283 => 68,  273 => 60,  269 => 58,  258 => 52,  256 => 51,  251 => 48,  232 => 45,  226 => 44,  221 => 42,  217 => 41,  209 => 38,  203 => 37,  197 => 36,  187 => 34,  170 => 33,  164 => 29,  143 => 26,  140 => 25,  123 => 24,  118 => 21,  112 => 18,  109 => 17,  107 => 16,  101 => 13,  95 => 9,  91 => 8,  84 => 7,  77 => 5,  70 => 4,  61 => 3,  54 => 2,  50 => 1,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_email_index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/themes/tide/html/mod_email_index.html.twig");
    }
}
