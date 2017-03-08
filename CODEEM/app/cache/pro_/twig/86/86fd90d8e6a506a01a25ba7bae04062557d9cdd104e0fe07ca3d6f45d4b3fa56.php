<?php

/* SonataAdminBundle:CRUD:_email_link.html.twig */
class __TwigTemplate_78601d2f96fa4f9ca5c609bec3b7e8a0fc388ece9ec29a42f1d9fb84c14346d2 extends Twig_Template
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
        // line 2
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 3
            echo "&nbsp;";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
($context["field_description"] ?? null), "options", array(), "any", false, true), "as_string", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "as_string", array()))) {
            // line 5
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = array();
            // line 8
            echo "    ";
            $context["subject"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array()), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array()), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty(($context["subject"] ?? null))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("subject" => ($context["subject"] ?? null)));
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty(($context["body"] ?? null))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("body" => ($context["body"] ?? null)));
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            if ((twig_length_filter($this->env, ($context["parameters"] ?? null)) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["parameters"] ?? null)), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            // line 20
            echo "</a>";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  66 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  39 => 11,  36 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:_email_link.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/_email_link.html.twig");
    }
}
