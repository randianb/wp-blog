<?php

/* themes/uikit_blog/templates/block/block--navbar--branding.html.twig */
class __TwigTemplate_46646ca86e15ae37d6f593608b9675e12db6dafec89717d6d34c70c4cfcc87ff extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array("t" => 26);
        $functions = array("path" => 26);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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
        if ((((isset($context["site_logo"]) ? $context["site_logo"] : null) || (isset($context["site_name"]) ? $context["site_name"] : null)) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 21
            echo "  ";
            if ((isset($context["navbar_flip"]) ? $context["navbar_flip"] : null)) {
                // line 22
                echo "    <div class=\"uk-navbar-flip\">
  ";
            }
            // line 24
            echo "
  ";
            // line 25
            if (((isset($context["site_logo"]) ? $context["site_logo"] : null) || (isset($context["site_name"]) ? $context["site_name"] : null))) {
                // line 26
                echo "    <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\" class=\"uk-navbar-brand site-branding\">
      <img src=\"";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" class=\"site-branding__logo\" />
      ";
                // line 28
                if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                    // line 29
                    echo "        <span class=\"site-branding__name uk-margin-left\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                    echo "</span>
      ";
                }
                // line 31
                echo "    </a>
  ";
            }
            // line 33
            echo "
  ";
            // line 34
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 35
                echo "    <span class=\"uk-navbar-brand site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</span>
  ";
            }
            // line 37
            echo "
  ";
            // line 38
            if ((isset($context["navbar_flip"]) ? $context["navbar_flip"] : null)) {
                // line 39
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/uikit_blog/templates/block/block--navbar--branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  96 => 38,  93 => 37,  87 => 35,  85 => 34,  82 => 33,  78 => 31,  72 => 29,  70 => 28,  64 => 27,  57 => 26,  55 => 25,  52 => 24,  48 => 22,  45 => 21,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display the branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @see template_preprocess_block()
 * @see uikit_preprocess_block()
 *
 * @ingroup uikit_blog_themeable
 */
#}
{% if site_logo or site_name or site_slogan %}
  {% if navbar_flip %}
    <div class=\"uk-navbar-flip\">
  {% endif %}

  {% if site_logo or site_name %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"uk-navbar-brand site-branding\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" class=\"site-branding__logo\" />
      {% if site_name %}
        <span class=\"site-branding__name uk-margin-left\">{{ site_name }}</span>
      {% endif %}
    </a>
  {% endif %}

  {% if site_slogan %}
    <span class=\"uk-navbar-brand site-branding__slogan\">{{ site_slogan }}</span>
  {% endif %}

  {% if navbar_flip %}
    </div>
  {% endif %}
{% endif %}
";
    }
}
