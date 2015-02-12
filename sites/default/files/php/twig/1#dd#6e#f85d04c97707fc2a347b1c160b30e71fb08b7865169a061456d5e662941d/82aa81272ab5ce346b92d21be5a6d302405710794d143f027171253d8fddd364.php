<?php

/* core/modules/views_ui/templates/views-ui-view-preview-section.html.twig */
class __TwigTemplate_dd6ef85d04c97707fc2a347b1c160b30e71fb08b7865169a061456d5e662941d extends Twig_Template
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
        // line 16
        echo "<h1 class=\"section-title\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
";
        // line 17
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 18
            echo "  <div class=\"contextual\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["links"]) ? $context["links"] : null), "html", null, true);
            echo "</div>
";
        }
        // line 20
        echo "<div class=\"preview-section\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-preview-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 20,  26 => 18,  24 => 17,  19 => 16,);
    }
}
