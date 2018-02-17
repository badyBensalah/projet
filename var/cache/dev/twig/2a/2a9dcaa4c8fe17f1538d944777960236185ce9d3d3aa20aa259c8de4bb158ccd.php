<?php

/* article/index.html.twig */
class __TwigTemplate_671bfd48decbe36b4c75687f312d9ca08c8a233e3339ad2e77cca33fdeb0ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        $__internal_9748fa007e26cdfc03afad1ffe5b4e228df882e1ed120a74087a7908de33ce78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9748fa007e26cdfc03afad1ffe5b4e228df882e1ed120a74087a7908de33ce78->enter($__internal_9748fa007e26cdfc03afad1ffe5b4e228df882e1ed120a74087a7908de33ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_7ccc8672f0a382d60b26da1ecb5428f79c1003c2d215396583f02fa271ec368d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccc8672f0a382d60b26da1ecb5428f79c1003c2d215396583f02fa271ec368d->enter($__internal_7ccc8672f0a382d60b26da1ecb5428f79c1003c2d215396583f02fa271ec368d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9748fa007e26cdfc03afad1ffe5b4e228df882e1ed120a74087a7908de33ce78->leave($__internal_9748fa007e26cdfc03afad1ffe5b4e228df882e1ed120a74087a7908de33ce78_prof);

        
        $__internal_7ccc8672f0a382d60b26da1ecb5428f79c1003c2d215396583f02fa271ec368d->leave($__internal_7ccc8672f0a382d60b26da1ecb5428f79c1003c2d215396583f02fa271ec368d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22978ac4f3d9a50d3fa91104d64c644d853cfc887ea5c0f262a6ee5b83214db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22978ac4f3d9a50d3fa91104d64c644d853cfc887ea5c0f262a6ee5b83214db2->enter($__internal_22978ac4f3d9a50d3fa91104d64c644d853cfc887ea5c0f262a6ee5b83214db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5616659a50fc93f451a6941b6573d38662c6a55734f83840e4548f8dbe8db04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5616659a50fc93f451a6941b6573d38662c6a55734f83840e4548f8dbe8db04->enter($__internal_d5616659a50fc93f451a6941b6573d38662c6a55734f83840e4548f8dbe8db04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepublication</th>
                <th>Description</th>
                <th>Lien</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["article"], "datePublication", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "datePublication", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "lien", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_d5616659a50fc93f451a6941b6573d38662c6a55734f83840e4548f8dbe8db04->leave($__internal_d5616659a50fc93f451a6941b6573d38662c6a55734f83840e4548f8dbe8db04_prof);

        
        $__internal_22978ac4f3d9a50d3fa91104d64c644d853cfc887ea5c0f262a6ee5b83214db2->leave($__internal_22978ac4f3d9a50d3fa91104d64c644d853cfc887ea5c0f262a6ee5b83214db2_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  87 => 22,  83 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Articles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepublication</th>
                <th>Description</th>
                <th>Lien</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                <td>{% if article.datePublication %}{{ article.datePublication|date('Y-m-d') }}{% endif %}</td>
                <td>{{ article.description }}</td>
                <td>{{ article.lien }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('article_show', { 'id': article.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", "article/index.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\app\\Resources\\views\\article\\index.html.twig");
    }
}
