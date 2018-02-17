<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_83469e314eb22dce0e696a4bb89bf81700f92a28e43d91e4162720b7023e884c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb6b1105402b5e5284e3cc1d5add224cc52ce2c051f55ab0746f58497b447700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6b1105402b5e5284e3cc1d5add224cc52ce2c051f55ab0746f58497b447700->enter($__internal_eb6b1105402b5e5284e3cc1d5add224cc52ce2c051f55ab0746f58497b447700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8c8f2d69a4e643f859814088668c75dcc683c42209a01fb40e6dad9168462171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8f2d69a4e643f859814088668c75dcc683c42209a01fb40e6dad9168462171->enter($__internal_8c8f2d69a4e643f859814088668c75dcc683c42209a01fb40e6dad9168462171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6b1105402b5e5284e3cc1d5add224cc52ce2c051f55ab0746f58497b447700->leave($__internal_eb6b1105402b5e5284e3cc1d5add224cc52ce2c051f55ab0746f58497b447700_prof);

        
        $__internal_8c8f2d69a4e643f859814088668c75dcc683c42209a01fb40e6dad9168462171->leave($__internal_8c8f2d69a4e643f859814088668c75dcc683c42209a01fb40e6dad9168462171_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b91635948fbdc159bd17b40b413538f47a1f22a85d70cb0243e49d2349b4cd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91635948fbdc159bd17b40b413538f47a1f22a85d70cb0243e49d2349b4cd9b->enter($__internal_b91635948fbdc159bd17b40b413538f47a1f22a85d70cb0243e49d2349b4cd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c57d2315fb598632dc0451a71ce901dc71335611923c7e51ce1c9015d94c6dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57d2315fb598632dc0451a71ce901dc71335611923c7e51ce1c9015d94c6dce->enter($__internal_c57d2315fb598632dc0451a71ce901dc71335611923c7e51ce1c9015d94c6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c57d2315fb598632dc0451a71ce901dc71335611923c7e51ce1c9015d94c6dce->leave($__internal_c57d2315fb598632dc0451a71ce901dc71335611923c7e51ce1c9015d94c6dce_prof);

        
        $__internal_b91635948fbdc159bd17b40b413538f47a1f22a85d70cb0243e49d2349b4cd9b->leave($__internal_b91635948fbdc159bd17b40b413538f47a1f22a85d70cb0243e49d2349b4cd9b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
