<?php

/* core/themes/classy/templates/file/file-upload-help.html.twig */
class __TwigTemplate_cca03e1c5548d2e97d39842b30d7dbee31ec55aea617f80c0540d2f573113138 extends Twig_Template
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
        // line 14
        echo twig_render_var(twig_drupal_join_filter((isset($context["descriptions"]) ? $context["descriptions"] : null), "<br />"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
