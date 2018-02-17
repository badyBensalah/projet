<?php

/* article/new.html.twig */
class __TwigTemplate_5ca84b37f7fca51aab50d4deee475978d8abe36bbe04039b79ebddd0c3743605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
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
        $__internal_8844bb90631fbfae52da8b498ec59f5106521d2e83b530c11868a0589a7a9658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8844bb90631fbfae52da8b498ec59f5106521d2e83b530c11868a0589a7a9658->enter($__internal_8844bb90631fbfae52da8b498ec59f5106521d2e83b530c11868a0589a7a9658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_69f6d31689e6910637674361d40f491fea96152b8669600ed35ef9d02d8310fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f6d31689e6910637674361d40f491fea96152b8669600ed35ef9d02d8310fb->enter($__internal_69f6d31689e6910637674361d40f491fea96152b8669600ed35ef9d02d8310fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8844bb90631fbfae52da8b498ec59f5106521d2e83b530c11868a0589a7a9658->leave($__internal_8844bb90631fbfae52da8b498ec59f5106521d2e83b530c11868a0589a7a9658_prof);

        
        $__internal_69f6d31689e6910637674361d40f491fea96152b8669600ed35ef9d02d8310fb->leave($__internal_69f6d31689e6910637674361d40f491fea96152b8669600ed35ef9d02d8310fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae8b690b33a19c2ca48c9cf86d554812b85bd254972d126c5eba29c8e2f64b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8b690b33a19c2ca48c9cf86d554812b85bd254972d126c5eba29c8e2f64b9e->enter($__internal_ae8b690b33a19c2ca48c9cf86d554812b85bd254972d126c5eba29c8e2f64b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c51a0bfb74fca180841ef0fbe3aaa575ec2e9e0fc5b5b50b5d007d59fd07e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c51a0bfb74fca180841ef0fbe3aaa575ec2e9e0fc5b5b50b5d007d59fd07e7a->enter($__internal_4c51a0bfb74fca180841ef0fbe3aaa575ec2e9e0fc5b5b50b5d007d59fd07e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4c51a0bfb74fca180841ef0fbe3aaa575ec2e9e0fc5b5b50b5d007d59fd07e7a->leave($__internal_4c51a0bfb74fca180841ef0fbe3aaa575ec2e9e0fc5b5b50b5d007d59fd07e7a_prof);

        
        $__internal_ae8b690b33a19c2ca48c9cf86d554812b85bd254972d126c5eba29c8e2f64b9e->leave($__internal_ae8b690b33a19c2ca48c9cf86d554812b85bd254972d126c5eba29c8e2f64b9e_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
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
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\app\\Resources\\views\\article\\new.html.twig");
    }
}
