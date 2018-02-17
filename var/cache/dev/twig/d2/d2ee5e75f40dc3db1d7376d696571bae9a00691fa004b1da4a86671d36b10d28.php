<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b9f6515aa6fad78c726647043e6b18870a55a3fd69ccb1d664a1e3dc05b74034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_6c2e0dd03d61c5a5c169e244d30911327d1bd344c7451d2309c0b9742356cd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2e0dd03d61c5a5c169e244d30911327d1bd344c7451d2309c0b9742356cd89->enter($__internal_6c2e0dd03d61c5a5c169e244d30911327d1bd344c7451d2309c0b9742356cd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_581253d264f6f360c0080f1d81b6f42bfa67746cf6e3f7c0918ca492c1863b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581253d264f6f360c0080f1d81b6f42bfa67746cf6e3f7c0918ca492c1863b3c->enter($__internal_581253d264f6f360c0080f1d81b6f42bfa67746cf6e3f7c0918ca492c1863b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2e0dd03d61c5a5c169e244d30911327d1bd344c7451d2309c0b9742356cd89->leave($__internal_6c2e0dd03d61c5a5c169e244d30911327d1bd344c7451d2309c0b9742356cd89_prof);

        
        $__internal_581253d264f6f360c0080f1d81b6f42bfa67746cf6e3f7c0918ca492c1863b3c->leave($__internal_581253d264f6f360c0080f1d81b6f42bfa67746cf6e3f7c0918ca492c1863b3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c200aa7fe393c757570b2f5ebb6ceda0a7c9a57475500db5dae759263291732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c200aa7fe393c757570b2f5ebb6ceda0a7c9a57475500db5dae759263291732->enter($__internal_9c200aa7fe393c757570b2f5ebb6ceda0a7c9a57475500db5dae759263291732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78fe80d5cded74af7b638490a4d132345226452092e7cd50d0271d9ac4be040d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fe80d5cded74af7b638490a4d132345226452092e7cd50d0271d9ac4be040d->enter($__internal_78fe80d5cded74af7b638490a4d132345226452092e7cd50d0271d9ac4be040d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_78fe80d5cded74af7b638490a4d132345226452092e7cd50d0271d9ac4be040d->leave($__internal_78fe80d5cded74af7b638490a4d132345226452092e7cd50d0271d9ac4be040d_prof);

        
        $__internal_9c200aa7fe393c757570b2f5ebb6ceda0a7c9a57475500db5dae759263291732->leave($__internal_9c200aa7fe393c757570b2f5ebb6ceda0a7c9a57475500db5dae759263291732_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
