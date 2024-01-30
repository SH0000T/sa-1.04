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

/* site_portfolio/savoir_plus.html.twig */
class __TwigTemplate_e632855c6730721149d47afb367fb943 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/savoir_plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_portfolio/savoir_plus.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "site_portfolio/savoir_plus.html.twig", 1);
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
        echo "<header>
<div class=\"text_primary\">
    <h1>Vous Etes Encore Là ?</h1>
    </br>
    </br>
  <h2>Ma présentation</h2>

<p> Je m'appelle Evan Léon-Persol et sur cette page je vais vous détaillé mes passions, activité, loisirs et ambition</p>
</br>
<h3> <strong> Mes Passions </strong> </h3>
</br>
<h4> <strong> La Musculation </strong> </h4>
</br>
<img src=\"muscul.png\" width=300px height=300px >
</br>
</br>
<p> la musculation me permet de me defouler afin d'etre moins stressé au quotidien et entrainer mon mental au pire.</p>
</br>
</br>
<h4> <strong> La cybersécurité </strong> </h4>
</br>
<img src=\"cybersecurite.png\" width=360px height=879px >
</br>
</br>
<p>La cybersecurite est un sujet pour moi qui est important car j'adore devoir résoudre des problemes et aussi apprendre le danger de internet</p>
</br>
</br>
<h4> <strong> Mes Ambitions </strong> </h4>
</br>
<img src=\"pentester.jpg\" width=300px height= auto >
</br>
</br>
<p>J'aimerai devenir plus tard Pentester dis aussi Hacker Ethical, je suis intéressé par ce métier depuis 4 ans. </p>
<p>Ce métier m'interesse pour les fonctions qu'il propose, le fait de pouvoir se mettre dans la peau d'un blackhat (Attaquant) sans l'être vraiment me fascine</p>

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
        return "site_portfolio/savoir_plus.html.twig";
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
<header>
<div class=\"text_primary\">
    <h1>Vous Etes Encore Là ?</h1>
    </br>
    </br>
  <h2>Ma présentation</h2>

<p> Je m'appelle Evan Léon-Persol et sur cette page je vais vous détaillé mes passions, activité, loisirs et ambition</p>
</br>
<h3> <strong> Mes Passions </strong> </h3>
</br>
<h4> <strong> La Musculation </strong> </h4>
</br>
<img src=\"muscul.png\" width=300px height=300px >
</br>
</br>
<p> la musculation me permet de me defouler afin d'etre moins stressé au quotidien et entrainer mon mental au pire.</p>
</br>
</br>
<h4> <strong> La cybersécurité </strong> </h4>
</br>
<img src=\"cybersecurite.png\" width=360px height=879px >
</br>
</br>
<p>La cybersecurite est un sujet pour moi qui est important car j'adore devoir résoudre des problemes et aussi apprendre le danger de internet</p>
</br>
</br>
<h4> <strong> Mes Ambitions </strong> </h4>
</br>
<img src=\"pentester.jpg\" width=300px height= auto >
</br>
</br>
<p>J'aimerai devenir plus tard Pentester dis aussi Hacker Ethical, je suis intéressé par ce métier depuis 4 ans. </p>
<p>Ce métier m'interesse pour les fonctions qu'il propose, le fait de pouvoir se mettre dans la peau d'un blackhat (Attaquant) sans l'être vraiment me fascine</p>

</br>
<p>&copy; 2024. Evan Léon-Persol. Tout droits réservés.</p>

{% endblock %}", "site_portfolio/savoir_plus.html.twig", "C:\\Users\\evano\\Desktop\\Cours\\BUT 1\\sae 1.04\\site\\templates\\site_portfolio\\savoir_plus.html.twig");
    }
}
