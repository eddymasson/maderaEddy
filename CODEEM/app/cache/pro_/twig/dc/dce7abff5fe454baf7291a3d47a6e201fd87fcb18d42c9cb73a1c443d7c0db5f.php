<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_d0ceff98e31066448cad51ee4a74081be9ac36ec3b897e012d3bf1c38b77ce19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/show_compare.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_compare.html.twig");
    }
}
