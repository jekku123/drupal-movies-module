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

/* @mahi/parts/settings.html.twig */
class __TwigTemplate_2d190ee27405d28fc82767e692b8a001 extends Template
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
        if (($context["fontawesome_five"] ?? null)) {
            // line 2
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mahi/fontawesome5"), "html", null, true);
            echo "
";
        }
        // line 4
        if (($context["fontawesome_six"] ?? null)) {
            // line 5
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mahi/fontawesome6"), "html", null, true);
            echo "
";
        }
        // line 7
        if (($context["bootstrapicons"] ?? null)) {
            // line 8
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mahi/bootstrap-icons"), "html", null, true);
            echo "
";
        }
        // line 10
        echo "
<style>
.container {
  max-width: ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width"] ?? null), 13, $this->source), "html", null, true);
        echo "px;
}
";
        // line 15
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 16
            echo ".header .container {
  max-width: 100%;
}
";
        }
        // line 20
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 21
            echo ".highlighted .container,
.main-wrapper .container {
  max-width: 100%;
}
";
        }
        // line 26
        echo "
";
        // line 27
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 28
            echo ".footer .container {
  max-width: 100%;
}
";
        }
        // line 32
        if (($context["highlight_author_comment"] ?? null)) {
            // line 33
            echo ".by-node-author {
  box-shadow: 0 0 0.4rem var(--color-primary);
}
";
        }
        // line 37
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "@mahi/parts/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  103 => 33,  101 => 32,  95 => 28,  93 => 27,  90 => 26,  83 => 21,  81 => 20,  75 => 16,  73 => 15,  68 => 13,  63 => 10,  57 => 8,  55 => 7,  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mahi/parts/settings.html.twig", "/app/web/themes/contrib/mahi/templates/parts/settings.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
