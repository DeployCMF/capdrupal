<?php

/* modules/live_weather/templates/live-weather.html.twig */
class __TwigTemplate_59ccf6caff21546eca21baa16e92accab0ecc0b07d6a4772c4188807167c3a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 11, "if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 9
        echo "
<div class=\"live-weather-list\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weather_detail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 12
            echo "<div class=\"live-weather\">
  <div class=\"city\"><h3>";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "location", array()), "html", null, true));
            echo "</h3></div>
  <div class=\"temperature\">
    <span class=\"label\"> Temperature </span><span class=\"data\">";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "temperature", array()), "html", null, true));
            echo " &deg;";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "temperature_unit", array()), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "text", array()), "html", null, true));
            echo "</span>
  </div>
  ";
            // line 17
            if ($this->getAttribute($context["var"], "image", array())) {
                // line 18
                echo "  <div class=\"image\">
    <span class=\"data\"><img src=\"";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "image", array()), "html", null, true));
                echo ".png\"/></span>
  </div>
  ";
            }
            // line 22
            echo "  ";
            if ($this->getAttribute($context["var"], "wind", array())) {
                // line 23
                echo "  <div class=\"wind\">
    <span class=\"label\">Wind speed </span><span class=\"data\">";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "wind", array()), "html", null, true));
                echo "</span>
  </div>
  ";
            }
            // line 27
            echo "  ";
            if ($this->getAttribute($context["var"], "humidity", array())) {
                // line 28
                echo "  <div class=\"humidity\">
    <span class=\"label\">Humidity </span><span class=\"data\">";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "humidity", array()), "html", null, true));
                echo "</span>
  </div>
  ";
            }
            // line 32
            echo "  ";
            if ($this->getAttribute($context["var"], "visibility", array())) {
                // line 33
                echo "  <div class=\"visibility\">
    <span class=\"label\">Visibility </span><span class=\"data\">";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "visibility", array()), "html", null, true));
                echo "</span>
  </div>
  ";
            }
            // line 37
            echo "  ";
            if ($this->getAttribute($context["var"], "sunrise", array())) {
                // line 38
                echo "  <div class=\"sunrise\">
    <span class=\"label\">Sunrise </span><span class=\"data\">";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "sunrise", array()), "html", null, true));
                echo "</span>
  </div>
  ";
            }
            // line 42
            echo "  ";
            if ($this->getAttribute($context["var"], "sunset", array())) {
                // line 43
                echo "  <div class=\"sunset\">
  <span class=\"label\">Sunset </span><span class=\"data\">";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["var"], "sunset", array()), "html", null, true));
                echo "</span>
  </div>
  ";
            }
            // line 47
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/live_weather/templates/live-weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  139 => 47,  133 => 44,  130 => 43,  127 => 42,  121 => 39,  118 => 38,  115 => 37,  109 => 34,  106 => 33,  103 => 32,  97 => 29,  94 => 28,  91 => 27,  85 => 24,  82 => 23,  79 => 22,  73 => 19,  70 => 18,  68 => 17,  59 => 15,  54 => 13,  51 => 12,  47 => 11,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/live_weather/templates/live-weather.html.twig", "/home/nadir/Bureau/drupal-8.4.0/modules/live_weather/templates/live-weather.html.twig");
    }
}
