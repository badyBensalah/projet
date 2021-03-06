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
        $__internal_e82bf15a4e82d7bb37b1374081b46daa6f5e65b6c0e2b01703b08c07e8e3325a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82bf15a4e82d7bb37b1374081b46daa6f5e65b6c0e2b01703b08c07e8e3325a->enter($__internal_e82bf15a4e82d7bb37b1374081b46daa6f5e65b6c0e2b01703b08c07e8e3325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_77a71e93eee27089bba8b6807e201efd56f3eebda6663446fccc13a064f4e58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a71e93eee27089bba8b6807e201efd56f3eebda6663446fccc13a064f4e58e->enter($__internal_77a71e93eee27089bba8b6807e201efd56f3eebda6663446fccc13a064f4e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82bf15a4e82d7bb37b1374081b46daa6f5e65b6c0e2b01703b08c07e8e3325a->leave($__internal_e82bf15a4e82d7bb37b1374081b46daa6f5e65b6c0e2b01703b08c07e8e3325a_prof);

        
        $__internal_77a71e93eee27089bba8b6807e201efd56f3eebda6663446fccc13a064f4e58e->leave($__internal_77a71e93eee27089bba8b6807e201efd56f3eebda6663446fccc13a064f4e58e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a8c06cc05a9f9ce9863f5155e35d975b500a51f1ed915fae47f49557f83b6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8c06cc05a9f9ce9863f5155e35d975b500a51f1ed915fae47f49557f83b6c0->enter($__internal_5a8c06cc05a9f9ce9863f5155e35d975b500a51f1ed915fae47f49557f83b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84551253e5dc73b50a7c82941a8b8daa68a13349eccf72f618c84bca6521a6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84551253e5dc73b50a7c82941a8b8daa68a13349eccf72f618c84bca6521a6a5->enter($__internal_84551253e5dc73b50a7c82941a8b8daa68a13349eccf72f618c84bca6521a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_84551253e5dc73b50a7c82941a8b8daa68a13349eccf72f618c84bca6521a6a5->leave($__internal_84551253e5dc73b50a7c82941a8b8daa68a13349eccf72f618c84bca6521a6a5_prof);

        
        $__internal_5a8c06cc05a9f9ce9863f5155e35d975b500a51f1ed915fae47f49557f83b6c0->leave($__internal_5a8c06cc05a9f9ce9863f5155e35d975b500a51f1ed915fae47f49557f83b6c0_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
