<?php

/* favoris/edit.html.twig */
class __TwigTemplate_a52eb52d7a571209bc5530bbfd4e322fc00d6d3b2f914de87107fa41bbeee0bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/edit.html.twig", 1);
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
        $__internal_4a1ac6468e1a7de8ee2681f8be502916cdc34a9681b756c0e741a2d9dca0e2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1ac6468e1a7de8ee2681f8be502916cdc34a9681b756c0e741a2d9dca0e2fd->enter($__internal_4a1ac6468e1a7de8ee2681f8be502916cdc34a9681b756c0e741a2d9dca0e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/edit.html.twig"));

        $__internal_46d711a084c782991ad96f050adb32f3c12176ec39e21607520c0997627ac269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d711a084c782991ad96f050adb32f3c12176ec39e21607520c0997627ac269->enter($__internal_46d711a084c782991ad96f050adb32f3c12176ec39e21607520c0997627ac269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1ac6468e1a7de8ee2681f8be502916cdc34a9681b756c0e741a2d9dca0e2fd->leave($__internal_4a1ac6468e1a7de8ee2681f8be502916cdc34a9681b756c0e741a2d9dca0e2fd_prof);

        
        $__internal_46d711a084c782991ad96f050adb32f3c12176ec39e21607520c0997627ac269->leave($__internal_46d711a084c782991ad96f050adb32f3c12176ec39e21607520c0997627ac269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88f95d3ac9f4664fcd1d453600251fb5643af08c54081266b6ebaadbea670c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88f95d3ac9f4664fcd1d453600251fb5643af08c54081266b6ebaadbea670c8->enter($__internal_c88f95d3ac9f4664fcd1d453600251fb5643af08c54081266b6ebaadbea670c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13b434b4ca55b5046504551585a48a7ce7e9fcaa0447c6ca128efce96feeb7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b434b4ca55b5046504551585a48a7ce7e9fcaa0447c6ca128efce96feeb7ca->enter($__internal_13b434b4ca55b5046504551585a48a7ce7e9fcaa0447c6ca128efce96feeb7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favori edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_13b434b4ca55b5046504551585a48a7ce7e9fcaa0447c6ca128efce96feeb7ca->leave($__internal_13b434b4ca55b5046504551585a48a7ce7e9fcaa0447c6ca128efce96feeb7ca_prof);

        
        $__internal_c88f95d3ac9f4664fcd1d453600251fb5643af08c54081266b6ebaadbea670c8->leave($__internal_c88f95d3ac9f4664fcd1d453600251fb5643af08c54081266b6ebaadbea670c8_prof);

    }

    public function getTemplateName()
    {
        return "favoris/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Favori edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('favoris_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "favoris/edit.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\favoris\\edit.html.twig");
    }
}
