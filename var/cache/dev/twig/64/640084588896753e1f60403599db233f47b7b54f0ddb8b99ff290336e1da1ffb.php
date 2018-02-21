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
        $__internal_d90281d4ed0d89b92f61946ea784c786f482b4e8d07c97c3ec9ea349551e440f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90281d4ed0d89b92f61946ea784c786f482b4e8d07c97c3ec9ea349551e440f->enter($__internal_d90281d4ed0d89b92f61946ea784c786f482b4e8d07c97c3ec9ea349551e440f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_7c8c684a5427a6dbdd6d576f266542b9551c03b8b0ee834cab94ad5dbe64b8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8c684a5427a6dbdd6d576f266542b9551c03b8b0ee834cab94ad5dbe64b8f9->enter($__internal_7c8c684a5427a6dbdd6d576f266542b9551c03b8b0ee834cab94ad5dbe64b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90281d4ed0d89b92f61946ea784c786f482b4e8d07c97c3ec9ea349551e440f->leave($__internal_d90281d4ed0d89b92f61946ea784c786f482b4e8d07c97c3ec9ea349551e440f_prof);

        
        $__internal_7c8c684a5427a6dbdd6d576f266542b9551c03b8b0ee834cab94ad5dbe64b8f9->leave($__internal_7c8c684a5427a6dbdd6d576f266542b9551c03b8b0ee834cab94ad5dbe64b8f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a5dfcf014423b7e4957c323ce350db82e05c4ecbf7c9b1139b6eec0fb6833d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a5dfcf014423b7e4957c323ce350db82e05c4ecbf7c9b1139b6eec0fb6833d->enter($__internal_74a5dfcf014423b7e4957c323ce350db82e05c4ecbf7c9b1139b6eec0fb6833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e45a44383f25db4928dd8d6a258df4b7d5cce29cabc66379313779f748667ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45a44383f25db4928dd8d6a258df4b7d5cce29cabc66379313779f748667ce7->enter($__internal_e45a44383f25db4928dd8d6a258df4b7d5cce29cabc66379313779f748667ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e45a44383f25db4928dd8d6a258df4b7d5cce29cabc66379313779f748667ce7->leave($__internal_e45a44383f25db4928dd8d6a258df4b7d5cce29cabc66379313779f748667ce7_prof);

        
        $__internal_74a5dfcf014423b7e4957c323ce350db82e05c4ecbf7c9b1139b6eec0fb6833d->leave($__internal_74a5dfcf014423b7e4957c323ce350db82e05c4ecbf7c9b1139b6eec0fb6833d_prof);

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
