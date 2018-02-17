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
        $__internal_c16f7eadb68407bb1d1dd73bcc90100d211f70f475f319d773313e4163fa4a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16f7eadb68407bb1d1dd73bcc90100d211f70f475f319d773313e4163fa4a07->enter($__internal_c16f7eadb68407bb1d1dd73bcc90100d211f70f475f319d773313e4163fa4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_afe0058721c9a9736e87a37c5dc656a147f2a6ac9fa694e9fcb7a7edbd8014e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe0058721c9a9736e87a37c5dc656a147f2a6ac9fa694e9fcb7a7edbd8014e5->enter($__internal_afe0058721c9a9736e87a37c5dc656a147f2a6ac9fa694e9fcb7a7edbd8014e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c16f7eadb68407bb1d1dd73bcc90100d211f70f475f319d773313e4163fa4a07->leave($__internal_c16f7eadb68407bb1d1dd73bcc90100d211f70f475f319d773313e4163fa4a07_prof);

        
        $__internal_afe0058721c9a9736e87a37c5dc656a147f2a6ac9fa694e9fcb7a7edbd8014e5->leave($__internal_afe0058721c9a9736e87a37c5dc656a147f2a6ac9fa694e9fcb7a7edbd8014e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbcfe40b79b50ad03ba85eb4e54a0ec7fa588f71b78917a365374bae498c605b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcfe40b79b50ad03ba85eb4e54a0ec7fa588f71b78917a365374bae498c605b->enter($__internal_fbcfe40b79b50ad03ba85eb4e54a0ec7fa588f71b78917a365374bae498c605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f45a73ca7ea19f595a94daf26278bd2f6a6332dc983afe4ccef49e651f888808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45a73ca7ea19f595a94daf26278bd2f6a6332dc983afe4ccef49e651f888808->enter($__internal_f45a73ca7ea19f595a94daf26278bd2f6a6332dc983afe4ccef49e651f888808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f45a73ca7ea19f595a94daf26278bd2f6a6332dc983afe4ccef49e651f888808->leave($__internal_f45a73ca7ea19f595a94daf26278bd2f6a6332dc983afe4ccef49e651f888808_prof);

        
        $__internal_fbcfe40b79b50ad03ba85eb4e54a0ec7fa588f71b78917a365374bae498c605b->leave($__internal_fbcfe40b79b50ad03ba85eb4e54a0ec7fa588f71b78917a365374bae498c605b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0da9107cdbef656537c10ffa623b02ec3f6273aac6d49ae231059b5337d101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0da9107cdbef656537c10ffa623b02ec3f6273aac6d49ae231059b5337d101f->enter($__internal_b0da9107cdbef656537c10ffa623b02ec3f6273aac6d49ae231059b5337d101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd076b5d699954e04860cf48ad60ff592cac3a5d8fe81d319496319e414fc5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd076b5d699954e04860cf48ad60ff592cac3a5d8fe81d319496319e414fc5c5->enter($__internal_fd076b5d699954e04860cf48ad60ff592cac3a5d8fe81d319496319e414fc5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd076b5d699954e04860cf48ad60ff592cac3a5d8fe81d319496319e414fc5c5->leave($__internal_fd076b5d699954e04860cf48ad60ff592cac3a5d8fe81d319496319e414fc5c5_prof);

        
        $__internal_b0da9107cdbef656537c10ffa623b02ec3f6273aac6d49ae231059b5337d101f->leave($__internal_b0da9107cdbef656537c10ffa623b02ec3f6273aac6d49ae231059b5337d101f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f1711318aeafce4ae2f945c59d21020a024160a114f78247e931a7a0296828f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1711318aeafce4ae2f945c59d21020a024160a114f78247e931a7a0296828f->enter($__internal_9f1711318aeafce4ae2f945c59d21020a024160a114f78247e931a7a0296828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab9e442eced3fe1d61f505b27c724b52bcb5d6ddbecc52af28a256ba862a68b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9e442eced3fe1d61f505b27c724b52bcb5d6ddbecc52af28a256ba862a68b8->enter($__internal_ab9e442eced3fe1d61f505b27c724b52bcb5d6ddbecc52af28a256ba862a68b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab9e442eced3fe1d61f505b27c724b52bcb5d6ddbecc52af28a256ba862a68b8->leave($__internal_ab9e442eced3fe1d61f505b27c724b52bcb5d6ddbecc52af28a256ba862a68b8_prof);

        
        $__internal_9f1711318aeafce4ae2f945c59d21020a024160a114f78247e931a7a0296828f->leave($__internal_9f1711318aeafce4ae2f945c59d21020a024160a114f78247e931a7a0296828f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_480fb4793db2f40d80b732bb606873e82d2615c69ab482519f1227b59b8a1b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480fb4793db2f40d80b732bb606873e82d2615c69ab482519f1227b59b8a1b32->enter($__internal_480fb4793db2f40d80b732bb606873e82d2615c69ab482519f1227b59b8a1b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_01e70f967009e886e17206630b6cfca0aeb02b4220d6d39e330e0a68d5a4c44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e70f967009e886e17206630b6cfca0aeb02b4220d6d39e330e0a68d5a4c44f->enter($__internal_01e70f967009e886e17206630b6cfca0aeb02b4220d6d39e330e0a68d5a4c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_01e70f967009e886e17206630b6cfca0aeb02b4220d6d39e330e0a68d5a4c44f->leave($__internal_01e70f967009e886e17206630b6cfca0aeb02b4220d6d39e330e0a68d5a4c44f_prof);

        
        $__internal_480fb4793db2f40d80b732bb606873e82d2615c69ab482519f1227b59b8a1b32->leave($__internal_480fb4793db2f40d80b732bb606873e82d2615c69ab482519f1227b59b8a1b32_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\BestTripProject\\app\\Resources\\views\\base.html.twig");
    }
}
