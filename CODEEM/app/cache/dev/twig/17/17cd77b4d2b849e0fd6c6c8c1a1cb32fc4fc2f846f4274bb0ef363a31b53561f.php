<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1f43f2a175606913c2b5b9567c7ebcfaca2f267a73b22ee03dfac38e0cc4cbc3 extends Twig_Template
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
        $__internal_d40d51e93a4ac8807fae91c059c8613203ccc618ce6a9789e66e4601da92c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40d51e93a4ac8807fae91c059c8613203ccc618ce6a9789e66e4601da92c5c5->enter($__internal_d40d51e93a4ac8807fae91c059c8613203ccc618ce6a9789e66e4601da92c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40d51e93a4ac8807fae91c059c8613203ccc618ce6a9789e66e4601da92c5c5->leave($__internal_d40d51e93a4ac8807fae91c059c8613203ccc618ce6a9789e66e4601da92c5c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9da0d65f5d7534f2cae435c46ee103ab911c4be123f4c14c2e172a803fefd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9da0d65f5d7534f2cae435c46ee103ab911c4be123f4c14c2e172a803fefd69->enter($__internal_d9da0d65f5d7534f2cae435c46ee103ab911c4be123f4c14c2e172a803fefd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9da0d65f5d7534f2cae435c46ee103ab911c4be123f4c14c2e172a803fefd69->leave($__internal_d9da0d65f5d7534f2cae435c46ee103ab911c4be123f4c14c2e172a803fefd69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c90a0808f0a1a7e0c286fc3b4f0f1c274cf242c23b835ecb7f8892cc97247a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90a0808f0a1a7e0c286fc3b4f0f1c274cf242c23b835ecb7f8892cc97247a0b->enter($__internal_c90a0808f0a1a7e0c286fc3b4f0f1c274cf242c23b835ecb7f8892cc97247a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c90a0808f0a1a7e0c286fc3b4f0f1c274cf242c23b835ecb7f8892cc97247a0b->leave($__internal_c90a0808f0a1a7e0c286fc3b4f0f1c274cf242c23b835ecb7f8892cc97247a0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_341d394990ff7f9478aa51ddf2517a3de38a9fdc3f6fff9c2543f6ed37f0980d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341d394990ff7f9478aa51ddf2517a3de38a9fdc3f6fff9c2543f6ed37f0980d->enter($__internal_341d394990ff7f9478aa51ddf2517a3de38a9fdc3f6fff9c2543f6ed37f0980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_341d394990ff7f9478aa51ddf2517a3de38a9fdc3f6fff9c2543f6ed37f0980d->leave($__internal_341d394990ff7f9478aa51ddf2517a3de38a9fdc3f6fff9c2543f6ed37f0980d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Madera MAJ\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
