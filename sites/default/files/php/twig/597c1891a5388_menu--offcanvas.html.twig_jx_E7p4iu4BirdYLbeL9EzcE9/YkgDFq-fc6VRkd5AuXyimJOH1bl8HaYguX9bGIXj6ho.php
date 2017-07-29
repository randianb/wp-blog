<?php

/* themes/uikit/templates/navigation/menu--offcanvas.html.twig */
class __TwigTemplate_001fd0f0bfb5be2710321fff1edb87d7593408a80414289e59a218475cab78d8 extends Twig_Template
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
        $tags = array("import" => 25, "macro" => 33, "if" => 35, "set" => 37, "for" => 46);
        $filters = array();
        $functions = array("link" => 51);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
                array(),
                array('link')
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

        // line 25
        $context["menus"] = $this;
        // line 26
        echo "
";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 33
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 36
                echo "    ";
                // line 37
                $context["classes"] = array(0 => (((                // line 38
(isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) ? ("uk-nav") : ("")), 1 => (((                // line 39
(isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) ? ("uk-nav-offcanvas") : ("")), 2 => (((                // line 40
(isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) ? ("uk-nav-parent-icon") : ("")), 3 => (((                // line 41
(isset($context["menu_level"]) ? $context["menu_level"] : null) > 0)) ? ("uk-nav-sub") : ("")));
                // line 44
                echo "
    <ul";
                // line 45
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    echo " data-uk-nav";
                }
                echo ">
    ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "      ";
                    $context["item_classes"] = array(0 => (($this->getAttribute($context["item"], "below", array())) ? ("uk-parent") : ("")));
                    // line 48
                    echo "      ";
                    if ($this->getAttribute($context["item"], "display_item", array())) {
                        // line 49
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
          ";
                        // line 50
                        if ($this->getAttribute($context["item"], "has_url", array())) {
                            // line 51
                            echo "            ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                            echo "
          ";
                        } else {
                            // line 53
                            echo "            <a href=\"#\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
          ";
                        }
                        // line 55
                        echo "          ";
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 56
                            echo "            ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
          ";
                        }
                        // line 58
                        echo "        ";
                    }
                    // line 59
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </ul>

  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/uikit/templates/navigation/menu--offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  134 => 59,  131 => 58,  125 => 56,  122 => 55,  116 => 53,  110 => 51,  108 => 50,  103 => 49,  100 => 48,  97 => 47,  93 => 46,  86 => 45,  83 => 44,  81 => 41,  80 => 40,  79 => 39,  78 => 38,  77 => 37,  75 => 36,  72 => 35,  69 => 34,  55 => 33,  48 => 31,  45 => 26,  43 => 25,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display an offcanvas menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @see uikit_preprocess_menu__offcanvas()
 *
 * @ingroup uikit_themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {%
      set classes = [
        menu_level == 0 ? 'uk-nav',
        menu_level == 0 ? 'uk-nav-offcanvas',
        menu_level == 0 ? 'uk-nav-parent-icon',
        menu_level > 0 ? 'uk-nav-sub',
      ]
    %}

    <ul{{ attributes.addClass(classes) }}{% if menu_level == 0 %} data-uk-nav{% endif %}>
    {% for item in items %}
      {% set item_classes = [item.below ? 'uk-parent'] %}
      {% if item.display_item %}
        <li{{ item.attributes.addClass(item_classes) }}>
          {% if item.has_url %}
            {{ link(item.title, item.url) }}
          {% else %}
            <a href=\"#\">{{ item.title }}</a>
          {% endif %}
          {% if item.below %}
            {{ menus.menu_links(item.below, attributes.removeClass(classes), menu_level + 1) }}
          {% endif %}
        {% endif %}
      </li>
    {% endfor %}
    </ul>

  {% endif %}
{% endmacro %}
";
    }
}
