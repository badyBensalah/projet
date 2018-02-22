<?php

/* article/new.html.twig */
class __TwigTemplate_321f32d6ef3e0016137e71555d8b9a4529b1433852e3dd93378836857ee0ddd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
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
        $__internal_c23a8f795455ce12d9a1a52c306783de4c418976d4d3b1569738e61d3d81c56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23a8f795455ce12d9a1a52c306783de4c418976d4d3b1569738e61d3d81c56b->enter($__internal_c23a8f795455ce12d9a1a52c306783de4c418976d4d3b1569738e61d3d81c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_e128fb0902d222b5bd0963554dfe4b502c3b9c5125763a3fb800461875d209ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e128fb0902d222b5bd0963554dfe4b502c3b9c5125763a3fb800461875d209ce->enter($__internal_e128fb0902d222b5bd0963554dfe4b502c3b9c5125763a3fb800461875d209ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c23a8f795455ce12d9a1a52c306783de4c418976d4d3b1569738e61d3d81c56b->leave($__internal_c23a8f795455ce12d9a1a52c306783de4c418976d4d3b1569738e61d3d81c56b_prof);

        
        $__internal_e128fb0902d222b5bd0963554dfe4b502c3b9c5125763a3fb800461875d209ce->leave($__internal_e128fb0902d222b5bd0963554dfe4b502c3b9c5125763a3fb800461875d209ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b2c2848df797af9f6736c596dd7d3cfe4f03c9e6050e132e792261dfea90e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b2c2848df797af9f6736c596dd7d3cfe4f03c9e6050e132e792261dfea90e9->enter($__internal_02b2c2848df797af9f6736c596dd7d3cfe4f03c9e6050e132e792261dfea90e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f7bab8d90384b187ad86e9da94b5776b650428594473de50a2e5bddd4137325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7bab8d90384b187ad86e9da94b5776b650428594473de50a2e5bddd4137325->enter($__internal_1f7bab8d90384b187ad86e9da94b5776b650428594473de50a2e5bddd4137325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1f7bab8d90384b187ad86e9da94b5776b650428594473de50a2e5bddd4137325->leave($__internal_1f7bab8d90384b187ad86e9da94b5776b650428594473de50a2e5bddd4137325_prof);

        
        $__internal_02b2c2848df797af9f6736c596dd7d3cfe4f03c9e6050e132e792261dfea90e9->leave($__internal_02b2c2848df797af9f6736c596dd7d3cfe4f03c9e6050e132e792261dfea90e9_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
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
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\article\\new.html.twig");
    }
}
