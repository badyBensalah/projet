<?php

/* recommendation/new.html.twig */
class __TwigTemplate_117c62e0af1a977a60eddb257333c8c5ff49a9ac8f7f13cf3712885c8b3564db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recommendation/new.html.twig", 1);
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
        $__internal_018e9bcf9a9ed1134ec56bafc0e19b7fe859d45b0dcb6cd2a5fd59cd821f9771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018e9bcf9a9ed1134ec56bafc0e19b7fe859d45b0dcb6cd2a5fd59cd821f9771->enter($__internal_018e9bcf9a9ed1134ec56bafc0e19b7fe859d45b0dcb6cd2a5fd59cd821f9771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/new.html.twig"));

        $__internal_d88ef3307c6e852abb0991645e38683b64294dee06a726dc36abd9e2218d436b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88ef3307c6e852abb0991645e38683b64294dee06a726dc36abd9e2218d436b->enter($__internal_d88ef3307c6e852abb0991645e38683b64294dee06a726dc36abd9e2218d436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018e9bcf9a9ed1134ec56bafc0e19b7fe859d45b0dcb6cd2a5fd59cd821f9771->leave($__internal_018e9bcf9a9ed1134ec56bafc0e19b7fe859d45b0dcb6cd2a5fd59cd821f9771_prof);

        
        $__internal_d88ef3307c6e852abb0991645e38683b64294dee06a726dc36abd9e2218d436b->leave($__internal_d88ef3307c6e852abb0991645e38683b64294dee06a726dc36abd9e2218d436b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f057bca18a0ac9c49e13fe1132ec771f328b038cdb8cdfad3c78ddb5ef310aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f057bca18a0ac9c49e13fe1132ec771f328b038cdb8cdfad3c78ddb5ef310aad->enter($__internal_f057bca18a0ac9c49e13fe1132ec771f328b038cdb8cdfad3c78ddb5ef310aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f3f0190788b8f3d7a0c4c3230248f3235ccc2c6b36159df00d288adf5ae98a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3f0190788b8f3d7a0c4c3230248f3235ccc2c6b36159df00d288adf5ae98a6->enter($__internal_0f3f0190788b8f3d7a0c4c3230248f3235ccc2c6b36159df00d288adf5ae98a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recommendation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recommendation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0f3f0190788b8f3d7a0c4c3230248f3235ccc2c6b36159df00d288adf5ae98a6->leave($__internal_0f3f0190788b8f3d7a0c4c3230248f3235ccc2c6b36159df00d288adf5ae98a6_prof);

        
        $__internal_f057bca18a0ac9c49e13fe1132ec771f328b038cdb8cdfad3c78ddb5ef310aad->leave($__internal_f057bca18a0ac9c49e13fe1132ec771f328b038cdb8cdfad3c78ddb5ef310aad_prof);

    }

    public function getTemplateName()
    {
        return "recommendation/new.html.twig";
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
    <h1>Recommendation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('recommendation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "recommendation/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\recommendation\\new.html.twig");
    }
}
