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
        $__internal_37dd9366246ee3eca6f445304839e4549d4bf06561e5bf9b15b3aa057ed49c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dd9366246ee3eca6f445304839e4549d4bf06561e5bf9b15b3aa057ed49c5e->enter($__internal_37dd9366246ee3eca6f445304839e4549d4bf06561e5bf9b15b3aa057ed49c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_e95ab1ac21070b879e4fbae7bcc9996e646c5aaa51721d391bb73427da7e6a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95ab1ac21070b879e4fbae7bcc9996e646c5aaa51721d391bb73427da7e6a2d->enter($__internal_e95ab1ac21070b879e4fbae7bcc9996e646c5aaa51721d391bb73427da7e6a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37dd9366246ee3eca6f445304839e4549d4bf06561e5bf9b15b3aa057ed49c5e->leave($__internal_37dd9366246ee3eca6f445304839e4549d4bf06561e5bf9b15b3aa057ed49c5e_prof);

        
        $__internal_e95ab1ac21070b879e4fbae7bcc9996e646c5aaa51721d391bb73427da7e6a2d->leave($__internal_e95ab1ac21070b879e4fbae7bcc9996e646c5aaa51721d391bb73427da7e6a2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55df9d1fe99bab1c48b20fe1d0204e50f09cb4e447b8ad774a44095d5bbb882a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55df9d1fe99bab1c48b20fe1d0204e50f09cb4e447b8ad774a44095d5bbb882a->enter($__internal_55df9d1fe99bab1c48b20fe1d0204e50f09cb4e447b8ad774a44095d5bbb882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6b4b43c4a8d7771287d3ba80f0dc7d8cde7783d960b6043290d272fb75b2198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b4b43c4a8d7771287d3ba80f0dc7d8cde7783d960b6043290d272fb75b2198->enter($__internal_f6b4b43c4a8d7771287d3ba80f0dc7d8cde7783d960b6043290d272fb75b2198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6b4b43c4a8d7771287d3ba80f0dc7d8cde7783d960b6043290d272fb75b2198->leave($__internal_f6b4b43c4a8d7771287d3ba80f0dc7d8cde7783d960b6043290d272fb75b2198_prof);

        
        $__internal_55df9d1fe99bab1c48b20fe1d0204e50f09cb4e447b8ad774a44095d5bbb882a->leave($__internal_55df9d1fe99bab1c48b20fe1d0204e50f09cb4e447b8ad774a44095d5bbb882a_prof);

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
", "article/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\article\\new.html.twig");
    }
}
