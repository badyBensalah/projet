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
        $__internal_7e7637e6da5b3c90107b098f616e8151e82032ee9b8a502483c266535b500ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7637e6da5b3c90107b098f616e8151e82032ee9b8a502483c266535b500ae5->enter($__internal_7e7637e6da5b3c90107b098f616e8151e82032ee9b8a502483c266535b500ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vol/new.html.twig"));

        $__internal_7b2c17ae71ce37d7dd5991505c301f6a4cc384feaf0c99d28b796692b8f7987b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2c17ae71ce37d7dd5991505c301f6a4cc384feaf0c99d28b796692b8f7987b->enter($__internal_7b2c17ae71ce37d7dd5991505c301f6a4cc384feaf0c99d28b796692b8f7987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vol/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7637e6da5b3c90107b098f616e8151e82032ee9b8a502483c266535b500ae5->leave($__internal_7e7637e6da5b3c90107b098f616e8151e82032ee9b8a502483c266535b500ae5_prof);

        
        $__internal_7b2c17ae71ce37d7dd5991505c301f6a4cc384feaf0c99d28b796692b8f7987b->leave($__internal_7b2c17ae71ce37d7dd5991505c301f6a4cc384feaf0c99d28b796692b8f7987b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_657b551393689e69caafe45fae61478b4f1bcdca3e3503cc5575d887f87c69f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657b551393689e69caafe45fae61478b4f1bcdca3e3503cc5575d887f87c69f4->enter($__internal_657b551393689e69caafe45fae61478b4f1bcdca3e3503cc5575d887f87c69f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1521d64c5ab38b7cab15b76389ad5c072ea05c0a8514aed4774f2f83e8231b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1521d64c5ab38b7cab15b76389ad5c072ea05c0a8514aed4774f2f83e8231b1f->enter($__internal_1521d64c5ab38b7cab15b76389ad5c072ea05c0a8514aed4774f2f83e8231b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1521d64c5ab38b7cab15b76389ad5c072ea05c0a8514aed4774f2f83e8231b1f->leave($__internal_1521d64c5ab38b7cab15b76389ad5c072ea05c0a8514aed4774f2f83e8231b1f_prof);

        
        $__internal_657b551393689e69caafe45fae61478b4f1bcdca3e3503cc5575d887f87c69f4->leave($__internal_657b551393689e69caafe45fae61478b4f1bcdca3e3503cc5575d887f87c69f4_prof);

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
", "vol/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\vol\\new.html.twig");
    }
}
