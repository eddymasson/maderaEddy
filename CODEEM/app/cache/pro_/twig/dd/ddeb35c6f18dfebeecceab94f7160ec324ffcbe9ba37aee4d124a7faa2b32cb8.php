<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_8ed092f5c114e7531a198fed57b3e6357ad1571eb7d78423b42e38242f8bf1f7 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "canAccessObject", array(0 => "edit", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Button:edit_button.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
