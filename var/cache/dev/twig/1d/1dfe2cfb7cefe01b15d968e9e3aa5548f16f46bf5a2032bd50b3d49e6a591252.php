<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b121a95cff9753905148ec33a6863f30f11e3b018a766539049058e288c83d55 extends Twig_Template
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
        $__internal_bae7095e6b27a56c58c51ec39a81a9bb398f7b4065fb770588d3c92349da19fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae7095e6b27a56c58c51ec39a81a9bb398f7b4065fb770588d3c92349da19fe->enter($__internal_bae7095e6b27a56c58c51ec39a81a9bb398f7b4065fb770588d3c92349da19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b8079ff146399a65afaa43f1e7a45160f2e152cdaf948b3b58a572172f96678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8079ff146399a65afaa43f1e7a45160f2e152cdaf948b3b58a572172f96678b->enter($__internal_b8079ff146399a65afaa43f1e7a45160f2e152cdaf948b3b58a572172f96678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bae7095e6b27a56c58c51ec39a81a9bb398f7b4065fb770588d3c92349da19fe->leave($__internal_bae7095e6b27a56c58c51ec39a81a9bb398f7b4065fb770588d3c92349da19fe_prof);

        
        $__internal_b8079ff146399a65afaa43f1e7a45160f2e152cdaf948b3b58a572172f96678b->leave($__internal_b8079ff146399a65afaa43f1e7a45160f2e152cdaf948b3b58a572172f96678b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb0572557f4204d1b1147caad13cdd5f3fd354f81003e164961b93e00be6b9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0572557f4204d1b1147caad13cdd5f3fd354f81003e164961b93e00be6b9a0->enter($__internal_bb0572557f4204d1b1147caad13cdd5f3fd354f81003e164961b93e00be6b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8eb2fb4737fb36f411db44d538d1664e6ab97cd7553128c2dbbb76bf4354975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eb2fb4737fb36f411db44d538d1664e6ab97cd7553128c2dbbb76bf4354975->enter($__internal_d8eb2fb4737fb36f411db44d538d1664e6ab97cd7553128c2dbbb76bf4354975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d8eb2fb4737fb36f411db44d538d1664e6ab97cd7553128c2dbbb76bf4354975->leave($__internal_d8eb2fb4737fb36f411db44d538d1664e6ab97cd7553128c2dbbb76bf4354975_prof);

        
        $__internal_bb0572557f4204d1b1147caad13cdd5f3fd354f81003e164961b93e00be6b9a0->leave($__internal_bb0572557f4204d1b1147caad13cdd5f3fd354f81003e164961b93e00be6b9a0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_22bb8b4f537708c1cde5149a311bcb7a6ebb2902f2d0f7f617265e3e1ca96f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bb8b4f537708c1cde5149a311bcb7a6ebb2902f2d0f7f617265e3e1ca96f97->enter($__internal_22bb8b4f537708c1cde5149a311bcb7a6ebb2902f2d0f7f617265e3e1ca96f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f2b4c858705360d2d5b47a08800cfeeba91595eb81459f472db089086535a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2b4c858705360d2d5b47a08800cfeeba91595eb81459f472db089086535a3e->enter($__internal_3f2b4c858705360d2d5b47a08800cfeeba91595eb81459f472db089086535a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3f2b4c858705360d2d5b47a08800cfeeba91595eb81459f472db089086535a3e->leave($__internal_3f2b4c858705360d2d5b47a08800cfeeba91595eb81459f472db089086535a3e_prof);

        
        $__internal_22bb8b4f537708c1cde5149a311bcb7a6ebb2902f2d0f7f617265e3e1ca96f97->leave($__internal_22bb8b4f537708c1cde5149a311bcb7a6ebb2902f2d0f7f617265e3e1ca96f97_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bf06e1e78126b5eed15cda35537b65d2c647761dd269595412432af8823215b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf06e1e78126b5eed15cda35537b65d2c647761dd269595412432af8823215b->enter($__internal_3bf06e1e78126b5eed15cda35537b65d2c647761dd269595412432af8823215b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d839e2844051395cb693903244378c6300e4ee13f15f950f43fbb319dc81aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d839e2844051395cb693903244378c6300e4ee13f15f950f43fbb319dc81aff->enter($__internal_6d839e2844051395cb693903244378c6300e4ee13f15f950f43fbb319dc81aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d839e2844051395cb693903244378c6300e4ee13f15f950f43fbb319dc81aff->leave($__internal_6d839e2844051395cb693903244378c6300e4ee13f15f950f43fbb319dc81aff_prof);

        
        $__internal_3bf06e1e78126b5eed15cda35537b65d2c647761dd269595412432af8823215b->leave($__internal_3bf06e1e78126b5eed15cda35537b65d2c647761dd269595412432af8823215b_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\BestTrip-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
