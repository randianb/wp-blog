<?php

/* themes/uikit_blog/templates/form/form.html.twig */
class __TwigTemplate_d2939f873ad451e3a078bc040479225f14f2546f129c275db4a47b9005abbe25 extends Twig_Template
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
        $tags = array("set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 17
        $context["classes"] = array(0 => "uk-form", 1 => "uk-form-stacked", 2 => (((        // line 20
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-panel") : ("")), 3 => (((        // line 21
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-panel-box") : ("")), 4 => (((        // line 22
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-width-small-4-5") : ("")), 5 => (((        // line 23
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-width-medium-1-2") : ("")), 6 => (((        // line 24
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-width-large-1-3") : ("")), 7 => (((        // line 25
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-push-small-1-10") : ("")), 8 => (((        // line 26
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-push-medium-1-4") : ("")), 9 => (((        // line 27
(isset($context["form_id"]) ? $context["form_id"] : null) == "user_login_form")) ? ("uk-push-large-1-3") : ("")));
        // line 30
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 31,  53 => 30,  51 => 27,  50 => 26,  49 => 25,  48 => 24,  47 => 23,  46 => 22,  45 => 21,  44 => 20,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a form.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 * @see uikit_blog_preprocess_form()
 *
 * @ingroup uikit_blog_themeable
 */
#}
{%
  set classes = [
    'uk-form',
    'uk-form-stacked',
    form_id == 'user_login_form' ? 'uk-panel',
    form_id == 'user_login_form' ? 'uk-panel-box',
    form_id == 'user_login_form' ? 'uk-width-small-4-5',
    form_id == 'user_login_form' ? 'uk-width-medium-1-2',
    form_id == 'user_login_form' ? 'uk-width-large-1-3',
    form_id == 'user_login_form' ? 'uk-push-small-1-10',
    form_id == 'user_login_form' ? 'uk-push-medium-1-4',
    form_id == 'user_login_form' ? 'uk-push-large-1-3',
  ]
%}
<form{{ attributes.addClass(classes) }}>
  {{ children }}
</form>
";
    }
}
