<?php

/* voyage/new.html.twig */
class __TwigTemplate_e9c82488a9a413bd9a5dad401572baca481c1468eb21a519d2969d0db03a8cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "voyage/new.html.twig", 1);
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
        $__internal_e030a442d8486e4a484033869e14708f02390f89788d0f41032c503c93398d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e030a442d8486e4a484033869e14708f02390f89788d0f41032c503c93398d10->enter($__internal_e030a442d8486e4a484033869e14708f02390f89788d0f41032c503c93398d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voyage/new.html.twig"));

        $__internal_3bd2d919abfd9ec72a117326107a229c850af2a616158bbdc5fa892cd80b771b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd2d919abfd9ec72a117326107a229c850af2a616158bbdc5fa892cd80b771b->enter($__internal_3bd2d919abfd9ec72a117326107a229c850af2a616158bbdc5fa892cd80b771b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voyage/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e030a442d8486e4a484033869e14708f02390f89788d0f41032c503c93398d10->leave($__internal_e030a442d8486e4a484033869e14708f02390f89788d0f41032c503c93398d10_prof);

        
        $__internal_3bd2d919abfd9ec72a117326107a229c850af2a616158bbdc5fa892cd80b771b->leave($__internal_3bd2d919abfd9ec72a117326107a229c850af2a616158bbdc5fa892cd80b771b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a0bc0ac5c1759fc5627bab21cb0465d4c81ae9855ac461ef5f18a00e65a49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a0bc0ac5c1759fc5627bab21cb0465d4c81ae9855ac461ef5f18a00e65a49e->enter($__internal_06a0bc0ac5c1759fc5627bab21cb0465d4c81ae9855ac461ef5f18a00e65a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa0541c26d3e300dd16e8caa99377dfe5e7ff360e843b6d11567c96cd6a69cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0541c26d3e300dd16e8caa99377dfe5e7ff360e843b6d11567c96cd6a69cfe->enter($__internal_fa0541c26d3e300dd16e8caa99377dfe5e7ff360e843b6d11567c96cd6a69cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Voyage creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voyage_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fa0541c26d3e300dd16e8caa99377dfe5e7ff360e843b6d11567c96cd6a69cfe->leave($__internal_fa0541c26d3e300dd16e8caa99377dfe5e7ff360e843b6d11567c96cd6a69cfe_prof);

        
        $__internal_06a0bc0ac5c1759fc5627bab21cb0465d4c81ae9855ac461ef5f18a00e65a49e->leave($__internal_06a0bc0ac5c1759fc5627bab21cb0465d4c81ae9855ac461ef5f18a00e65a49e_prof);

    }

    public function getTemplateName()
    {
        return "voyage/new.html.twig";
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
    <h1>Voyage creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('voyage_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "voyage/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\voyage\\new.html.twig");
    }
}
