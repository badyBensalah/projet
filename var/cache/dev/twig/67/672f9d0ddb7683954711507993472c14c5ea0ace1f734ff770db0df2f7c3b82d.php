<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c34ee60308cfc4e4a7d48f817ccb50442622b253acd2419d4feacd209376f320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2866985809af724d1f757aed52fbca2031797694dd26e69041ecb4dcb1489b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2866985809af724d1f757aed52fbca2031797694dd26e69041ecb4dcb1489b6a->enter($__internal_2866985809af724d1f757aed52fbca2031797694dd26e69041ecb4dcb1489b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8ac50cc959786740c4dfb0ba399a56211d32fdf76ca7d04435c7c21c3f2aa317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac50cc959786740c4dfb0ba399a56211d32fdf76ca7d04435c7c21c3f2aa317->enter($__internal_8ac50cc959786740c4dfb0ba399a56211d32fdf76ca7d04435c7c21c3f2aa317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2866985809af724d1f757aed52fbca2031797694dd26e69041ecb4dcb1489b6a->leave($__internal_2866985809af724d1f757aed52fbca2031797694dd26e69041ecb4dcb1489b6a_prof);

        
        $__internal_8ac50cc959786740c4dfb0ba399a56211d32fdf76ca7d04435c7c21c3f2aa317->leave($__internal_8ac50cc959786740c4dfb0ba399a56211d32fdf76ca7d04435c7c21c3f2aa317_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0071efbbcd66ce166bc7e4d6ba0e7213c061669ae6e7549442aa7ddc37a9fef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0071efbbcd66ce166bc7e4d6ba0e7213c061669ae6e7549442aa7ddc37a9fef6->enter($__internal_0071efbbcd66ce166bc7e4d6ba0e7213c061669ae6e7549442aa7ddc37a9fef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c6911a9ad54b87802c91f9bfa21769214ba26b6bef89b6bceea346dbc69402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6911a9ad54b87802c91f9bfa21769214ba26b6bef89b6bceea346dbc69402c->enter($__internal_2c6911a9ad54b87802c91f9bfa21769214ba26b6bef89b6bceea346dbc69402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2c6911a9ad54b87802c91f9bfa21769214ba26b6bef89b6bceea346dbc69402c->leave($__internal_2c6911a9ad54b87802c91f9bfa21769214ba26b6bef89b6bceea346dbc69402c_prof);

        
        $__internal_0071efbbcd66ce166bc7e4d6ba0e7213c061669ae6e7549442aa7ddc37a9fef6->leave($__internal_0071efbbcd66ce166bc7e4d6ba0e7213c061669ae6e7549442aa7ddc37a9fef6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d4f7bda3e321c5a2352e09f8ba738ffb980a8c621c6c5413ffef604a1ff4d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f7bda3e321c5a2352e09f8ba738ffb980a8c621c6c5413ffef604a1ff4d77->enter($__internal_5d4f7bda3e321c5a2352e09f8ba738ffb980a8c621c6c5413ffef604a1ff4d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aa8a8284e4deb0cd00dd1f30feeb5d7902c52eb349e3758231b5ed84904baff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa8a8284e4deb0cd00dd1f30feeb5d7902c52eb349e3758231b5ed84904baff->enter($__internal_5aa8a8284e4deb0cd00dd1f30feeb5d7902c52eb349e3758231b5ed84904baff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5aa8a8284e4deb0cd00dd1f30feeb5d7902c52eb349e3758231b5ed84904baff->leave($__internal_5aa8a8284e4deb0cd00dd1f30feeb5d7902c52eb349e3758231b5ed84904baff_prof);

        
        $__internal_5d4f7bda3e321c5a2352e09f8ba738ffb980a8c621c6c5413ffef604a1ff4d77->leave($__internal_5d4f7bda3e321c5a2352e09f8ba738ffb980a8c621c6c5413ffef604a1ff4d77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
