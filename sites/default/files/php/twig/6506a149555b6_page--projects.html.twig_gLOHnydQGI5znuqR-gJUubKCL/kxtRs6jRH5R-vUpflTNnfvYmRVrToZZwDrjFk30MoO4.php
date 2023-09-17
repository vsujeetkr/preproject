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

/* themes/contrib/preproject/templates/page--projects.html.twig */
class __TwigTemplate_8804377d143e3d105b883dbaecc1f826 extends Template
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
            'mobile_shortcuts' => [$this, 'block_mobile_shortcuts'],
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
        // line 180
        echo "
";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_shortcuts", [], "any", false, false, true, 181)) {
            // line 182
            echo "  ";
            $this->displayBlock('mobile_shortcuts', $context, $blocks);
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
        echo "    <div class=\"col-sm-12\" role=\"heading\">
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
        echo " js-quickedit-main-content main-content\">
    <div class=\"\">

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

    // line 182
    public function block_mobile_shortcuts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "    <div class=\"mobile_shortcuts\">
      ";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_shortcuts", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/preproject/templates/page--projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 184,  374 => 183,  370 => 182,  363 => 176,  360 => 175,  356 => 174,  349 => 165,  346 => 164,  342 => 163,  336 => 157,  333 => 156,  329 => 155,  322 => 150,  318 => 149,  311 => 143,  307 => 142,  300 => 124,  297 => 123,  293 => 122,  286 => 115,  283 => 114,  279 => 113,  273 => 169,  270 => 168,  267 => 163,  264 => 162,  260 => 159,  257 => 155,  254 => 153,  251 => 152,  248 => 149,  245 => 148,  242 => 146,  239 => 145,  236 => 142,  233 => 141,  227 => 138,  225 => 135,  224 => 134,  223 => 133,  222 => 132,  221 => 131,  219 => 130,  216 => 128,  213 => 127,  210 => 122,  207 => 121,  204 => 119,  201 => 118,  198 => 113,  195 => 112,  188 => 108,  184 => 107,  176 => 100,  172 => 98,  168 => 97,  163 => 91,  159 => 89,  156 => 88,  150 => 85,  147 => 84,  144 => 83,  140 => 80,  131 => 74,  128 => 73,  125 => 72,  121 => 70,  118 => 69,  112 => 67,  110 => 66,  105 => 65,  103 => 62,  102 => 61,  101 => 59,  99 => 58,  95 => 57,  89 => 182,  87 => 181,  84 => 180,  80 => 174,  78 => 173,  75 => 172,  73 => 107,  70 => 105,  67 => 104,  64 => 97,  61 => 96,  58 => 94,  54 => 57,  52 => 56,  50 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/preproject/templates/page--projects.html.twig", "/var/www/html/themes/contrib/preproject/templates/page--projects.html.twig");
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
