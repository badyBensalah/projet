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
        $__internal_5f890dd7e06dfe2dae0fd37e98e41fc753f7d3fad18bc098d8774f955e421f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f890dd7e06dfe2dae0fd37e98e41fc753f7d3fad18bc098d8774f955e421f33->enter($__internal_5f890dd7e06dfe2dae0fd37e98e41fc753f7d3fad18bc098d8774f955e421f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_bfc928ba2f8c3f6fc238a0c4952496d13adf39e4bc6440531d011a42c9f0241c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc928ba2f8c3f6fc238a0c4952496d13adf39e4bc6440531d011a42c9f0241c->enter($__internal_bfc928ba2f8c3f6fc238a0c4952496d13adf39e4bc6440531d011a42c9f0241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f890dd7e06dfe2dae0fd37e98e41fc753f7d3fad18bc098d8774f955e421f33->leave($__internal_5f890dd7e06dfe2dae0fd37e98e41fc753f7d3fad18bc098d8774f955e421f33_prof);

        
        $__internal_bfc928ba2f8c3f6fc238a0c4952496d13adf39e4bc6440531d011a42c9f0241c->leave($__internal_bfc928ba2f8c3f6fc238a0c4952496d13adf39e4bc6440531d011a42c9f0241c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f092874cf8b40d247eb126ff898a64f8d23e68af66972b6e1123922a562d5723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f092874cf8b40d247eb126ff898a64f8d23e68af66972b6e1123922a562d5723->enter($__internal_f092874cf8b40d247eb126ff898a64f8d23e68af66972b6e1123922a562d5723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2d2a6b472a7c1a7eec7fa8adbc155a1542c919a1a87fec6e39b6bf43500ed17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d2a6b472a7c1a7eec7fa8adbc155a1542c919a1a87fec6e39b6bf43500ed17->enter($__internal_d2d2a6b472a7c1a7eec7fa8adbc155a1542c919a1a87fec6e39b6bf43500ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d2d2a6b472a7c1a7eec7fa8adbc155a1542c919a1a87fec6e39b6bf43500ed17->leave($__internal_d2d2a6b472a7c1a7eec7fa8adbc155a1542c919a1a87fec6e39b6bf43500ed17_prof);

        
        $__internal_f092874cf8b40d247eb126ff898a64f8d23e68af66972b6e1123922a562d5723->leave($__internal_f092874cf8b40d247eb126ff898a64f8d23e68af66972b6e1123922a562d5723_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_990f17bdd7d87f93835dff184915af362671b41586be9f87ac37119d0c66bc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990f17bdd7d87f93835dff184915af362671b41586be9f87ac37119d0c66bc1f->enter($__internal_990f17bdd7d87f93835dff184915af362671b41586be9f87ac37119d0c66bc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c885fe4ad8f94eab4860f0647df0eac8f73ca1633eb27bcabe73b725d9dcf983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c885fe4ad8f94eab4860f0647df0eac8f73ca1633eb27bcabe73b725d9dcf983->enter($__internal_c885fe4ad8f94eab4860f0647df0eac8f73ca1633eb27bcabe73b725d9dcf983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c885fe4ad8f94eab4860f0647df0eac8f73ca1633eb27bcabe73b725d9dcf983->leave($__internal_c885fe4ad8f94eab4860f0647df0eac8f73ca1633eb27bcabe73b725d9dcf983_prof);

        
        $__internal_990f17bdd7d87f93835dff184915af362671b41586be9f87ac37119d0c66bc1f->leave($__internal_990f17bdd7d87f93835dff184915af362671b41586be9f87ac37119d0c66bc1f_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
