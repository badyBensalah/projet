<?php

/* favoris/show.html.twig */
class __TwigTemplate_9a4a53029275ec3abee80e0b1bbc3111c1fb01be19e242f9ec521e164a386ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/show.html.twig", 1);
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
        $__internal_f5087fb2d2a3300cd20537a627590de5b9b678a1c758effb90bca340252a736c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5087fb2d2a3300cd20537a627590de5b9b678a1c758effb90bca340252a736c->enter($__internal_f5087fb2d2a3300cd20537a627590de5b9b678a1c758effb90bca340252a736c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/show.html.twig"));

        $__internal_74bf6b07ff1ef2ad12854900b04aa0ed97278033422ced6323b424f4b0fb548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bf6b07ff1ef2ad12854900b04aa0ed97278033422ced6323b424f4b0fb548a->enter($__internal_74bf6b07ff1ef2ad12854900b04aa0ed97278033422ced6323b424f4b0fb548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5087fb2d2a3300cd20537a627590de5b9b678a1c758effb90bca340252a736c->leave($__internal_f5087fb2d2a3300cd20537a627590de5b9b678a1c758effb90bca340252a736c_prof);

        
        $__internal_74bf6b07ff1ef2ad12854900b04aa0ed97278033422ced6323b424f4b0fb548a->leave($__internal_74bf6b07ff1ef2ad12854900b04aa0ed97278033422ced6323b424f4b0fb548a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80c48d303dc087c356f28c943c9da3de8667eeff13406588b171b00d7f3af07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c48d303dc087c356f28c943c9da3de8667eeff13406588b171b00d7f3af07->enter($__internal_f80c48d303dc087c356f28c943c9da3de8667eeff13406588b171b00d7f3af07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_598bb332b53dbb57e126f45681d699509cf77fd1e73a5dc7de85d050d2fa1674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598bb332b53dbb57e126f45681d699509cf77fd1e73a5dc7de85d050d2fa1674->enter($__internal_598bb332b53dbb57e126f45681d699509cf77fd1e73a5dc7de85d050d2fa1674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favoris</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favori"] ?? $this->getContext($context, "favori")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_edit", array("id" => $this->getAttribute(($context["favori"] ?? $this->getContext($context, "favori")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_598bb332b53dbb57e126f45681d699509cf77fd1e73a5dc7de85d050d2fa1674->leave($__internal_598bb332b53dbb57e126f45681d699509cf77fd1e73a5dc7de85d050d2fa1674_prof);

        
        $__internal_f80c48d303dc087c356f28c943c9da3de8667eeff13406588b171b00d7f3af07->leave($__internal_f80c48d303dc087c356f28c943c9da3de8667eeff13406588b171b00d7f3af07_prof);

    }

    public function getTemplateName()
    {
        return "favoris/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Favoris</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ favori.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('favoris_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('favoris_edit', { 'id': favori.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "favoris/show.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\favoris\\show.html.twig");
    }
}
