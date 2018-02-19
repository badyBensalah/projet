<?php

/* base.html.twig */
class __TwigTemplate_6f06a2e167898936c970ccaddd03ba9d16b2a83ee7c92efba12230c1ad962997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bddd055f198b09990f02927dac13cc93f043eef1370b1ef76d846258ab4e26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bddd055f198b09990f02927dac13cc93f043eef1370b1ef76d846258ab4e26e->enter($__internal_5bddd055f198b09990f02927dac13cc93f043eef1370b1ef76d846258ab4e26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ab2db71b7661b4182f602a8ff2ce2e5f92697f2be55c24abf8aa84c1d68cce95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2db71b7661b4182f602a8ff2ce2e5f92697f2be55c24abf8aa84c1d68cce95->enter($__internal_ab2db71b7661b4182f602a8ff2ce2e5f92697f2be55c24abf8aa84c1d68cce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_5bddd055f198b09990f02927dac13cc93f043eef1370b1ef76d846258ab4e26e->leave($__internal_5bddd055f198b09990f02927dac13cc93f043eef1370b1ef76d846258ab4e26e_prof);

        
        $__internal_ab2db71b7661b4182f602a8ff2ce2e5f92697f2be55c24abf8aa84c1d68cce95->leave($__internal_ab2db71b7661b4182f602a8ff2ce2e5f92697f2be55c24abf8aa84c1d68cce95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6696b96a12802cfa419ebd457c4b6f39d68f397573f45ee18efcc4127c7aed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6696b96a12802cfa419ebd457c4b6f39d68f397573f45ee18efcc4127c7aed7->enter($__internal_d6696b96a12802cfa419ebd457c4b6f39d68f397573f45ee18efcc4127c7aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9531be91c5bacc43bc9eef608430534c5ec268fd39f66e1b76092d9b75cc522f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9531be91c5bacc43bc9eef608430534c5ec268fd39f66e1b76092d9b75cc522f->enter($__internal_9531be91c5bacc43bc9eef608430534c5ec268fd39f66e1b76092d9b75cc522f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9531be91c5bacc43bc9eef608430534c5ec268fd39f66e1b76092d9b75cc522f->leave($__internal_9531be91c5bacc43bc9eef608430534c5ec268fd39f66e1b76092d9b75cc522f_prof);

        
        $__internal_d6696b96a12802cfa419ebd457c4b6f39d68f397573f45ee18efcc4127c7aed7->leave($__internal_d6696b96a12802cfa419ebd457c4b6f39d68f397573f45ee18efcc4127c7aed7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51516fffb22d3a4688ff50c72f495a1a6837b6a3394f8983ccfd6f9067efaeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51516fffb22d3a4688ff50c72f495a1a6837b6a3394f8983ccfd6f9067efaeb7->enter($__internal_51516fffb22d3a4688ff50c72f495a1a6837b6a3394f8983ccfd6f9067efaeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_698c0cf5dd96ce3d117c92eebc4dda800c52082d862e67040537839ed7422603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698c0cf5dd96ce3d117c92eebc4dda800c52082d862e67040537839ed7422603->enter($__internal_698c0cf5dd96ce3d117c92eebc4dda800c52082d862e67040537839ed7422603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_698c0cf5dd96ce3d117c92eebc4dda800c52082d862e67040537839ed7422603->leave($__internal_698c0cf5dd96ce3d117c92eebc4dda800c52082d862e67040537839ed7422603_prof);

        
        $__internal_51516fffb22d3a4688ff50c72f495a1a6837b6a3394f8983ccfd6f9067efaeb7->leave($__internal_51516fffb22d3a4688ff50c72f495a1a6837b6a3394f8983ccfd6f9067efaeb7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bba7cae38abae40dab3edc53e4862bb9f02ab441d05d7797d506630789bc67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bba7cae38abae40dab3edc53e4862bb9f02ab441d05d7797d506630789bc67f->enter($__internal_5bba7cae38abae40dab3edc53e4862bb9f02ab441d05d7797d506630789bc67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ac9aa020f19258de97373d97b706f4c9ed145edff01affe62d15b46d278e583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9aa020f19258de97373d97b706f4c9ed145edff01affe62d15b46d278e583->enter($__internal_4ac9aa020f19258de97373d97b706f4c9ed145edff01affe62d15b46d278e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ac9aa020f19258de97373d97b706f4c9ed145edff01affe62d15b46d278e583->leave($__internal_4ac9aa020f19258de97373d97b706f4c9ed145edff01affe62d15b46d278e583_prof);

        
        $__internal_5bba7cae38abae40dab3edc53e4862bb9f02ab441d05d7797d506630789bc67f->leave($__internal_5bba7cae38abae40dab3edc53e4862bb9f02ab441d05d7797d506630789bc67f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c541fbd5cf04e0a86cfb4d1338bb8258ac9e8c44d63dfad4d5664362ebe9c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c541fbd5cf04e0a86cfb4d1338bb8258ac9e8c44d63dfad4d5664362ebe9c16->enter($__internal_6c541fbd5cf04e0a86cfb4d1338bb8258ac9e8c44d63dfad4d5664362ebe9c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7408e9ea829add566d9f6d6e50179b9b2a4aa1545220de44e5b230d5cc15510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7408e9ea829add566d9f6d6e50179b9b2a4aa1545220de44e5b230d5cc15510->enter($__internal_f7408e9ea829add566d9f6d6e50179b9b2a4aa1545220de44e5b230d5cc15510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7408e9ea829add566d9f6d6e50179b9b2a4aa1545220de44e5b230d5cc15510->leave($__internal_f7408e9ea829add566d9f6d6e50179b9b2a4aa1545220de44e5b230d5cc15510_prof);

        
        $__internal_6c541fbd5cf04e0a86cfb4d1338bb8258ac9e8c44d63dfad4d5664362ebe9c16->leave($__internal_6c541fbd5cf04e0a86cfb4d1338bb8258ac9e8c44d63dfad4d5664362ebe9c16_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  64 => 5,  52 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\app\\Resources\\views\\base.html.twig");
    }
}
