<?php

/* :default:index.html.twig */
class __TwigTemplate_5012c223c8fbc5ec657e249180947d306d7d0c820c13d92addc3f5cda43afba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sidebar sidebar-main\">
        <div class=\"sidebar-content\">

            <!-- User menu -->
            <div class=\"sidebar-user\">
                <div class=\"category-content\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                            <span class=\"media-heading text-semibold\">Victoria Baker</span>
                            <div class=\"text-size-mini text-muted\">
                                <i class=\"icon-pin text-size-small\"></i> &nbsp;Santa Ana, CA
                            </div>
                        </div>

                        <div class=\"media-right media-middle\">
                            <ul class=\"icons-list\">
                                <li>
                                    <a href=\"#\"><i class=\"icon-cog3\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class=\"sidebar-category sidebar-category-visible\">
                <div class=\"category-content no-padding\">
                    <ul class=\"navigation navigation-main navigation-accordion\">

                        <!-- Main -->
                        <li class=\"navigation-header\"><span>Main</span> <i class=\"icon-menu\" title=\"\" data-original-title=\"Main pages\"></i></li>
                        <li class=\"active\"><a href=\"index.html\"><i class=\"icon-home4\"></i> <span>Dashboard</span></a></li>
                        <li>
                            <a href=\"#\" class=\"has-ul\"><i class=\"icon-stack2\"></i> <span>Page layouts</span></a>
                            <ul class=\"hidden-ul\">
                                <li><a href=\"layout_navbar_fixed.html\">Fixed navbar</a></li>
                                <li><a href=\"layout_navbar_sidebar_fixed.html\">Fixed navbar &amp; sidebar</a></li>
                                <li><a href=\"layout_sidebar_fixed_native.html\">Fixed sidebar native scroll</a></li>
                                <li><a href=\"layout_navbar_hideable.html\">Hideable navbar</a></li>
                                <li><a href=\"layout_navbar_hideable_sidebar.html\">Hideable &amp; fixed sidebar</a></li>
                                <li><a href=\"layout_footer_fixed.html\">Fixed footer</a></li>
                                <li class=\"navigation-divider\"></li>
                                <li><a href=\"boxed_default.html\">Boxed with default sidebar</a></li>
                                <li><a href=\"boxed_mini.html\">Boxed with mini sidebar</a></li>
                                <li><a href=\"boxed_full.html\">Boxed full width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" class=\"has-ul\"><i class=\"icon-copy\"></i> <span>Layouts</span></a>
                            <ul class=\"hidden-ul\">
                                <li><a href=\"../../../layout_1/LTR/index.html\" id=\"layout1\">Layout 1</a></li>
                                <li><a href=\"index.html\" id=\"layout2\">Layout 2 <span class=\"label bg-warning-400\">Current</span></a></li>
                                <li><a href=\"../../../layout_3/LTR/index.html\" id=\"layout3\">Layout 3</a></li>
                                <li><a href=\"../../../layout_4/LTR/index.html\" id=\"layout4\">Layout 4</a></li>
                                <li><a href=\"../../../layout_5/LTR/index.html\" id=\"layout5\">Layout 5</a></li>
                                <li class=\"disabled\"><a href=\"../../../layout_6/LTR/index.html\" id=\"layout6\">Layout 6 <span class=\"label label-transparent\">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" class=\"has-ul\"><i class=\"icon-droplet2\"></i> <span>Color system</span></a>
                            <ul class=\"hidden-ul\">
                                <li><a href=\"colors_primary.html\">Primary palette</a></li>
                                <li><a href=\"colors_danger.html\">Danger palette</a></li>
                                <li><a href=\"colors_success.html\">Success palette</a></li>
                                <li><a href=\"colors_warning.html\">Warning palette</a></li>
                                <li><a href=\"colors_info.html\">Info palette</a></li>
                                <li class=\"navigation-divider\"></li>
                                <li><a href=\"colors_pink.html\">Pink palette</a></li>
                                <li><a href=\"colors_violet.html\">Violet palette</a></li>
                                <li><a href=\"colors_purple.html\">Purple palette</a></li>
                                <li><a href=\"colors_indigo.html\">Indigo palette</a></li>
                                <li><a href=\"colors_blue.html\">Blue palette</a></li>
                                <li><a href=\"colors_teal.html\">Teal palette</a></li>
                                <li><a href=\"colors_green.html\">Green palette</a></li>
                                <li><a href=\"colors_orange.html\">Orange palette</a></li>
                                <li><a href=\"colors_brown.html\">Brown palette</a></li>
                                <li><a href=\"colors_grey.html\">Grey palette</a></li>
                                <li><a href=\"colors_slate.html\">Slate palette</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" class=\"has-ul\"><i class=\"icon-stack\"></i> <span>Starter kit</span></a>
                            <ul class=\"hidden-ul\">
                                <li><a href=\"starters/horizontal_nav.html\">Horizontal navigation</a></li>
                                <li><a href=\"starters/1_col.html\">1 column</a></li>
                                <li><a href=\"starters/2_col.html\">2 columns</a></li>
                                <li>
                                    <a href=\"#\" class=\"has-ul\">3 columns</a>
                                    <ul class=\"hidden-ul\">
                                        <li><a href=\"starters/3_col_dual.html\">Dual sidebars</a></li>
                                        <li><a href=\"starters/3_col_double.html\">Double sidebars</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"starters/4_col.html\">4 columns</a></li>
                                <li>
                                    <a href=\"#\" class=\"has-ul\">Detached layout</a>
                                    <ul class=\"hidden-ul\">
                                        <li><a href=\"starters/detached_left.html\">Left sidebar</a></li>
                                        <li><a href=\"starters/detached_right.html\">Right sidebar</a></li>
                                        <li><a href=\"starters/detached_sticky.html\">Sticky sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"starters/layout_boxed.html\">Boxed layout</a></li>
                                <li class=\"navigation-divider\"></li>
                                <li><a href=\"starters/layout_navbar_fixed_main.html\">Fixed main navbar</a></li>
                                <li><a href=\"starters/layout_navbar_fixed_secondary.html\">Fixed secondary navbar</a></li>
                                <li><a href=\"starters/layout_navbar_fixed_both.html\">Both navbars fixed</a></li>
                                <li><a href=\"starters/layout_fixed.html\">Fixed layout</a></li>
                            </ul>
                        </li>
                        <li><a href=\"changelog.html\"><i class=\"icon-list-unordered\"></i> <span>Changelog <span class=\"label bg-blue-400\">1.5</span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>
                        <li><a href=\"../../RTL/default/index.html\"><i class=\"icon-width\"></i> <span></span></a></li>

                        <!-- /main -->






                    </ul>
                </div>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
";
    }

    // line 159
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 160
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/core.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/components.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 163,  201 => 162,  197 => 161,  192 => 160,  189 => 159,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "C:\\wamp\\www\\CODE\\app/Resources\\views/default/index.html.twig");
    }
}
