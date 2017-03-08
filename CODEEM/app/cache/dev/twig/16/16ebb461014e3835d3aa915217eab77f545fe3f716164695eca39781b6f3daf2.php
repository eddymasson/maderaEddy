<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e647a83780317fd7145d626ec77f69098684da044c86805e808ec5756227543b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7d8cca52c99ee0b5d3e7ea6bc835b3996f90765598a591b8cddd2df2ffead4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d8cca52c99ee0b5d3e7ea6bc835b3996f90765598a591b8cddd2df2ffead4a->enter($__internal_d7d8cca52c99ee0b5d3e7ea6bc835b3996f90765598a591b8cddd2df2ffead4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d7d8cca52c99ee0b5d3e7ea6bc835b3996f90765598a591b8cddd2df2ffead4a->leave($__internal_d7d8cca52c99ee0b5d3e7ea6bc835b3996f90765598a591b8cddd2df2ffead4a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b042348a32edd1049d8a9013d7103cab3a68b398fc7e03e8b1df49aa0191133a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b042348a32edd1049d8a9013d7103cab3a68b398fc7e03e8b1df49aa0191133a->enter($__internal_b042348a32edd1049d8a9013d7103cab3a68b398fc7e03e8b1df49aa0191133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b042348a32edd1049d8a9013d7103cab3a68b398fc7e03e8b1df49aa0191133a->leave($__internal_b042348a32edd1049d8a9013d7103cab3a68b398fc7e03e8b1df49aa0191133a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\CODE\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
