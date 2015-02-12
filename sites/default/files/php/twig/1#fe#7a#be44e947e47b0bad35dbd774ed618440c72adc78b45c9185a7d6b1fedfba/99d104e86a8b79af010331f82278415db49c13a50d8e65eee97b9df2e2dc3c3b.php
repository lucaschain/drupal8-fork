<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_fe7abe44e947e47b0bad35dbd774ed618440c72adc78b45c9185a7d6b1fedfba extends Twig_Template
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
        // line 26
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">
  ";
        // line 27
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 30
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 30,  26 => 28,  24 => 27,  19 => 26,);
    }
}
