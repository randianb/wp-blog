<?php

/* themes/uikit_blog/templates/content/page-title.html.twig */
class __TwigTemplate_f52fc49336326e00616ae769071e9d67fcb45502b759ea8fe67179345d72d375 extends Twig_Template
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
        $tags = array("set" => 20, "if" => 24);
        $filters = array("render" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
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

        // line 20
        $context["classes"] = array(0 => "uk-article-title");
        // line 24
        if ($this->env->getExtension('drupal_core')->renderVar((isset($context["title"]) ? $context["title"] : null))) {
            // line 25
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
  ";
            // line 26
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 27
                echo "    <h1";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h1>
  ";
            }
            // line 29
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/content/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 29,  54 => 27,  52 => 26,  47 => 25,  45 => 24,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display page titles.
 *
 * Available variables:
 * - title_attributes: HTML attributes for the page title element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see uikit_blog_preprocess_page_title()
 *
 * @ingroup uikit_blog_themeable
 */
#}
{%
  set classes = [
    'uk-article-title',
  ]
%}
{% if title|render %}
  {{ title_prefix }}
  {% if title %}
    <h1{{ title_attributes.addClass(classes) }}>{{ title }}</h1>
  {% endif %}
  {{ title_suffix }}
{% endif %}
";
    }
}
