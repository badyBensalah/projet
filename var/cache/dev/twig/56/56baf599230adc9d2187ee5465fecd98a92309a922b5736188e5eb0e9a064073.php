<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d88370062857c6314168aa357572cb84ed9fdf24f2a6c4cc1c44c73b76adc68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_194fd8c05e217679453976a226547917ee4114ef8ca1db7ca886542767022e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194fd8c05e217679453976a226547917ee4114ef8ca1db7ca886542767022e18->enter($__internal_194fd8c05e217679453976a226547917ee4114ef8ca1db7ca886542767022e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f7381eaed316aded8d7592bbe38860d0e1b79c764bea52135564c1f4069e2e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7381eaed316aded8d7592bbe38860d0e1b79c764bea52135564c1f4069e2e3e->enter($__internal_f7381eaed316aded8d7592bbe38860d0e1b79c764bea52135564c1f4069e2e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_194fd8c05e217679453976a226547917ee4114ef8ca1db7ca886542767022e18->leave($__internal_194fd8c05e217679453976a226547917ee4114ef8ca1db7ca886542767022e18_prof);

        
        $__internal_f7381eaed316aded8d7592bbe38860d0e1b79c764bea52135564c1f4069e2e3e->leave($__internal_f7381eaed316aded8d7592bbe38860d0e1b79c764bea52135564c1f4069e2e3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_526d8f27c69cc55ca8fc6c60481dc5c33968260214892569ac5c7d9d05de1ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526d8f27c69cc55ca8fc6c60481dc5c33968260214892569ac5c7d9d05de1ad7->enter($__internal_526d8f27c69cc55ca8fc6c60481dc5c33968260214892569ac5c7d9d05de1ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_342a84d5090dcf5c35a0cd7adc7dbf5784e84bad9ceb6b9fcac6c81fe8a007e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342a84d5090dcf5c35a0cd7adc7dbf5784e84bad9ceb6b9fcac6c81fe8a007e8->enter($__internal_342a84d5090dcf5c35a0cd7adc7dbf5784e84bad9ceb6b9fcac6c81fe8a007e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_342a84d5090dcf5c35a0cd7adc7dbf5784e84bad9ceb6b9fcac6c81fe8a007e8->leave($__internal_342a84d5090dcf5c35a0cd7adc7dbf5784e84bad9ceb6b9fcac6c81fe8a007e8_prof);

        
        $__internal_526d8f27c69cc55ca8fc6c60481dc5c33968260214892569ac5c7d9d05de1ad7->leave($__internal_526d8f27c69cc55ca8fc6c60481dc5c33968260214892569ac5c7d9d05de1ad7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_86558754fffb625a87097500d78a40d029492ca58c8e002f7196e755e0b5b528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86558754fffb625a87097500d78a40d029492ca58c8e002f7196e755e0b5b528->enter($__internal_86558754fffb625a87097500d78a40d029492ca58c8e002f7196e755e0b5b528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f68f912df40c802ebde14edd14a9da5361ab30d242ddadf72d132fd8fe00ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f68f912df40c802ebde14edd14a9da5361ab30d242ddadf72d132fd8fe00ffa->enter($__internal_4f68f912df40c802ebde14edd14a9da5361ab30d242ddadf72d132fd8fe00ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f68f912df40c802ebde14edd14a9da5361ab30d242ddadf72d132fd8fe00ffa->leave($__internal_4f68f912df40c802ebde14edd14a9da5361ab30d242ddadf72d132fd8fe00ffa_prof);

        
        $__internal_86558754fffb625a87097500d78a40d029492ca58c8e002f7196e755e0b5b528->leave($__internal_86558754fffb625a87097500d78a40d029492ca58c8e002f7196e755e0b5b528_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_328db796eafc3a2bb8768acb089428201eaa22c0f2bc8dec15e7c8658e08c56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328db796eafc3a2bb8768acb089428201eaa22c0f2bc8dec15e7c8658e08c56f->enter($__internal_328db796eafc3a2bb8768acb089428201eaa22c0f2bc8dec15e7c8658e08c56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_375859a39008c808471c08220dd90a6036634f27b7d743d0d604ce20621fa32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375859a39008c808471c08220dd90a6036634f27b7d743d0d604ce20621fa32d->enter($__internal_375859a39008c808471c08220dd90a6036634f27b7d743d0d604ce20621fa32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_375859a39008c808471c08220dd90a6036634f27b7d743d0d604ce20621fa32d->leave($__internal_375859a39008c808471c08220dd90a6036634f27b7d743d0d604ce20621fa32d_prof);

        
        $__internal_328db796eafc3a2bb8768acb089428201eaa22c0f2bc8dec15e7c8658e08c56f->leave($__internal_328db796eafc3a2bb8768acb089428201eaa22c0f2bc8dec15e7c8658e08c56f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
