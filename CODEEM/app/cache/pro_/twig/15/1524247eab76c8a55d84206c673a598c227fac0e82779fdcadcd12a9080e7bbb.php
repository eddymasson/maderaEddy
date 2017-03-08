<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_a269f8691cbf959cbb1b48c8cd7b5bb9a73276d04c1f6c55de1d2ed2401ab4c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:user_block.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
