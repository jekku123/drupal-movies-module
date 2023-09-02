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

/* themes/contrib/mahi/templates/layout/page.html.twig */
class __TwigTemplate_13b21dac789cc2027472d3aa52f02ff7 extends Template
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
        // line 34
        $this->loadTemplate("@mahi/parts/header.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 34)->display($context);
        // line 35
        $this->loadTemplate("@mahi/parts/highlighted.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 35)->display($context);
        // line 36
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"page-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 41
        echo "        ";
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 41))) {
            // line 42
            echo "          ";
            $this->loadTemplate("@mahi/parts/content_home.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 42)->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $this->loadTemplate("@mahi/parts/content_top.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 44)->display($context);
        // line 45
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
        ";
        // line 46
        $this->loadTemplate("@mahi/parts/content_bottom.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 46)->display($context);
        // line 47
        echo "      </main>
      ";
        // line 48
        $this->loadTemplate("@mahi/parts/sidebar-left.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "      ";
        $this->loadTemplate("@mahi/parts/sidebar-right.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 49)->display($context);
        // line 50
        echo "    </div> ";
        // line 51
        echo "  </div> ";
        // line 52
        echo "</div>";
        // line 53
        $this->loadTemplate("@mahi/parts/footer.html.twig", "themes/contrib/mahi/templates/layout/page.html.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/mahi/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 53,  80 => 52,  78 => 51,  76 => 50,  73 => 49,  71 => 48,  68 => 47,  66 => 46,  61 => 45,  58 => 44,  55 => 43,  52 => 42,  49 => 41,  43 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/mahi/templates/layout/page.html.twig", "/app/web/themes/contrib/mahi/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 34, "if" => 41);
        static $filters = array("escape" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
