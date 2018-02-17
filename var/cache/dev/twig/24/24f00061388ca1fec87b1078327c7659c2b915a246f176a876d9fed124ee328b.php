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
        $__internal_608c93a368c1df6032db1edd6cd4fdbcfe6516e7b96e5ac2fdf9facc618f950d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608c93a368c1df6032db1edd6cd4fdbcfe6516e7b96e5ac2fdf9facc618f950d->enter($__internal_608c93a368c1df6032db1edd6cd4fdbcfe6516e7b96e5ac2fdf9facc618f950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_f927cd8aa474eea69ae61a3124baf205348aca63dd41b1d5ba615ad0b19c8be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f927cd8aa474eea69ae61a3124baf205348aca63dd41b1d5ba615ad0b19c8be9->enter($__internal_f927cd8aa474eea69ae61a3124baf205348aca63dd41b1d5ba615ad0b19c8be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608c93a368c1df6032db1edd6cd4fdbcfe6516e7b96e5ac2fdf9facc618f950d->leave($__internal_608c93a368c1df6032db1edd6cd4fdbcfe6516e7b96e5ac2fdf9facc618f950d_prof);

        
        $__internal_f927cd8aa474eea69ae61a3124baf205348aca63dd41b1d5ba615ad0b19c8be9->leave($__internal_f927cd8aa474eea69ae61a3124baf205348aca63dd41b1d5ba615ad0b19c8be9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a62208311df6fa928f3c5753dbe3b394128bde74eda17da8d1359a3443244e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a62208311df6fa928f3c5753dbe3b394128bde74eda17da8d1359a3443244e->enter($__internal_c7a62208311df6fa928f3c5753dbe3b394128bde74eda17da8d1359a3443244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23008e274c6056a546d7360f0a153777f8033fc856444abf2999d58da198a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23008e274c6056a546d7360f0a153777f8033fc856444abf2999d58da198a641->enter($__internal_23008e274c6056a546d7360f0a153777f8033fc856444abf2999d58da198a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23008e274c6056a546d7360f0a153777f8033fc856444abf2999d58da198a641->leave($__internal_23008e274c6056a546d7360f0a153777f8033fc856444abf2999d58da198a641_prof);

        
        $__internal_c7a62208311df6fa928f3c5753dbe3b394128bde74eda17da8d1359a3443244e->leave($__internal_c7a62208311df6fa928f3c5753dbe3b394128bde74eda17da8d1359a3443244e_prof);

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
", "article/index.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\article\\index.html.twig");
    }
}
