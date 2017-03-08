<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_120dcd3b0ceee087fc5a4e5b90b25e3c6e827a2c84d8f6885569c82d3a1cbbfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "hasassociationadmin", array())) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array())), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "formfielddescriptions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "name", array()), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "value", array())), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 24
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 25
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "value", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 26
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 27
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array()))));
                    // line 28
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 29
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <div id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 45
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) == "list") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && ($context["btn_list"] ?? null));
            // line 46
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) != "admin") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? null));
            // line 47
            echo "            ";
            if ((($context["display_btn_list"] ?? null) || ($context["display_btn_add"] ?? null))) {
                // line 48
                echo "            <div class=\"btn-group\">
                ";
                // line 49
                if (($context["display_btn_list"] ?? null)) {
                    // line 50
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 51
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 59
                echo "
                ";
                // line 60
                if (($context["display_btn_add"] ?? null)) {
                    // line 61
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 62
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 70
                echo "            </div>
            ";
            }
            // line 72
            echo "
            ";
            // line 73
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) == "list") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && ($context["btn_delete"] ?? null))) {
                // line 74
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 75
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 83
            echo "        </div>

        ";
            // line 85
            $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 85)->display($context);
            // line 86
            echo "    </div>

    ";
            // line 88
            $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", 88)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 88,  206 => 86,  204 => 85,  200 => 83,  194 => 80,  188 => 77,  183 => 75,  180 => 74,  178 => 73,  175 => 72,  171 => 70,  165 => 67,  159 => 64,  154 => 62,  149 => 61,  147 => 60,  144 => 59,  138 => 56,  132 => 53,  127 => 51,  122 => 50,  120 => 49,  117 => 48,  114 => 47,  111 => 46,  109 => 45,  105 => 44,  102 => 43,  96 => 40,  91 => 39,  85 => 36,  81 => 34,  75 => 31,  72 => 30,  70 => 29,  67 => 28,  65 => 27,  64 => 26,  63 => 25,  62 => 24,  60 => 23,  58 => 22,  53 => 21,  51 => 20,  46 => 19,  36 => 16,  31 => 15,  29 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_one.html.twig");
    }
}
