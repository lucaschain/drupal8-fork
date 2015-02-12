<?php

/* core/themes/classy/templates/block/block-list.html.twig */
class __TwigTemplate_486b655e6cfae47e771b4536e233ec66e8e4c05dfa66c55bc39928ed172639f4 extends Twig_Template
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
        echo "<div class=\"layout-block-list clearfix\">
  <div class=\"layout-region block-list-primary\">
    ";
        // line 18
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "place_blocks"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region block-list-secondary\">
    ";
        // line 21
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "place_blocks", array()), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 21,  23 => 18,  19 => 16,);
    }
}
