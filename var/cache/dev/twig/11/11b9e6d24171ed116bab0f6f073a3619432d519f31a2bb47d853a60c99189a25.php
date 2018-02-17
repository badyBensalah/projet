<?php

/* experience/index.html.twig */
class __TwigTemplate_c49f21ee71a654bd3851756b998edb0486b103b6c7bdd11e503101df159ba898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "experience/index.html.twig", 1);
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
        $__internal_4779c8d4a636b83a3c0a750c07c9baae410267f87633fe16abf3ec12f499eb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4779c8d4a636b83a3c0a750c07c9baae410267f87633fe16abf3ec12f499eb90->enter($__internal_4779c8d4a636b83a3c0a750c07c9baae410267f87633fe16abf3ec12f499eb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $__internal_acf43df86507fb8ccb770cda2a8d739f4373c0f19d7dd25c468193a67f9ba912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf43df86507fb8ccb770cda2a8d739f4373c0f19d7dd25c468193a67f9ba912->enter($__internal_acf43df86507fb8ccb770cda2a8d739f4373c0f19d7dd25c468193a67f9ba912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4779c8d4a636b83a3c0a750c07c9baae410267f87633fe16abf3ec12f499eb90->leave($__internal_4779c8d4a636b83a3c0a750c07c9baae410267f87633fe16abf3ec12f499eb90_prof);

        
        $__internal_acf43df86507fb8ccb770cda2a8d739f4373c0f19d7dd25c468193a67f9ba912->leave($__internal_acf43df86507fb8ccb770cda2a8d739f4373c0f19d7dd25c468193a67f9ba912_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_106f865fd549d42a036c54c924ff7b36d473b043a8ca3517a10146973692973f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106f865fd549d42a036c54c924ff7b36d473b043a8ca3517a10146973692973f->enter($__internal_106f865fd549d42a036c54c924ff7b36d473b043a8ca3517a10146973692973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2447025ad64ed74fb68288caf5c6f692b998095af5852d5a66ccd8a3743a03ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2447025ad64ed74fb68288caf5c6f692b998095af5852d5a66ccd8a3743a03ac->enter($__internal_2447025ad64ed74fb68288caf5c6f692b998095af5852d5a66ccd8a3743a03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Experiences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_show", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "gallerie", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_show", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_edit", array("id" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("experience_new");
        echo "\">Create a new experience</a>
        </li>
    </ul>
";
        
        $__internal_2447025ad64ed74fb68288caf5c6f692b998095af5852d5a66ccd8a3743a03ac->leave($__internal_2447025ad64ed74fb68288caf5c6f692b998095af5852d5a66ccd8a3743a03ac_prof);

        
        $__internal_106f865fd549d42a036c54c924ff7b36d473b043a8ca3517a10146973692973f->leave($__internal_106f865fd549d42a036c54c924ff7b36d473b043a8ca3517a10146973692973f_prof);

    }

    public function getTemplateName()
    {
        return "experience/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Experiences list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Gallerie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for experience in experiences %}
            <tr>
                <td><a href=\"{{ path('experience_show', { 'id': experience.id }) }}\">{{ experience.id }}</a></td>
                <td>{{ experience.description }}</td>
                <td>{{ experience.gallerie }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('experience_show', { 'id': experience.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('experience_edit', { 'id': experience.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('experience_new') }}\">Create a new experience</a>
        </li>
    </ul>
{% endblock %}
", "experience/index.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\experience\\index.html.twig");
    }
}
