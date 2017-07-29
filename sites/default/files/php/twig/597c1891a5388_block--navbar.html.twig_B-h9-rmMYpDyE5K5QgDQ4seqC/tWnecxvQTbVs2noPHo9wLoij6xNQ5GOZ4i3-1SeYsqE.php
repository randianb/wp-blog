<?php

/* themes/uikit/templates/block/block--navbar.html.twig */
class __TwigTemplate_56f23ad40a1788bc9e6d11fa08e314b347ed75857d05bed67ff1a1fe92c367aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 40, "if" => 46, "block" => 62);
        $filters = array("clean_class" => 42, "clean_id" => 52);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id'),
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

        // line 40
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 42
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 43
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 46
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 47
            echo "  ";
            if ((isset($context["navbar_flip"]) ? $context["navbar_flip"] : null)) {
                // line 48
                echo "    <div class=\"uk-navbar-flip navbar-flip--";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugin_id"]) ? $context["plugin_id"] : null), "html", null, true));
                echo "\">
  ";
            }
            // line 50
            echo "
  <div";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 52
            $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
            // line 53
            echo "    ";
            // line 54
            echo "    ";
            if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
                // line 55
                echo "      ";
                $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
                // line 56
                echo "    ";
            }
            // line 57
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <h2";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
            echo "</h2>
    ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

    ";
            // line 62
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 65
            echo "  </div>

  ";
            // line 67
            if ((isset($context["navbar_flip"]) ? $context["navbar_flip"] : null)) {
                // line 68
                echo "    </div>
  ";
            }
        }
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/uikit/templates/block/block--navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  111 => 62,  104 => 68,  102 => 67,  98 => 65,  95 => 62,  90 => 59,  84 => 58,  79 => 57,  76 => 56,  73 => 55,  70 => 54,  68 => 53,  66 => 52,  62 => 51,  59 => 50,  53 => 48,  50 => 47,  48 => 46,  46 => 43,  45 => 42,  44 => 40,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display the navbar block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @see template_preprocess_block()
 * @see uikit_preprocess_block()
 *
 * @ingroup uikit_themeable
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
{% if content %}
  {% if navbar_flip %}
    <div class=\"uk-navbar-flip navbar-flip--{{ plugin_id }}\">
  {% endif %}

  <div{{ attributes.addClass(classes) }}>
    {% set heading_id = attributes.id ~ '-menu'|clean_id %}
    {# Label. If not displayed, we still provide it for screen readers. #}
    {% if not configuration.label_display %}
      {% set title_attributes = title_attributes.addClass('visually-hidden') %}
    {% endif %}
    {{ title_prefix }}
    <h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>
    {{ title_suffix }}

    {# Menu. #}
    {% block content %}
      {{ content }}
    {% endblock %}
  </div>

  {% if navbar_flip %}
    </div>
  {% endif %}
{% endif %}
";
    }
}
