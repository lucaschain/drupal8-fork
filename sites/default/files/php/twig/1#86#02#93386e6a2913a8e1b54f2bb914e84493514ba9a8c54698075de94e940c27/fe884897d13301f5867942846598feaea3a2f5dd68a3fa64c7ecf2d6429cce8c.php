<?php

/* core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_860293386e6a2913a8e1b54f2bb914e84493514ba9a8c54698075de94e940c27 extends Twig_Template
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
        // line 21
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => (((isset($context["name"]) ? $context["name"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))) : ("")), 2 => (((isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 27
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 28
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 29
            echo "<h3>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>";
        }
        // line 31
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
        // line 32
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 33
            echo twig_drupal_escape_filter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true);
        }
        // line 35
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 35,  40 => 33,  38 => 32,  33 => 31,  28 => 29,  26 => 28,  21 => 27,  19 => 21,);
    }
}
