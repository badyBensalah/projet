<?php

/* ville/new.html.twig */
class __TwigTemplate_174cdf1a7ec456e94c700ab15a5a0d9cd4730bc45e85bb8cb661e2a087370d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ville/new.html.twig", 1);
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
        $__internal_314202b373141d4c3cd7204c82d52f74a1f382e2a7af86189d9bcf98b6654d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314202b373141d4c3cd7204c82d52f74a1f382e2a7af86189d9bcf98b6654d60->enter($__internal_314202b373141d4c3cd7204c82d52f74a1f382e2a7af86189d9bcf98b6654d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $__internal_4467b84800afea6573c651c232593d0bc08b6a2f21086776563f80af0142d3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4467b84800afea6573c651c232593d0bc08b6a2f21086776563f80af0142d3f6->enter($__internal_4467b84800afea6573c651c232593d0bc08b6a2f21086776563f80af0142d3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314202b373141d4c3cd7204c82d52f74a1f382e2a7af86189d9bcf98b6654d60->leave($__internal_314202b373141d4c3cd7204c82d52f74a1f382e2a7af86189d9bcf98b6654d60_prof);

        
        $__internal_4467b84800afea6573c651c232593d0bc08b6a2f21086776563f80af0142d3f6->leave($__internal_4467b84800afea6573c651c232593d0bc08b6a2f21086776563f80af0142d3f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edc0decbe5ab9e32d2344a81c4e5acd27fb74e71777333127c039475949ffb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc0decbe5ab9e32d2344a81c4e5acd27fb74e71777333127c039475949ffb4e->enter($__internal_edc0decbe5ab9e32d2344a81c4e5acd27fb74e71777333127c039475949ffb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd07465f117fb81815fb52054535885f40a952c97a883847e1242c68a15addf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd07465f117fb81815fb52054535885f40a952c97a883847e1242c68a15addf0->enter($__internal_dd07465f117fb81815fb52054535885f40a952c97a883847e1242c68a15addf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ville creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dd07465f117fb81815fb52054535885f40a952c97a883847e1242c68a15addf0->leave($__internal_dd07465f117fb81815fb52054535885f40a952c97a883847e1242c68a15addf0_prof);

        
        $__internal_edc0decbe5ab9e32d2344a81c4e5acd27fb74e71777333127c039475949ffb4e->leave($__internal_edc0decbe5ab9e32d2344a81c4e5acd27fb74e71777333127c039475949ffb4e_prof);

    }

    public function getTemplateName()
    {
        return "ville/new.html.twig";
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
    <h1>Ville creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ville/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\ville\\new.html.twig");
    }
}
