<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_664265fee983d43a20a94ecd9f3a8ebe851283ae5db20f55bad7620e73178627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), ($context["field_name"] ?? null), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), ($context["field_name"] ?? null), array(), "array"), ($context["object"] ?? null), ($context["object_compare"] ?? null));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_show_compare.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_compare.html.twig");
    }
}