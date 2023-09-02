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

/* @mahi/parts/slider.html.twig */
class __TwigTemplate_0ffeace2713dbfa87aeb7c8c17d292a5 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mahi/slider"), "html", null, true);
        echo "
<div class=\"slider\">
  <div class=\"container\">
    <div class=\"splide\" role=\"group\" aria-label=\"webSite slider\">
      <div class=\"splide__track\">
        <ul class=\"splide__list\">
          ";
        // line 7
        if ((($context["slider_code"] ?? null) != "")) {
            // line 8
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 8, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<audio>,<h1>,<h2>,<h3>,<h4>,<em>,<strong>,<br>,<i>,<div>,<span>,<button>,<mark>,<hr>,<del>,<sup>,<sub>,<svg>"));
            echo "
          ";
        } else {
            // line 10
            echo "          <li class=\"splide__slide\">
            <div class=\"slider-text\">
              <h2>Mahi is Multipurpose Drupal theme</h2>
              <p>Mahi Theme is packed full of all the amazing features and options for you to create a successful website</p>
              <div><a class=\"button\" href=\"#\">Get Started</a> <a class=\"button-secondary\" href=\"#\">Read More</a></div>
            </div>
            <div class=\"slider-img\">
              <img src=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source), "html", null, true);
            echo "/images/demo/slider1.svg\" alt=\"Multipurpose Drupal theme\" />
            </div>
          </li>
          <li class=\"splide__slide\">
            <div class=\"slider-text\">
              <h2>Welcome To Drupar Design Studio</h2>
              <p>We present you material design. We put our hearts and soul into making every project.</p>
            <div><a class=\"button\" href=\"#\">Get Started</a> <a class=\"button-secondary\" href=\"#\">Read More</a></div>
            </div>
            <div class=\"slider-img\">
              <img src=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 27, $this->source), "html", null, true);
            echo "/images/demo/slider2.svg\" alt=\"Drupar Design Studio\" />
            </div>
          </li>
          <li class=\"splide__slide\">
            <div class=\"slider-text\">
              <h2>We Create Awesome Drupal Themes!</h2>
              <p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
            <div><a class=\"button\" href=\"#\">Get Started</a> <a class=\"button-secondary\" href=\"#\">Read More</a></div>
            </div>
            <div class=\"slider-img\">
              <img src=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 37, $this->source), "html", null, true);
            echo "/images/demo/slider3.svg\" alt=\"Awesome Drupal Theme\" />
            </div>
          </li>
          ";
        }
        // line 41
        echo "        </ul>
      </div><!--/splide__track -->
    </div><!--/splide-->
  </div><!--/container-->
</div><!--/slider-->
<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
      perPage: 1,
      autoplay: true,
      rewind: true,
      pauseOnHover: false,
      interval: 5000,
      arrowPath: 'M0.5 1L20 20.5L0.5 41.5',
    } );
    splide.mount();
  } );
</script>
";
    }

    public function getTemplateName()
    {
        return "@mahi/parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  91 => 37,  78 => 27,  65 => 17,  56 => 10,  50 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mahi/parts/slider.html.twig", "/app/web/themes/contrib/mahi/templates/parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 1, "raw" => 8, "striptags" => 8);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
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
