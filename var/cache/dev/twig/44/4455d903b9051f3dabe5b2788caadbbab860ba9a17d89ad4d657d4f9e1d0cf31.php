<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_773bd208c3b2d26e225d609301a12f505eabfdffe98f1dd314db7337604c5bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773bd208c3b2d26e225d609301a12f505eabfdffe98f1dd314db7337604c5bfa->enter($__internal_773bd208c3b2d26e225d609301a12f505eabfdffe98f1dd314db7337604c5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_afec973bef09aab8233a10e202022e7a77c38257ace6d599414f42b6ba91c086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afec973bef09aab8233a10e202022e7a77c38257ace6d599414f42b6ba91c086->enter($__internal_afec973bef09aab8233a10e202022e7a77c38257ace6d599414f42b6ba91c086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773bd208c3b2d26e225d609301a12f505eabfdffe98f1dd314db7337604c5bfa->leave($__internal_773bd208c3b2d26e225d609301a12f505eabfdffe98f1dd314db7337604c5bfa_prof);

        
        $__internal_afec973bef09aab8233a10e202022e7a77c38257ace6d599414f42b6ba91c086->leave($__internal_afec973bef09aab8233a10e202022e7a77c38257ace6d599414f42b6ba91c086_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1725a3addac840f1655715988e22ad72c3f65590e0f7b769950f4db4bc3a3d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1725a3addac840f1655715988e22ad72c3f65590e0f7b769950f4db4bc3a3d84->enter($__internal_1725a3addac840f1655715988e22ad72c3f65590e0f7b769950f4db4bc3a3d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d203b6328f12c5bb0535d10244fa7d15f376a981562581800da5a990e14b924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d203b6328f12c5bb0535d10244fa7d15f376a981562581800da5a990e14b924->enter($__internal_4d203b6328f12c5bb0535d10244fa7d15f376a981562581800da5a990e14b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d203b6328f12c5bb0535d10244fa7d15f376a981562581800da5a990e14b924->leave($__internal_4d203b6328f12c5bb0535d10244fa7d15f376a981562581800da5a990e14b924_prof);

        
        $__internal_1725a3addac840f1655715988e22ad72c3f65590e0f7b769950f4db4bc3a3d84->leave($__internal_1725a3addac840f1655715988e22ad72c3f65590e0f7b769950f4db4bc3a3d84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f001f9c82df576058dc81bcd9910b77f99de4a1c8ed0b7140f0ee8a2acebee1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f001f9c82df576058dc81bcd9910b77f99de4a1c8ed0b7140f0ee8a2acebee1a->enter($__internal_f001f9c82df576058dc81bcd9910b77f99de4a1c8ed0b7140f0ee8a2acebee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eaa67c2bf6d2e658a66153ca145643e1cfdf55f07bb98ab4314d009304f341a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa67c2bf6d2e658a66153ca145643e1cfdf55f07bb98ab4314d009304f341a2->enter($__internal_eaa67c2bf6d2e658a66153ca145643e1cfdf55f07bb98ab4314d009304f341a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eaa67c2bf6d2e658a66153ca145643e1cfdf55f07bb98ab4314d009304f341a2->leave($__internal_eaa67c2bf6d2e658a66153ca145643e1cfdf55f07bb98ab4314d009304f341a2_prof);

        
        $__internal_f001f9c82df576058dc81bcd9910b77f99de4a1c8ed0b7140f0ee8a2acebee1a->leave($__internal_f001f9c82df576058dc81bcd9910b77f99de4a1c8ed0b7140f0ee8a2acebee1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a49626b2202b5a196bff4b59c8c18aea6a0d9c239ca3b153e95738e7708558d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49626b2202b5a196bff4b59c8c18aea6a0d9c239ca3b153e95738e7708558d0->enter($__internal_a49626b2202b5a196bff4b59c8c18aea6a0d9c239ca3b153e95738e7708558d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0c76e99e577b9dca62cbb16af0200a07710fa8af3ce4bd12852f89f25ff6cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c76e99e577b9dca62cbb16af0200a07710fa8af3ce4bd12852f89f25ff6cc9->enter($__internal_d0c76e99e577b9dca62cbb16af0200a07710fa8af3ce4bd12852f89f25ff6cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0c76e99e577b9dca62cbb16af0200a07710fa8af3ce4bd12852f89f25ff6cc9->leave($__internal_d0c76e99e577b9dca62cbb16af0200a07710fa8af3ce4bd12852f89f25ff6cc9_prof);

        
        $__internal_a49626b2202b5a196bff4b59c8c18aea6a0d9c239ca3b153e95738e7708558d0->leave($__internal_a49626b2202b5a196bff4b59c8c18aea6a0d9c239ca3b153e95738e7708558d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
