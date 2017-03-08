<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_7c64d978e93361f3ff0e44d94cc3a87bbd215bd9f51b75177c9d6b22bbb3900f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                ";
        // line 18
        $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "icon", array()), "")) : (""));
        // line 19
        echo "                ";
        echo ($context["icon"] ?? null);
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 25
        if ((($context["pager"] ?? null) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["pager"] ?? null), "getNbResults", array(), "method") > 0))) {
            // line 26
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pager"] ?? null), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 27
($context["admin"] ?? null), "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "isGranted", array(0 => "LIST"), "method"))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pager"] ?? null), "getResults", array(), "method")))) {
            // line 40
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["pager"] ?? null), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 43
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 44
                echo "                            ";
                if (($context["link"] ?? null)) {
                    // line 45
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 47
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 53
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 59
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  127 => 55,  123 => 53,  118 => 50,  112 => 49,  106 => 47,  98 => 45,  95 => 44,  92 => 43,  88 => 42,  84 => 40,  82 => 39,  78 => 37,  70 => 33,  67 => 32,  59 => 28,  57 => 27,  52 => 26,  50 => 25,  43 => 21,  37 => 19,  35 => 18,  30 => 15,  27 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Block:block_search_result.html.twig", "C:\\wamp\\www\\CODE\\vendor\\sonata-project\\admin-bundle/Resources/views/Block/block_search_result.html.twig");
    }
}
