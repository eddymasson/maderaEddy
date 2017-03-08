<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_15d51f73868375287cd56466a8dd85ac5f3d19dd81265105062efb5bb113ed2f extends Twig_Template
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
        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if (((($context["object"] ?? null) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? null), 2 => ($context["link_parameters"] ?? null)), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Helper:short-object-description.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
