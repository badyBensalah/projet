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
        $__internal_f2ce86eadb0a3d5ddd0b216474970880923b3df5a7443d915f11e9ad60fdd324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ce86eadb0a3d5ddd0b216474970880923b3df5a7443d915f11e9ad60fdd324->enter($__internal_f2ce86eadb0a3d5ddd0b216474970880923b3df5a7443d915f11e9ad60fdd324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $__internal_33c8971f5156f43fc94b1f8a67dc6648d83cb97d707fd8083bf79c3b6591414a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c8971f5156f43fc94b1f8a67dc6648d83cb97d707fd8083bf79c3b6591414a->enter($__internal_33c8971f5156f43fc94b1f8a67dc6648d83cb97d707fd8083bf79c3b6591414a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ce86eadb0a3d5ddd0b216474970880923b3df5a7443d915f11e9ad60fdd324->leave($__internal_f2ce86eadb0a3d5ddd0b216474970880923b3df5a7443d915f11e9ad60fdd324_prof);

        
        $__internal_33c8971f5156f43fc94b1f8a67dc6648d83cb97d707fd8083bf79c3b6591414a->leave($__internal_33c8971f5156f43fc94b1f8a67dc6648d83cb97d707fd8083bf79c3b6591414a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93d53d7e481e071723f0c0a319029b1ae3d6d26b4ad07f11d4b4a03072d0e053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d53d7e481e071723f0c0a319029b1ae3d6d26b4ad07f11d4b4a03072d0e053->enter($__internal_93d53d7e481e071723f0c0a319029b1ae3d6d26b4ad07f11d4b4a03072d0e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b07dabf4e4765b2adba53b6a9db33e6b7c7c08e6c1d29909b009a2eb0242ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b07dabf4e4765b2adba53b6a9db33e6b7c7c08e6c1d29909b009a2eb0242ff9->enter($__internal_7b07dabf4e4765b2adba53b6a9db33e6b7c7c08e6c1d29909b009a2eb0242ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b07dabf4e4765b2adba53b6a9db33e6b7c7c08e6c1d29909b009a2eb0242ff9->leave($__internal_7b07dabf4e4765b2adba53b6a9db33e6b7c7c08e6c1d29909b009a2eb0242ff9_prof);

        
        $__internal_93d53d7e481e071723f0c0a319029b1ae3d6d26b4ad07f11d4b4a03072d0e053->leave($__internal_93d53d7e481e071723f0c0a319029b1ae3d6d26b4ad07f11d4b4a03072d0e053_prof);

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
", "service/new.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\service\\new.html.twig");
    }
}
