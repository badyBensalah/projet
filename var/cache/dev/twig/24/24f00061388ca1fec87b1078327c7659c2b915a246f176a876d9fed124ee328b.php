<?php

/* article/index.html.twig */
class __TwigTemplate_64516bc92f4d4296c0b18f34ebdf7b4eaae26b8caa5b83d11ab6ca7e593ed0ef extends Twig_Template
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
        $__internal_ffafee4607b8acda7a9e7e07992d3de5bf14ffa5b142e6747376d3b5b3fba110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffafee4607b8acda7a9e7e07992d3de5bf14ffa5b142e6747376d3b5b3fba110->enter($__internal_ffafee4607b8acda7a9e7e07992d3de5bf14ffa5b142e6747376d3b5b3fba110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_0e959461c2a08a4ee1e8d6b40e20ddd9d70be136dd7e0eb1b708d6ef35901894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e959461c2a08a4ee1e8d6b40e20ddd9d70be136dd7e0eb1b708d6ef35901894->enter($__internal_0e959461c2a08a4ee1e8d6b40e20ddd9d70be136dd7e0eb1b708d6ef35901894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffafee4607b8acda7a9e7e07992d3de5bf14ffa5b142e6747376d3b5b3fba110->leave($__internal_ffafee4607b8acda7a9e7e07992d3de5bf14ffa5b142e6747376d3b5b3fba110_prof);

        
        $__internal_0e959461c2a08a4ee1e8d6b40e20ddd9d70be136dd7e0eb1b708d6ef35901894->leave($__internal_0e959461c2a08a4ee1e8d6b40e20ddd9d70be136dd7e0eb1b708d6ef35901894_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8a10c912c54db68fb829ac3f240294da80adbceb3e5136b505c6240c8c1e43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a10c912c54db68fb829ac3f240294da80adbceb3e5136b505c6240c8c1e43d->enter($__internal_a8a10c912c54db68fb829ac3f240294da80adbceb3e5136b505c6240c8c1e43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ec660af6c79ee5c4445c65aa96dfdce1cb6b5230f7f6da92e18e2ad2a9f4518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec660af6c79ee5c4445c65aa96dfdce1cb6b5230f7f6da92e18e2ad2a9f4518->enter($__internal_0ec660af6c79ee5c4445c65aa96dfdce1cb6b5230f7f6da92e18e2ad2a9f4518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ec660af6c79ee5c4445c65aa96dfdce1cb6b5230f7f6da92e18e2ad2a9f4518->leave($__internal_0ec660af6c79ee5c4445c65aa96dfdce1cb6b5230f7f6da92e18e2ad2a9f4518_prof);

        
        $__internal_a8a10c912c54db68fb829ac3f240294da80adbceb3e5136b505c6240c8c1e43d->leave($__internal_a8a10c912c54db68fb829ac3f240294da80adbceb3e5136b505c6240c8c1e43d_prof);

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
", "article/index.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\article\\index.html.twig");
    }
}
