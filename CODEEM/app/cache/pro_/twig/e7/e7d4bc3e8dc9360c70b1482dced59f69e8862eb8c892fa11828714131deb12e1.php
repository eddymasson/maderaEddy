<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_55ec8297bab674ca87991f61a49e18a7ed31ac5cddd4695c6dc43ee7ce2d6323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form(($context["aclRolesForm"] ?? null), ($context["permissions"] ?? null), "td_role", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), ($context["object"] ?? null));
        echo "
    ";
    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form(($context["aclUsersForm"] ?? null), ($context["permissions"] ?? null), "td_username", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), ($context["object"] ?? null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  61 => 24,  54 => 22,  51 => 21,  46 => 24,  43 => 21,  40 => 20,  36 => 15,  33 => 14,  29 => 12,  27 => 18,  21 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_acl.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
