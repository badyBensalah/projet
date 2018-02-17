<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_35b51ea73c571db62e405c299d7abad80e584d0615ea38350d3cb87517e0dc35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b51ea73c571db62e405c299d7abad80e584d0615ea38350d3cb87517e0dc35->enter($__internal_35b51ea73c571db62e405c299d7abad80e584d0615ea38350d3cb87517e0dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0c2fdeb4c0e0c30dd90ccbbc38fd11fca6ceb0d59b45479009a0d801eedc0c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2fdeb4c0e0c30dd90ccbbc38fd11fca6ceb0d59b45479009a0d801eedc0c0c->enter($__internal_0c2fdeb4c0e0c30dd90ccbbc38fd11fca6ceb0d59b45479009a0d801eedc0c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b51ea73c571db62e405c299d7abad80e584d0615ea38350d3cb87517e0dc35->leave($__internal_35b51ea73c571db62e405c299d7abad80e584d0615ea38350d3cb87517e0dc35_prof);

        
        $__internal_0c2fdeb4c0e0c30dd90ccbbc38fd11fca6ceb0d59b45479009a0d801eedc0c0c->leave($__internal_0c2fdeb4c0e0c30dd90ccbbc38fd11fca6ceb0d59b45479009a0d801eedc0c0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4471bd19594735eff933fd88cbb34b840323b2cf7a2a91c82efcbcab4aa210f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4471bd19594735eff933fd88cbb34b840323b2cf7a2a91c82efcbcab4aa210f4->enter($__internal_4471bd19594735eff933fd88cbb34b840323b2cf7a2a91c82efcbcab4aa210f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d3879d52b1bd4c39d0dbe821f7d39ce35f9db46b2bc661d8c11540d089c408e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3879d52b1bd4c39d0dbe821f7d39ce35f9db46b2bc661d8c11540d089c408e9->enter($__internal_d3879d52b1bd4c39d0dbe821f7d39ce35f9db46b2bc661d8c11540d089c408e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3879d52b1bd4c39d0dbe821f7d39ce35f9db46b2bc661d8c11540d089c408e9->leave($__internal_d3879d52b1bd4c39d0dbe821f7d39ce35f9db46b2bc661d8c11540d089c408e9_prof);

        
        $__internal_4471bd19594735eff933fd88cbb34b840323b2cf7a2a91c82efcbcab4aa210f4->leave($__internal_4471bd19594735eff933fd88cbb34b840323b2cf7a2a91c82efcbcab4aa210f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ab175ee0b11c611efffc75c0601bd60454d57837ded9b504b22a9e1787761a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab175ee0b11c611efffc75c0601bd60454d57837ded9b504b22a9e1787761a4->enter($__internal_6ab175ee0b11c611efffc75c0601bd60454d57837ded9b504b22a9e1787761a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4fe06a559921e3eddf06e146c6deb2ac8036286295d0a4df48fc4b8df0b38ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe06a559921e3eddf06e146c6deb2ac8036286295d0a4df48fc4b8df0b38ebb->enter($__internal_4fe06a559921e3eddf06e146c6deb2ac8036286295d0a4df48fc4b8df0b38ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fe06a559921e3eddf06e146c6deb2ac8036286295d0a4df48fc4b8df0b38ebb->leave($__internal_4fe06a559921e3eddf06e146c6deb2ac8036286295d0a4df48fc4b8df0b38ebb_prof);

        
        $__internal_6ab175ee0b11c611efffc75c0601bd60454d57837ded9b504b22a9e1787761a4->leave($__internal_6ab175ee0b11c611efffc75c0601bd60454d57837ded9b504b22a9e1787761a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59693ca5163169343ca3fb39108c28590c21a58ed6baace72c280a14649204ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59693ca5163169343ca3fb39108c28590c21a58ed6baace72c280a14649204ed->enter($__internal_59693ca5163169343ca3fb39108c28590c21a58ed6baace72c280a14649204ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78f272f453e0bb1e71355e0c17ba49d2b33090418c282204111036723e727b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f272f453e0bb1e71355e0c17ba49d2b33090418c282204111036723e727b05->enter($__internal_78f272f453e0bb1e71355e0c17ba49d2b33090418c282204111036723e727b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78f272f453e0bb1e71355e0c17ba49d2b33090418c282204111036723e727b05->leave($__internal_78f272f453e0bb1e71355e0c17ba49d2b33090418c282204111036723e727b05_prof);

        
        $__internal_59693ca5163169343ca3fb39108c28590c21a58ed6baace72c280a14649204ed->leave($__internal_59693ca5163169343ca3fb39108c28590c21a58ed6baace72c280a14649204ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
