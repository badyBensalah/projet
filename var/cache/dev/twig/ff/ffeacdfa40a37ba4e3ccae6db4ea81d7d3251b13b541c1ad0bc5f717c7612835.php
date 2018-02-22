<?php

/* guide/index.html.twig */
class __TwigTemplate_7346fbce0916c2fd9fa699b74a950c0971d9a4ad93469d73822cf662bb335e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "guide/index.html.twig", 1);
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
        $__internal_868dc1c7207f29e45c2a94225750f095bfa2c42202ffcb30a98887b2622bb2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868dc1c7207f29e45c2a94225750f095bfa2c42202ffcb30a98887b2622bb2fb->enter($__internal_868dc1c7207f29e45c2a94225750f095bfa2c42202ffcb30a98887b2622bb2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $__internal_51da5974f1f0adf89819b3d5cfd325116c3e156f4a46ad96fce6b6614acdc3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51da5974f1f0adf89819b3d5cfd325116c3e156f4a46ad96fce6b6614acdc3a3->enter($__internal_51da5974f1f0adf89819b3d5cfd325116c3e156f4a46ad96fce6b6614acdc3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_868dc1c7207f29e45c2a94225750f095bfa2c42202ffcb30a98887b2622bb2fb->leave($__internal_868dc1c7207f29e45c2a94225750f095bfa2c42202ffcb30a98887b2622bb2fb_prof);

        
        $__internal_51da5974f1f0adf89819b3d5cfd325116c3e156f4a46ad96fce6b6614acdc3a3->leave($__internal_51da5974f1f0adf89819b3d5cfd325116c3e156f4a46ad96fce6b6614acdc3a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f77b03b6b3e0e4d58a9838a7481907f6aaab87a5daad9a25dd3ba98a3a482e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f77b03b6b3e0e4d58a9838a7481907f6aaab87a5daad9a25dd3ba98a3a482e7->enter($__internal_3f77b03b6b3e0e4d58a9838a7481907f6aaab87a5daad9a25dd3ba98a3a482e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2362ef88164b88926bb4064f37837ede95803e658c2eb194bbe47c1a72068ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2362ef88164b88926bb4064f37837ede95803e658c2eb194bbe47c1a72068ff8->enter($__internal_2362ef88164b88926bb4064f37837ede95803e658c2eb194bbe47c1a72068ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Guides list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Etat</th>
                <th>Datepublication</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["guides"] ?? $this->getContext($context, "guides")));
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_show", array("id" => $this->getAttribute($context["guide"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guide"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["guide"], "etat", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["guide"], "datePublication", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["guide"], "datePublication", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["guide"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_show", array("id" => $this->getAttribute($context["guide"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_edit", array("id" => $this->getAttribute($context["guide"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_new");
        echo "\">Create a new guide</a>
        </li>
    </ul>
";
        
        $__internal_2362ef88164b88926bb4064f37837ede95803e658c2eb194bbe47c1a72068ff8->leave($__internal_2362ef88164b88926bb4064f37837ede95803e658c2eb194bbe47c1a72068ff8_prof);

        
        $__internal_3f77b03b6b3e0e4d58a9838a7481907f6aaab87a5daad9a25dd3ba98a3a482e7->leave($__internal_3f77b03b6b3e0e4d58a9838a7481907f6aaab87a5daad9a25dd3ba98a3a482e7_prof);

    }

    public function getTemplateName()
    {
        return "guide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  116 => 35,  104 => 29,  98 => 26,  91 => 22,  85 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Guides list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Etat</th>
                <th>Datepublication</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for guide in guides %}
            <tr>
                <td><a href=\"{{ path('guide_show', { 'id': guide.id }) }}\">{{ guide.id }}</a></td>
                <td>{% if guide.etat %}Yes{% else %}No{% endif %}</td>
                <td>{% if guide.datePublication %}{{ guide.datePublication|date('Y-m-d') }}{% endif %}</td>
                <td>{{ guide.contenu }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('guide_show', { 'id': guide.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('guide_edit', { 'id': guide.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('guide_new') }}\">Create a new guide</a>
        </li>
    </ul>
{% endblock %}
", "guide/index.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\guide\\index.html.twig");
    }
}
