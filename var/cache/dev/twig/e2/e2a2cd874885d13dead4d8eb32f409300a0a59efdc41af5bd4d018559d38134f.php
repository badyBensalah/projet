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
        $__internal_033600b2071f3a1a4bf600b53727593c8bf88efcec9be539160d545ba602b2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033600b2071f3a1a4bf600b53727593c8bf88efcec9be539160d545ba602b2a9->enter($__internal_033600b2071f3a1a4bf600b53727593c8bf88efcec9be539160d545ba602b2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voyage/new.html.twig"));

        $__internal_b87a5976c2e0d5c30e6a27e13d48f14e7a29ab75f2f5a9b156683c34e8b4d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87a5976c2e0d5c30e6a27e13d48f14e7a29ab75f2f5a9b156683c34e8b4d65a->enter($__internal_b87a5976c2e0d5c30e6a27e13d48f14e7a29ab75f2f5a9b156683c34e8b4d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voyage/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_033600b2071f3a1a4bf600b53727593c8bf88efcec9be539160d545ba602b2a9->leave($__internal_033600b2071f3a1a4bf600b53727593c8bf88efcec9be539160d545ba602b2a9_prof);

        
        $__internal_b87a5976c2e0d5c30e6a27e13d48f14e7a29ab75f2f5a9b156683c34e8b4d65a->leave($__internal_b87a5976c2e0d5c30e6a27e13d48f14e7a29ab75f2f5a9b156683c34e8b4d65a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0cf39ecf23a862fb4eb7d307b0e58121269f414b4d196e664701e153e0bccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0cf39ecf23a862fb4eb7d307b0e58121269f414b4d196e664701e153e0bccb->enter($__internal_3e0cf39ecf23a862fb4eb7d307b0e58121269f414b4d196e664701e153e0bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f10fe22cd9e999ef91394ccec389f3ec1575e2d7d49e5bcfbc86703970237c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f10fe22cd9e999ef91394ccec389f3ec1575e2d7d49e5bcfbc86703970237c1->enter($__internal_2f10fe22cd9e999ef91394ccec389f3ec1575e2d7d49e5bcfbc86703970237c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f10fe22cd9e999ef91394ccec389f3ec1575e2d7d49e5bcfbc86703970237c1->leave($__internal_2f10fe22cd9e999ef91394ccec389f3ec1575e2d7d49e5bcfbc86703970237c1_prof);

        
        $__internal_3e0cf39ecf23a862fb4eb7d307b0e58121269f414b4d196e664701e153e0bccb->leave($__internal_3e0cf39ecf23a862fb4eb7d307b0e58121269f414b4d196e664701e153e0bccb_prof);

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
", "voyage/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\voyage\\new.html.twig");
    }
}
