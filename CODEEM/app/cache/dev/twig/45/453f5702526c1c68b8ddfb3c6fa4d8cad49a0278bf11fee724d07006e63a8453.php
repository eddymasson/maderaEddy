<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f41d206a795db36b84ecc76560b9c4fa33c81f0410ba8940b3bd081920a8b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b506ee795ba990a15a75c513ad48931bb9b97c02d25952f3066c06a8e06e8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b506ee795ba990a15a75c513ad48931bb9b97c02d25952f3066c06a8e06e8f9->enter($__internal_4b506ee795ba990a15a75c513ad48931bb9b97c02d25952f3066c06a8e06e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b506ee795ba990a15a75c513ad48931bb9b97c02d25952f3066c06a8e06e8f9->leave($__internal_4b506ee795ba990a15a75c513ad48931bb9b97c02d25952f3066c06a8e06e8f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_866d9efe97c579989f17a59f3017dcc826f2d783b519dbafbce89b16201d01a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866d9efe97c579989f17a59f3017dcc826f2d783b519dbafbce89b16201d01a3->enter($__internal_866d9efe97c579989f17a59f3017dcc826f2d783b519dbafbce89b16201d01a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_866d9efe97c579989f17a59f3017dcc826f2d783b519dbafbce89b16201d01a3->leave($__internal_866d9efe97c579989f17a59f3017dcc826f2d783b519dbafbce89b16201d01a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e77b89ec6fb5dc104d756b3795b9840242c1665aca7a6aed47de684915b8aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e77b89ec6fb5dc104d756b3795b9840242c1665aca7a6aed47de684915b8aeb->enter($__internal_4e77b89ec6fb5dc104d756b3795b9840242c1665aca7a6aed47de684915b8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4e77b89ec6fb5dc104d756b3795b9840242c1665aca7a6aed47de684915b8aeb->leave($__internal_4e77b89ec6fb5dc104d756b3795b9840242c1665aca7a6aed47de684915b8aeb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ccaa7f6bc35cbb35315fe27072882bc6e6919c1621db37c7e31367205cb8b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccaa7f6bc35cbb35315fe27072882bc6e6919c1621db37c7e31367205cb8b4e->enter($__internal_6ccaa7f6bc35cbb35315fe27072882bc6e6919c1621db37c7e31367205cb8b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ccaa7f6bc35cbb35315fe27072882bc6e6919c1621db37c7e31367205cb8b4e->leave($__internal_6ccaa7f6bc35cbb35315fe27072882bc6e6919c1621db37c7e31367205cb8b4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Madera MAJ\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
