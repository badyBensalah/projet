<?php

/* experience/new.html.twig */
class __TwigTemplate_b2528e621d179774573b92f6f203a9af305bfd2d7ae68745b5d9243c487fef3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "experience/new.html.twig", 1);
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
        $__internal_1984072b0ac436fa6b712a6521b281b1b3b17ca2c4d1361b89ef72a437371774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1984072b0ac436fa6b712a6521b281b1b3b17ca2c4d1361b89ef72a437371774->enter($__internal_1984072b0ac436fa6b712a6521b281b1b3b17ca2c4d1361b89ef72a437371774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/new.html.twig"));

        $__internal_f057b2fabdd3c570c4c19e429b99ceecfb426564a4a77ef0d283038379367320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f057b2fabdd3c570c4c19e429b99ceecfb426564a4a77ef0d283038379367320->enter($__internal_f057b2fabdd3c570c4c19e429b99ceecfb426564a4a77ef0d283038379367320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1984072b0ac436fa6b712a6521b281b1b3b17ca2c4d1361b89ef72a437371774->leave($__internal_1984072b0ac436fa6b712a6521b281b1b3b17ca2c4d1361b89ef72a437371774_prof);

        
        $__internal_f057b2fabdd3c570c4c19e429b99ceecfb426564a4a77ef0d283038379367320->leave($__internal_f057b2fabdd3c570c4c19e429b99ceecfb426564a4a77ef0d283038379367320_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a32d0f6289812b7311fb7e31e15ed9167f6a2cde625e3ec62f6f3cb0a6bb839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a32d0f6289812b7311fb7e31e15ed9167f6a2cde625e3ec62f6f3cb0a6bb839->enter($__internal_3a32d0f6289812b7311fb7e31e15ed9167f6a2cde625e3ec62f6f3cb0a6bb839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c772ffeb2a870bca7f0b015b05c0df18d7391b9a511b1d2a1949dd92fdb809c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c772ffeb2a870bca7f0b015b05c0df18d7391b9a511b1d2a1949dd92fdb809c4->enter($__internal_c772ffeb2a870bca7f0b015b05c0df18d7391b9a511b1d2a1949dd92fdb809c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Experience creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c772ffeb2a870bca7f0b015b05c0df18d7391b9a511b1d2a1949dd92fdb809c4->leave($__internal_c772ffeb2a870bca7f0b015b05c0df18d7391b9a511b1d2a1949dd92fdb809c4_prof);

        
        $__internal_3a32d0f6289812b7311fb7e31e15ed9167f6a2cde625e3ec62f6f3cb0a6bb839->leave($__internal_3a32d0f6289812b7311fb7e31e15ed9167f6a2cde625e3ec62f6f3cb0a6bb839_prof);

    }

    public function getTemplateName()
    {
        return "experience/new.html.twig";
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
    <h1>Experience creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('experience_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "experience/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\experience\\new.html.twig");
    }
}
