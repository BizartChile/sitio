<?php

/* {# inline_template_start #}<div class="row">
  <div class="col-sm-4"><br /><img src="{{ field_image }}" class="img-rounded"></div>
  <div class="col-sm-8"><h3>{{ title }}</h3><p>{{ field_bajada }}</p><p><a href="{{ path }}" class="btn btn-large btn-primary pull-right">{{ field_texto_boton }}</a></p>
</div>
</div>  */
class __TwigTemplate_8e5d2a5462654a4d8b6d644f33d677256a2e6f91ec878404d3058aeb5eee5b87 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"row\">
  <div class=\"col-sm-4\"><br /><img src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" class=\"img-rounded\"></div>
  <div class=\"col-sm-8\"><h3>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3><p>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_bajada"] ?? null), "html", null, true));
        echo "</p><p><a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"btn btn-large btn-primary pull-right\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_texto_boton"] ?? null), "html", null, true));
        echo "</a></p>
</div>
</div> ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row\">
  <div class=\"col-sm-4\"><br /><img src=\"{{ field_image }}\" class=\"img-rounded\"></div>
  <div class=\"col-sm-8\"><h3>{{ title }}</h3><p>{{ field_bajada }}</p><p><a href=\"{{ path }}\" class=\"btn btn-large btn-primary pull-right\">{{ field_texto_boton }}</a></p>
</div>
</div> ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  50 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"row\">
  <div class=\"col-sm-4\"><br /><img src=\"{{ field_image }}\" class=\"img-rounded\"></div>
  <div class=\"col-sm-8\"><h3>{{ title }}</h3><p>{{ field_bajada }}</p><p><a href=\"{{ path }}\" class=\"btn btn-large btn-primary pull-right\">{{ field_texto_boton }}</a></p>
</div>
</div> ", "");
    }
}
