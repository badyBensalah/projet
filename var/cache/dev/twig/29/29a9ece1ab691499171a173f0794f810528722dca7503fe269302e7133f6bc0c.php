<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
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
        $__internal_55188e59d53d898b1944fb3c312154e2112c0377f52db6b94b0bac257871dd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55188e59d53d898b1944fb3c312154e2112c0377f52db6b94b0bac257871dd8a->enter($__internal_55188e59d53d898b1944fb3c312154e2112c0377f52db6b94b0bac257871dd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2d7548d40c7c276d2e09c5aa94c4643415fead047d037f323837524dda531bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7548d40c7c276d2e09c5aa94c4643415fead047d037f323837524dda531bc3->enter($__internal_2d7548d40c7c276d2e09c5aa94c4643415fead047d037f323837524dda531bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55188e59d53d898b1944fb3c312154e2112c0377f52db6b94b0bac257871dd8a->leave($__internal_55188e59d53d898b1944fb3c312154e2112c0377f52db6b94b0bac257871dd8a_prof);

        
        $__internal_2d7548d40c7c276d2e09c5aa94c4643415fead047d037f323837524dda531bc3->leave($__internal_2d7548d40c7c276d2e09c5aa94c4643415fead047d037f323837524dda531bc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09ebaca9c6e6be64b9661af24e982a9aadd29b1778e6300f89373d91cec4fbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ebaca9c6e6be64b9661af24e982a9aadd29b1778e6300f89373d91cec4fbdd->enter($__internal_09ebaca9c6e6be64b9661af24e982a9aadd29b1778e6300f89373d91cec4fbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6e00102c32e910a2ea47dadd1660654866c67289d1bf33d429b41446aa63c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e00102c32e910a2ea47dadd1660654866c67289d1bf33d429b41446aa63c2b->enter($__internal_d6e00102c32e910a2ea47dadd1660654866c67289d1bf33d429b41446aa63c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d6e00102c32e910a2ea47dadd1660654866c67289d1bf33d429b41446aa63c2b->leave($__internal_d6e00102c32e910a2ea47dadd1660654866c67289d1bf33d429b41446aa63c2b_prof);

        
        $__internal_09ebaca9c6e6be64b9661af24e982a9aadd29b1778e6300f89373d91cec4fbdd->leave($__internal_09ebaca9c6e6be64b9661af24e982a9aadd29b1778e6300f89373d91cec4fbdd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd6a3e3d9d905d589194dca88279aac65bc3a87f81882822126d3936fe80470c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6a3e3d9d905d589194dca88279aac65bc3a87f81882822126d3936fe80470c->enter($__internal_fd6a3e3d9d905d589194dca88279aac65bc3a87f81882822126d3936fe80470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a85c0c6ad3171033205388b784bbeb53cc9418ecd9b2f4ada7cb21d4c9f17b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85c0c6ad3171033205388b784bbeb53cc9418ecd9b2f4ada7cb21d4c9f17b1e->enter($__internal_a85c0c6ad3171033205388b784bbeb53cc9418ecd9b2f4ada7cb21d4c9f17b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a85c0c6ad3171033205388b784bbeb53cc9418ecd9b2f4ada7cb21d4c9f17b1e->leave($__internal_a85c0c6ad3171033205388b784bbeb53cc9418ecd9b2f4ada7cb21d4c9f17b1e_prof);

        
        $__internal_fd6a3e3d9d905d589194dca88279aac65bc3a87f81882822126d3936fe80470c->leave($__internal_fd6a3e3d9d905d589194dca88279aac65bc3a87f81882822126d3936fe80470c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4db0655fe5b491aa96cc0aa97f3967a696c66440af7d8145247855f235d6f418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db0655fe5b491aa96cc0aa97f3967a696c66440af7d8145247855f235d6f418->enter($__internal_4db0655fe5b491aa96cc0aa97f3967a696c66440af7d8145247855f235d6f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4951b931400f2aa5b8ed18355e3cca047c0b2ae61015acc86001205bd7f5b4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4951b931400f2aa5b8ed18355e3cca047c0b2ae61015acc86001205bd7f5b4ef->enter($__internal_4951b931400f2aa5b8ed18355e3cca047c0b2ae61015acc86001205bd7f5b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4951b931400f2aa5b8ed18355e3cca047c0b2ae61015acc86001205bd7f5b4ef->leave($__internal_4951b931400f2aa5b8ed18355e3cca047c0b2ae61015acc86001205bd7f5b4ef_prof);

        
        $__internal_4db0655fe5b491aa96cc0aa97f3967a696c66440af7d8145247855f235d6f418->leave($__internal_4db0655fe5b491aa96cc0aa97f3967a696c66440af7d8145247855f235d6f418_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
