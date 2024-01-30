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

/* site_portfolio/cv.html.twig */
class __TwigTemplate_60a9a101c574daf4764f6f30419ad2da extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/cv.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "site_portfolio/cv.html.twig", 1);
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

        echo "Présentation";
        
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
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>

<form id=\"form\">
    <!-- Les autres champs du formulaire ici -->
    <label for=\"nom\">Nom:</label><br>
    <input type=\"text\" id=\"nom\" name=\"nom\"><br>
    <label for=\"prenom\">Prénom:</label><br>
    <input type=\"text\" id=\"prenom\" name=\"prenom\"><br>
    <label for=\"email\">Email:</label><br>
    <input type=\"email\" id=\"email\" name=\"email\"><br>
    <label for=\"message\">Message:</label><br>
    <textarea id=\"message\" name=\"message\"></textarea><br>

    <!-- Bouton de téléchargement -->
    <button type=\"button\" id=\"download\">Télécharger le cv </button>
</form>

<script>
document.getElementById('download').addEventListener('click', function () {
    // On vérifie que tous les champs du formulaire sont remplis
    if (document.getElementById('nom').value === '' || 
        document.getElementById('prenom').value === '' || 
        document.getElementById('email').value === '' || 
        document.getElementById('message').value === '') {
        alert('Veuillez remplir tous les champs du formulaire avant de télécharger le dossier.');
        return;
    }

    var a = document.createElement('a');
    a.href = 'CV.pdf'; // Remplacez par l'URL référencée du dossier à télécharger
    a.download = 'Cv_evan_leon_persol'; // Remplacez par le nom que vous souhaitez donner au dossier téléchargé
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
});
</script>
</br>
<p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site_portfolio/cv.html.twig";
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
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Présentation{% endblock %}

{% block body %}
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>

<form id=\"form\">
    <!-- Les autres champs du formulaire ici -->
    <label for=\"nom\">Nom:</label><br>
    <input type=\"text\" id=\"nom\" name=\"nom\"><br>
    <label for=\"prenom\">Prénom:</label><br>
    <input type=\"text\" id=\"prenom\" name=\"prenom\"><br>
    <label for=\"email\">Email:</label><br>
    <input type=\"email\" id=\"email\" name=\"email\"><br>
    <label for=\"message\">Message:</label><br>
    <textarea id=\"message\" name=\"message\"></textarea><br>

    <!-- Bouton de téléchargement -->
    <button type=\"button\" id=\"download\">Télécharger le cv </button>
</form>

<script>
document.getElementById('download').addEventListener('click', function () {
    // On vérifie que tous les champs du formulaire sont remplis
    if (document.getElementById('nom').value === '' || 
        document.getElementById('prenom').value === '' || 
        document.getElementById('email').value === '' || 
        document.getElementById('message').value === '') {
        alert('Veuillez remplir tous les champs du formulaire avant de télécharger le dossier.');
        return;
    }

    var a = document.createElement('a');
    a.href = 'CV.pdf'; // Remplacez par l'URL référencée du dossier à télécharger
    a.download = 'Cv_evan_leon_persol'; // Remplacez par le nom que vous souhaitez donner au dossier téléchargé
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
});
</script>
</br>
<p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>
{% endblock %}
", "site_portfolio/cv.html.twig", "C:\\Users\\evano\\Desktop\\Cours\\BUT 1\\sae 1.04\\site\\templates\\site_portfolio\\cv.html.twig");
    }
}
