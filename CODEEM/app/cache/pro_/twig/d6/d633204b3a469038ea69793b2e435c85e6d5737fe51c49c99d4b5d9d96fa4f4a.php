<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_46073a95d710120fed82004e7012d88e2ee23f0b53f0804b72557ea4968a5e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
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

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 30
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "ancestorClass", array())));
            }
            // line 33
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "firstClass", array())));
            }
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attributes", array());
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "current", array()) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["macros"] ?? null), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "linkAttributes", array())), ($context["attributes"] ?? null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["macros"] ?? null), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "labelAttributes", array())), ($context["attributes"] ?? null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  118 => 57,  110 => 53,  108 => 52,  106 => 51,  104 => 50,  102 => 49,  98 => 47,  94 => 45,  92 => 44,  90 => 43,  87 => 41,  85 => 40,  83 => 39,  80 => 37,  78 => 36,  75 => 34,  73 => 33,  70 => 31,  68 => 30,  66 => 29,  64 => 28,  62 => 27,  60 => 26,  57 => 25,  55 => 24,  52 => 23,  44 => 18,  39 => 17,  36 => 16,  34 => 15,  31 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
