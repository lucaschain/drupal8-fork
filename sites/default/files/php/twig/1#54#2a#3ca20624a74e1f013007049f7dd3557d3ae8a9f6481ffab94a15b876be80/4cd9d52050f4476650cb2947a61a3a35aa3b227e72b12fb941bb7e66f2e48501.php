<?php

/* <strong>{% trans 'Title' %}</strong> */
class __TwigTemplate_542a3ca20624a74e1f013007049f7dd3557d3ae8a9f6481ffab94a15b876be80 extends Twig_Template
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
        // line 1
        echo "<strong>";
        echo t("Title", array());
        echo "</strong>";
    }

    public function getTemplateName()
    {
        return "<strong>{% trans 'Title' %}</strong>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
