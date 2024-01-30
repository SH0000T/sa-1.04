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

/* site_portfolio/portfolio.html.twig */
class __TwigTemplate_07751ed92cc5a6a4eb1a6bb755d031dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "site_portfolio/portfolio.html.twig", 1);
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

        echo "Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h2> Portfolio </h2>
</br>

<div class=\"container\">
    <h6>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications</h6>
    <div class=\"progress mb-3\">
    <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>

</div>

<div class=\"container\">
    <h6> Comprendre les principes et standards du codage de l’information</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Configurer les fonctions de base du réseau local</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6> Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis </h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Savoir identifier les dysfonctionnements du réseau local</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Installer un poste client</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6> Mesurer et analyser les signaux</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Déployer des supports de transmission</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Connecter les systèmes de ToIP</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Communiquer avec un client ou un collaborateur</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Utiliser un système informatique et ses outils</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Lire, exécuter, corriger et modifier un programme</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Traduire un algorithme, dans un langage et pour un environnement donné</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Connaître l’architecture et les technologies d’un site Web</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Choisir les mécanismes de gestion de données adaptés au développement de l’outil</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>S’intégrer dans un environnement propice au développement et au travail collaboratif</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>
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
        return "site_portfolio/portfolio.html.twig";
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
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Portfolio{% endblock %}


{% block body %}

<h2> Portfolio </h2>
</br>

<div class=\"container\">
    <h6>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications</h6>
    <div class=\"progress mb-3\">
    <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>

</div>

<div class=\"container\">
    <h6> Comprendre les principes et standards du codage de l’information</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Configurer les fonctions de base du réseau local</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6> Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis </h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Savoir identifier les dysfonctionnements du réseau local</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Installer un poste client</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6> Mesurer et analyser les signaux</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Déployer des supports de transmission</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Connecter les systèmes de ToIP</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Communiquer avec un client ou un collaborateur</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Utiliser un système informatique et ses outils</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Lire, exécuter, corriger et modifier un programme</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Traduire un algorithme, dans un langage et pour un environnement donné</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Connaître l’architecture et les technologies d’un site Web</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-100 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>Choisir les mécanismes de gestion de données adaptés au développement de l’outil</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-50 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>

<div class=\"container\">
    <h6>S’intégrer dans un environnement propice au développement et au travail collaboratif</h6>
    <div class=\"progress mb-3\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated w-75 bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
</div>
</br>
<p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>

{% endblock %}
", "site_portfolio/portfolio.html.twig", "C:\\Users\\evano\\Desktop\\Cours\\BUT 1\\sae 1.04\\site\\templates\\site_portfolio\\portfolio.html.twig");
    }
}
