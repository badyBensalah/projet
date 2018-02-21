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
        $__internal_1ee832eb8aed1a2295b1ee336579a86407327881dfccfb3d571c14f044c97bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee832eb8aed1a2295b1ee336579a86407327881dfccfb3d571c14f044c97bbe->enter($__internal_1ee832eb8aed1a2295b1ee336579a86407327881dfccfb3d571c14f044c97bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $__internal_f9bbc3a972f40eb1eb10ef93172f521b9b2759d05a3be0daed13859867dc3ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bbc3a972f40eb1eb10ef93172f521b9b2759d05a3be0daed13859867dc3ba6->enter($__internal_f9bbc3a972f40eb1eb10ef93172f521b9b2759d05a3be0daed13859867dc3ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee832eb8aed1a2295b1ee336579a86407327881dfccfb3d571c14f044c97bbe->leave($__internal_1ee832eb8aed1a2295b1ee336579a86407327881dfccfb3d571c14f044c97bbe_prof);

        
        $__internal_f9bbc3a972f40eb1eb10ef93172f521b9b2759d05a3be0daed13859867dc3ba6->leave($__internal_f9bbc3a972f40eb1eb10ef93172f521b9b2759d05a3be0daed13859867dc3ba6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc5ae31d3d8286f534044cd8592e19cf22779589ab2ab27d6548c7eaf71bee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc5ae31d3d8286f534044cd8592e19cf22779589ab2ab27d6548c7eaf71bee1->enter($__internal_cbc5ae31d3d8286f534044cd8592e19cf22779589ab2ab27d6548c7eaf71bee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d3d84f8c80e385c92a4ea09ae80dd22e4570ed0932b6877c20710d115fa1e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3d84f8c80e385c92a4ea09ae80dd22e4570ed0932b6877c20710d115fa1e6f->enter($__internal_7d3d84f8c80e385c92a4ea09ae80dd22e4570ed0932b6877c20710d115fa1e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d3d84f8c80e385c92a4ea09ae80dd22e4570ed0932b6877c20710d115fa1e6f->leave($__internal_7d3d84f8c80e385c92a4ea09ae80dd22e4570ed0932b6877c20710d115fa1e6f_prof);

        
        $__internal_cbc5ae31d3d8286f534044cd8592e19cf22779589ab2ab27d6548c7eaf71bee1->leave($__internal_cbc5ae31d3d8286f534044cd8592e19cf22779589ab2ab27d6548c7eaf71bee1_prof);

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
", "croisiere/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\croisiere\\new.html.twig");
    }
}
