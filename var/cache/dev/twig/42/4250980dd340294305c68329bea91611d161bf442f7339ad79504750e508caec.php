<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25c764d327c3cba925c392b871c9ae1d313e966de7fa5adcaf2da7d4f32f3a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c764d327c3cba925c392b871c9ae1d313e966de7fa5adcaf2da7d4f32f3a21->enter($__internal_25c764d327c3cba925c392b871c9ae1d313e966de7fa5adcaf2da7d4f32f3a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bbbbef10c28329968c9838ea1827407d3a0d570e9570e5bb1d244c3c0b451d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbbef10c28329968c9838ea1827407d3a0d570e9570e5bb1d244c3c0b451d97->enter($__internal_bbbbef10c28329968c9838ea1827407d3a0d570e9570e5bb1d244c3c0b451d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c764d327c3cba925c392b871c9ae1d313e966de7fa5adcaf2da7d4f32f3a21->leave($__internal_25c764d327c3cba925c392b871c9ae1d313e966de7fa5adcaf2da7d4f32f3a21_prof);

        
        $__internal_bbbbef10c28329968c9838ea1827407d3a0d570e9570e5bb1d244c3c0b451d97->leave($__internal_bbbbef10c28329968c9838ea1827407d3a0d570e9570e5bb1d244c3c0b451d97_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0365761aa5fe3cd476986dd43eb12d9ebb4b4bf8dacca04dd0113eec6c2b6e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0365761aa5fe3cd476986dd43eb12d9ebb4b4bf8dacca04dd0113eec6c2b6e7c->enter($__internal_0365761aa5fe3cd476986dd43eb12d9ebb4b4bf8dacca04dd0113eec6c2b6e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5edaa344ad19d16b79f58204fd1511013bfac820d9eca6ca290f0af289918e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edaa344ad19d16b79f58204fd1511013bfac820d9eca6ca290f0af289918e43->enter($__internal_5edaa344ad19d16b79f58204fd1511013bfac820d9eca6ca290f0af289918e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5edaa344ad19d16b79f58204fd1511013bfac820d9eca6ca290f0af289918e43->leave($__internal_5edaa344ad19d16b79f58204fd1511013bfac820d9eca6ca290f0af289918e43_prof);

        
        $__internal_0365761aa5fe3cd476986dd43eb12d9ebb4b4bf8dacca04dd0113eec6c2b6e7c->leave($__internal_0365761aa5fe3cd476986dd43eb12d9ebb4b4bf8dacca04dd0113eec6c2b6e7c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97971dcb7a28f9390cf5424dfbfa007c84627a79a83427301d92dd90721f56ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97971dcb7a28f9390cf5424dfbfa007c84627a79a83427301d92dd90721f56ae->enter($__internal_97971dcb7a28f9390cf5424dfbfa007c84627a79a83427301d92dd90721f56ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3067769c3a659021fd97dcfa2a223475282e7b6cf0b45729f9dba3ed623e1f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3067769c3a659021fd97dcfa2a223475282e7b6cf0b45729f9dba3ed623e1f25->enter($__internal_3067769c3a659021fd97dcfa2a223475282e7b6cf0b45729f9dba3ed623e1f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3067769c3a659021fd97dcfa2a223475282e7b6cf0b45729f9dba3ed623e1f25->leave($__internal_3067769c3a659021fd97dcfa2a223475282e7b6cf0b45729f9dba3ed623e1f25_prof);

        
        $__internal_97971dcb7a28f9390cf5424dfbfa007c84627a79a83427301d92dd90721f56ae->leave($__internal_97971dcb7a28f9390cf5424dfbfa007c84627a79a83427301d92dd90721f56ae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fd2ac3ee484a279e52e4fad16fe6d365fd0bdd2e6c1ebe29f382a7d4aa68758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd2ac3ee484a279e52e4fad16fe6d365fd0bdd2e6c1ebe29f382a7d4aa68758->enter($__internal_4fd2ac3ee484a279e52e4fad16fe6d365fd0bdd2e6c1ebe29f382a7d4aa68758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c04f7c2049116918f36533ea4ed0240964462316edc77a4361fe24a0813d25f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04f7c2049116918f36533ea4ed0240964462316edc77a4361fe24a0813d25f1->enter($__internal_c04f7c2049116918f36533ea4ed0240964462316edc77a4361fe24a0813d25f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c04f7c2049116918f36533ea4ed0240964462316edc77a4361fe24a0813d25f1->leave($__internal_c04f7c2049116918f36533ea4ed0240964462316edc77a4361fe24a0813d25f1_prof);

        
        $__internal_4fd2ac3ee484a279e52e4fad16fe6d365fd0bdd2e6c1ebe29f382a7d4aa68758->leave($__internal_4fd2ac3ee484a279e52e4fad16fe6d365fd0bdd2e6c1ebe29f382a7d4aa68758_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
