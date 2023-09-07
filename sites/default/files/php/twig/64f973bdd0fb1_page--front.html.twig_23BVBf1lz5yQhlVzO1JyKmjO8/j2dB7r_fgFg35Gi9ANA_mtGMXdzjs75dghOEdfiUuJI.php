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

/* themes/contrib/preproject/templates/page--front.html.twig */
class __TwigTemplate_712ad3eba57b7dcc87a7a824ff11bf2d543c52e497f67ee8ab01c5f712fd5c95 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'slider' => [$this, 'block_slider'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 96)) {
            // line 97
            echo "  ";
            $this->displayBlock('slider', $context, $blocks);
            // line 104
            echo " ";
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 173)) {
            // line 174
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 66)) {
            // line 67
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
        ";
        // line 72
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 72)) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 83)) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 88)) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 97
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "    <div class=\"col-sm-12\">
      <div class=\"row\">
       ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  ";
    }

    // line 107
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 108, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 112
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112)) {
            // line 113
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "
      ";
        // line 121
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121)) {
            // line 122
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        // line 131
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 132
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 132) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 132))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 133
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 133)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 134
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 134)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 135
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 135)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 135)))) ? ("col-sm-12") : (""))];
        // line 138
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 138), 138, $this->source), "html", null, true);
        echo ">

        ";
        // line 141
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 141)) {
            // line 142
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 148)) {
            // line 149
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </section>

      ";
        // line 162
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162)) {
            // line 163
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 168
            echo "      ";
        }
        // line 169
        echo "    </div>
  </div>
";
    }

    // line 113
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 122
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 142
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 149
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 155
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "          <a id=\"main-content\"></a>
          ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 163
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/preproject/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 176,  350 => 175,  346 => 174,  339 => 165,  336 => 164,  332 => 163,  326 => 157,  323 => 156,  319 => 155,  312 => 150,  308 => 149,  301 => 143,  297 => 142,  290 => 124,  287 => 123,  283 => 122,  276 => 115,  273 => 114,  269 => 113,  263 => 169,  260 => 168,  257 => 163,  254 => 162,  250 => 159,  247 => 155,  244 => 153,  241 => 152,  238 => 149,  235 => 148,  232 => 146,  229 => 145,  226 => 142,  223 => 141,  217 => 138,  215 => 135,  214 => 134,  213 => 133,  212 => 132,  211 => 131,  209 => 130,  206 => 128,  203 => 127,  200 => 122,  197 => 121,  194 => 119,  191 => 118,  188 => 113,  185 => 112,  178 => 108,  174 => 107,  166 => 100,  162 => 98,  158 => 97,  153 => 91,  149 => 89,  146 => 88,  140 => 85,  137 => 84,  134 => 83,  130 => 80,  121 => 74,  118 => 73,  115 => 72,  111 => 70,  108 => 69,  102 => 67,  100 => 66,  95 => 65,  93 => 62,  92 => 61,  91 => 59,  89 => 58,  85 => 57,  79 => 174,  77 => 173,  74 => 172,  72 => 107,  69 => 105,  66 => 104,  63 => 97,  60 => 96,  57 => 94,  53 => 57,  51 => 56,  49 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/preproject/templates/page--front.html.twig", "/var/www/html/themes/contrib/preproject/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("clean_class" => 62, "escape" => 65, "t" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
