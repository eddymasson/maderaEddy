<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_3dae421d7003b6ced22fb57a78f8374d23a43b8e334ef3bd8708667d3df8ea69 extends Twig_Template
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
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Core/user_block.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
