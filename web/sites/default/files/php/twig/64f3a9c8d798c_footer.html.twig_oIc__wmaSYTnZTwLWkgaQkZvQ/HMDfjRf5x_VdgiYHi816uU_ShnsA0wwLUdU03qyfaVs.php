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

/* @mahi/parts/footer.html.twig */
class __TwigTemplate_79356ff363b26b5c6ac1708d2e6dd4da extends Template
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
        echo "<footer class=\"footer dark\">
  <div class=\"container footer-container\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 3)) {
            // line 4
            echo "      <section class=\"footer-top footer-region\">
        ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
      </section>
    ";
        }
        // line 7
        echo "<!-- /footer-top -->
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 8)) {
            // line 9
            echo "      <section class=\"footer-blocks footer-region\">
        ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
      </section>
    ";
        }
        // line 12
        echo "<!-- /footer -->
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 13)) {
            // line 14
            echo "      <section class=\"footer-bottom footer-region\">
        ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
      </section>
    ";
        }
        // line 17
        echo "<!-- /footer-bottom -->
    ";
        // line 18
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 19
            echo "    <section class=\"footer-bottom-last footer-region\">
      ";
            // line 20
            if (($context["copyright_text"] ?? null)) {
                // line 21
                echo "        <div class=\"copyright\">
          &copy; ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 22, $this->source), "html", null, true);
                echo ", All rights reserved.
        </div>
      ";
            }
            // line 24
            echo " <!-- end if copyright -->
        ";
            // line 25
            if (($context["all_icons_show"] ?? null)) {
                // line 26
                echo "          <div class=\"footer-social\">
            ";
                // line 27
                $this->loadTemplate("@mahi/parts/social.html.twig", "@mahi/parts/footer.html.twig", 27)->display($context);
                // line 28
                echo "          </div>
        ";
            }
            // line 29
            echo " <!-- end if all_icons_show -->
    </section><!-- /footer-bottom-last -->
    ";
        }
        // line 32
        echo "  </div><!-- /container -->
</footer>
";
        // line 34
        if (($context["scrolltotop_on"] ?? null)) {
            // line 35
            echo "<div class=\"scrolltop\"><i class=\"icon-arrow-up size-large\"></i></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@mahi/parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  126 => 34,  122 => 32,  117 => 29,  113 => 28,  111 => 27,  108 => 26,  106 => 25,  103 => 24,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  85 => 18,  82 => 17,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mahi/parts/footer.html.twig", "/app/web/themes/contrib/mahi/templates/parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 27);
        static $filters = array("escape" => 5, "date" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
