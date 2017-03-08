<?php

/* @SonataUser/Security/login.html.twig */
class __TwigTemplate_86890d90c4ce1bea93d6c3763401e62d8ab626e632f504f9510436c6e2e46b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@SonataUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/login.html.twig";
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
        return new Twig_Source("", "@SonataUser/Security/login.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
