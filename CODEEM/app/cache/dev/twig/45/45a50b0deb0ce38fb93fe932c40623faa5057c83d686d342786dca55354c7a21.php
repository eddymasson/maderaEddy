<?php

/* ::layout.html.twig */
class __TwigTemplate_9f98685d373e27567a3f161863a98c66423ad1dcd5ab0d2a4b5c37b6506b4aac extends Twig_Template
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
        $__internal_dcbaccc00967944b9db085f8379237ff488d579bb846a430a7aa4e9b8220729b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbaccc00967944b9db085f8379237ff488d579bb846a430a7aa4e9b8220729b->enter($__internal_dcbaccc00967944b9db085f8379237ff488d579bb846a430a7aa4e9b8220729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_dcbaccc00967944b9db085f8379237ff488d579bb846a430a7aa4e9b8220729b->leave($__internal_dcbaccc00967944b9db085f8379237ff488d579bb846a430a7aa4e9b8220729b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_0484f5f02c86967fdd8e6c66b7bb785fe98f67c4399938331e6e6a19fdef9b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0484f5f02c86967fdd8e6c66b7bb785fe98f67c4399938331e6e6a19fdef9b5e->enter($__internal_0484f5f02c86967fdd8e6c66b7bb785fe98f67c4399938331e6e6a19fdef9b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_0484f5f02c86967fdd8e6c66b7bb785fe98f67c4399938331e6e6a19fdef9b5e->leave($__internal_0484f5f02c86967fdd8e6c66b7bb785fe98f67c4399938331e6e6a19fdef9b5e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07aa20b882721d63ec5d332bfd43af2532b269aaeb54adfee45239eb2a071530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aa20b882721d63ec5d332bfd43af2532b269aaeb54adfee45239eb2a071530->enter($__internal_07aa20b882721d63ec5d332bfd43af2532b269aaeb54adfee45239eb2a071530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_07aa20b882721d63ec5d332bfd43af2532b269aaeb54adfee45239eb2a071530->leave($__internal_07aa20b882721d63ec5d332bfd43af2532b269aaeb54adfee45239eb2a071530_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5d07d50cc05ca5ae6b040be5d14312cdecd96b9f69a3c49de1000683df41190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d07d50cc05ca5ae6b040be5d14312cdecd96b9f69a3c49de1000683df41190->enter($__internal_e5d07d50cc05ca5ae6b040be5d14312cdecd96b9f69a3c49de1000683df41190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        ";
        
        $__internal_e5d07d50cc05ca5ae6b040be5d14312cdecd96b9f69a3c49de1000683df41190->leave($__internal_e5d07d50cc05ca5ae6b040be5d14312cdecd96b9f69a3c49de1000683df41190_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_baa5d30bcea71dad32bd17dd66922a2fc988f7df810852c167a919ad7ebb25f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa5d30bcea71dad32bd17dd66922a2fc988f7df810852c167a919ad7ebb25f1->enter($__internal_baa5d30bcea71dad32bd17dd66922a2fc988f7df810852c167a919ad7ebb25f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_baa5d30bcea71dad32bd17dd66922a2fc988f7df810852c167a919ad7ebb25f1->leave($__internal_baa5d30bcea71dad32bd17dd66922a2fc988f7df810852c167a919ad7ebb25f1_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Madera MAJ\\app/Resources\\views/layout.html.twig");
    }
}
