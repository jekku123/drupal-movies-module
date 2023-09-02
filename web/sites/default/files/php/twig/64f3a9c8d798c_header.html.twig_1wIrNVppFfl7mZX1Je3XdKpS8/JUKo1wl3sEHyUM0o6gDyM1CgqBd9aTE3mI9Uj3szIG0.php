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

/* @mahi/parts/header.html.twig */
class __TwigTemplate_0d653719b6cad34c680cbcade1836a93 extends Template
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
        echo "<header class=\"header dark\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 2)) {
            // line 3
            echo "    <div class=\"header-top\">
      <div class=\"container\">
        <div class=\"header-top-block\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 11
        echo "  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-main-container\">
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 14)) {
            // line 15
            echo "          <div class=\"site-branding-region\">
            ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
          </div> <!--/.site-branding -->
        ";
        }
        // line 19
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 19) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 19))) {
            // line 20
            echo "          <div class=\"header-right\">
            ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 21)) {
                // line 22
                echo "              <div class=\"mobile-menu-icon\">
                <span></span>
                <span></span>
                <span></span>
              </div><!-- /mobile-menu -->
              <div class=\"primary-menu-wrapper\">
                <div class=\"menu-wrap\">
                  <div class=\"close-mobile-menu\">X</div>
                  ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "
                </div>
              </div><!-- /primary-menu-wrapper -->
            ";
            }
            // line 34
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 34)) {
                // line 35
                echo "              <div class=\"search-icon\">
                <i class=\"icon-search\"></i>
              </div> <!--/.search icon -->
              <div class=\"search-box\">
                <div class=\"search-box-close\"></div>
                <div class=\"container\">
                  <div class=\"search-box-content\">
                    ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
                <div class=\"search-box-close\"></div>
              </div><!--/.search-box -->
            ";
            }
            // line 47
            echo "<!-- end page.search_box -->
          </div><!--/.header-right -->
        ";
        }
        // line 50
        echo "      </div><!--/header-main-container -->
    </div><!--/container-->
  </div><!--/header-main-->
  ";
        // line 53
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 54
            echo "    ";
            $this->loadTemplate("@mahi/parts/slider.html.twig", "@mahi/parts/header.html.twig", 54)->display($context);
            // line 55
            echo "  ";
        } elseif (( !($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 55))) {
            // line 56
            echo "    <div class=\"page-header\">
      <div class=\"container\">
        ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
      </div><!--/container-->
    </div>
  ";
        }
        // line 62
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "@mahi/parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  141 => 58,  137 => 56,  134 => 55,  131 => 54,  129 => 53,  124 => 50,  119 => 47,  110 => 42,  101 => 35,  98 => 34,  91 => 30,  81 => 22,  79 => 21,  76 => 20,  73 => 19,  67 => 16,  64 => 15,  62 => 14,  57 => 11,  49 => 6,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mahi/parts/header.html.twig", "/app/web/themes/contrib/mahi/templates/parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 54);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
