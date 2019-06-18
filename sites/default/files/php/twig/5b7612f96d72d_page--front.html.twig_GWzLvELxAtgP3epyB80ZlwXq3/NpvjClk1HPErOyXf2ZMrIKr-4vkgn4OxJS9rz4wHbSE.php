<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_e644f8b3f78f61ecb6093f5d77fbe77ea510e7ee07dbca1857c54943b46f4cfe extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "
<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 15
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 17
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 22
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 24
        echo "      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 32
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()))) {
            // line 33
            echo "    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 41
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->



<!-- Start Top Widget -->

  ";
        // line 50
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
            // line 51
            echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">

        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
            echo ">
            ";
            // line 58
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                // line 59
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                echo "
            ";
            }
            // line 61
            echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
            echo ">
            ";
            // line 65
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                // line 66
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                echo "
            ";
            }
            // line 68
            echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
            echo ">
            ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                // line 73
                echo "              ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                echo "
            ";
            }
            // line 75
            echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
        }
        // line 81
        echo "
<!--End Top Widget -->



";
        // line 86
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "bottom_second", array()))) {
            // line 87
            echo "<div class=\"tetra\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
            echo "</div>
  </div>
  </div>
</div>
";
        }
        // line 95
        echo "


<div class=\"tri\">
  <div class=\"container\">
    <div class=\"row\"><h2>Alianzas</h2><br>
     <div class=\"col-md-4\">";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "alianza1", array()), "html", null, true));
        echo "</div>
     <div class=\"col-md-4\">";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "alianza2", array()), "html", null, true));
        echo "</div>
     <div class=\"col-md-4\">";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "alianza3", array()), "html", null, true));
        echo "</div>
    </div>
  </div>
</div>



<div class=\"bi\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
  </div>
  </div>
</div>



<div class=\"penta\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
        echo "</div>
  </div>
  </div>
</div>


";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "recomendamos", array())) {
            // line 130
            echo "<div class=\"hepta\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "recomendamos", array()), "html", null, true));
            echo " </div>
  </div>
  </div>
</div>
";
        }
        // line 138
        echo "


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9 col-md-9\"><p class=\"credit-link\">Av. Pocuro # 2369, Of. 304, Santiago, Chile ::: +56-9-99400628:: +56-2-28390373 - contacto@bizart.cl - Skype: contacto.bizart - Todos los derechos reservados</p></div>
      <div class=\"col-sm-3 col-md-3\"><p class=\"credit-link\">Designed by <a href=\"http://www.gmx.cl\" target=\"_blank\">GMX</a></p></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 138,  260 => 133,  255 => 130,  253 => 129,  244 => 123,  231 => 113,  218 => 103,  214 => 102,  210 => 101,  202 => 95,  194 => 90,  189 => 87,  187 => 86,  180 => 81,  172 => 75,  166 => 73,  164 => 72,  160 => 71,  155 => 68,  149 => 66,  147 => 65,  143 => 64,  138 => 61,  132 => 59,  130 => 58,  126 => 57,  118 => 51,  116 => 50,  105 => 41,  97 => 36,  92 => 33,  90 => 32,  80 => 24,  74 => 22,  72 => 21,  66 => 17,  60 => 15,  58 => 14,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/layout/page--front.html.twig", "/home/gmxcl/_bizart.cl/themes/drupal8_zymphonies_theme/templates/layout/page--front.html.twig");
    }
}
