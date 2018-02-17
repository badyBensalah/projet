<?php

/* experience/new.html.twig */
class __TwigTemplate_b2528e621d179774573b92f6f203a9af305bfd2d7ae68745b5d9243c487fef3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "experience/new.html.twig", 1);
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
        $__internal_6ccb8cf3b818ed8f03f2853446ca152d4e40209664ab90948c865799db188008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccb8cf3b818ed8f03f2853446ca152d4e40209664ab90948c865799db188008->enter($__internal_6ccb8cf3b818ed8f03f2853446ca152d4e40209664ab90948c865799db188008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/new.html.twig"));

        $__internal_698fd2aef3684102331a615c4d406aa4c9b6fe314aba57633d88ae413f85f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698fd2aef3684102331a615c4d406aa4c9b6fe314aba57633d88ae413f85f1d1->enter($__internal_698fd2aef3684102331a615c4d406aa4c9b6fe314aba57633d88ae413f85f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccb8cf3b818ed8f03f2853446ca152d4e40209664ab90948c865799db188008->leave($__internal_6ccb8cf3b818ed8f03f2853446ca152d4e40209664ab90948c865799db188008_prof);

        
        $__internal_698fd2aef3684102331a615c4d406aa4c9b6fe314aba57633d88ae413f85f1d1->leave($__internal_698fd2aef3684102331a615c4d406aa4c9b6fe314aba57633d88ae413f85f1d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_703324d6f5697f9b6b0faa0faa510d33056b971e774025e1923f1f0484e76c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703324d6f5697f9b6b0faa0faa510d33056b971e774025e1923f1f0484e76c2e->enter($__internal_703324d6f5697f9b6b0faa0faa510d33056b971e774025e1923f1f0484e76c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d78b66763613ced42d66ecec5bb036a4d2570f28a7dcb91003ea445893ea7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78b66763613ced42d66ecec5bb036a4d2570f28a7dcb91003ea445893ea7c65->enter($__internal_d78b66763613ced42d66ecec5bb036a4d2570f28a7dcb91003ea445893ea7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Experience creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d78b66763613ced42d66ecec5bb036a4d2570f28a7dcb91003ea445893ea7c65->leave($__internal_d78b66763613ced42d66ecec5bb036a4d2570f28a7dcb91003ea445893ea7c65_prof);

        
        $__internal_703324d6f5697f9b6b0faa0faa510d33056b971e774025e1923f1f0484e76c2e->leave($__internal_703324d6f5697f9b6b0faa0faa510d33056b971e774025e1923f1f0484e76c2e_prof);

    }

    public function getTemplateName()
    {
        return "experience/new.html.twig";
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
    <h1>Experience creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('experience_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "experience/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\experience\\new.html.twig");
    }
}
