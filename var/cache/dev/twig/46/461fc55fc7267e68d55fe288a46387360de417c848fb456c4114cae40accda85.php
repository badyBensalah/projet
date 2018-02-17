<?php

/* pays/new.html.twig */
class __TwigTemplate_ee4706a10c8753a6329d3f6f8bfeb1ebba12a44973521942fd3d2aa2533a77c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pays/new.html.twig", 1);
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
        $__internal_fb83f019cae21a8ce08057b72b8d8159a7e85e863069dc7ef45ef064118e011d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb83f019cae21a8ce08057b72b8d8159a7e85e863069dc7ef45ef064118e011d->enter($__internal_fb83f019cae21a8ce08057b72b8d8159a7e85e863069dc7ef45ef064118e011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pays/new.html.twig"));

        $__internal_2342ce2db6bad2f491f6a3a153e7a391988b6155275d390dc515e87448199f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2342ce2db6bad2f491f6a3a153e7a391988b6155275d390dc515e87448199f35->enter($__internal_2342ce2db6bad2f491f6a3a153e7a391988b6155275d390dc515e87448199f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pays/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb83f019cae21a8ce08057b72b8d8159a7e85e863069dc7ef45ef064118e011d->leave($__internal_fb83f019cae21a8ce08057b72b8d8159a7e85e863069dc7ef45ef064118e011d_prof);

        
        $__internal_2342ce2db6bad2f491f6a3a153e7a391988b6155275d390dc515e87448199f35->leave($__internal_2342ce2db6bad2f491f6a3a153e7a391988b6155275d390dc515e87448199f35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3482f1cc181e8c70b7c020a862744e863bd876c304d1265f02cabf4f28d52f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3482f1cc181e8c70b7c020a862744e863bd876c304d1265f02cabf4f28d52f78->enter($__internal_3482f1cc181e8c70b7c020a862744e863bd876c304d1265f02cabf4f28d52f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_392aef924562ca99489d72641eac6b728d17b55041cc1c08f4ca6f8125a49a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392aef924562ca99489d72641eac6b728d17b55041cc1c08f4ca6f8125a49a2e->enter($__internal_392aef924562ca99489d72641eac6b728d17b55041cc1c08f4ca6f8125a49a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pays creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pays_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_392aef924562ca99489d72641eac6b728d17b55041cc1c08f4ca6f8125a49a2e->leave($__internal_392aef924562ca99489d72641eac6b728d17b55041cc1c08f4ca6f8125a49a2e_prof);

        
        $__internal_3482f1cc181e8c70b7c020a862744e863bd876c304d1265f02cabf4f28d52f78->leave($__internal_3482f1cc181e8c70b7c020a862744e863bd876c304d1265f02cabf4f28d52f78_prof);

    }

    public function getTemplateName()
    {
        return "pays/new.html.twig";
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
    <h1>Pays creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pays_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "pays/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\pays\\new.html.twig");
    }
}
