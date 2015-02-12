<?php

/* core/themes/classy/templates/node/node.html.twig */
class __TwigTemplate_3a2709aab2a015dcc44ee9b7f94d059c807357e9b0eab30a8e624cfc154e9064 extends Twig_Template
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
        // line 72
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (((!$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) ? ("node--unpublished") : ("")), 5 => (((isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 81
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  ";
        // line 83
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 84
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 85
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">
      <a href=\"";
            // line 86
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 89
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 91
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 92
            echo "    <footer class=\"node__meta\">
      ";
            // line 93
            echo twig_drupal_escape_filter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
      <div";
            // line 94
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node__submitted"), "method"), "html", null, true);
            echo ">
        ";
            // line 95
            echo t("Submitted by !author_name on !date", array("!author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "!date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 96
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 100
        echo "
  <div";
        // line 101
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content"), "method"), "html", null, true);
        echo ">
    ";
        // line 102
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 105
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 106
            echo "    <div class=\"node__links\">
      ";
            // line 107
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 110
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 110,  93 => 107,  90 => 106,  88 => 105,  82 => 102,  78 => 101,  75 => 100,  67 => 96,  65 => 95,  61 => 94,  57 => 93,  54 => 92,  52 => 91,  46 => 89,  38 => 86,  33 => 85,  31 => 84,  27 => 83,  21 => 81,  19 => 72,);
    }
}
