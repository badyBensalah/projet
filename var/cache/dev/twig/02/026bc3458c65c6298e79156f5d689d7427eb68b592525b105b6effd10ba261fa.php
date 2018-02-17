<?php

/* hotel/new.html.twig */
class __TwigTemplate_6f9f8417eb927918f5cdad5d900d7ee87ba85833a6cea3526e91b7490472954c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/new.html.twig", 1);
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
        $__internal_82ba2a74d8e97530a9d7f4906b566e9873cbae5416e53ad0947497b531fd391c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ba2a74d8e97530a9d7f4906b566e9873cbae5416e53ad0947497b531fd391c->enter($__internal_82ba2a74d8e97530a9d7f4906b566e9873cbae5416e53ad0947497b531fd391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        $__internal_8788a8200f1bbe4a92724957cc10d6632a5d69e20fba442e31f0d845785ccbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8788a8200f1bbe4a92724957cc10d6632a5d69e20fba442e31f0d845785ccbf2->enter($__internal_8788a8200f1bbe4a92724957cc10d6632a5d69e20fba442e31f0d845785ccbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ba2a74d8e97530a9d7f4906b566e9873cbae5416e53ad0947497b531fd391c->leave($__internal_82ba2a74d8e97530a9d7f4906b566e9873cbae5416e53ad0947497b531fd391c_prof);

        
        $__internal_8788a8200f1bbe4a92724957cc10d6632a5d69e20fba442e31f0d845785ccbf2->leave($__internal_8788a8200f1bbe4a92724957cc10d6632a5d69e20fba442e31f0d845785ccbf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_feae586c265cbbaf5a369da087fdd1a3a7fc7c12f063df755b15cd80cf01ef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feae586c265cbbaf5a369da087fdd1a3a7fc7c12f063df755b15cd80cf01ef15->enter($__internal_feae586c265cbbaf5a369da087fdd1a3a7fc7c12f063df755b15cd80cf01ef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2821d3355af96045b7ae7fc5b7ef540582c9fd87ffe171fbd8bba133974e287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2821d3355af96045b7ae7fc5b7ef540582c9fd87ffe171fbd8bba133974e287->enter($__internal_a2821d3355af96045b7ae7fc5b7ef540582c9fd87ffe171fbd8bba133974e287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hotel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a2821d3355af96045b7ae7fc5b7ef540582c9fd87ffe171fbd8bba133974e287->leave($__internal_a2821d3355af96045b7ae7fc5b7ef540582c9fd87ffe171fbd8bba133974e287_prof);

        
        $__internal_feae586c265cbbaf5a369da087fdd1a3a7fc7c12f063df755b15cd80cf01ef15->leave($__internal_feae586c265cbbaf5a369da087fdd1a3a7fc7c12f063df755b15cd80cf01ef15_prof);

    }

    public function getTemplateName()
    {
        return "hotel/new.html.twig";
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
    <h1>Hotel creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('hotel_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "hotel/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\hotel\\new.html.twig");
    }
}
