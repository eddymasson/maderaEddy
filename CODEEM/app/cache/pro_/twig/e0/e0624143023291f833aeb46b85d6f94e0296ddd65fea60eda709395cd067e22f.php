<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_82f46ab973232dae8edf72715afe1e871d1fcb6cf0896bab920a5474ce4286e1 extends Twig_Template
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
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isAclEnabled", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "canAccessObject", array(0 => "acl", 1 => ($context["object"] ?? null)), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 14,  21 => 12,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Button:acl_button.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
