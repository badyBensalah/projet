<?php

/* article/show.html.twig */
class __TwigTemplate_930d8f710b8998df648fa50cfacedc7587ce2ca3fe799028aa1313a571a100e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_f6e7ddb019b85c27949ba6e909f736d968533ab608ba9a62fd2d77c649606b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e7ddb019b85c27949ba6e909f736d968533ab608ba9a62fd2d77c649606b34->enter($__internal_f6e7ddb019b85c27949ba6e909f736d968533ab608ba9a62fd2d77c649606b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_c6aeb138501abf66ed71f5a5b5a0c1f6c8bcde8272227d7f4315eeac33cb99af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aeb138501abf66ed71f5a5b5a0c1f6c8bcde8272227d7f4315eeac33cb99af->enter($__internal_c6aeb138501abf66ed71f5a5b5a0c1f6c8bcde8272227d7f4315eeac33cb99af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e7ddb019b85c27949ba6e909f736d968533ab608ba9a62fd2d77c649606b34->leave($__internal_f6e7ddb019b85c27949ba6e909f736d968533ab608ba9a62fd2d77c649606b34_prof);

        
        $__internal_c6aeb138501abf66ed71f5a5b5a0c1f6c8bcde8272227d7f4315eeac33cb99af->leave($__internal_c6aeb138501abf66ed71f5a5b5a0c1f6c8bcde8272227d7f4315eeac33cb99af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62378db90c837be828fa14fae46fcdc4b48b854afdc68abc1db4df987591156d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62378db90c837be828fa14fae46fcdc4b48b854afdc68abc1db4df987591156d->enter($__internal_62378db90c837be828fa14fae46fcdc4b48b854afdc68abc1db4df987591156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb8f9e86a15f323cfc2d015cc1d0c2fe657a028f31e47899bc808840ed6be06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb8f9e86a15f323cfc2d015cc1d0c2fe657a028f31e47899bc808840ed6be06->enter($__internal_deb8f9e86a15f323cfc2d015cc1d0c2fe657a028f31e47899bc808840ed6be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "datePublication", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "datePublication", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "lien", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_deb8f9e86a15f323cfc2d015cc1d0c2fe657a028f31e47899bc808840ed6be06->leave($__internal_deb8f9e86a15f323cfc2d015cc1d0c2fe657a028f31e47899bc808840ed6be06_prof);

        
        $__internal_62378db90c837be828fa14fae46fcdc4b48b854afdc68abc1db4df987591156d->leave($__internal_62378db90c837be828fa14fae46fcdc4b48b854afdc68abc1db4df987591156d_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>{% if article.datePublication %}{{ article.datePublication|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ article.description }}</td>
            </tr>
            <tr>
                <th>Lien</th>
                <td>{{ article.lien }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\app\\Resources\\views\\article\\show.html.twig");
    }
}
