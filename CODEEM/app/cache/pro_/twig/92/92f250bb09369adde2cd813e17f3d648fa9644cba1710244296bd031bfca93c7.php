<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig */
class __TwigTemplate_98ceb49a15983c585178073f13b0365a5e2ecf045a8ac3dafa3f8f5aa0a65eec extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array())), "children", array()));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "required", array(), "array")) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "translation_domain", array())), "html", null, true);
                echo "
                    </th>
                ";
            }
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 34
            echo "            <tr>
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_group_field"], "children", array()));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 36
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 37
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 39
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    echo " error";
                }
                // line 40
                echo "                        \"
                        ";
                // line 41
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 42
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 44
                echo "                    >
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 48
                    $context["dummy"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_group_field"], "setrendered", array());
                    // line 49
                    echo "                        ";
                } else {
                    // line 50
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 51
                        echo "                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget', array("label_render" => false));
                        echo "
                            ";
                    } else {
                        // line 53
                        echo "                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    // line 57
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 58
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 61
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  160 => 63,  153 => 61,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  132 => 53,  126 => 51,  123 => 50,  120 => 49,  118 => 48,  112 => 46,  110 => 45,  107 => 44,  103 => 42,  101 => 41,  98 => 40,  94 => 39,  87 => 37,  84 => 36,  80 => 35,  77 => 34,  73 => 33,  68 => 30,  62 => 29,  56 => 26,  53 => 25,  49 => 23,  46 => 22,  42 => 20,  40 => 19,  37 => 18,  31 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_one_to_many_inline_table.html.twig");
    }
}
