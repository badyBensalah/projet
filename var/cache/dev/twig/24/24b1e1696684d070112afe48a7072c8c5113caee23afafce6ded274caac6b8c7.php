<?php

/* recommendation/index.html.twig */
class __TwigTemplate_c510cb11f9a4c88ca29cf7014465972944c6269e6695c3913b40d95c0c4a6d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recommendation/index.html.twig", 1);
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
        $__internal_dbda58e468e4d28c37263a4065baa2cffd355bb3cfe99309052e5194d71c6dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbda58e468e4d28c37263a4065baa2cffd355bb3cfe99309052e5194d71c6dce->enter($__internal_dbda58e468e4d28c37263a4065baa2cffd355bb3cfe99309052e5194d71c6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/index.html.twig"));

        $__internal_4c379c4290bb84e164f7dc7a47e8257bb494893e4dee509758310b9b9a39d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c379c4290bb84e164f7dc7a47e8257bb494893e4dee509758310b9b9a39d3cf->enter($__internal_4c379c4290bb84e164f7dc7a47e8257bb494893e4dee509758310b9b9a39d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recommendation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbda58e468e4d28c37263a4065baa2cffd355bb3cfe99309052e5194d71c6dce->leave($__internal_dbda58e468e4d28c37263a4065baa2cffd355bb3cfe99309052e5194d71c6dce_prof);

        
        $__internal_4c379c4290bb84e164f7dc7a47e8257bb494893e4dee509758310b9b9a39d3cf->leave($__internal_4c379c4290bb84e164f7dc7a47e8257bb494893e4dee509758310b9b9a39d3cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b6218e08beac1935f20306a5deb0e15bf435a0e48ed97dd6f13f494536d7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b6218e08beac1935f20306a5deb0e15bf435a0e48ed97dd6f13f494536d7c0->enter($__internal_50b6218e08beac1935f20306a5deb0e15bf435a0e48ed97dd6f13f494536d7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62d6c1825ec92eb28bc9346b87b786a00518d42416a9a62b644096a9595e26bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d6c1825ec92eb28bc9346b87b786a00518d42416a9a62b644096a9595e26bb->enter($__internal_62d6c1825ec92eb28bc9346b87b786a00518d42416a9a62b644096a9595e26bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Recommendations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommendations"] ?? $this->getContext($context, "recommendations")));
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recommendation_show", array("id" => $this->getAttribute($context["recommendation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recommendation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["recommendation"], "commentaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["recommendation"], "note", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recommendation_show", array("id" => $this->getAttribute($context["recommendation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recommendation_edit", array("id" => $this->getAttribute($context["recommendation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recommendation_new");
        echo "\">Create a new recommendation</a>
        </li>
    </ul>
";
        
        $__internal_62d6c1825ec92eb28bc9346b87b786a00518d42416a9a62b644096a9595e26bb->leave($__internal_62d6c1825ec92eb28bc9346b87b786a00518d42416a9a62b644096a9595e26bb_prof);

        
        $__internal_50b6218e08beac1935f20306a5deb0e15bf435a0e48ed97dd6f13f494536d7c0->leave($__internal_50b6218e08beac1935f20306a5deb0e15bf435a0e48ed97dd6f13f494536d7c0_prof);

    }

    public function getTemplateName()
    {
        return "recommendation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Recommendations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for recommendation in recommendations %}
            <tr>
                <td><a href=\"{{ path('recommendation_show', { 'id': recommendation.id }) }}\">{{ recommendation.id }}</a></td>
                <td>{{ recommendation.commentaire }}</td>
                <td>{{ recommendation.note }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('recommendation_show', { 'id': recommendation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('recommendation_edit', { 'id': recommendation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('recommendation_new') }}\">Create a new recommendation</a>
        </li>
    </ul>
{% endblock %}
", "recommendation/index.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\recommendation\\index.html.twig");
    }
}
