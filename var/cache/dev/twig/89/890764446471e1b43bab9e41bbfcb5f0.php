<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* site_portfolio/index.html.twig */
class __TwigTemplate_14039fca83b6c26a09341980d1c7b91d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site_portfolio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .text_primary { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; background-color: #fff ; text-align: center; }
</style>

<header>
<div class=\"text_primary\">
    <h1>Bonjour !</h1>
    </br>
    <img src=\"profile.png\" width=300px height=300px >
    </br>

  <h8><strong>My name is Evan Léon-Persol</strong>, I am <strong> 18 years old </strong> and I am originally from <strong>Saint-Etienne</strong>.</h8>
  </br>
  <h8> I am student in <strong>B</strong>achelor <strong>U</strong>niversitaire et <strong>T</strong>echnologique in the sector <strong>R</strong>éseaux et <strong>T</strong>élécommunication</h8>
  </br>
  <h8>I'd like to move on to cybersecurity</h8>
  </br>
  <h8>Here are some links to my social networks :</h8>

</div>
</header>
<footer>
  <li> <a href= \"https://www.instagram.com/_3vannnnnnn_/\">Instagram </a></li>
  <li> <a>Email pro : evanchezlui42@gmail.com </a></li>
  <p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site_portfolio/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil{% endblock %}

{% block body %}
<style>
    .text_primary { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; background-color: #fff ; text-align: center; }
</style>

<header>
<div class=\"text_primary\">
    <h1>Bonjour !</h1>
    </br>
    <img src=\"profile.png\" width=300px height=300px >
    </br>

  <h8><strong>My name is Evan Léon-Persol</strong>, I am <strong> 18 years old </strong> and I am originally from <strong>Saint-Etienne</strong>.</h8>
  </br>
  <h8> I am student in <strong>B</strong>achelor <strong>U</strong>niversitaire et <strong>T</strong>echnologique in the sector <strong>R</strong>éseaux et <strong>T</strong>élécommunication</h8>
  </br>
  <h8>I'd like to move on to cybersecurity</h8>
  </br>
  <h8>Here are some links to my social networks :</h8>

</div>
</header>
<footer>
  <li> <a href= \"https://www.instagram.com/_3vannnnnnn_/\">Instagram </a></li>
  <li> <a>Email pro : evanchezlui42@gmail.com </a></li>
  <p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>
</footer>
{% endblock %}", "site_portfolio/index.html.twig", "C:\\Users\\evano\\Desktop\\Cours\\BUT 1\\sae 1.04\\site\\templates\\site_portfolio\\index.html.twig");
    }
}
