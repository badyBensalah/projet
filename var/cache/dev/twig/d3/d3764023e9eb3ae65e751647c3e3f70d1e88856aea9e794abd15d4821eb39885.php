<?php

/* croisiere/new.html.twig */
class __TwigTemplate_724c68eeec83f31ef0348aef1723e7ecf6467294c3a65a230056cddb9260ef64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff29945330eccaf17be6ea7539a19f79c58f3213741ed7e8b699740974048112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff29945330eccaf17be6ea7539a19f79c58f3213741ed7e8b699740974048112->enter($__internal_ff29945330eccaf17be6ea7539a19f79c58f3213741ed7e8b699740974048112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        $__internal_fc3ea79ebe349e8df397b3b417380635b228dd2f06187a06613a2e30c3febf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3ea79ebe349e8df397b3b417380635b228dd2f06187a06613a2e30c3febf0f->enter($__internal_fc3ea79ebe349e8df397b3b417380635b228dd2f06187a06613a2e30c3febf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "croisiere/new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ff29945330eccaf17be6ea7539a19f79c58f3213741ed7e8b699740974048112->leave($__internal_ff29945330eccaf17be6ea7539a19f79c58f3213741ed7e8b699740974048112_prof);

        
        $__internal_fc3ea79ebe349e8df397b3b417380635b228dd2f06187a06613a2e30c3febf0f->leave($__internal_fc3ea79ebe349e8df397b3b417380635b228dd2f06187a06613a2e30c3febf0f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f45028ec00b4e36cb82a555a8b292c7b05f9cbcd965ac6ba0ee3a14569a13d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45028ec00b4e36cb82a555a8b292c7b05f9cbcd965ac6ba0ee3a14569a13d8c->enter($__internal_f45028ec00b4e36cb82a555a8b292c7b05f9cbcd965ac6ba0ee3a14569a13d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_670d91c97804a1260af46cb6e10de7e93bf893e5daaac53e8622df53f56a8fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670d91c97804a1260af46cb6e10de7e93bf893e5daaac53e8622df53f56a8fa8->enter($__internal_670d91c97804a1260af46cb6e10de7e93bf893e5daaac53e8622df53f56a8fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1>Croisiere creation</h1>

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("croisiere_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_670d91c97804a1260af46cb6e10de7e93bf893e5daaac53e8622df53f56a8fa8->leave($__internal_670d91c97804a1260af46cb6e10de7e93bf893e5daaac53e8622df53f56a8fa8_prof);

        
        $__internal_f45028ec00b4e36cb82a555a8b292c7b05f9cbcd965ac6ba0ee3a14569a13d8c->leave($__internal_f45028ec00b4e36cb82a555a8b292c7b05f9cbcd965ac6ba0ee3a14569a13d8c_prof);

    }

    public function getTemplateName()
    {
        return "croisiere/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  57 => 7,  52 => 5,  48 => 4,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <h1>Croisiere creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('croisiere_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "croisiere/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\croisiere\\new.html.twig");
    }
}
