<?php

/* themes/uikit_blog/templates/misc/feed-icon.html.twig */
class __TwigTemplate_48ed895f453fb200ef284d4867225f3d62aad2835b24669bcedeecdae22e1f4b extends Twig_Template
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
        $tags = array("set" => 18);
        $filters = array("t" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('t'),
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
        $context["link_title"] = t("Subscribe to @title", array("@title" => (isset($context["site_name"]) ? $context["site_name"] : null)));
        // line 19
        echo "<div class=\"uk-width-1-1 uk-margin-top\">
  <a href=\"";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_title"]) ? $context["link_title"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true));
        echo "><i class=\"uk-icon-rss\"></i> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_title"]) ? $context["link_title"] : null), "html", null, true));
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a feed icon.
 *
 * Available variables:
 * - url: An internal system path or a fully qualified external URL of the feed.
 * - site_name: The name of the site as reported in the system configuration.
 * - attributes: Remaining HTML attributes for the feed link.
 *   - title: A descriptive title of the feed link.
 *   - class: HTML classes to be applied to the feed link.
 *
 * @see uikit_preprocess_feed_icon()
 *
 * @ingroup uikit_blog_themeable
 */
#}
{% set link_title = 'Subscribe to @title'|t({'@title': site_name}) %}
<div class=\"uk-width-1-1 uk-margin-top\">
  <a href=\"{{ url }}\" title=\"{{ link_title }}\"{{ attributes.addClass('feed-icon') }}><i class=\"uk-icon-rss\"></i> {{ link_title }}</a>
</div>
";
    }
}
