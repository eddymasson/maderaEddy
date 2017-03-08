<?php

/* ::layout.html.twig */
class __TwigTemplate_dd9abe20a04e4e682bfb04a2349e144792b3f27727b743eae0b0cedd74a9066a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda18006d1040f9ab8bca38a62862fda0e8d31f4bc0960b7e8939ec1931532f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda18006d1040f9ab8bca38a62862fda0e8d31f4bc0960b7e8939ec1931532f2->enter($__internal_fda18006d1040f9ab8bca38a62862fda0e8d31f4bc0960b7e8939ec1931532f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Création de devis</h1>
      <p>
       Selectionnez les modules à inserer
      </p>
      <p>
       
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
       
        
        </ul>

        <h4>Dernières annonces</h4>
      <td><input type=\"submit\" value=\"Ajouter\" ></td>
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
</body>
</html>";
        
        $__internal_fda18006d1040f9ab8bca38a62862fda0e8d31f4bc0960b7e8939ec1931532f2->leave($__internal_fda18006d1040f9ab8bca38a62862fda0e8d31f4bc0960b7e8939ec1931532f2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0d06e82aaec2db2dfcc3391a51de9b9264a2cb076f7a5e8281b6998a117821c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d06e82aaec2db2dfcc3391a51de9b9264a2cb076f7a5e8281b6998a117821c->enter($__internal_b0d06e82aaec2db2dfcc3391a51de9b9264a2cb076f7a5e8281b6998a117821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_b0d06e82aaec2db2dfcc3391a51de9b9264a2cb076f7a5e8281b6998a117821c->leave($__internal_b0d06e82aaec2db2dfcc3391a51de9b9264a2cb076f7a5e8281b6998a117821c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ab883067bd9e0742f7c963b1707a25ff8e1c78f4fe63effa305797489fec193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab883067bd9e0742f7c963b1707a25ff8e1c78f4fe63effa305797489fec193->enter($__internal_5ab883067bd9e0742f7c963b1707a25ff8e1c78f4fe63effa305797489fec193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_5ab883067bd9e0742f7c963b1707a25ff8e1c78f4fe63effa305797489fec193->leave($__internal_5ab883067bd9e0742f7c963b1707a25ff8e1c78f4fe63effa305797489fec193_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_138981c2efc13a7813ed0b56e3e9c765cc845c39694013c6b215a47d6ec4a67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138981c2efc13a7813ed0b56e3e9c765cc845c39694013c6b215a47d6ec4a67d->enter($__internal_138981c2efc13a7813ed0b56e3e9c765cc845c39694013c6b215a47d6ec4a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        ";
        
        $__internal_138981c2efc13a7813ed0b56e3e9c765cc845c39694013c6b215a47d6ec4a67d->leave($__internal_138981c2efc13a7813ed0b56e3e9c765cc845c39694013c6b215a47d6ec4a67d_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0e3d509917db7d590630e14714f90d4fda26715eb7c021a6403416fa7899bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e3d509917db7d590630e14714f90d4fda26715eb7c021a6403416fa7899bc6->enter($__internal_f0e3d509917db7d590630e14714f90d4fda26715eb7c021a6403416fa7899bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_f0e3d509917db7d590630e14714f90d4fda26715eb7c021a6403416fa7899bc6->leave($__internal_f0e3d509917db7d590630e14714f90d4fda26715eb7c021a6403416fa7899bc6_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 55,  145 => 54,  139 => 53,  132 => 42,  126 => 41,  118 => 13,  116 => 12,  110 => 11,  98 => 9,  89 => 58,  87 => 53,  80 => 49,  72 => 43,  70 => 41,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Création de devis</h1>
      <p>
       Selectionnez les modules à inserer
      </p>
      <p>
       
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
       
        
        </ul>

        <h4>Dernières annonces</h4>
      <td><input type=\"submit\" value=\"Ajouter\" ></td>
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\wamp\\www\\CODE\\app/Resources\\views/layout.html.twig");
    }
}
