<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_7af5d4e6244218fe3e4f0f86db84bb56555629d66dc92dcdf97dce1e5558b599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc login-page\"";
    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin_pool"] ?? null), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin_pool"] ?? null), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin_pool"] ?? null), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? null)), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  77 => 25,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  55 => 15,  52 => 14,  46 => 12,  41 => 9,  36 => 6,  31 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\checkEmail.html.twig");
    }
}
