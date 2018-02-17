<?php

/* article/show.html.twig */
class __TwigTemplate_930d8f710b8998df648fa50cfacedc7587ce2ca3fe799028aa1313a571a100e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_ac6d1aeb9345b3880318c201cfa257ed3b8d9803b96482cc508a1a88a4b4e62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6d1aeb9345b3880318c201cfa257ed3b8d9803b96482cc508a1a88a4b4e62a->enter($__internal_ac6d1aeb9345b3880318c201cfa257ed3b8d9803b96482cc508a1a88a4b4e62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6133d59b7b53d4616d3b92b3381cbfc0c983bee0b22bc876bc05460c99becd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6133d59b7b53d4616d3b92b3381cbfc0c983bee0b22bc876bc05460c99becd2b->enter($__internal_6133d59b7b53d4616d3b92b3381cbfc0c983bee0b22bc876bc05460c99becd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6d1aeb9345b3880318c201cfa257ed3b8d9803b96482cc508a1a88a4b4e62a->leave($__internal_ac6d1aeb9345b3880318c201cfa257ed3b8d9803b96482cc508a1a88a4b4e62a_prof);

        
        $__internal_6133d59b7b53d4616d3b92b3381cbfc0c983bee0b22bc876bc05460c99becd2b->leave($__internal_6133d59b7b53d4616d3b92b3381cbfc0c983bee0b22bc876bc05460c99becd2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_360821c4fa86911fe0dd489d90bed4945a418b678d37ba977bcc57d9b8167ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360821c4fa86911fe0dd489d90bed4945a418b678d37ba977bcc57d9b8167ae6->enter($__internal_360821c4fa86911fe0dd489d90bed4945a418b678d37ba977bcc57d9b8167ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fedd1b4e19bf24ff7b3c0c8d0bd55f0070572f14c63ea4dfeeb1004bc5e60df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedd1b4e19bf24ff7b3c0c8d0bd55f0070572f14c63ea4dfeeb1004bc5e60df0->enter($__internal_fedd1b4e19bf24ff7b3c0c8d0bd55f0070572f14c63ea4dfeeb1004bc5e60df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "datePublication", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "datePublication", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "lien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>publisher</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "publisher", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fedd1b4e19bf24ff7b3c0c8d0bd55f0070572f14c63ea4dfeeb1004bc5e60df0->leave($__internal_fedd1b4e19bf24ff7b3c0c8d0bd55f0070572f14c63ea4dfeeb1004bc5e60df0_prof);

        
        $__internal_360821c4fa86911fe0dd489d90bed4945a418b678d37ba977bcc57d9b8167ae6->leave($__internal_360821c4fa86911fe0dd489d90bed4945a418b678d37ba977bcc57d9b8167ae6_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  87 => 26,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>{% if article.datePublication %}{{ article.datePublication|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ article.description }}</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td>{{ article.lien }}</td>
            </tr>
            <tr>
                <th>publisher</th>
                <td>{{ article.publisher }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\app\\Resources\\views\\article\\show.html.twig");
    }
}
