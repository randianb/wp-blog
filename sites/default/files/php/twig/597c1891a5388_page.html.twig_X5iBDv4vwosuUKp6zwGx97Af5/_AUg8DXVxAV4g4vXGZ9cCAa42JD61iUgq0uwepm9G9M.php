<?php

/* themes/uikit_blog/templates/layout/page.html.twig */
class __TwigTemplate_f6d22675d094e9c4626931637dcafe7f5bb89fb5818c7e85903ace68cdd802af extends Twig_Template
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
        $tags = array("if" => 51);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 50
        echo "<header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_attributes"]) ? $context["header_attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navbar", array())) {
            // line 52
            echo "    <nav";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "html", null, true));
            echo ">
      ";
            // line 53
            if ((isset($context["navbar_attached"]) ? $context["navbar_attached"] : null)) {
                echo "<div class=\"uk-container uk-container-center\">";
            }
            // line 54
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
                // line 55
                echo "          <a href=\"#offcanvas\" class=\"uk-navbar-toggle uk-visible-small\" data-uk-offcanvas=\"\"></a>
        ";
            }
            // line 57
            echo "
        ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navbar", array()), "html", null, true));
            echo "
      ";
            // line 59
            if ((isset($context["navbar_attached"]) ? $context["navbar_attached"] : null)) {
                echo "</div>";
            }
            // line 60
            echo "    </nav>
  ";
        }
        // line 62
        echo "</header>

<div id=\"main-wrapper\">
  <div";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_attributes"]) ? $context["page_attributes"] : null), "html", null, true));
        echo ">
    <div id=\"page--wrapper\" class=\"uk-grid\" data-uk-grid-margin>
      <main";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </main>

      ";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 73
            echo "        <aside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_attributes"]) ? $context["sidebar_first_attributes"] : null), "html", null, true));
            echo ">
          ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 77
        echo "
      ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 79
            echo "        <aside";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_second_attributes"]) ? $context["sidebar_second_attributes"] : null), "html", null, true));
            echo ">
          ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 83
        echo "    </div>
  </div>
</div>

";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 88
            echo "  <footer id=\"page-footer\" class=\"uk-margin-top\" role=\"contentinfo\">
    <div class=\"uk-container uk-container-center\">
      ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
";
        }
        // line 94
        echo "
";
        // line 95
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 96
            echo "  <div id=\"offcanvas\" class=\"uk-offcanvas\">
    <div class=\"uk-offcanvas-bar\">
      ";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 98,  155 => 96,  153 => 95,  150 => 94,  143 => 90,  139 => 88,  137 => 87,  131 => 83,  125 => 80,  120 => 79,  118 => 78,  115 => 77,  109 => 74,  104 => 73,  102 => 72,  96 => 69,  91 => 67,  86 => 65,  81 => 62,  77 => 60,  73 => 59,  69 => 58,  66 => 57,  62 => 55,  59 => 54,  55 => 53,  50 => 52,  48 => 51,  43 => 50,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see uikit_preprocess_page()
 * @see uikit_blog_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup uikit_blog_themeable
 */
#}
<header{{ header_attributes }}>
  {% if page.navbar %}
    <nav{{ navbar_attributes }}>
      {% if navbar_attached %}<div class=\"uk-container uk-container-center\">{% endif %}
        {% if page.offcanvas %}
          <a href=\"#offcanvas\" class=\"uk-navbar-toggle uk-visible-small\" data-uk-offcanvas=\"\"></a>
        {% endif %}

        {{ page.navbar }}
      {% if navbar_attached %}</div>{% endif %}
    </nav>
  {% endif %}
</header>

<div id=\"main-wrapper\">
  <div{{ page_attributes }}>
    <div id=\"page--wrapper\" class=\"uk-grid\" data-uk-grid-margin>
      <main{{ content_attributes }}>
        <a id=\"main-content\" tabindex=\"-1\"></a>
        {{ page.content }}
      </main>

      {% if page.sidebar_first %}
        <aside{{ sidebar_first_attributes }}>
          {{ page.sidebar_first }}
        </aside>
      {% endif %}

      {% if page.sidebar_second %}
        <aside{{ sidebar_second_attributes }}>
          {{ page.sidebar_second }}
        </aside>
      {% endif %}
    </div>
  </div>
</div>

{% if page.footer %}
  <footer id=\"page-footer\" class=\"uk-margin-top\" role=\"contentinfo\">
    <div class=\"uk-container uk-container-center\">
      {{ page.footer }}
    </div>
  </footer>
{% endif %}

{% if page.offcanvas %}
  <div id=\"offcanvas\" class=\"uk-offcanvas\">
    <div class=\"uk-offcanvas-bar\">
      {{ page.offcanvas }}
    </div>
  </div>
{% endif %}
";
    }
}
