<?php

/* user/new.html.twig */
class __TwigTemplate_274c707d1e7f2e47771ad207af26781fb77e863253b0f7b480c93cb9b6464dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_5c7696010cb9dd6a5f7ca70d5cfef9a9e46c76f63454338b3019b0e46f3a15b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7696010cb9dd6a5f7ca70d5cfef9a9e46c76f63454338b3019b0e46f3a15b7->enter($__internal_5c7696010cb9dd6a5f7ca70d5cfef9a9e46c76f63454338b3019b0e46f3a15b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_b46b3b9b613f3d2eb5dcf6cfb0283badabdf168ece3c5d05c5738938fa4d7ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46b3b9b613f3d2eb5dcf6cfb0283badabdf168ece3c5d05c5738938fa4d7ef4->enter($__internal_b46b3b9b613f3d2eb5dcf6cfb0283badabdf168ece3c5d05c5738938fa4d7ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c7696010cb9dd6a5f7ca70d5cfef9a9e46c76f63454338b3019b0e46f3a15b7->leave($__internal_5c7696010cb9dd6a5f7ca70d5cfef9a9e46c76f63454338b3019b0e46f3a15b7_prof);

        
        $__internal_b46b3b9b613f3d2eb5dcf6cfb0283badabdf168ece3c5d05c5738938fa4d7ef4->leave($__internal_b46b3b9b613f3d2eb5dcf6cfb0283badabdf168ece3c5d05c5738938fa4d7ef4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d2db16f4f742fd536b9e4b21b3cc1ab27a796cfc7b2bf7d02129593ed06e8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2db16f4f742fd536b9e4b21b3cc1ab27a796cfc7b2bf7d02129593ed06e8a0->enter($__internal_3d2db16f4f742fd536b9e4b21b3cc1ab27a796cfc7b2bf7d02129593ed06e8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bfbe1641b61c21f376c2038eaf0b2caac049d508bafad9e82c8a926eed6a2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfbe1641b61c21f376c2038eaf0b2caac049d508bafad9e82c8a926eed6a2c7->enter($__internal_6bfbe1641b61c21f376c2038eaf0b2caac049d508bafad9e82c8a926eed6a2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6bfbe1641b61c21f376c2038eaf0b2caac049d508bafad9e82c8a926eed6a2c7->leave($__internal_6bfbe1641b61c21f376c2038eaf0b2caac049d508bafad9e82c8a926eed6a2c7_prof);

        
        $__internal_3d2db16f4f742fd536b9e4b21b3cc1ab27a796cfc7b2bf7d02129593ed06e8a0->leave($__internal_3d2db16f4f742fd536b9e4b21b3cc1ab27a796cfc7b2bf7d02129593ed06e8a0_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\user\\new.html.twig");
    }
}
