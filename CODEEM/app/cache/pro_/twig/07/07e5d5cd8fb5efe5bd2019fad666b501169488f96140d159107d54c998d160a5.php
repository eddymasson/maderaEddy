<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_fbbe470dc5f99c7fbb01fe19d5e870e9a56f3fbe9744fe592a8ce6dbf392d67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 24,  33 => 14,  31 => 13,  26 => 12,  20 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:colorpicker.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
