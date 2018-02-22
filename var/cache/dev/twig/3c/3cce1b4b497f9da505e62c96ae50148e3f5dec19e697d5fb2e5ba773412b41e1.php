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
        $__internal_8d6955f0cca8bc5a7fd8f51b4e94a06df3d588ae76701577022aafea9de85d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6955f0cca8bc5a7fd8f51b4e94a06df3d588ae76701577022aafea9de85d63->enter($__internal_8d6955f0cca8bc5a7fd8f51b4e94a06df3d588ae76701577022aafea9de85d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $__internal_2157df4f20a344e64d0b57255ee78ad5ae7febdb8eec9847550fa9c0ab5f9ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2157df4f20a344e64d0b57255ee78ad5ae7febdb8eec9847550fa9c0ab5f9ed5->enter($__internal_2157df4f20a344e64d0b57255ee78ad5ae7febdb8eec9847550fa9c0ab5f9ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6955f0cca8bc5a7fd8f51b4e94a06df3d588ae76701577022aafea9de85d63->leave($__internal_8d6955f0cca8bc5a7fd8f51b4e94a06df3d588ae76701577022aafea9de85d63_prof);

        
        $__internal_2157df4f20a344e64d0b57255ee78ad5ae7febdb8eec9847550fa9c0ab5f9ed5->leave($__internal_2157df4f20a344e64d0b57255ee78ad5ae7febdb8eec9847550fa9c0ab5f9ed5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5961c16e6f4ecc33dfc2433c8377ac19e0ef5e837d16de013ddcf566ae5811a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5961c16e6f4ecc33dfc2433c8377ac19e0ef5e837d16de013ddcf566ae5811a2->enter($__internal_5961c16e6f4ecc33dfc2433c8377ac19e0ef5e837d16de013ddcf566ae5811a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f8222cb48d1b373651007f360867b4b8e430f4bd8daafe462ace4a3abddf870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8222cb48d1b373651007f360867b4b8e430f4bd8daafe462ace4a3abddf870->enter($__internal_1f8222cb48d1b373651007f360867b4b8e430f4bd8daafe462ace4a3abddf870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f8222cb48d1b373651007f360867b4b8e430f4bd8daafe462ace4a3abddf870->leave($__internal_1f8222cb48d1b373651007f360867b4b8e430f4bd8daafe462ace4a3abddf870_prof);

        
        $__internal_5961c16e6f4ecc33dfc2433c8377ac19e0ef5e837d16de013ddcf566ae5811a2->leave($__internal_5961c16e6f4ecc33dfc2433c8377ac19e0ef5e837d16de013ddcf566ae5811a2_prof);

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
", "favoris/index.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\favoris\\index.html.twig");
    }
}
