<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
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
        $__internal_ea06f054a3be96113fea31a38305a0846b68e602fded6a0e7d38bc39a530b1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea06f054a3be96113fea31a38305a0846b68e602fded6a0e7d38bc39a530b1e0->enter($__internal_ea06f054a3be96113fea31a38305a0846b68e602fded6a0e7d38bc39a530b1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_92535059a27cad3a4832ef811aa9ea2bbf9438048f174fe35113300dc025696e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92535059a27cad3a4832ef811aa9ea2bbf9438048f174fe35113300dc025696e->enter($__internal_92535059a27cad3a4832ef811aa9ea2bbf9438048f174fe35113300dc025696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea06f054a3be96113fea31a38305a0846b68e602fded6a0e7d38bc39a530b1e0->leave($__internal_ea06f054a3be96113fea31a38305a0846b68e602fded6a0e7d38bc39a530b1e0_prof);

        
        $__internal_92535059a27cad3a4832ef811aa9ea2bbf9438048f174fe35113300dc025696e->leave($__internal_92535059a27cad3a4832ef811aa9ea2bbf9438048f174fe35113300dc025696e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_094cdbb26db8f34d762de0582a70a82dc873cf7c273954010fc96586c949965c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094cdbb26db8f34d762de0582a70a82dc873cf7c273954010fc96586c949965c->enter($__internal_094cdbb26db8f34d762de0582a70a82dc873cf7c273954010fc96586c949965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce9681c151665ed231fae095045ec7a8988de0f40ae22a4bb5d9ed5eac9ad6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9681c151665ed231fae095045ec7a8988de0f40ae22a4bb5d9ed5eac9ad6b2->enter($__internal_ce9681c151665ed231fae095045ec7a8988de0f40ae22a4bb5d9ed5eac9ad6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce9681c151665ed231fae095045ec7a8988de0f40ae22a4bb5d9ed5eac9ad6b2->leave($__internal_ce9681c151665ed231fae095045ec7a8988de0f40ae22a4bb5d9ed5eac9ad6b2_prof);

        
        $__internal_094cdbb26db8f34d762de0582a70a82dc873cf7c273954010fc96586c949965c->leave($__internal_094cdbb26db8f34d762de0582a70a82dc873cf7c273954010fc96586c949965c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e38448bf6dbbe75bef9008ee35b4738f9868aaca886e621450a28eac72d373b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38448bf6dbbe75bef9008ee35b4738f9868aaca886e621450a28eac72d373b9->enter($__internal_e38448bf6dbbe75bef9008ee35b4738f9868aaca886e621450a28eac72d373b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41d22ded445f0e332e73d2594013d4eb1f925ac7269bd24412d63f0cae025845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d22ded445f0e332e73d2594013d4eb1f925ac7269bd24412d63f0cae025845->enter($__internal_41d22ded445f0e332e73d2594013d4eb1f925ac7269bd24412d63f0cae025845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41d22ded445f0e332e73d2594013d4eb1f925ac7269bd24412d63f0cae025845->leave($__internal_41d22ded445f0e332e73d2594013d4eb1f925ac7269bd24412d63f0cae025845_prof);

        
        $__internal_e38448bf6dbbe75bef9008ee35b4738f9868aaca886e621450a28eac72d373b9->leave($__internal_e38448bf6dbbe75bef9008ee35b4738f9868aaca886e621450a28eac72d373b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_592115301803a3d54fc835196e5d320da0d7c005fe8dc541632cfe931a7b8103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592115301803a3d54fc835196e5d320da0d7c005fe8dc541632cfe931a7b8103->enter($__internal_592115301803a3d54fc835196e5d320da0d7c005fe8dc541632cfe931a7b8103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_004dfcd59e771e412171b7d52d2d8eca69601d0205d6b6e82332e77dbe2b713f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004dfcd59e771e412171b7d52d2d8eca69601d0205d6b6e82332e77dbe2b713f->enter($__internal_004dfcd59e771e412171b7d52d2d8eca69601d0205d6b6e82332e77dbe2b713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_004dfcd59e771e412171b7d52d2d8eca69601d0205d6b6e82332e77dbe2b713f->leave($__internal_004dfcd59e771e412171b7d52d2d8eca69601d0205d6b6e82332e77dbe2b713f_prof);

        
        $__internal_592115301803a3d54fc835196e5d320da0d7c005fe8dc541632cfe931a7b8103->leave($__internal_592115301803a3d54fc835196e5d320da0d7c005fe8dc541632cfe931a7b8103_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
