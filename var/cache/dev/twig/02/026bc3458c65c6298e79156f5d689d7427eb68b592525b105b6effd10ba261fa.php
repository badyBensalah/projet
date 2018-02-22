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
        $__internal_65efc33898e77eb417cb3972a111d17f5fa04106b9a7dfb601eaf4caf8eeaec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65efc33898e77eb417cb3972a111d17f5fa04106b9a7dfb601eaf4caf8eeaec0->enter($__internal_65efc33898e77eb417cb3972a111d17f5fa04106b9a7dfb601eaf4caf8eeaec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        $__internal_f3e45ca32c802ee4af0b72fa08a36d289e2d7c54fc59d775e9042e1cfe0636a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e45ca32c802ee4af0b72fa08a36d289e2d7c54fc59d775e9042e1cfe0636a3->enter($__internal_f3e45ca32c802ee4af0b72fa08a36d289e2d7c54fc59d775e9042e1cfe0636a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65efc33898e77eb417cb3972a111d17f5fa04106b9a7dfb601eaf4caf8eeaec0->leave($__internal_65efc33898e77eb417cb3972a111d17f5fa04106b9a7dfb601eaf4caf8eeaec0_prof);

        
        $__internal_f3e45ca32c802ee4af0b72fa08a36d289e2d7c54fc59d775e9042e1cfe0636a3->leave($__internal_f3e45ca32c802ee4af0b72fa08a36d289e2d7c54fc59d775e9042e1cfe0636a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b3fe95b22950c52f52a314f054d9d01d355db5f4f75be76bea8ae30c2c434c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b3fe95b22950c52f52a314f054d9d01d355db5f4f75be76bea8ae30c2c434c->enter($__internal_c7b3fe95b22950c52f52a314f054d9d01d355db5f4f75be76bea8ae30c2c434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a698c694dfa21db8f9bd8b724e5014d22614c0e573bafc9cb11a77bd51b11be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a698c694dfa21db8f9bd8b724e5014d22614c0e573bafc9cb11a77bd51b11be3->enter($__internal_a698c694dfa21db8f9bd8b724e5014d22614c0e573bafc9cb11a77bd51b11be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a698c694dfa21db8f9bd8b724e5014d22614c0e573bafc9cb11a77bd51b11be3->leave($__internal_a698c694dfa21db8f9bd8b724e5014d22614c0e573bafc9cb11a77bd51b11be3_prof);

        
        $__internal_c7b3fe95b22950c52f52a314f054d9d01d355db5f4f75be76bea8ae30c2c434c->leave($__internal_c7b3fe95b22950c52f52a314f054d9d01d355db5f4f75be76bea8ae30c2c434c_prof);

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
", "hotel/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\hotel\\new.html.twig");
    }
}
