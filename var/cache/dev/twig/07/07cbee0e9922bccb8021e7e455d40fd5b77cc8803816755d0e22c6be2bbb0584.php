<?php

/* service/new.html.twig */
class __TwigTemplate_a0b0e91afd7e05f177b60897e26ffd1001b51b3ca078b4aa9ba2fcdcef546abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/new.html.twig", 1);
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
        $__internal_d78ab9531ed85787b845af2be98274dc5cceab8924966bcf1e55499b1de04bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78ab9531ed85787b845af2be98274dc5cceab8924966bcf1e55499b1de04bef->enter($__internal_d78ab9531ed85787b845af2be98274dc5cceab8924966bcf1e55499b1de04bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $__internal_66afcd2d3df6789b8046447af3b2ff6b28d2ed3345ab8aa027b35897ac4b70d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66afcd2d3df6789b8046447af3b2ff6b28d2ed3345ab8aa027b35897ac4b70d0->enter($__internal_66afcd2d3df6789b8046447af3b2ff6b28d2ed3345ab8aa027b35897ac4b70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d78ab9531ed85787b845af2be98274dc5cceab8924966bcf1e55499b1de04bef->leave($__internal_d78ab9531ed85787b845af2be98274dc5cceab8924966bcf1e55499b1de04bef_prof);

        
        $__internal_66afcd2d3df6789b8046447af3b2ff6b28d2ed3345ab8aa027b35897ac4b70d0->leave($__internal_66afcd2d3df6789b8046447af3b2ff6b28d2ed3345ab8aa027b35897ac4b70d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_728e00cefb78ebbeb573439090a5cf87bb2fda2bc72b7d5475f72931da2ea890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728e00cefb78ebbeb573439090a5cf87bb2fda2bc72b7d5475f72931da2ea890->enter($__internal_728e00cefb78ebbeb573439090a5cf87bb2fda2bc72b7d5475f72931da2ea890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_042d259bc1c025dbd6e41796ecf8e521e4372e94b276dd00f1d0e3b773b314bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042d259bc1c025dbd6e41796ecf8e521e4372e94b276dd00f1d0e3b773b314bd->enter($__internal_042d259bc1c025dbd6e41796ecf8e521e4372e94b276dd00f1d0e3b773b314bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_042d259bc1c025dbd6e41796ecf8e521e4372e94b276dd00f1d0e3b773b314bd->leave($__internal_042d259bc1c025dbd6e41796ecf8e521e4372e94b276dd00f1d0e3b773b314bd_prof);

        
        $__internal_728e00cefb78ebbeb573439090a5cf87bb2fda2bc72b7d5475f72931da2ea890->leave($__internal_728e00cefb78ebbeb573439090a5cf87bb2fda2bc72b7d5475f72931da2ea890_prof);

    }

    public function getTemplateName()
    {
        return "service/new.html.twig";
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
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "service/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\service\\new.html.twig");
    }
}
