<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89862abecaa514bab07e5ba4ba5968abdc2c5545fdf7e6121c5623be21b2015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89862abecaa514bab07e5ba4ba5968abdc2c5545fdf7e6121c5623be21b2015->enter($__internal_b89862abecaa514bab07e5ba4ba5968abdc2c5545fdf7e6121c5623be21b2015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4dfcfd02ec76bc60d6fdba3a4419cf537029f1993bccdce268e36be30d50e7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfcfd02ec76bc60d6fdba3a4419cf537029f1993bccdce268e36be30d50e7ef->enter($__internal_4dfcfd02ec76bc60d6fdba3a4419cf537029f1993bccdce268e36be30d50e7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b89862abecaa514bab07e5ba4ba5968abdc2c5545fdf7e6121c5623be21b2015->leave($__internal_b89862abecaa514bab07e5ba4ba5968abdc2c5545fdf7e6121c5623be21b2015_prof);

        
        $__internal_4dfcfd02ec76bc60d6fdba3a4419cf537029f1993bccdce268e36be30d50e7ef->leave($__internal_4dfcfd02ec76bc60d6fdba3a4419cf537029f1993bccdce268e36be30d50e7ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b2c17fc9b83e036fc425d3000a6fd72479b6ecc24be9a37001cf04294e8bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b2c17fc9b83e036fc425d3000a6fd72479b6ecc24be9a37001cf04294e8bb9->enter($__internal_c5b2c17fc9b83e036fc425d3000a6fd72479b6ecc24be9a37001cf04294e8bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_336168ba1669a0d2b1a640807fd1284b20db959cc7c72c40f2dbdb9cd0803cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336168ba1669a0d2b1a640807fd1284b20db959cc7c72c40f2dbdb9cd0803cad->enter($__internal_336168ba1669a0d2b1a640807fd1284b20db959cc7c72c40f2dbdb9cd0803cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_336168ba1669a0d2b1a640807fd1284b20db959cc7c72c40f2dbdb9cd0803cad->leave($__internal_336168ba1669a0d2b1a640807fd1284b20db959cc7c72c40f2dbdb9cd0803cad_prof);

        
        $__internal_c5b2c17fc9b83e036fc425d3000a6fd72479b6ecc24be9a37001cf04294e8bb9->leave($__internal_c5b2c17fc9b83e036fc425d3000a6fd72479b6ecc24be9a37001cf04294e8bb9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf95e00af0a4ccbc04cb51185bf05d46fbaa9594af7f8ce675b7580fea3f5fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf95e00af0a4ccbc04cb51185bf05d46fbaa9594af7f8ce675b7580fea3f5fed->enter($__internal_bf95e00af0a4ccbc04cb51185bf05d46fbaa9594af7f8ce675b7580fea3f5fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59cd4f3b0a3ffbb5e8754765875c13fa564b2c45d457118777a2ce2ae9b25300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cd4f3b0a3ffbb5e8754765875c13fa564b2c45d457118777a2ce2ae9b25300->enter($__internal_59cd4f3b0a3ffbb5e8754765875c13fa564b2c45d457118777a2ce2ae9b25300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_59cd4f3b0a3ffbb5e8754765875c13fa564b2c45d457118777a2ce2ae9b25300->leave($__internal_59cd4f3b0a3ffbb5e8754765875c13fa564b2c45d457118777a2ce2ae9b25300_prof);

        
        $__internal_bf95e00af0a4ccbc04cb51185bf05d46fbaa9594af7f8ce675b7580fea3f5fed->leave($__internal_bf95e00af0a4ccbc04cb51185bf05d46fbaa9594af7f8ce675b7580fea3f5fed_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3ebf51238860c3c62c136a0e33ae43b39d2e6a84464b8acb86d1f75e412ca4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ebf51238860c3c62c136a0e33ae43b39d2e6a84464b8acb86d1f75e412ca4f->enter($__internal_c3ebf51238860c3c62c136a0e33ae43b39d2e6a84464b8acb86d1f75e412ca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4881a30b384ddfd35b64d27432178ada786378da1ac424a59a819b18f4a5e5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4881a30b384ddfd35b64d27432178ada786378da1ac424a59a819b18f4a5e5d2->enter($__internal_4881a30b384ddfd35b64d27432178ada786378da1ac424a59a819b18f4a5e5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4881a30b384ddfd35b64d27432178ada786378da1ac424a59a819b18f4a5e5d2->leave($__internal_4881a30b384ddfd35b64d27432178ada786378da1ac424a59a819b18f4a5e5d2_prof);

        
        $__internal_c3ebf51238860c3c62c136a0e33ae43b39d2e6a84464b8acb86d1f75e412ca4f->leave($__internal_c3ebf51238860c3c62c136a0e33ae43b39d2e6a84464b8acb86d1f75e412ca4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\BestTrip\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
