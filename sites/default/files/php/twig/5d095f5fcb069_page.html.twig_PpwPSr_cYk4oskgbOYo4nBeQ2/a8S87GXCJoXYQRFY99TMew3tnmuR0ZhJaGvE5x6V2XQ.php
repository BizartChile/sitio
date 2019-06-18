<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_db90ce103844c8e065d8b8dde6617ebdf016806284bcfe9d3f7988b7ce52fb83 extends Twig_Template
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
        if ($this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array())) {
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




<!-- Page Title -->
";
        // line 50
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 51
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 60
        echo "<!-- End Page Title -- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">

    <!--Content top-->
      ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 70
            echo "        <div class=\"row\">
          ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 74
        echo "    <!--End Content top-->

    <!--start:content -->


    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 82
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 88
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 92
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 98
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 102
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 108
        echo "      <!---End Right SideBar -->

    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 115
            echo "      <div class=\"row\">
        ";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 119
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->



";
        // line 126
        if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
            // line 127
            echo "<div class=\"hepta\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
            echo "</div>
  </div>
  </div>
</div>
";
        }
        // line 135
        echo "

";
        // line 137
        if ($this->getAttribute(($context["page"] ?? null), "recomendamos", array())) {
            // line 138
            echo "<div class=\"hepta\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-12\">";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "recomendamos", array()), "html", null, true));
            echo " </div>
  </div>
  </div>
</div>
";
        }
        // line 146
        echo "

<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9 col-md-9\"><p class=\"credit-link\">Av. Pocuro # 2369, Of. 304, Santiago, Chile ::: +56-9-99400628:: +56-2-28390373 - contacto@bizart.cl - Skype: contacto.bizart - Todos los derechos reservados</p></div>
      <div class=\"col-sm-3 col-md-3\"><p class=\"credit-link\">Designed by <a href=\"http://www.gmx.cl\" target=\"_blank\">GMX</a></p></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 146,  275 => 141,  270 => 138,  268 => 137,  264 => 135,  256 => 130,  251 => 127,  249 => 126,  240 => 119,  234 => 116,  231 => 115,  229 => 114,  221 => 108,  214 => 104,  210 => 103,  207 => 102,  205 => 101,  200 => 98,  193 => 94,  189 => 93,  186 => 92,  184 => 91,  179 => 88,  172 => 84,  168 => 83,  165 => 82,  163 => 81,  154 => 74,  148 => 71,  145 => 70,  143 => 69,  132 => 60,  124 => 55,  118 => 51,  116 => 50,  105 => 41,  97 => 36,  92 => 33,  90 => 32,  80 => 24,  74 => 22,  72 => 21,  66 => 17,  60 => 15,  58 => 14,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/themes/drupal8_zymphonies_theme/templates/layout/page.html.twig");
    }
}
