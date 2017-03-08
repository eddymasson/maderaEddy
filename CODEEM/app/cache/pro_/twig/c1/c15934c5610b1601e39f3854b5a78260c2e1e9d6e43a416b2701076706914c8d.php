<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cfbbc599028416a12543bbb2608c74a762b7ce2825491b646be4be2a80e43993 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\CODE\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
