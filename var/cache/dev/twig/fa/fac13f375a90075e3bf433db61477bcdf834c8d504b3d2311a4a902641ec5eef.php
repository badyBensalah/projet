<?php

/* favoris/show.html.twig */
class __TwigTemplate_9a4a53029275ec3abee80e0b1bbc3111c1fb01be19e242f9ec521e164a386ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/show.html.twig", 1);
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
        $__internal_8abb9e229587d028d4ae88917dc19fdb6e0d27efbce3a5c82c6f6b1096e93388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abb9e229587d028d4ae88917dc19fdb6e0d27efbce3a5c82c6f6b1096e93388->enter($__internal_8abb9e229587d028d4ae88917dc19fdb6e0d27efbce3a5c82c6f6b1096e93388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/show.html.twig"));

        $__internal_bf0498305f023e2c96da7c2e44b2dfe0aa143f56fe4247ff53df6a5bc60963a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0498305f023e2c96da7c2e44b2dfe0aa143f56fe4247ff53df6a5bc60963a7->enter($__internal_bf0498305f023e2c96da7c2e44b2dfe0aa143f56fe4247ff53df6a5bc60963a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abb9e229587d028d4ae88917dc19fdb6e0d27efbce3a5c82c6f6b1096e93388->leave($__internal_8abb9e229587d028d4ae88917dc19fdb6e0d27efbce3a5c82c6f6b1096e93388_prof);

        
        $__internal_bf0498305f023e2c96da7c2e44b2dfe0aa143f56fe4247ff53df6a5bc60963a7->leave($__internal_bf0498305f023e2c96da7c2e44b2dfe0aa143f56fe4247ff53df6a5bc60963a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb971368f4a14f1f64ede888e829a05e1757669cc431fc317ba4561afe5e082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb971368f4a14f1f64ede888e829a05e1757669cc431fc317ba4561afe5e082->enter($__internal_ddb971368f4a14f1f64ede888e829a05e1757669cc431fc317ba4561afe5e082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88467c582e707d6feb89b2770a93893d893cc55ee4860a51e8393c61de25a7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88467c582e707d6feb89b2770a93893d893cc55ee4860a51e8393c61de25a7a3->enter($__internal_88467c582e707d6feb89b2770a93893d893cc55ee4860a51e8393c61de25a7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favori</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favori"] ?? $this->getContext($context, "favori")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_edit", array("id" => $this->getAttribute(($context["favori"] ?? $this->getContext($context, "favori")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_88467c582e707d6feb89b2770a93893d893cc55ee4860a51e8393c61de25a7a3->leave($__internal_88467c582e707d6feb89b2770a93893d893cc55ee4860a51e8393c61de25a7a3_prof);

        
        $__internal_ddb971368f4a14f1f64ede888e829a05e1757669cc431fc317ba4561afe5e082->leave($__internal_ddb971368f4a14f1f64ede888e829a05e1757669cc431fc317ba4561afe5e082_prof);

    }

    public function getTemplateName()
    {
        return "favoris/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Favori</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ favori.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('favoris_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('favoris_edit', { 'id': favori.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "favoris/show.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\favoris\\show.html.twig");
    }
}
