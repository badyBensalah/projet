<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c0f22ddf826890995c19beac597d7b00b016908833b85e2e330d2b31c404d2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9672af54f7f25b88e6c366336e4bf58f5d9a399765bd93e6e8977245c463779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9672af54f7f25b88e6c366336e4bf58f5d9a399765bd93e6e8977245c463779->enter($__internal_f9672af54f7f25b88e6c366336e4bf58f5d9a399765bd93e6e8977245c463779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_551cca0654b1d143076b3c1eca135b798505956ad959e7163d11acfc176d2301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551cca0654b1d143076b3c1eca135b798505956ad959e7163d11acfc176d2301->enter($__internal_551cca0654b1d143076b3c1eca135b798505956ad959e7163d11acfc176d2301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9672af54f7f25b88e6c366336e4bf58f5d9a399765bd93e6e8977245c463779->leave($__internal_f9672af54f7f25b88e6c366336e4bf58f5d9a399765bd93e6e8977245c463779_prof);

        
        $__internal_551cca0654b1d143076b3c1eca135b798505956ad959e7163d11acfc176d2301->leave($__internal_551cca0654b1d143076b3c1eca135b798505956ad959e7163d11acfc176d2301_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f14cec16aa529134443ef7ff9a27be20a594f9e18f3321f102583c55ff3c624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f14cec16aa529134443ef7ff9a27be20a594f9e18f3321f102583c55ff3c624->enter($__internal_1f14cec16aa529134443ef7ff9a27be20a594f9e18f3321f102583c55ff3c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85ee73ae98694e405306c11dbd50a0367254a0d1ec957ed283577a85ba9af033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ee73ae98694e405306c11dbd50a0367254a0d1ec957ed283577a85ba9af033->enter($__internal_85ee73ae98694e405306c11dbd50a0367254a0d1ec957ed283577a85ba9af033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85ee73ae98694e405306c11dbd50a0367254a0d1ec957ed283577a85ba9af033->leave($__internal_85ee73ae98694e405306c11dbd50a0367254a0d1ec957ed283577a85ba9af033_prof);

        
        $__internal_1f14cec16aa529134443ef7ff9a27be20a594f9e18f3321f102583c55ff3c624->leave($__internal_1f14cec16aa529134443ef7ff9a27be20a594f9e18f3321f102583c55ff3c624_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49f504c188f4fa0f76212776e9829cabebe271c8103966f08d31187d6112eaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f504c188f4fa0f76212776e9829cabebe271c8103966f08d31187d6112eaad->enter($__internal_49f504c188f4fa0f76212776e9829cabebe271c8103966f08d31187d6112eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cb13b8000b357121868248f6855b38d8b50254c23c1df0851e68fe740288559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb13b8000b357121868248f6855b38d8b50254c23c1df0851e68fe740288559->enter($__internal_8cb13b8000b357121868248f6855b38d8b50254c23c1df0851e68fe740288559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8cb13b8000b357121868248f6855b38d8b50254c23c1df0851e68fe740288559->leave($__internal_8cb13b8000b357121868248f6855b38d8b50254c23c1df0851e68fe740288559_prof);

        
        $__internal_49f504c188f4fa0f76212776e9829cabebe271c8103966f08d31187d6112eaad->leave($__internal_49f504c188f4fa0f76212776e9829cabebe271c8103966f08d31187d6112eaad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3712d5399f886840308189b4d2950bd013e98df042dd36eee635fdb1b37e1117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3712d5399f886840308189b4d2950bd013e98df042dd36eee635fdb1b37e1117->enter($__internal_3712d5399f886840308189b4d2950bd013e98df042dd36eee635fdb1b37e1117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e766efd978f642e8582264597b9c2866b476f241a2ce00ac1d12f82d739df66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e766efd978f642e8582264597b9c2866b476f241a2ce00ac1d12f82d739df66f->enter($__internal_e766efd978f642e8582264597b9c2866b476f241a2ce00ac1d12f82d739df66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e766efd978f642e8582264597b9c2866b476f241a2ce00ac1d12f82d739df66f->leave($__internal_e766efd978f642e8582264597b9c2866b476f241a2ce00ac1d12f82d739df66f_prof);

        
        $__internal_3712d5399f886840308189b4d2950bd013e98df042dd36eee635fdb1b37e1117->leave($__internal_3712d5399f886840308189b4d2950bd013e98df042dd36eee635fdb1b37e1117_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
