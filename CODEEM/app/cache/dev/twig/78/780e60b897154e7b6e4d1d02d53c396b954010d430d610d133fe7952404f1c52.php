<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e99db9f37fade77a053f872a2d8a5ff7b1b55e3da443f02dc3dc1590885df0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b3752557392ef8e05dc74a248fb799a2c4ac3ffe65300dec33340bdefa8f521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3752557392ef8e05dc74a248fb799a2c4ac3ffe65300dec33340bdefa8f521->enter($__internal_7b3752557392ef8e05dc74a248fb799a2c4ac3ffe65300dec33340bdefa8f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3752557392ef8e05dc74a248fb799a2c4ac3ffe65300dec33340bdefa8f521->leave($__internal_7b3752557392ef8e05dc74a248fb799a2c4ac3ffe65300dec33340bdefa8f521_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c58943d810fa31bbdbe760a8caf075bdf47e4e960faae4fad9377b595e653f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c58943d810fa31bbdbe760a8caf075bdf47e4e960faae4fad9377b595e653f5->enter($__internal_7c58943d810fa31bbdbe760a8caf075bdf47e4e960faae4fad9377b595e653f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c58943d810fa31bbdbe760a8caf075bdf47e4e960faae4fad9377b595e653f5->leave($__internal_7c58943d810fa31bbdbe760a8caf075bdf47e4e960faae4fad9377b595e653f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39975b1767d8de183dee88921462c775f7dc9d1b2fc9aa06df5e317cfcb7d57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39975b1767d8de183dee88921462c775f7dc9d1b2fc9aa06df5e317cfcb7d57a->enter($__internal_39975b1767d8de183dee88921462c775f7dc9d1b2fc9aa06df5e317cfcb7d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39975b1767d8de183dee88921462c775f7dc9d1b2fc9aa06df5e317cfcb7d57a->leave($__internal_39975b1767d8de183dee88921462c775f7dc9d1b2fc9aa06df5e317cfcb7d57a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8496aa314ad9709db479dbce1cf9416e2b859a7301ef02bb9d91fc346ae89b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8496aa314ad9709db479dbce1cf9416e2b859a7301ef02bb9d91fc346ae89b3->enter($__internal_b8496aa314ad9709db479dbce1cf9416e2b859a7301ef02bb9d91fc346ae89b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b8496aa314ad9709db479dbce1cf9416e2b859a7301ef02bb9d91fc346ae89b3->leave($__internal_b8496aa314ad9709db479dbce1cf9416e2b859a7301ef02bb9d91fc346ae89b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\CODE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
