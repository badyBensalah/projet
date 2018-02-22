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
        $__internal_73c2d1be4ee35239138eb1de0ff1aa06517fab3ca800b8bb4b7be63dc853f5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c2d1be4ee35239138eb1de0ff1aa06517fab3ca800b8bb4b7be63dc853f5e0->enter($__internal_73c2d1be4ee35239138eb1de0ff1aa06517fab3ca800b8bb4b7be63dc853f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_38461421a317c36cfc2338b1ac68ab4e09a134755a91a2d48a7987f4f8c1b2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38461421a317c36cfc2338b1ac68ab4e09a134755a91a2d48a7987f4f8c1b2fc->enter($__internal_38461421a317c36cfc2338b1ac68ab4e09a134755a91a2d48a7987f4f8c1b2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c2d1be4ee35239138eb1de0ff1aa06517fab3ca800b8bb4b7be63dc853f5e0->leave($__internal_73c2d1be4ee35239138eb1de0ff1aa06517fab3ca800b8bb4b7be63dc853f5e0_prof);

        
        $__internal_38461421a317c36cfc2338b1ac68ab4e09a134755a91a2d48a7987f4f8c1b2fc->leave($__internal_38461421a317c36cfc2338b1ac68ab4e09a134755a91a2d48a7987f4f8c1b2fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_701978fab2b89b5fdc0c8e6a17cd60c4edbb9cea3f91dee2b3de000566b2be95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701978fab2b89b5fdc0c8e6a17cd60c4edbb9cea3f91dee2b3de000566b2be95->enter($__internal_701978fab2b89b5fdc0c8e6a17cd60c4edbb9cea3f91dee2b3de000566b2be95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_903fd59adb8942ad567e66bfe4166e0637576ae52fd3d89a495070c519a580a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903fd59adb8942ad567e66bfe4166e0637576ae52fd3d89a495070c519a580a3->enter($__internal_903fd59adb8942ad567e66bfe4166e0637576ae52fd3d89a495070c519a580a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_903fd59adb8942ad567e66bfe4166e0637576ae52fd3d89a495070c519a580a3->leave($__internal_903fd59adb8942ad567e66bfe4166e0637576ae52fd3d89a495070c519a580a3_prof);

        
        $__internal_701978fab2b89b5fdc0c8e6a17cd60c4edbb9cea3f91dee2b3de000566b2be95->leave($__internal_701978fab2b89b5fdc0c8e6a17cd60c4edbb9cea3f91dee2b3de000566b2be95_prof);

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
", "user/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\user\\new.html.twig");
    }
}
