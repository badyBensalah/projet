<?php

/* restaurant/index.html.twig */
class __TwigTemplate_a5bda5529af22c506973f0cc87f053fae042578b98335e4a3adc2a754b26fd2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/index.html.twig", 1);
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
        $__internal_4fadc742682e2d697e3c06962867434fcc4cff3372cd61b2c6843c22d532adcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fadc742682e2d697e3c06962867434fcc4cff3372cd61b2c6843c22d532adcc->enter($__internal_4fadc742682e2d697e3c06962867434fcc4cff3372cd61b2c6843c22d532adcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $__internal_964bf5caa407ba6f5ad43e94fc3eae2268a40f6488daea863629409736d9c2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964bf5caa407ba6f5ad43e94fc3eae2268a40f6488daea863629409736d9c2e5->enter($__internal_964bf5caa407ba6f5ad43e94fc3eae2268a40f6488daea863629409736d9c2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fadc742682e2d697e3c06962867434fcc4cff3372cd61b2c6843c22d532adcc->leave($__internal_4fadc742682e2d697e3c06962867434fcc4cff3372cd61b2c6843c22d532adcc_prof);

        
        $__internal_964bf5caa407ba6f5ad43e94fc3eae2268a40f6488daea863629409736d9c2e5->leave($__internal_964bf5caa407ba6f5ad43e94fc3eae2268a40f6488daea863629409736d9c2e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3057c6ae1c19ca6875150ac84232b1a4b045ac681efffc3ee8e907a5d0b804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3057c6ae1c19ca6875150ac84232b1a4b045ac681efffc3ee8e907a5d0b804->enter($__internal_dd3057c6ae1c19ca6875150ac84232b1a4b045ac681efffc3ee8e907a5d0b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2c1778656f60e81dcac9da2aa9aaada4e5e96da9f8f1f1ee3e95f91255ced01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c1778656f60e81dcac9da2aa9aaada4e5e96da9f8f1f1ee3e95f91255ced01->enter($__internal_a2c1778656f60e81dcac9da2aa9aaada4e5e96da9f8f1f1ee3e95f91255ced01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Restaurants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Classement</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["restaurants"] ?? $this->getContext($context, "restaurants")));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_show", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "classement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_show", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_edit", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_new");
        echo "\">Create a new restaurant</a>
        </li>
    </ul>
";
        
        $__internal_a2c1778656f60e81dcac9da2aa9aaada4e5e96da9f8f1f1ee3e95f91255ced01->leave($__internal_a2c1778656f60e81dcac9da2aa9aaada4e5e96da9f8f1f1ee3e95f91255ced01_prof);

        
        $__internal_dd3057c6ae1c19ca6875150ac84232b1a4b045ac681efffc3ee8e907a5d0b804->leave($__internal_dd3057c6ae1c19ca6875150ac84232b1a4b045ac681efffc3ee8e907a5d0b804_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Restaurants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Classement</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for restaurant in restaurants %}
            <tr>
                <td><a href=\"{{ path('restaurant_show', { 'id': restaurant.id }) }}\">{{ restaurant.id }}</a></td>
                <td>{{ restaurant.nom }}</td>
                <td>{{ restaurant.classement }}</td>
                <td>{{ restaurant.adresse }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('restaurant_show', { 'id': restaurant.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('restaurant_edit', { 'id': restaurant.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('restaurant_new') }}\">Create a new restaurant</a>
        </li>
    </ul>
{% endblock %}
", "restaurant/index.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\restaurant\\index.html.twig");
    }
}
