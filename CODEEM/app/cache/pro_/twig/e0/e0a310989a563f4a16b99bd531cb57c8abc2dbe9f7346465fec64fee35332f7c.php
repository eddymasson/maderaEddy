<?php

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_e3d50485f60066d24e064fe7c011ada0ada676772b8caa8f180a01a3407e4231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 22
        $context["batchactions"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "batchactions", array());
        // line 23
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 24
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "batch", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"box box-primary\" ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 30
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? null))));
        echo "

                ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 36
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 37
            $this->displayBlock('table_header', $context, $blocks);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                        ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 82
            echo "                    </table>
                ";
        } else {
            // line 84
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 100
            echo "                ";
        }
        // line 101
        echo "
                ";
        // line 102
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? null))));
        echo "
            </div>
            ";
        // line 104
        $this->displayBlock('list_footer', $context, $blocks);
        // line 201
        echo "        </div>
        ";
        // line 202
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 203
            echo "            </form>
        ";
        }
        // line 205
        echo "    </div>
";
    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        // line 38
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 41
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                // line 42
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 45
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),             // line 47
$context["field_description"], "name", array()) == "_action") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } else {
                // line 52
                echo "                                            ";
                $context["sortable"] = false;
                // line 53
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "sortable", array()))) {
                    // line 54
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 55
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array())), "method");
                    // line 56
                    echo "                                                ";
                    $context["current"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sort_parameters"] ?? null), "filter", array()), "_sort_by", array())));
                    // line 57
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 58
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_order", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "_sort_order", array())));
                    // line 59
                    echo "                                            ";
                }
                // line 60
                echo "
                                            ";
                // line 61
                ob_start();
                // line 62
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 63
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 65
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 66
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => ("outer_list_rows_" . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getListMode", array(), "method"))), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
    }

    // line 84
    public function block_no_result_content($context, array $blocks = array())
    {
        // line 85
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 93
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "xmlHttpRequest", array())) {
            // line 94
            echo "                                        ";
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 94)->display($context);
            // line 95
            echo "                                    ";
        }
        // line 96
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
    }

    // line 104
    public function block_list_footer($context, array $blocks = array())
    {
        // line 105
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 106
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 108
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) {
                // line 109
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 110
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                    // line 111
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 158
                    echo "                                    ";
                }
                // line 159
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 163
                if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "export"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getExportFormats", array(), "method")))) {
                    // line 164
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 172
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "export", 1 => (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 175
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 184
                echo "
                                    ";
                // line 185
                $this->displayBlock('pager_results', $context, $blocks);
                // line 188
                echo "                                </div>
                            ";
            }
            // line 190
            echo "                        </div>

                        ";
            // line 192
            $this->displayBlock('pager_links', $context, $blocks);
            // line 198
            echo "                    </div>
                ";
        }
        // line 200
        echo "            ";
    }

    // line 111
    public function block_batch($context, array $blocks = array())
    {
        // line 112
        echo "                                            <script>
                                                ";
        // line 113
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 140
        echo "                                            </script>

                                        ";
        // line 142
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 155
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 113
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 114
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 142
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 143
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 151
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "translation_domain", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                            </select>
                                        ";
    }

    // line 185
    public function block_pager_results($context, array $blocks = array())
    {
        // line 186
        echo "                                        ";
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => "pager_results"), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 186)->display($context);
        // line 187
        echo "                                    ";
    }

    // line 192
    public function block_pager_links($context, array $blocks = array())
    {
        // line 193
        echo "                            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 194
            echo "                                <hr/>
                                ";
            // line 195
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => "pager_links"), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 195)->display($context);
            // line 196
            echo "                            ";
        }
        // line 197
        echo "                        ";
    }

    // line 208
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 209
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "filters", array()))) {
            // line 210
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 220
                    echo "                        ";
                    $context["filterActive"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")) &&  !twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array())), "method"));
                    // line 221
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 222
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 223
                    echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 233
    public function block_list_filters($context, array $blocks = array())
    {
        // line 234
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "filters", array())) {
            // line 235
            echo "        ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => "filter"), "method")));
            // line 236
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 237
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 240
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isChild", array()) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 245
            $context["withAdvancedFilter"] = false;
            // line 246
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 247
                echo "                                    ";
                $context["filterActive"] = (((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") && (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array"))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array())), "method"));
                // line 248
                echo "                                    ";
                $context["filterVisible"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 249
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? null)) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? null)) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 250
                if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()) === false)) {
                    // line 251
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 253
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 254
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 256
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? null)));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 260
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 272
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 273
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 274
                    echo "                                    ";
                }
                // line 275
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 280
            $context["foo"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 281
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 293
            if (($context["withAdvancedFilter"] ?? null)) {
                // line 294
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 301
            echo "                            </div>
                        </div>

                        ";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 305
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 249
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 249,  822 => 307,  811 => 305,  807 => 304,  802 => 301,  795 => 297,  790 => 294,  788 => 293,  781 => 289,  777 => 288,  771 => 285,  763 => 281,  761 => 280,  755 => 276,  741 => 275,  738 => 274,  735 => 273,  733 => 272,  719 => 265,  711 => 260,  704 => 256,  700 => 254,  697 => 253,  689 => 251,  687 => 250,  670 => 249,  667 => 248,  664 => 247,  646 => 246,  644 => 245,  637 => 241,  631 => 240,  623 => 237,  620 => 236,  617 => 235,  614 => 234,  611 => 233,  603 => 227,  590 => 223,  582 => 222,  579 => 221,  576 => 220,  571 => 219,  564 => 215,  557 => 210,  555 => 209,  552 => 208,  548 => 197,  545 => 196,  543 => 195,  540 => 194,  537 => 193,  534 => 192,  530 => 187,  527 => 186,  524 => 185,  519 => 153,  508 => 151,  504 => 150,  497 => 146,  493 => 145,  489 => 144,  484 => 143,  481 => 142,  452 => 114,  449 => 113,  443 => 156,  440 => 155,  438 => 142,  434 => 140,  432 => 113,  429 => 112,  426 => 111,  422 => 200,  418 => 198,  416 => 192,  412 => 190,  408 => 188,  406 => 185,  403 => 184,  396 => 179,  386 => 175,  381 => 173,  378 => 172,  374 => 171,  367 => 167,  362 => 164,  360 => 163,  354 => 159,  351 => 158,  348 => 111,  346 => 110,  343 => 109,  341 => 108,  337 => 106,  334 => 105,  331 => 104,  324 => 96,  321 => 95,  318 => 94,  316 => 93,  308 => 88,  303 => 85,  300 => 84,  296 => 81,  293 => 80,  288 => 77,  286 => 76,  283 => 75,  280 => 74,  274 => 70,  268 => 69,  265 => 68,  261 => 66,  257 => 65,  252 => 64,  246 => 63,  224 => 62,  222 => 61,  219 => 60,  216 => 59,  213 => 58,  210 => 57,  207 => 56,  204 => 55,  201 => 54,  198 => 53,  195 => 52,  192 => 51,  190 => 50,  187 => 49,  185 => 48,  183 => 47,  180 => 46,  178 => 45,  173 => 42,  170 => 41,  166 => 40,  162 => 38,  159 => 37,  154 => 33,  149 => 205,  145 => 203,  143 => 202,  140 => 201,  138 => 104,  133 => 102,  130 => 101,  127 => 100,  124 => 84,  120 => 82,  118 => 80,  115 => 79,  113 => 74,  110 => 73,  108 => 37,  105 => 36,  103 => 35,  100 => 34,  98 => 33,  93 => 31,  87 => 30,  80 => 29,  77 => 27,  72 => 25,  67 => 24,  64 => 23,  62 => 22,  59 => 21,  56 => 20,  50 => 18,  46 => 15,  43 => 14,  34 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_list.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list.html.twig");
    }
}
