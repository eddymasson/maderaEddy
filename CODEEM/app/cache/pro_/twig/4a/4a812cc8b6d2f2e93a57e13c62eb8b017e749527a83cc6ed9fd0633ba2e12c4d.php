<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_f721283047bc495cb57fb9c0ca978fe33fe21f94a90e7be3c90038adf3b217fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = (((($context["route"] ?? null) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, ($context["route"] ?? null))));
        // line 15
        echo "
    ";
        // line 16
        if (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
($context["route"] ?? null)) &&         // line 19
($context["action"] ?? null)) && twig_get_attribute($this->env, $this->getSourceContext(),         // line 20
($context["admin"] ?? null), "hasRoute", array(0 => ($context["route"] ?? null)), "method")) && twig_get_attribute($this->env, $this->getSourceContext(),         // line 21
($context["admin"] ?? null), "isGranted", array(0 => ($context["action"] ?? null), 1 => ((twig_in_filter(($context["action"] ?? null), array(0 => "VIEW", 1 => "EDIT"))) ? (($context["object"] ?? null)) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateObjectUrl", array(0 => ($context["route"] ?? null), 1 => ($context["object"] ?? null), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 37
            echo "</a>
    ";
        } else {
            // line 39
            echo "        ";
            $context["isEditable"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "editable", array())) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method"));
            // line 40
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType(twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "type", array()));
            // line 41
            echo "
        ";
            // line 42
            if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
                // line 43
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge(((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 45
($context["admin"] ?? null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getPersistentParameters", array()), array())) : (array())), array("context" => "list", "field" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 47
($context["field_description"] ?? null), "name", array()), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 48
($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "code" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 49
($context["admin"] ?? null), "code", array(0 => ($context["object"] ?? null)), "method"))));
                // line 52
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 53
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 56
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "</td>
";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        ob_start();
        // line 26
        echo "                ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 27
            echo "                    ";
            $context["collapse"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "collapse", array());
            // line 28
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 33
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 35
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "            ";
    }

    // line 52
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? null), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "type", array()) == "date") &&  !twig_test_empty(($context["value"] ?? null)))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "format", array(0 => "Y-m-d"), "method")) : (($context["value"] ?? null))), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  143 => 36,  140 => 35,  134 => 33,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  99 => 59,  96 => 58,  90 => 56,  84 => 53,  79 => 52,  77 => 49,  76 => 48,  75 => 47,  74 => 45,  72 => 43,  70 => 42,  67 => 41,  64 => 40,  61 => 39,  57 => 37,  55 => 24,  51 => 23,  49 => 21,  48 => 20,  47 => 19,  46 => 18,  45 => 17,  44 => 16,  41 => 15,  38 => 14,  36 => 13,  24 => 12,  21 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_list_field.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
