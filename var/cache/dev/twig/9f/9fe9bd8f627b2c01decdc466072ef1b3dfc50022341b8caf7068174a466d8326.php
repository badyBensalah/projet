<?php

/* guide/new.html.twig */
class __TwigTemplate_ce412c4e6b3f1a3d5b976d6d74e18b59d2c548b0888fe12c9a12c0e5422f67c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "guide/new.html.twig", 1);
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
        $__internal_7bbcb7db555510ab60a6daa788e1f6385af08f88ef3e272a4a48a35b1e040df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbcb7db555510ab60a6daa788e1f6385af08f88ef3e272a4a48a35b1e040df3->enter($__internal_7bbcb7db555510ab60a6daa788e1f6385af08f88ef3e272a4a48a35b1e040df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $__internal_a26712f648574965f0e41003b57503e5500484723174612c97487f848b40eac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26712f648574965f0e41003b57503e5500484723174612c97487f848b40eac7->enter($__internal_a26712f648574965f0e41003b57503e5500484723174612c97487f848b40eac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbcb7db555510ab60a6daa788e1f6385af08f88ef3e272a4a48a35b1e040df3->leave($__internal_7bbcb7db555510ab60a6daa788e1f6385af08f88ef3e272a4a48a35b1e040df3_prof);

        
        $__internal_a26712f648574965f0e41003b57503e5500484723174612c97487f848b40eac7->leave($__internal_a26712f648574965f0e41003b57503e5500484723174612c97487f848b40eac7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8fc8c028c8aa666ab489d35e427ab0575bee3a81c7b09d0697bd0f3691ce5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc8c028c8aa666ab489d35e427ab0575bee3a81c7b09d0697bd0f3691ce5a3->enter($__internal_b8fc8c028c8aa666ab489d35e427ab0575bee3a81c7b09d0697bd0f3691ce5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0919c54b4a39d84709a09dc01c25b8f3932790a81f0e432f81ee32f73d036649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0919c54b4a39d84709a09dc01c25b8f3932790a81f0e432f81ee32f73d036649->enter($__internal_0919c54b4a39d84709a09dc01c25b8f3932790a81f0e432f81ee32f73d036649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Guide creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guide_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0919c54b4a39d84709a09dc01c25b8f3932790a81f0e432f81ee32f73d036649->leave($__internal_0919c54b4a39d84709a09dc01c25b8f3932790a81f0e432f81ee32f73d036649_prof);

        
        $__internal_b8fc8c028c8aa666ab489d35e427ab0575bee3a81c7b09d0697bd0f3691ce5a3->leave($__internal_b8fc8c028c8aa666ab489d35e427ab0575bee3a81c7b09d0697bd0f3691ce5a3_prof);

    }

    public function getTemplateName()
    {
        return "guide/new.html.twig";
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
    <h1>Guide creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('guide_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "guide/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\guide\\new.html.twig");
    }
}
