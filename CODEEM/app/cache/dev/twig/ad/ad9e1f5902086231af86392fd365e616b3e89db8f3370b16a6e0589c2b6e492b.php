<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_24824e6c00b655c9cd56a3925726f178da1e6ce6e196a5ef54e9a373739e1c9c extends Twig_Template
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
        $__internal_f7ad89fb81bde77fa50640394c0caf893bd1a7998cb521cfa7106ffce5d26db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ad89fb81bde77fa50640394c0caf893bd1a7998cb521cfa7106ffce5d26db8->enter($__internal_f7ad89fb81bde77fa50640394c0caf893bd1a7998cb521cfa7106ffce5d26db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ad89fb81bde77fa50640394c0caf893bd1a7998cb521cfa7106ffce5d26db8->leave($__internal_f7ad89fb81bde77fa50640394c0caf893bd1a7998cb521cfa7106ffce5d26db8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_587ede78e7ff4d7eda6239578e1a4dfe50d0ed6a2984bb38e6b65f9818f838c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587ede78e7ff4d7eda6239578e1a4dfe50d0ed6a2984bb38e6b65f9818f838c2->enter($__internal_587ede78e7ff4d7eda6239578e1a4dfe50d0ed6a2984bb38e6b65f9818f838c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_587ede78e7ff4d7eda6239578e1a4dfe50d0ed6a2984bb38e6b65f9818f838c2->leave($__internal_587ede78e7ff4d7eda6239578e1a4dfe50d0ed6a2984bb38e6b65f9818f838c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41ed7f3a68cdefe4668061f867c925a4772a070654a24f1cc131b17c29b53591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ed7f3a68cdefe4668061f867c925a4772a070654a24f1cc131b17c29b53591->enter($__internal_41ed7f3a68cdefe4668061f867c925a4772a070654a24f1cc131b17c29b53591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_41ed7f3a68cdefe4668061f867c925a4772a070654a24f1cc131b17c29b53591->leave($__internal_41ed7f3a68cdefe4668061f867c925a4772a070654a24f1cc131b17c29b53591_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9242e1d69c93818c252c98942c04354475749efd129f0c91b27217e7cd0dfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9242e1d69c93818c252c98942c04354475749efd129f0c91b27217e7cd0dfaf->enter($__internal_d9242e1d69c93818c252c98942c04354475749efd129f0c91b27217e7cd0dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9242e1d69c93818c252c98942c04354475749efd129f0c91b27217e7cd0dfaf->leave($__internal_d9242e1d69c93818c252c98942c04354475749efd129f0c91b27217e7cd0dfaf_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\CODE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
