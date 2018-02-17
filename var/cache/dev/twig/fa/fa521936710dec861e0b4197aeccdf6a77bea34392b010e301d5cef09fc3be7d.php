<?php

/* base.html.twig */
class __TwigTemplate_de3d05f7f9be6bbd41eeeb5239534af625f8fd2a92cacef65a07c948015fe9c9 extends Twig_Template
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
        $__internal_614f4a2455cd30442b26c79dbb1eb4373ea189a0fbc145bc8201d7e8c7a45822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614f4a2455cd30442b26c79dbb1eb4373ea189a0fbc145bc8201d7e8c7a45822->enter($__internal_614f4a2455cd30442b26c79dbb1eb4373ea189a0fbc145bc8201d7e8c7a45822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a339b5255084555688b283c7c1d96f72e4f53eb4cb877b5e79b97691a963f52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a339b5255084555688b283c7c1d96f72e4f53eb4cb877b5e79b97691a963f52b->enter($__internal_a339b5255084555688b283c7c1d96f72e4f53eb4cb877b5e79b97691a963f52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_614f4a2455cd30442b26c79dbb1eb4373ea189a0fbc145bc8201d7e8c7a45822->leave($__internal_614f4a2455cd30442b26c79dbb1eb4373ea189a0fbc145bc8201d7e8c7a45822_prof);

        
        $__internal_a339b5255084555688b283c7c1d96f72e4f53eb4cb877b5e79b97691a963f52b->leave($__internal_a339b5255084555688b283c7c1d96f72e4f53eb4cb877b5e79b97691a963f52b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55126fae0cce69c447674457221c8a5b3ccf0fb14985bdd72446f784d4571005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55126fae0cce69c447674457221c8a5b3ccf0fb14985bdd72446f784d4571005->enter($__internal_55126fae0cce69c447674457221c8a5b3ccf0fb14985bdd72446f784d4571005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_613f818802a0e37513bcf98f8d87e98fbaa0800ae8e97f92902b7d0d7710b409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613f818802a0e37513bcf98f8d87e98fbaa0800ae8e97f92902b7d0d7710b409->enter($__internal_613f818802a0e37513bcf98f8d87e98fbaa0800ae8e97f92902b7d0d7710b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_613f818802a0e37513bcf98f8d87e98fbaa0800ae8e97f92902b7d0d7710b409->leave($__internal_613f818802a0e37513bcf98f8d87e98fbaa0800ae8e97f92902b7d0d7710b409_prof);

        
        $__internal_55126fae0cce69c447674457221c8a5b3ccf0fb14985bdd72446f784d4571005->leave($__internal_55126fae0cce69c447674457221c8a5b3ccf0fb14985bdd72446f784d4571005_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8e7d840b54d996e4348e50251aa81f7171d2763e47937fe62b2e5e9ea8b3c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e7d840b54d996e4348e50251aa81f7171d2763e47937fe62b2e5e9ea8b3c53->enter($__internal_b8e7d840b54d996e4348e50251aa81f7171d2763e47937fe62b2e5e9ea8b3c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_25df9109f4e2250d47d649d55fd619e5d09681c8f96f4252027743096ff97827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df9109f4e2250d47d649d55fd619e5d09681c8f96f4252027743096ff97827->enter($__internal_25df9109f4e2250d47d649d55fd619e5d09681c8f96f4252027743096ff97827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_25df9109f4e2250d47d649d55fd619e5d09681c8f96f4252027743096ff97827->leave($__internal_25df9109f4e2250d47d649d55fd619e5d09681c8f96f4252027743096ff97827_prof);

        
        $__internal_b8e7d840b54d996e4348e50251aa81f7171d2763e47937fe62b2e5e9ea8b3c53->leave($__internal_b8e7d840b54d996e4348e50251aa81f7171d2763e47937fe62b2e5e9ea8b3c53_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0bd942e5eb4855debb265772b062b422a53d992cb30401a2dd8c13937c0977e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bd942e5eb4855debb265772b062b422a53d992cb30401a2dd8c13937c0977e->enter($__internal_e0bd942e5eb4855debb265772b062b422a53d992cb30401a2dd8c13937c0977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3552276237e8606e3a383f10fa429c5674ae7f9642bde1c7c7657c7a72864fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3552276237e8606e3a383f10fa429c5674ae7f9642bde1c7c7657c7a72864fa->enter($__internal_d3552276237e8606e3a383f10fa429c5674ae7f9642bde1c7c7657c7a72864fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3552276237e8606e3a383f10fa429c5674ae7f9642bde1c7c7657c7a72864fa->leave($__internal_d3552276237e8606e3a383f10fa429c5674ae7f9642bde1c7c7657c7a72864fa_prof);

        
        $__internal_e0bd942e5eb4855debb265772b062b422a53d992cb30401a2dd8c13937c0977e->leave($__internal_e0bd942e5eb4855debb265772b062b422a53d992cb30401a2dd8c13937c0977e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e31bd0986fc27228c214f845ed883aded1a4f3c7b4fd441195175a57f3960908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31bd0986fc27228c214f845ed883aded1a4f3c7b4fd441195175a57f3960908->enter($__internal_e31bd0986fc27228c214f845ed883aded1a4f3c7b4fd441195175a57f3960908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_485130a027b41dbdcbd493090cc36124ac9f2c404e25a1c61f62f01f4e44b182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485130a027b41dbdcbd493090cc36124ac9f2c404e25a1c61f62f01f4e44b182->enter($__internal_485130a027b41dbdcbd493090cc36124ac9f2c404e25a1c61f62f01f4e44b182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_485130a027b41dbdcbd493090cc36124ac9f2c404e25a1c61f62f01f4e44b182->leave($__internal_485130a027b41dbdcbd493090cc36124ac9f2c404e25a1c61f62f01f4e44b182_prof);

        
        $__internal_e31bd0986fc27228c214f845ed883aded1a4f3c7b4fd441195175a57f3960908->leave($__internal_e31bd0986fc27228c214f845ed883aded1a4f3c7b4fd441195175a57f3960908_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\app\\Resources\\views\\base.html.twig");
    }
}
