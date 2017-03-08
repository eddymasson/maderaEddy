<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_0e1bfb4d94ea5ca36266d2c5e8fde0434125e41bf0d38de205937ead94f58f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? null) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? null);
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpMenuBundle::menu.html.twig", "C:\\wamp\\www\\CODE\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
