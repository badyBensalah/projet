<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9c8296c954295786db69ac285ffde09ba8e458fac4241fa23912055bbfb3a0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9cc29c13620af9e26ff1cdc304d1c37fabb1e344b2b3890a1514b4f8b0b5523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cc29c13620af9e26ff1cdc304d1c37fabb1e344b2b3890a1514b4f8b0b5523->enter($__internal_d9cc29c13620af9e26ff1cdc304d1c37fabb1e344b2b3890a1514b4f8b0b5523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f43bf5248152456cf6e074669f2e5fc0e8f343472d3bc8255eed8629fc7a3681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43bf5248152456cf6e074669f2e5fc0e8f343472d3bc8255eed8629fc7a3681->enter($__internal_f43bf5248152456cf6e074669f2e5fc0e8f343472d3bc8255eed8629fc7a3681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9cc29c13620af9e26ff1cdc304d1c37fabb1e344b2b3890a1514b4f8b0b5523->leave($__internal_d9cc29c13620af9e26ff1cdc304d1c37fabb1e344b2b3890a1514b4f8b0b5523_prof);

        
        $__internal_f43bf5248152456cf6e074669f2e5fc0e8f343472d3bc8255eed8629fc7a3681->leave($__internal_f43bf5248152456cf6e074669f2e5fc0e8f343472d3bc8255eed8629fc7a3681_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41f73a39636bb3307b78371564fe9c3faea7e19ee4248818eec55fc09348fa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f73a39636bb3307b78371564fe9c3faea7e19ee4248818eec55fc09348fa98->enter($__internal_41f73a39636bb3307b78371564fe9c3faea7e19ee4248818eec55fc09348fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8feee378d2168f1401dfb4613e0846f6c193899626d9bb7fb208e0693e518767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feee378d2168f1401dfb4613e0846f6c193899626d9bb7fb208e0693e518767->enter($__internal_8feee378d2168f1401dfb4613e0846f6c193899626d9bb7fb208e0693e518767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_8feee378d2168f1401dfb4613e0846f6c193899626d9bb7fb208e0693e518767->leave($__internal_8feee378d2168f1401dfb4613e0846f6c193899626d9bb7fb208e0693e518767_prof);

        
        $__internal_41f73a39636bb3307b78371564fe9c3faea7e19ee4248818eec55fc09348fa98->leave($__internal_41f73a39636bb3307b78371564fe9c3faea7e19ee4248818eec55fc09348fa98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
