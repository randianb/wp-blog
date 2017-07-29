<?php

/* themes/uikit_blog/templates/form/input.html.twig */
class __TwigTemplate_d0545599a8fd74d4ea0cee0afd8f5b2bbeedc50f37c891205a17bcc465c4fbc3 extends Twig_Template
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
        $tags = array("set" => 18, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 18
        $context["classes"] = array(0 => ((($this->getAttribute(        // line 19
(isset($context["attributes"]) ? $context["attributes"] : null), "type", array()) == "submit")) ? ("uk-button") : ("")), 1 => ((        // line 20
(isset($context["errors"]) ? $context["errors"] : null)) ? ("uk-form-danger") : ("")));
        // line 23
        if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "type", array()) != "submit")) {
            // line 24
            echo "  <input";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo " />";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
";
        } else {
            // line 26
            echo "  <button";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "value", array()), "html", null, true));
            echo "</button>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 26,  49 => 24,  47 => 23,  45 => 20,  44 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display an input form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 * @see uikit_preprocess_input()
 * @see uikit_blog_preprocess_input()
 *
 * @ingroup uikit_blog_themeable
 */
#}
{%
  set classes = [
    attributes.type == 'submit' ? 'uk-button',
    errors ? 'uk-form-danger',
  ]
%}
{% if attributes.type != 'submit' %}
  <input{{ attributes.addClass(classes) }} />{{ children }}
{% else %}
  <button{{ attributes }}>{{ attributes.value }}</button>{{ children }}
{% endif %}
";
    }
}
