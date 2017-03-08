<?php

/* @SonataUser/Admin/Core/user_block.html.twig */
class __TwigTemplate_3d4d4a29e7a1d4f42d55a3c067683da0d992fb7694210382adbf32ac7e26f6b2 extends Twig_Template
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
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 5
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 6
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "userAdmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())), "method"))), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "userAdmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())), "method"))), "method")));
            // line 7
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 8
            echo "        ";
            $context["_user_image"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "defaultAvatar", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "defaultAvatar", array()))) : (null));
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            // line 11
            echo "
        ";
            // line 12
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "impersonating", array()))) {
                // line 13
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 14
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_user"] ?? null), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 15
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        <li class=\"user-header ";
            // line 18
            echo twig_escape_filter($this->env, ($context["_bg_class"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 19
            if (($context["_user_image"] ?? null)) {
                // line 20
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, ($context["_user_image"] ?? null), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 31
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["_profile_uri"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, ($context["_profile_text"] ?? null), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["_logout_uri"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, ($context["_logout_text"] ?? null), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  95 => 34,  90 => 31,  83 => 22,  77 => 20,  75 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataUser/Admin/Core/user_block.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Core\\user_block.html.twig");
    }
}
