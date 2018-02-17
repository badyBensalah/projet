<?php

/* favoris/new.html.twig */
class __TwigTemplate_dc14e824eab775bd77f4968c112b55be579626e79fef21ddbac31a9d6e0d56d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/new.html.twig", 1);
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
        $__internal_e6d42e4163712ecb3fbab1e43579ad96c0521914eca11862fc02fcbe6fe8c3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d42e4163712ecb3fbab1e43579ad96c0521914eca11862fc02fcbe6fe8c3c1->enter($__internal_e6d42e4163712ecb3fbab1e43579ad96c0521914eca11862fc02fcbe6fe8c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/new.html.twig"));

        $__internal_dad686381721090c20cdb47de90c4012bd130b6bd878a484fcacb7e8edd1c687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad686381721090c20cdb47de90c4012bd130b6bd878a484fcacb7e8edd1c687->enter($__internal_dad686381721090c20cdb47de90c4012bd130b6bd878a484fcacb7e8edd1c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d42e4163712ecb3fbab1e43579ad96c0521914eca11862fc02fcbe6fe8c3c1->leave($__internal_e6d42e4163712ecb3fbab1e43579ad96c0521914eca11862fc02fcbe6fe8c3c1_prof);

        
        $__internal_dad686381721090c20cdb47de90c4012bd130b6bd878a484fcacb7e8edd1c687->leave($__internal_dad686381721090c20cdb47de90c4012bd130b6bd878a484fcacb7e8edd1c687_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7937edabaa18ec26576d9c34bce0fb7cb623d316da17f867350bc8088677f252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7937edabaa18ec26576d9c34bce0fb7cb623d316da17f867350bc8088677f252->enter($__internal_7937edabaa18ec26576d9c34bce0fb7cb623d316da17f867350bc8088677f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b856edbc7a13c88cdcdbfe60d5686ac6175a4e456fd264aa11dc6bb23d4a64a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b856edbc7a13c88cdcdbfe60d5686ac6175a4e456fd264aa11dc6bb23d4a64a6->enter($__internal_b856edbc7a13c88cdcdbfe60d5686ac6175a4e456fd264aa11dc6bb23d4a64a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favori creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b856edbc7a13c88cdcdbfe60d5686ac6175a4e456fd264aa11dc6bb23d4a64a6->leave($__internal_b856edbc7a13c88cdcdbfe60d5686ac6175a4e456fd264aa11dc6bb23d4a64a6_prof);

        
        $__internal_7937edabaa18ec26576d9c34bce0fb7cb623d316da17f867350bc8088677f252->leave($__internal_7937edabaa18ec26576d9c34bce0fb7cb623d316da17f867350bc8088677f252_prof);

    }

    public function getTemplateName()
    {
        return "favoris/new.html.twig";
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
    <h1>Favori creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('favoris_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "favoris/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\favoris\\new.html.twig");
    }
}
