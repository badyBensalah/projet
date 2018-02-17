<?php

/* croisiere/new.html.twig */
class __TwigTemplate_724c68eeec83f31ef0348aef1723e7ecf6467294c3a65a230056cddb9260ef64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "croisiere/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b328cb33dfeb58ecf4c1dc735cf872e58b0e9a09da37ebb62bbbf578c4e120aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b328cb33dfeb58ecf4c1dc735cf872e58b0e9a09da37ebb62bbbf578c4e120aa->enter($__internal_b328cb33dfeb58ecf4c1dc735cf872e58b0e9a09da37ebb62bbbf578c4e120aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $__internal_6a95605fb8eb67283ac8638d9b7d975517d743b3c1b75dd885b130f36eab33ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a95605fb8eb67283ac8638d9b7d975517d743b3c1b75dd885b130f36eab33ff->enter($__internal_6a95605fb8eb67283ac8638d9b7d975517d743b3c1b75dd885b130f36eab33ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b328cb33dfeb58ecf4c1dc735cf872e58b0e9a09da37ebb62bbbf578c4e120aa->leave($__internal_b328cb33dfeb58ecf4c1dc735cf872e58b0e9a09da37ebb62bbbf578c4e120aa_prof);

        
        $__internal_6a95605fb8eb67283ac8638d9b7d975517d743b3c1b75dd885b130f36eab33ff->leave($__internal_6a95605fb8eb67283ac8638d9b7d975517d743b3c1b75dd885b130f36eab33ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db3b23fe46ca15f6672931ea0afd928c62d9349c69027e5b6a015b16d2fe16ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3b23fe46ca15f6672931ea0afd928c62d9349c69027e5b6a015b16d2fe16ee->enter($__internal_db3b23fe46ca15f6672931ea0afd928c62d9349c69027e5b6a015b16d2fe16ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be8011c687db7682e69578afa92d3bac8d8795f1b12a38a54d9f745bd2ac5893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8011c687db7682e69578afa92d3bac8d8795f1b12a38a54d9f745bd2ac5893->enter($__internal_be8011c687db7682e69578afa92d3bac8d8795f1b12a38a54d9f745bd2ac5893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Croisiere creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("croisiere_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_be8011c687db7682e69578afa92d3bac8d8795f1b12a38a54d9f745bd2ac5893->leave($__internal_be8011c687db7682e69578afa92d3bac8d8795f1b12a38a54d9f745bd2ac5893_prof);

        
        $__internal_db3b23fe46ca15f6672931ea0afd928c62d9349c69027e5b6a015b16d2fe16ee->leave($__internal_db3b23fe46ca15f6672931ea0afd928c62d9349c69027e5b6a015b16d2fe16ee_prof);

    }

    public function getTemplateName()
    {
        return "croisiere/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Croisiere creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('croisiere_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "croisiere/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\croisiere\\new.html.twig");
    }
}
