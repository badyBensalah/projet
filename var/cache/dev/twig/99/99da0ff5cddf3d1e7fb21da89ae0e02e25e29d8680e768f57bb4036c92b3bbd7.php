<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc30f7deaee4831afc19e0332a8a432e5ed08ef0f119f119595e696cc9f9c8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171929cadc1e38c1c0e9ee72232d19c649778c73b249c9bcff14606f06b194cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171929cadc1e38c1c0e9ee72232d19c649778c73b249c9bcff14606f06b194cb->enter($__internal_171929cadc1e38c1c0e9ee72232d19c649778c73b249c9bcff14606f06b194cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_de477689fa4b9b82c073f6e55d9d56eb7e460f5fcb16ab0d6da5ec5ca24833f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de477689fa4b9b82c073f6e55d9d56eb7e460f5fcb16ab0d6da5ec5ca24833f6->enter($__internal_de477689fa4b9b82c073f6e55d9d56eb7e460f5fcb16ab0d6da5ec5ca24833f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171929cadc1e38c1c0e9ee72232d19c649778c73b249c9bcff14606f06b194cb->leave($__internal_171929cadc1e38c1c0e9ee72232d19c649778c73b249c9bcff14606f06b194cb_prof);

        
        $__internal_de477689fa4b9b82c073f6e55d9d56eb7e460f5fcb16ab0d6da5ec5ca24833f6->leave($__internal_de477689fa4b9b82c073f6e55d9d56eb7e460f5fcb16ab0d6da5ec5ca24833f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc3ef04797576d1df4a11d0f2e8cae0e53cb3643dc94e4c08fe1035312db8534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3ef04797576d1df4a11d0f2e8cae0e53cb3643dc94e4c08fe1035312db8534->enter($__internal_bc3ef04797576d1df4a11d0f2e8cae0e53cb3643dc94e4c08fe1035312db8534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4656469a817c1510746ace6659324477acbbb07703d1a7af22d54a4bc2b182e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4656469a817c1510746ace6659324477acbbb07703d1a7af22d54a4bc2b182e0->enter($__internal_4656469a817c1510746ace6659324477acbbb07703d1a7af22d54a4bc2b182e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4656469a817c1510746ace6659324477acbbb07703d1a7af22d54a4bc2b182e0->leave($__internal_4656469a817c1510746ace6659324477acbbb07703d1a7af22d54a4bc2b182e0_prof);

        
        $__internal_bc3ef04797576d1df4a11d0f2e8cae0e53cb3643dc94e4c08fe1035312db8534->leave($__internal_bc3ef04797576d1df4a11d0f2e8cae0e53cb3643dc94e4c08fe1035312db8534_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
