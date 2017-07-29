<?php

/* themes/uikit/templates/misc/status-messages.html.twig */
class __TwigTemplate_d2f40961dce97af5d616b866cd0046b7c6b5da836adb643ed1539ee12886d54a extends Twig_Template
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
        $tags = array("set" => 27, "if" => 33, "for" => 34);
        $filters = array("length" => 33, "without" => 35, "first" => 46);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length', 'without', 'first'),
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

        // line 27
        $context["status_classes"] = array("status" => "uk-alert-success", "error" => "uk-alert-danger", "warning" => "uk-alert-warning");
        // line 33
        if (twig_length_filter($this->env, (isset($context["message_list"]) ? $context["message_list"] : null))) {
            // line 34
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 35
                echo "    <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "role", "aria-label"), "html", null, true));
                echo ">
      ";
                // line 36
                if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                    // line 37
                    echo "        <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                    echo "</h2>
      ";
                }
                // line 39
                echo "      <div class=\"uk-alert ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_classes"]) ? $context["status_classes"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "\" role=\"alert\" data-uk-alert>
        <a class=\"uk-alert-close uk-close\"></a>
        ";
                // line 41
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 42
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 43
                        echo "            <p>";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                        echo "</p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "        ";
                } else {
                    // line 46
                    echo "          <p>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                    echo "</p>
        ";
                }
                // line 48
                echo "      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "themes/uikit/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 48,  92 => 46,  89 => 45,  80 => 43,  75 => 42,  73 => 41,  67 => 39,  61 => 37,  59 => 36,  52 => 35,  47 => 34,  45 => 33,  43 => 27,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @ingroup uikit_themeable
 */
#}
{%
  set status_classes = {
    'status': 'uk-alert-success',
    'error': 'uk-alert-danger',
    'warning': 'uk-alert-warning',
  }
%}
{% if message_list|length %}
  {% for type, messages in message_list %}
    <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
      {% endif %}
      <div class=\"uk-alert {{ status_classes[type] }}\" role=\"alert\" data-uk-alert>
        <a class=\"uk-alert-close uk-close\"></a>
        {% if messages|length > 1 %}
          {% for message in messages %}
            <p>{{ message }}</p>
          {% endfor %}
        {% else %}
          <p>{{ messages|first }}</p>
        {% endif %}
      </div>
    </div>
  {% endfor %}
{% endif %}
";
    }
}
