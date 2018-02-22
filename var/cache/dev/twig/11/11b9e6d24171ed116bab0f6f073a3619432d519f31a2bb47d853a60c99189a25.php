<?php

/* experience/index.html.twig */
class __TwigTemplate_c49f21ee71a654bd3851756b998edb0486b103b6c7bdd11e503101df159ba898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "experience/index.html.twig", 1);
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
        $__internal_33d0c92c0626f349e68671e62cc9e40fe0685e25e21d1d6ae502dc08efbbc055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d0c92c0626f349e68671e62cc9e40fe0685e25e21d1d6ae502dc08efbbc055->enter($__internal_33d0c92c0626f349e68671e62cc9e40fe0685e25e21d1d6ae502dc08efbbc055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $__internal_236ae2f69378150b3e480f51ea16373ca05fc5e272fa628904792e6ffcfac974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236ae2f69378150b3e480f51ea16373ca05fc5e272fa628904792e6ffcfac974->enter($__internal_236ae2f69378150b3e480f51ea16373ca05fc5e272fa628904792e6ffcfac974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d0c92c0626f349e68671e62cc9e40fe0685e25e21d1d6ae502dc08efbbc055->leave($__internal_33d0c92c0626f349e68671e62cc9e40fe0685e25e21d1d6ae502dc08efbbc055_prof);

        
        $__internal_236ae2f69378150b3e480f51ea16373ca05fc5e272fa628904792e6ffcfac974->leave($__internal_236ae2f69378150b3e480f51ea16373ca05fc5e272fa628904792e6ffcfac974_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_796e103c1618c8f07a341543c09341c95be6495e295cd12ceefda93c2b717e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796e103c1618c8f07a341543c09341c95be6495e295cd12ceefda93c2b717e40->enter($__internal_796e103c1618c8f07a341543c09341c95be6495e295cd12ceefda93c2b717e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbd681aab9ea99fab8b1bfd9a0dac7045cc9ce802557a6018018a4bc7f4038e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd681aab9ea99fab8b1bfd9a0dac7045cc9ce802557a6018018a4bc7f4038e5->enter($__internal_dbd681aab9ea99fab8b1bfd9a0dac7045cc9ce802557a6018018a4bc7f4038e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Experiences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_show", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "gallerie", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_show", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_edit", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_new");
        echo "\">Create a new experience</a>
        </li>
    </ul>
";
        
        $__internal_dbd681aab9ea99fab8b1bfd9a0dac7045cc9ce802557a6018018a4bc7f4038e5->leave($__internal_dbd681aab9ea99fab8b1bfd9a0dac7045cc9ce802557a6018018a4bc7f4038e5_prof);

        
        $__internal_796e103c1618c8f07a341543c09341c95be6495e295cd12ceefda93c2b717e40->leave($__internal_796e103c1618c8f07a341543c09341c95be6495e295cd12ceefda93c2b717e40_prof);

    }

    public function getTemplateName()
    {
        return "experience/index.html.twig";
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
    <h1>Experiences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for experience in experiences %}
            <tr>
                <td><a href=\"{{ path('experience_show', { 'id': experience.id }) }}\">{{ experience.id }}</a></td>
                <td>{{ experience.description }}</td>
                <td>{{ experience.gallerie }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('experience_show', { 'id': experience.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('experience_edit', { 'id': experience.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('experience_new') }}\">Create a new experience</a>
        </li>
    </ul>
{% endblock %}
", "experience/index.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\experience\\index.html.twig");
    }
}
