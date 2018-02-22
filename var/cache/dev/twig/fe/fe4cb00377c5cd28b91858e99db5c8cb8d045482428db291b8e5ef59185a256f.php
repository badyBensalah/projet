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
        $__internal_f4e21e0a89d486dd7d2d6ec8a43e5a0517a4db2db6ac57c83e51c4892ca7d7c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e21e0a89d486dd7d2d6ec8a43e5a0517a4db2db6ac57c83e51c4892ca7d7c5->enter($__internal_f4e21e0a89d486dd7d2d6ec8a43e5a0517a4db2db6ac57c83e51c4892ca7d7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/edit.html.twig"));

        $__internal_af621c22ae1abc2a2d4073a694a2bcc43fca4acb9b6fa5bf352bfabc2f630988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af621c22ae1abc2a2d4073a694a2bcc43fca4acb9b6fa5bf352bfabc2f630988->enter($__internal_af621c22ae1abc2a2d4073a694a2bcc43fca4acb9b6fa5bf352bfabc2f630988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "favoris/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e21e0a89d486dd7d2d6ec8a43e5a0517a4db2db6ac57c83e51c4892ca7d7c5->leave($__internal_f4e21e0a89d486dd7d2d6ec8a43e5a0517a4db2db6ac57c83e51c4892ca7d7c5_prof);

        
        $__internal_af621c22ae1abc2a2d4073a694a2bcc43fca4acb9b6fa5bf352bfabc2f630988->leave($__internal_af621c22ae1abc2a2d4073a694a2bcc43fca4acb9b6fa5bf352bfabc2f630988_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44018dfffb752debbf4d374894eadedbca4fd5d0a66d287e15d151e7b22af6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44018dfffb752debbf4d374894eadedbca4fd5d0a66d287e15d151e7b22af6de->enter($__internal_44018dfffb752debbf4d374894eadedbca4fd5d0a66d287e15d151e7b22af6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c2f22832dbcaf2d62ec2a31b2c13bf7117ed0044a24a9da5a3118baaf971e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2f22832dbcaf2d62ec2a31b2c13bf7117ed0044a24a9da5a3118baaf971e5b->enter($__internal_2c2f22832dbcaf2d62ec2a31b2c13bf7117ed0044a24a9da5a3118baaf971e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favoris edit</h1>

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
        
        $__internal_2c2f22832dbcaf2d62ec2a31b2c13bf7117ed0044a24a9da5a3118baaf971e5b->leave($__internal_2c2f22832dbcaf2d62ec2a31b2c13bf7117ed0044a24a9da5a3118baaf971e5b_prof);

        
        $__internal_44018dfffb752debbf4d374894eadedbca4fd5d0a66d287e15d151e7b22af6de->leave($__internal_44018dfffb752debbf4d374894eadedbca4fd5d0a66d287e15d151e7b22af6de_prof);

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
    <h1>Favoris edit</h1>

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
", "favoris/edit.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\favoris\\edit.html.twig");
    }
}
