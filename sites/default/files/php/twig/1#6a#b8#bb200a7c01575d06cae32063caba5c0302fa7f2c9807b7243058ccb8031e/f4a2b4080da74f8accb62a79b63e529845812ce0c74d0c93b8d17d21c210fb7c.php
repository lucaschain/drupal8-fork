<?php

/* core/modules/system/templates/page.html.twig */
class __TwigTemplate_6ab8bb200a7c01575d06cae32063caba5c0302fa7f2c9807b7243058ccb8031e extends Twig_Template
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
        // line 62
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 65
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 66
            echo "      <a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 67
            echo twig_drupal_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 72
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 75
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 76
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 77
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 80
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 81
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 86
                echo "          <div class=\"site-slogan\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 88
            echo "      </div>";
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </header>

  ";
        // line 94
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
  ";
        // line 95
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "

  ";
        // line 97
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "

  ";
        // line 99
        echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "

  ";
        // line 101
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 105
        echo "
    <div class=\"layout-content\">
      ";
        // line 107
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

      ";
        // line 109
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 110
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 111
            echo "        <h1>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 113
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

      ";
        // line 115
        echo twig_drupal_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

      ";
        // line 117
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 118
            echo "        <nav class=\"action-links\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </div>";
        // line 123
        echo "
    ";
        // line 124
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 125
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 126
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 129
        echo "
    ";
        // line 130
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 131
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 132
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 135
        echo "
  </main>

  ";
        // line 138
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 139
            echo "    <footer role=\"contentinfo\">
      ";
            // line 140
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 143
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 143,  214 => 140,  211 => 139,  209 => 138,  204 => 135,  198 => 132,  195 => 131,  193 => 130,  190 => 129,  184 => 126,  181 => 125,  179 => 124,  176 => 123,  172 => 121,  169 => 120,  163 => 118,  161 => 117,  156 => 115,  150 => 113,  144 => 111,  142 => 110,  138 => 109,  133 => 107,  129 => 105,  123 => 101,  118 => 99,  113 => 97,  108 => 95,  104 => 94,  98 => 91,  95 => 90,  92 => 89,  90 => 88,  84 => 86,  82 => 85,  79 => 84,  69 => 81,  66 => 80,  56 => 77,  53 => 76,  50 => 75,  46 => 72,  44 => 71,  41 => 70,  33 => 67,  26 => 66,  24 => 65,  19 => 62,);
    }
}
