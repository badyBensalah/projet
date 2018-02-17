<?php

/* favoris/index.html.twig */
class __TwigTemplate_a74e0f43577baa26056d532ca17af9f65476a1c0e946bc5a99de1616974cf5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/index.html.twig", 1);
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
        $__internal_c3f23077ae9dd3efd6c752c20acc9ce5daac92d8e9f69c61fb36bca1a8949f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f23077ae9dd3efd6c752c20acc9ce5daac92d8e9f69c61fb36bca1a8949f41->enter($__internal_c3f23077ae9dd3efd6c752c20acc9ce5daac92d8e9f69c61fb36bca1a8949f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $__internal_4b85204a5e70d8061236d40998732e19d575a5ae8306c1916ae5be29eddd1f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b85204a5e70d8061236d40998732e19d575a5ae8306c1916ae5be29eddd1f0e->enter($__internal_4b85204a5e70d8061236d40998732e19d575a5ae8306c1916ae5be29eddd1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f23077ae9dd3efd6c752c20acc9ce5daac92d8e9f69c61fb36bca1a8949f41->leave($__internal_c3f23077ae9dd3efd6c752c20acc9ce5daac92d8e9f69c61fb36bca1a8949f41_prof);

        
        $__internal_4b85204a5e70d8061236d40998732e19d575a5ae8306c1916ae5be29eddd1f0e->leave($__internal_4b85204a5e70d8061236d40998732e19d575a5ae8306c1916ae5be29eddd1f0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b132e61c9033c74d0d02d7a09fead6fadd7241b9bedba9a37b6660bbbd24c3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b132e61c9033c74d0d02d7a09fead6fadd7241b9bedba9a37b6660bbbd24c3fc->enter($__internal_b132e61c9033c74d0d02d7a09fead6fadd7241b9bedba9a37b6660bbbd24c3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb94bcee7eb708e79d5db70393dd98e65cf44e510cc8ccd69c9541619a88951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb94bcee7eb708e79d5db70393dd98e65cf44e510cc8ccd69c9541619a88951->enter($__internal_1bb94bcee7eb708e79d5db70393dd98e65cf44e510cc8ccd69c9541619a88951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favoris list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favoris"] ?? $this->getContext($context, "favoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["favori"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_show", array("id" => $this->getAttribute($context["favori"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favori"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_show", array("id" => $this->getAttribute($context["favori"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_edit", array("id" => $this->getAttribute($context["favori"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favori'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_new");
        echo "\">Create a new favori</a>
        </li>
    </ul>
";
        
        $__internal_1bb94bcee7eb708e79d5db70393dd98e65cf44e510cc8ccd69c9541619a88951->leave($__internal_1bb94bcee7eb708e79d5db70393dd98e65cf44e510cc8ccd69c9541619a88951_prof);

        
        $__internal_b132e61c9033c74d0d02d7a09fead6fadd7241b9bedba9a37b6660bbbd24c3fc->leave($__internal_b132e61c9033c74d0d02d7a09fead6fadd7241b9bedba9a37b6660bbbd24c3fc_prof);

    }

    public function getTemplateName()
    {
        return "favoris/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  95 => 29,  83 => 23,  77 => 20,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Favoris list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for favori in favoris %}
            <tr>
                <td><a href=\"{{ path('favoris_show', { 'id': favori.id }) }}\">{{ favori.id }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('favoris_show', { 'id': favori.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('favoris_edit', { 'id': favori.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('favoris_new') }}\">Create a new favori</a>
        </li>
    </ul>
{% endblock %}
", "favoris/index.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\favoris\\index.html.twig");
    }
}
