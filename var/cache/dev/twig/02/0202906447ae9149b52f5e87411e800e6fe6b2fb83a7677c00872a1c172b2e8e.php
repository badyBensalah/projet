<?php

/* favoris/new.html.twig */
class __TwigTemplate_dc14e824eab775bd77f4968c112b55be579626e79fef21ddbac31a9d6e0d56d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/new.html.twig", 1);
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
        $__internal_0d92824d029dd24095baa866d18abb2bbefc89b10dce13089cad355d3b31f4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d92824d029dd24095baa866d18abb2bbefc89b10dce13089cad355d3b31f4a1->enter($__internal_0d92824d029dd24095baa866d18abb2bbefc89b10dce13089cad355d3b31f4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/new.html.twig"));

        $__internal_d62551dbd89278d77a84c75c3a5d42aad16f888663b2ad5b687231ac8d53a07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62551dbd89278d77a84c75c3a5d42aad16f888663b2ad5b687231ac8d53a07a->enter($__internal_d62551dbd89278d77a84c75c3a5d42aad16f888663b2ad5b687231ac8d53a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d92824d029dd24095baa866d18abb2bbefc89b10dce13089cad355d3b31f4a1->leave($__internal_0d92824d029dd24095baa866d18abb2bbefc89b10dce13089cad355d3b31f4a1_prof);

        
        $__internal_d62551dbd89278d77a84c75c3a5d42aad16f888663b2ad5b687231ac8d53a07a->leave($__internal_d62551dbd89278d77a84c75c3a5d42aad16f888663b2ad5b687231ac8d53a07a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b93fd4cb78e59824676418c19bdfebd935784c84ba1d51931231aade7dd157fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93fd4cb78e59824676418c19bdfebd935784c84ba1d51931231aade7dd157fd->enter($__internal_b93fd4cb78e59824676418c19bdfebd935784c84ba1d51931231aade7dd157fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48656c3b2f5d21a3ab4aa91d02054c4ecfa40a3b399414e683b9eaa40a088466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48656c3b2f5d21a3ab4aa91d02054c4ecfa40a3b399414e683b9eaa40a088466->enter($__internal_48656c3b2f5d21a3ab4aa91d02054c4ecfa40a3b399414e683b9eaa40a088466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favoris creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_48656c3b2f5d21a3ab4aa91d02054c4ecfa40a3b399414e683b9eaa40a088466->leave($__internal_48656c3b2f5d21a3ab4aa91d02054c4ecfa40a3b399414e683b9eaa40a088466_prof);

        
        $__internal_b93fd4cb78e59824676418c19bdfebd935784c84ba1d51931231aade7dd157fd->leave($__internal_b93fd4cb78e59824676418c19bdfebd935784c84ba1d51931231aade7dd157fd_prof);

    }

    public function getTemplateName()
    {
        return "favoris/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Favoris creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('favoris_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "favoris/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\favoris\\new.html.twig");
    }
}
