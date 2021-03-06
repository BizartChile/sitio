<?php

/* themes/drupal8_zymphonies_theme/templates/paragraphs/paragraph--formulario.html.twig */
class __TwigTemplate_57da865ff47c71d046d1b7e7cc9ff7eebf6f102cbdc90caa713bc77e110b3ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 42, "block" => 48);
        $filters = array("clean_class" => 44);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", array()))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
        // line 58
        echo "
";
    }

    // line 48
    public function block_paragraph($context, array $blocks = array())
    {
        // line 49
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "  </div>
";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col-md-6\">";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_texto", array()), "html", null, true));
        echo "</div>
      <div class=\"col-md-6\">";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_formulario", array()), "html", null, true));
        echo "</div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/paragraphs/paragraph--formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 53,  77 => 52,  74 => 51,  71 => 50,  66 => 56,  64 => 50,  59 => 49,  56 => 48,  51 => 58,  49 => 48,  47 => 45,  46 => 44,  45 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/paragraphs/paragraph--formulario.html.twig", "/home/gmxcl/_bizart.cl/themes/drupal8_zymphonies_theme/templates/paragraphs/paragraph--formulario.html.twig");
    }
}
