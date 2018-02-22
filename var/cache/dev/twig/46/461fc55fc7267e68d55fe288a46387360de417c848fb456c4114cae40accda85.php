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
        $__internal_5a65823dc8f3d858029caeb46f150427a32115517cc618e5e475bc9329590a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a65823dc8f3d858029caeb46f150427a32115517cc618e5e475bc9329590a57->enter($__internal_5a65823dc8f3d858029caeb46f150427a32115517cc618e5e475bc9329590a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pays/new.html.twig"));

        $__internal_89c476d88493e6a058ce5de8a7d72d6c883f10894401a6544c8e06c70afc72d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c476d88493e6a058ce5de8a7d72d6c883f10894401a6544c8e06c70afc72d1->enter($__internal_89c476d88493e6a058ce5de8a7d72d6c883f10894401a6544c8e06c70afc72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pays/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a65823dc8f3d858029caeb46f150427a32115517cc618e5e475bc9329590a57->leave($__internal_5a65823dc8f3d858029caeb46f150427a32115517cc618e5e475bc9329590a57_prof);

        
        $__internal_89c476d88493e6a058ce5de8a7d72d6c883f10894401a6544c8e06c70afc72d1->leave($__internal_89c476d88493e6a058ce5de8a7d72d6c883f10894401a6544c8e06c70afc72d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_201ebea87fed26f19ea39027e8fa85285a95be010955389cc41786ff753d9d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201ebea87fed26f19ea39027e8fa85285a95be010955389cc41786ff753d9d23->enter($__internal_201ebea87fed26f19ea39027e8fa85285a95be010955389cc41786ff753d9d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46fcf8ac468f4e759b990bbb4a82640b820f803a92b89d8c861b06a111494d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46fcf8ac468f4e759b990bbb4a82640b820f803a92b89d8c861b06a111494d5->enter($__internal_a46fcf8ac468f4e759b990bbb4a82640b820f803a92b89d8c861b06a111494d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a46fcf8ac468f4e759b990bbb4a82640b820f803a92b89d8c861b06a111494d5->leave($__internal_a46fcf8ac468f4e759b990bbb4a82640b820f803a92b89d8c861b06a111494d5_prof);

        
        $__internal_201ebea87fed26f19ea39027e8fa85285a95be010955389cc41786ff753d9d23->leave($__internal_201ebea87fed26f19ea39027e8fa85285a95be010955389cc41786ff753d9d23_prof);

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
", "pays/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\pays\\new.html.twig");
    }
}
