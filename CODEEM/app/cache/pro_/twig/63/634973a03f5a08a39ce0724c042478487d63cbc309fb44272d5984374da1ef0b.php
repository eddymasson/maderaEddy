<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig */
class __TwigTemplate_5788ac015b74a2d3787ae4e3d899a3005f3eb8e9e07206859bc0642b4cdc319f extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo ($context["id"] ?? null);
        echo "();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo ($context["id"] ?? null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo ($context["id"] ?? null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo ($context["id"] ?? null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo ($context["id"] ?? null);
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo ($context["id"] ?? null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo ($context["id"] ?? null);
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_list_link_";
        echo ($context["id"] ?? null);
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo ($context["id"] ?? null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo ($context["id"] ?? null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo ($context["id"] ?? null);
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo ($context["id"] ?? null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo ($context["id"] ?? null);
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["associationadmin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo ($context["id"] ?? null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo ($context["id"] ?? null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 160
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["associationadmin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 178
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 190
        echo ($context["id"] ?? null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            Admin.log('[";
        // line 196
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] element is an anchor, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 203
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 205
        echo ($context["id"] ?? null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 219
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 229
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 237
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 242
        echo ($context["id"] ?? null);
        echo ".modal('hide');

                    ";
        // line 244
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 245
            echo "                        ";
            // line 249
            echo "                        jQuery('#";
            echo ($context["id"] ?? null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 250
            echo ($context["id"] ?? null);
            echo "').change();

                    ";
        } else {
            // line 253
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 255
            echo ($context["id"] ?? null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", array("elementId" =>             // line 257
($context["id"] ?? null), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 258
($context["sonata_admin"] ?? null), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 259
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 260
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 261
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "code", array())));
            // line 262
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 267
            echo ($context["id"] ?? null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 268
            echo ($context["id"] ?? null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 275
            echo ($context["id"] ?? null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 280
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 285
        echo ($context["id"] ?? null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 287
        echo ($context["id"] ?? null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 290
        echo ($context["id"] ?? null);
        echo ").submit(field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 297
        echo ($context["id"] ?? null);
        echo "         = false;
    var field_dialog_content_";
        // line 298
        echo ($context["id"] ?? null);
        echo " = false;
    var field_dialog_title_";
        // line 299
        echo ($context["id"] ?? null);
        echo "   = false;

    function initialize_popup_";
        // line 301
        echo ($context["id"] ?? null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 303
        echo ($context["id"] ?? null);
        echo ") {
            field_dialog_";
        // line 304
        echo ($context["id"] ?? null);
        echo "         = jQuery(\"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_content_";
        // line 305
        echo ($context["id"] ?? null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_title_";
        // line 306
        echo ($context["id"] ?? null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 309
        echo ($context["id"] ?? null);
        echo ");

            Admin.log('[";
        // line 311
        echo ($context["id"] ?? null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 318
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 320
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 325
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 329
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 336
        echo ($context["id"] ?? null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 337
        echo ($context["id"] ?? null);
        echo ");
    }

    ";
        // line 340
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 341
            echo "        ";
            // line 344
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 346
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 350
            echo ($context["id"] ?? null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 354
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 361
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 366
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 373
            echo ($context["id"] ?? null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 376
            echo ($context["id"] ?? null);
            echo " option').get(0)) {
                jQuery('#";
            // line 377
            echo ($context["id"] ?? null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 380
            echo ($context["id"] ?? null);
            echo "').val('');
            jQuery('#";
            // line 381
            echo ($context["id"] ?? null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 388
            echo "
        // update the label
        jQuery('#";
            // line 390
            echo ($context["id"] ?? null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 392
            echo ($context["id"] ?? null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 394
            echo ($context["id"] ?? null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 397
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 399
($context["associationadmin"] ?? null), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 400
($context["associationadmin"] ?? null), "code", array()), "linkParameters" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 401
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 402
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 405
            echo ($context["id"] ?? null);
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 411
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 411,  716 => 405,  711 => 402,  709 => 401,  708 => 400,  707 => 399,  706 => 397,  696 => 394,  691 => 392,  686 => 390,  682 => 388,  675 => 381,  671 => 380,  665 => 377,  661 => 376,  655 => 373,  645 => 366,  637 => 361,  627 => 354,  620 => 350,  613 => 346,  609 => 344,  607 => 341,  605 => 340,  599 => 337,  595 => 336,  585 => 329,  578 => 325,  570 => 320,  566 => 318,  559 => 311,  554 => 309,  546 => 306,  540 => 305,  534 => 304,  530 => 303,  525 => 301,  520 => 299,  516 => 298,  512 => 297,  500 => 290,  494 => 287,  489 => 285,  482 => 280,  474 => 275,  464 => 268,  460 => 267,  453 => 262,  451 => 261,  450 => 260,  449 => 259,  448 => 258,  447 => 257,  446 => 256,  442 => 255,  438 => 253,  432 => 250,  427 => 249,  425 => 245,  423 => 244,  418 => 242,  410 => 237,  399 => 229,  386 => 219,  369 => 205,  364 => 203,  354 => 196,  345 => 190,  336 => 184,  331 => 182,  323 => 179,  317 => 178,  310 => 174,  303 => 172,  299 => 171,  291 => 168,  280 => 160,  275 => 158,  265 => 151,  261 => 150,  252 => 144,  247 => 142,  241 => 139,  236 => 137,  229 => 135,  224 => 133,  218 => 130,  207 => 122,  200 => 118,  192 => 113,  187 => 111,  177 => 104,  172 => 102,  168 => 101,  163 => 99,  151 => 90,  143 => 85,  137 => 84,  130 => 80,  126 => 79,  119 => 75,  114 => 73,  110 => 72,  105 => 70,  95 => 63,  90 => 61,  86 => 60,  81 => 58,  71 => 51,  64 => 47,  59 => 45,  45 => 34,  41 => 33,  38 => 32,  31 => 22,  29 => 21,  26 => 20,  23 => 18,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_many_association_script.html.twig");
    }
}
