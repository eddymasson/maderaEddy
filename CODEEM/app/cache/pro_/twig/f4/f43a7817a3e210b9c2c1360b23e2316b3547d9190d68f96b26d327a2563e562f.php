<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2f15949dbf1c6dd1a5a5eb628432e631f37e68c6b31478f77abd59b77e9cd575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 8,  39 => 6,  33 => 3,  30 => 1,  26 => 11,  24 => 6,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\CODE\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
