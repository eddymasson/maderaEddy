<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_123614ee424826d887b1ad4723f4840abb27705626a8d89f4bcb1843eac3ecd1 extends Twig_Template
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
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 4,  23 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle::layout.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\user-bundle/Resources/views/layout.html.twig");
    }
}
