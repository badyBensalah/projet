<?php

/* vol/new.html.twig */
class __TwigTemplate_074ba694b5b41757f3ce403ad01ad1062620f655c1d68cba0ab71515763d2213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vol/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9cb0b84d7cc0c5ec2ed8e5410f5125a24b7a933f5ab96cc7564702f816ff60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cb0b84d7cc0c5ec2ed8e5410f5125a24b7a933f5ab96cc7564702f816ff60a->enter($__internal_c9cb0b84d7cc0c5ec2ed8e5410f5125a24b7a933f5ab96cc7564702f816ff60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vol/new.html.twig"));

        $__internal_8be2a399ec634410e2387617d41b6a39c24d5d29fe4026811ec0d69b0c442b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be2a399ec634410e2387617d41b6a39c24d5d29fe4026811ec0d69b0c442b8d->enter($__internal_8be2a399ec634410e2387617d41b6a39c24d5d29fe4026811ec0d69b0c442b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vol/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9cb0b84d7cc0c5ec2ed8e5410f5125a24b7a933f5ab96cc7564702f816ff60a->leave($__internal_c9cb0b84d7cc0c5ec2ed8e5410f5125a24b7a933f5ab96cc7564702f816ff60a_prof);

        
        $__internal_8be2a399ec634410e2387617d41b6a39c24d5d29fe4026811ec0d69b0c442b8d->leave($__internal_8be2a399ec634410e2387617d41b6a39c24d5d29fe4026811ec0d69b0c442b8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9c99683ff02128475f80dd34747be3098d5e51306c8a3525ebbb1b82013324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9c99683ff02128475f80dd34747be3098d5e51306c8a3525ebbb1b82013324->enter($__internal_aa9c99683ff02128475f80dd34747be3098d5e51306c8a3525ebbb1b82013324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_168c45581f46a9bba58c3ee386a702bcc9bbce35e42da1781ee4b44fa6b2f054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168c45581f46a9bba58c3ee386a702bcc9bbce35e42da1781ee4b44fa6b2f054->enter($__internal_168c45581f46a9bba58c3ee386a702bcc9bbce35e42da1781ee4b44fa6b2f054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Vol creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vol_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_168c45581f46a9bba58c3ee386a702bcc9bbce35e42da1781ee4b44fa6b2f054->leave($__internal_168c45581f46a9bba58c3ee386a702bcc9bbce35e42da1781ee4b44fa6b2f054_prof);

        
        $__internal_aa9c99683ff02128475f80dd34747be3098d5e51306c8a3525ebbb1b82013324->leave($__internal_aa9c99683ff02128475f80dd34747be3098d5e51306c8a3525ebbb1b82013324_prof);

    }

    public function getTemplateName()
    {
        return "vol/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Vol creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('vol_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "vol/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\vol\\new.html.twig");
    }
}
