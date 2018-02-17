<?php

/* restaurant/new.html.twig */
class __TwigTemplate_ad70d85c86c7adefa8f6a35b8e80addd528ddc61c7959595de33cd47d08108eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/new.html.twig", 1);
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
        $__internal_582b2cbe21fd841d2ff645fdac378b3a43ea5f06dd7f4205adf6e2310f117bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582b2cbe21fd841d2ff645fdac378b3a43ea5f06dd7f4205adf6e2310f117bb1->enter($__internal_582b2cbe21fd841d2ff645fdac378b3a43ea5f06dd7f4205adf6e2310f117bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        $__internal_9610ac02ea9382ef8ec664974a0a2a6edd8479eb05b1fb159ede4f31fde991d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9610ac02ea9382ef8ec664974a0a2a6edd8479eb05b1fb159ede4f31fde991d5->enter($__internal_9610ac02ea9382ef8ec664974a0a2a6edd8479eb05b1fb159ede4f31fde991d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582b2cbe21fd841d2ff645fdac378b3a43ea5f06dd7f4205adf6e2310f117bb1->leave($__internal_582b2cbe21fd841d2ff645fdac378b3a43ea5f06dd7f4205adf6e2310f117bb1_prof);

        
        $__internal_9610ac02ea9382ef8ec664974a0a2a6edd8479eb05b1fb159ede4f31fde991d5->leave($__internal_9610ac02ea9382ef8ec664974a0a2a6edd8479eb05b1fb159ede4f31fde991d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ecba02cde6f17538c635fcb13f71ddb6f8e99bcba25498b962fed5d68a0e847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecba02cde6f17538c635fcb13f71ddb6f8e99bcba25498b962fed5d68a0e847->enter($__internal_7ecba02cde6f17538c635fcb13f71ddb6f8e99bcba25498b962fed5d68a0e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48961a2c8ec50ba64bd466135679a3e215b1bf7e09e2d3f0dcf223730377068e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48961a2c8ec50ba64bd466135679a3e215b1bf7e09e2d3f0dcf223730377068e->enter($__internal_48961a2c8ec50ba64bd466135679a3e215b1bf7e09e2d3f0dcf223730377068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Restaurant creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_48961a2c8ec50ba64bd466135679a3e215b1bf7e09e2d3f0dcf223730377068e->leave($__internal_48961a2c8ec50ba64bd466135679a3e215b1bf7e09e2d3f0dcf223730377068e_prof);

        
        $__internal_7ecba02cde6f17538c635fcb13f71ddb6f8e99bcba25498b962fed5d68a0e847->leave($__internal_7ecba02cde6f17538c635fcb13f71ddb6f8e99bcba25498b962fed5d68a0e847_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/new.html.twig";
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
    <h1>Restaurant creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('restaurant_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "restaurant/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\restaurant\\new.html.twig");
    }
}
