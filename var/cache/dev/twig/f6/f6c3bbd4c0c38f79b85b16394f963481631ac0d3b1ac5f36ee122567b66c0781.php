<?php

/* restaurant/new.html.twig */
class __TwigTemplate_ad70d85c86c7adefa8f6a35b8e80addd528ddc61c7959595de33cd47d08108eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/new.html.twig", 1);
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
        $__internal_3f9d12b26eebf8feb249fe6a58f753d5745864ffbeedcb4a9fccf4a2827d8843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9d12b26eebf8feb249fe6a58f753d5745864ffbeedcb4a9fccf4a2827d8843->enter($__internal_3f9d12b26eebf8feb249fe6a58f753d5745864ffbeedcb4a9fccf4a2827d8843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        $__internal_0e1f331f23bf800ca2501c4772d4486a89d6bd012f71cab80703bf1c59316f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1f331f23bf800ca2501c4772d4486a89d6bd012f71cab80703bf1c59316f3c->enter($__internal_0e1f331f23bf800ca2501c4772d4486a89d6bd012f71cab80703bf1c59316f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f9d12b26eebf8feb249fe6a58f753d5745864ffbeedcb4a9fccf4a2827d8843->leave($__internal_3f9d12b26eebf8feb249fe6a58f753d5745864ffbeedcb4a9fccf4a2827d8843_prof);

        
        $__internal_0e1f331f23bf800ca2501c4772d4486a89d6bd012f71cab80703bf1c59316f3c->leave($__internal_0e1f331f23bf800ca2501c4772d4486a89d6bd012f71cab80703bf1c59316f3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c292f0a8a890757c6752eb5958a6933ae7a77aa666af7c1dceaa3cc636e9cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c292f0a8a890757c6752eb5958a6933ae7a77aa666af7c1dceaa3cc636e9cd9->enter($__internal_2c292f0a8a890757c6752eb5958a6933ae7a77aa666af7c1dceaa3cc636e9cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_468ca6771ac47953f3a06817410c3f9262bb0d29d0d8d7ba2bfbeda38d363ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468ca6771ac47953f3a06817410c3f9262bb0d29d0d8d7ba2bfbeda38d363ba4->enter($__internal_468ca6771ac47953f3a06817410c3f9262bb0d29d0d8d7ba2bfbeda38d363ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Restaurant creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_468ca6771ac47953f3a06817410c3f9262bb0d29d0d8d7ba2bfbeda38d363ba4->leave($__internal_468ca6771ac47953f3a06817410c3f9262bb0d29d0d8d7ba2bfbeda38d363ba4_prof);

        
        $__internal_2c292f0a8a890757c6752eb5958a6933ae7a77aa666af7c1dceaa3cc636e9cd9->leave($__internal_2c292f0a8a890757c6752eb5958a6933ae7a77aa666af7c1dceaa3cc636e9cd9_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/new.html.twig";
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
    <h1>Restaurant creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('restaurant_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "restaurant/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\restaurant\\new.html.twig");
    }
}
