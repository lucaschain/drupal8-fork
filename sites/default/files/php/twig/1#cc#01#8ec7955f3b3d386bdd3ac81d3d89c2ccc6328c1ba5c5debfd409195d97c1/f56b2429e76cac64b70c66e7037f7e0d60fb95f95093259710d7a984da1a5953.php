<?php

/* core/themes/classy/templates/filter/filter-tips.html.twig */
class __TwigTemplate_cc018ec7955f3b3d386bdd3ac81d3d89c2ccc6328c1ba5c5debfd409195d97c1 extends Twig_Template
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
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 22
            echo "  <h2>";
            echo twig_render_var(t("Text Formats"));
            echo "</h2>
";
        }
        // line 24
        echo "
";
        // line 25
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 26
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 27
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 29
            echo "
  ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 31
                echo "    ";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 32
                    echo "      ";
                    // line 33
                    $context["tip_classes"] = array(0 => "filter-type", 1 => ("filter-" . \Drupal\Component\Utility\Html::getClass($context["name"])));
                    // line 38
                    echo "      <div";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tip"], "attributes", array()), "addClass", array(0 => (isset($context["tip_classes"]) ? $context["tip_classes"] : null)), "method"), "html", null, true);
                    echo ">
      <h3>";
                    // line 39
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tip"], "name", array()), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 41
                echo "
    ";
                // line 42
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", array()))) {
                    // line 43
                    echo "      <ul class=\"tips\">
      ";
                    // line 44
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 45
                        echo "        ";
                        // line 46
                        $context["item_classes"] = array(0 => (((isset($context["long"]) ? $context["long"] : null)) ? (("filter-" . strtr($this->getAttribute($context["item"], "id", array()), array("/" => "-")))) : ("")));
                        // line 50
                        echo "        <li";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true);
                        echo ">";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "tip", array()), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "      </ul>
    ";
                }
                // line 54
                echo "
    ";
                // line 55
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 56
                    echo "      </div>
    ";
                }
                // line 58
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
  ";
            // line 60
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 61
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/filter/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  49 => 32,  46 => 31,  42 => 30,  39 => 29,  35 => 27,  32 => 26,  30 => 25,  27 => 24,  21 => 22,  19 => 21,);
    }
}
