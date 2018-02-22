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
        $__internal_4c33fe16225229db531600d77ee523d9036bce96a65f631ee15a653a2c3538c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c33fe16225229db531600d77ee523d9036bce96a65f631ee15a653a2c3538c3->enter($__internal_4c33fe16225229db531600d77ee523d9036bce96a65f631ee15a653a2c3538c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/new.html.twig"));

        $__internal_e75343b2e29b8a547a43c0065953071b4fe83ff2618e12187be96b5586729fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75343b2e29b8a547a43c0065953071b4fe83ff2618e12187be96b5586729fdd->enter($__internal_e75343b2e29b8a547a43c0065953071b4fe83ff2618e12187be96b5586729fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c33fe16225229db531600d77ee523d9036bce96a65f631ee15a653a2c3538c3->leave($__internal_4c33fe16225229db531600d77ee523d9036bce96a65f631ee15a653a2c3538c3_prof);

        
        $__internal_e75343b2e29b8a547a43c0065953071b4fe83ff2618e12187be96b5586729fdd->leave($__internal_e75343b2e29b8a547a43c0065953071b4fe83ff2618e12187be96b5586729fdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab265da2c2297ab79a2e90e0e6949654e20aec79901a88ded90e85b40faa123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab265da2c2297ab79a2e90e0e6949654e20aec79901a88ded90e85b40faa123->enter($__internal_2ab265da2c2297ab79a2e90e0e6949654e20aec79901a88ded90e85b40faa123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f107487827f94750e4157a902a4284ca60fc110c07b2140053f91f2b9864bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f107487827f94750e4157a902a4284ca60fc110c07b2140053f91f2b9864bec->enter($__internal_7f107487827f94750e4157a902a4284ca60fc110c07b2140053f91f2b9864bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f107487827f94750e4157a902a4284ca60fc110c07b2140053f91f2b9864bec->leave($__internal_7f107487827f94750e4157a902a4284ca60fc110c07b2140053f91f2b9864bec_prof);

        
        $__internal_2ab265da2c2297ab79a2e90e0e6949654e20aec79901a88ded90e85b40faa123->leave($__internal_2ab265da2c2297ab79a2e90e0e6949654e20aec79901a88ded90e85b40faa123_prof);

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
", "recommendation/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\recommendation\\new.html.twig");
    }
}
