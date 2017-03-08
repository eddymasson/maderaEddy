<?php

/* @SonataAdmin/Core/tab_menu_template.html.twig */
class __TwigTemplate_30368ebe232d4b0b6e2741633ef9aea6a322c77af9d109c3f969f7a024291cb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
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
    public function block_item($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 4);
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "displayed", array())) {
            // line 6
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attributes", array());
            // line 7
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? null)) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 24
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 30
($context["item"] ?? null), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "ancestorClass", array())));
                }
            }
            // line 35
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "firstClass", array())));
            }
            // line 38
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? null)) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? null)) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(),             // line 62
($context["item"] ?? null), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "current", array()) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? null)) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 78
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 123
($context["item"] ?? null), "label", array()), twig_get_attribute($this->env, $this->getSourceContext(),         // line 124
($context["item"] ?? null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), twig_get_attribute($this->env, $this->getSourceContext(),         // line 125
($context["item"] ?? null), "getExtra", array(0 => "translation_domain", 1 => ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 127
($context["item"] ?? null), "getParent", array(), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 127,  277 => 125,  276 => 124,  275 => 123,  274 => 122,  271 => 121,  262 => 116,  256 => 114,  254 => 113,  249 => 112,  247 => 111,  245 => 110,  243 => 109,  241 => 108,  239 => 107,  236 => 106,  233 => 105,  225 => 101,  219 => 99,  217 => 98,  212 => 97,  209 => 96,  206 => 95,  198 => 91,  192 => 89,  190 => 88,  183 => 87,  180 => 86,  177 => 85,  171 => 81,  167 => 79,  165 => 78,  162 => 77,  155 => 72,  153 => 71,  148 => 68,  144 => 65,  140 => 63,  138 => 62,  135 => 61,  133 => 60,  129 => 59,  126 => 57,  124 => 56,  121 => 54,  119 => 53,  116 => 51,  113 => 49,  111 => 48,  109 => 47,  106 => 45,  104 => 44,  102 => 43,  99 => 41,  96 => 39,  94 => 38,  91 => 36,  89 => 35,  85 => 31,  83 => 30,  81 => 29,  79 => 28,  77 => 27,  73 => 25,  71 => 24,  69 => 23,  67 => 22,  64 => 21,  62 => 19,  59 => 17,  55 => 15,  53 => 14,  51 => 12,  48 => 10,  46 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Core/tab_menu_template.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\tab_menu_template.html.twig");
    }
}
