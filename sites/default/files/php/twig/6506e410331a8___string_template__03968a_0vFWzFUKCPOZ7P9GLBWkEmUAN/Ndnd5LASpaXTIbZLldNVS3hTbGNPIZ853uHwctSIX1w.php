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

/* __string_template__03968a2c61701240e80a6c27af8aaa11 */
class __TwigTemplate_a8ca0216e5ef25d41f8e97e0b6fb16e1 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"caption\">
  <span class=\"project-type\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_type"] ?? null), 2, $this->source), "html", null, true);
        echo "</span>
  <h1>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        echo "</h1>
  <div class=\"city-location\">
    ";
        // line 5
        if (($context["field_project_sub_title"] ?? null)) {
            // line 6
            echo "       ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_sub_title"] ?? null), 6, $this->source), "html", null, true);
            echo " - 
    ";
        }
        // line 8
        echo "    ";
        if (($context["field_project_location"] ?? null)) {
            // line 9
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_location"] ?? null), 9, $this->source), "html", null, true);
            echo ", 
    ";
        }
        // line 11
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_city"] ?? null), 11, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"project-rera\">
    ";
        // line 14
        if (($context["field_project_rera_number"] ?? null)) {
            // line 15
            echo "      <div class=\"rera-label\">Rera:</div>
      <div class=\"rera-number\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_rera_number"] ?? null), 16, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__03968a2c61701240e80a6c27af8aaa11";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  80 => 16,  77 => 15,  75 => 14,  68 => 11,  62 => 9,  59 => 8,  53 => 6,  51 => 5,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__03968a2c61701240e80a6c27af8aaa11", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
