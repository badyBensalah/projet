<?php

/* ville/new.html.twig */
class __TwigTemplate_174cdf1a7ec456e94c700ab15a5a0d9cd4730bc45e85bb8cb661e2a087370d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ville/new.html.twig", 1);
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
        $__internal_f76be868e44f664c096fae021d6454a7f53630f1b843437791593e9aaf51de21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76be868e44f664c096fae021d6454a7f53630f1b843437791593e9aaf51de21->enter($__internal_f76be868e44f664c096fae021d6454a7f53630f1b843437791593e9aaf51de21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $__internal_47072f9921a93ae937a0092096ef001c0a342f2754d6428b10105dc48730aba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47072f9921a93ae937a0092096ef001c0a342f2754d6428b10105dc48730aba2->enter($__internal_47072f9921a93ae937a0092096ef001c0a342f2754d6428b10105dc48730aba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76be868e44f664c096fae021d6454a7f53630f1b843437791593e9aaf51de21->leave($__internal_f76be868e44f664c096fae021d6454a7f53630f1b843437791593e9aaf51de21_prof);

        
        $__internal_47072f9921a93ae937a0092096ef001c0a342f2754d6428b10105dc48730aba2->leave($__internal_47072f9921a93ae937a0092096ef001c0a342f2754d6428b10105dc48730aba2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b3af4e5434bcdb036a9177bcbf8704cc101cad31ae281c4439e1ffa2b0ad4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3af4e5434bcdb036a9177bcbf8704cc101cad31ae281c4439e1ffa2b0ad4ab->enter($__internal_3b3af4e5434bcdb036a9177bcbf8704cc101cad31ae281c4439e1ffa2b0ad4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9c95a5a84c3bd36db4909c6b8ca4b7b857a76f59ccd25245624fdb1e1747bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c95a5a84c3bd36db4909c6b8ca4b7b857a76f59ccd25245624fdb1e1747bbd->enter($__internal_e9c95a5a84c3bd36db4909c6b8ca4b7b857a76f59ccd25245624fdb1e1747bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ville creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e9c95a5a84c3bd36db4909c6b8ca4b7b857a76f59ccd25245624fdb1e1747bbd->leave($__internal_e9c95a5a84c3bd36db4909c6b8ca4b7b857a76f59ccd25245624fdb1e1747bbd_prof);

        
        $__internal_3b3af4e5434bcdb036a9177bcbf8704cc101cad31ae281c4439e1ffa2b0ad4ab->leave($__internal_3b3af4e5434bcdb036a9177bcbf8704cc101cad31ae281c4439e1ffa2b0ad4ab_prof);

    }

    public function getTemplateName()
    {
        return "ville/new.html.twig";
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
    <h1>Ville creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "ville/new.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\ville\\new.html.twig");
    }
}
