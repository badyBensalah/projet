<?php

/* guide/new.html.twig */
class __TwigTemplate_ce412c4e6b3f1a3d5b976d6d74e18b59d2c548b0888fe12c9a12c0e5422f67c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "guide/new.html.twig", 1);
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
        $__internal_97c4c30c1f329eca9f882fa9f51a7fb1c0eb0618d5f94ad9b5845bd2cac50a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c4c30c1f329eca9f882fa9f51a7fb1c0eb0618d5f94ad9b5845bd2cac50a7f->enter($__internal_97c4c30c1f329eca9f882fa9f51a7fb1c0eb0618d5f94ad9b5845bd2cac50a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $__internal_a30e985c6390b8c4b651d40560da1d10a07c49e5d661511fe2a7c01191240eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30e985c6390b8c4b651d40560da1d10a07c49e5d661511fe2a7c01191240eb7->enter($__internal_a30e985c6390b8c4b651d40560da1d10a07c49e5d661511fe2a7c01191240eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c4c30c1f329eca9f882fa9f51a7fb1c0eb0618d5f94ad9b5845bd2cac50a7f->leave($__internal_97c4c30c1f329eca9f882fa9f51a7fb1c0eb0618d5f94ad9b5845bd2cac50a7f_prof);

        
        $__internal_a30e985c6390b8c4b651d40560da1d10a07c49e5d661511fe2a7c01191240eb7->leave($__internal_a30e985c6390b8c4b651d40560da1d10a07c49e5d661511fe2a7c01191240eb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd11dea051aed95a618c8bc2bb34f16625bef797de2c0c17247ab5f11f67dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd11dea051aed95a618c8bc2bb34f16625bef797de2c0c17247ab5f11f67dd3->enter($__internal_dbd11dea051aed95a618c8bc2bb34f16625bef797de2c0c17247ab5f11f67dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24cf562412a8abaa333e6b2877767ca82630a356bf5b9e2705e3f5acc8faa232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cf562412a8abaa333e6b2877767ca82630a356bf5b9e2705e3f5acc8faa232->enter($__internal_24cf562412a8abaa333e6b2877767ca82630a356bf5b9e2705e3f5acc8faa232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Guide creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_24cf562412a8abaa333e6b2877767ca82630a356bf5b9e2705e3f5acc8faa232->leave($__internal_24cf562412a8abaa333e6b2877767ca82630a356bf5b9e2705e3f5acc8faa232_prof);

        
        $__internal_dbd11dea051aed95a618c8bc2bb34f16625bef797de2c0c17247ab5f11f67dd3->leave($__internal_dbd11dea051aed95a618c8bc2bb34f16625bef797de2c0c17247ab5f11f67dd3_prof);

    }

    public function getTemplateName()
    {
        return "guide/new.html.twig";
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
    <h1>Guide creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('guide_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "guide/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\guide\\new.html.twig");
    }
}
