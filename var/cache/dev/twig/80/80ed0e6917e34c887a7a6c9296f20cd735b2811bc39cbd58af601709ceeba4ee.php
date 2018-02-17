<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_64466c9d8ab246c8e95abb8e009ea94da2f8931228246be834c161ca9b1b437f extends Twig_Template
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
        $__internal_ff2e38c0cb83097db12410c997137fb98af4134aa702223fe9f945791f49c87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2e38c0cb83097db12410c997137fb98af4134aa702223fe9f945791f49c87d->enter($__internal_ff2e38c0cb83097db12410c997137fb98af4134aa702223fe9f945791f49c87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_706abddae16c962c8130832b0090ccd0c32d2fc74a027ed41eef1dfdaef9adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706abddae16c962c8130832b0090ccd0c32d2fc74a027ed41eef1dfdaef9adec->enter($__internal_706abddae16c962c8130832b0090ccd0c32d2fc74a027ed41eef1dfdaef9adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff2e38c0cb83097db12410c997137fb98af4134aa702223fe9f945791f49c87d->leave($__internal_ff2e38c0cb83097db12410c997137fb98af4134aa702223fe9f945791f49c87d_prof);

        
        $__internal_706abddae16c962c8130832b0090ccd0c32d2fc74a027ed41eef1dfdaef9adec->leave($__internal_706abddae16c962c8130832b0090ccd0c32d2fc74a027ed41eef1dfdaef9adec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_964760b29abdba6fabc111cb43a7b2fb7a6dbe29fcbab2ef8c5620dc206677dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964760b29abdba6fabc111cb43a7b2fb7a6dbe29fcbab2ef8c5620dc206677dc->enter($__internal_964760b29abdba6fabc111cb43a7b2fb7a6dbe29fcbab2ef8c5620dc206677dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee698245b800524911a46a776178a3c7cb84fa661601f87e390c5b873055a403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee698245b800524911a46a776178a3c7cb84fa661601f87e390c5b873055a403->enter($__internal_ee698245b800524911a46a776178a3c7cb84fa661601f87e390c5b873055a403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ee698245b800524911a46a776178a3c7cb84fa661601f87e390c5b873055a403->leave($__internal_ee698245b800524911a46a776178a3c7cb84fa661601f87e390c5b873055a403_prof);

        
        $__internal_964760b29abdba6fabc111cb43a7b2fb7a6dbe29fcbab2ef8c5620dc206677dc->leave($__internal_964760b29abdba6fabc111cb43a7b2fb7a6dbe29fcbab2ef8c5620dc206677dc_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
