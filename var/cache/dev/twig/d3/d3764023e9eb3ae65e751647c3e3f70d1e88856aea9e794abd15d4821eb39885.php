<?php

/* croisiere/new.html.twig */
class __TwigTemplate_724c68eeec83f31ef0348aef1723e7ecf6467294c3a65a230056cddb9260ef64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "croisiere/new.html.twig", 1);
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
        $__internal_7ca6d4eb73062b9c817de5a8ee95c2fa4672f2db7f18e790e03bcc23814521de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca6d4eb73062b9c817de5a8ee95c2fa4672f2db7f18e790e03bcc23814521de->enter($__internal_7ca6d4eb73062b9c817de5a8ee95c2fa4672f2db7f18e790e03bcc23814521de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $__internal_ba61280dd4ff30fbb9bca85af2063ba6e9537a5df114e28a986d4e19675d5d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba61280dd4ff30fbb9bca85af2063ba6e9537a5df114e28a986d4e19675d5d6c->enter($__internal_ba61280dd4ff30fbb9bca85af2063ba6e9537a5df114e28a986d4e19675d5d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca6d4eb73062b9c817de5a8ee95c2fa4672f2db7f18e790e03bcc23814521de->leave($__internal_7ca6d4eb73062b9c817de5a8ee95c2fa4672f2db7f18e790e03bcc23814521de_prof);

        
        $__internal_ba61280dd4ff30fbb9bca85af2063ba6e9537a5df114e28a986d4e19675d5d6c->leave($__internal_ba61280dd4ff30fbb9bca85af2063ba6e9537a5df114e28a986d4e19675d5d6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9ac5bc000444cfbb1284b1db071d07470be3575254e1896eb30eabecaf1b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9ac5bc000444cfbb1284b1db071d07470be3575254e1896eb30eabecaf1b24->enter($__internal_aa9ac5bc000444cfbb1284b1db071d07470be3575254e1896eb30eabecaf1b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ce051eefb308f221c23cec80a759a62261ac9a52b9be4bf14f9911c85a49155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce051eefb308f221c23cec80a759a62261ac9a52b9be4bf14f9911c85a49155->enter($__internal_8ce051eefb308f221c23cec80a759a62261ac9a52b9be4bf14f9911c85a49155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Croisiere creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("croisiere_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8ce051eefb308f221c23cec80a759a62261ac9a52b9be4bf14f9911c85a49155->leave($__internal_8ce051eefb308f221c23cec80a759a62261ac9a52b9be4bf14f9911c85a49155_prof);

        
        $__internal_aa9ac5bc000444cfbb1284b1db071d07470be3575254e1896eb30eabecaf1b24->leave($__internal_aa9ac5bc000444cfbb1284b1db071d07470be3575254e1896eb30eabecaf1b24_prof);

    }

    public function getTemplateName()
    {
        return "croisiere/new.html.twig";
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
    <h1>Croisiere creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('croisiere_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "croisiere/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\croisiere\\new.html.twig");
    }
}
