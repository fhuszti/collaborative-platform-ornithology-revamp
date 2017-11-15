<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_75266e84e04c4107e2ad9b28151d047581d4f3470dd5bdd44100077ffe13f613 extends Twig_Template
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
        $__internal_cc43c533501636dd2dc4954118d7f73523cdf1a44f1f7ca317f24d5c7bcf61c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc43c533501636dd2dc4954118d7f73523cdf1a44f1f7ca317f24d5c7bcf61c1->enter($__internal_cc43c533501636dd2dc4954118d7f73523cdf1a44f1f7ca317f24d5c7bcf61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3827b49480e22c1aae5093bec1fc51cd9f43b3f8767e1fc18eaf8360c9bc4e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3827b49480e22c1aae5093bec1fc51cd9f43b3f8767e1fc18eaf8360c9bc4e52->enter($__internal_3827b49480e22c1aae5093bec1fc51cd9f43b3f8767e1fc18eaf8360c9bc4e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cc43c533501636dd2dc4954118d7f73523cdf1a44f1f7ca317f24d5c7bcf61c1->leave($__internal_cc43c533501636dd2dc4954118d7f73523cdf1a44f1f7ca317f24d5c7bcf61c1_prof);

        
        $__internal_3827b49480e22c1aae5093bec1fc51cd9f43b3f8767e1fc18eaf8360c9bc4e52->leave($__internal_3827b49480e22c1aae5093bec1fc51cd9f43b3f8767e1fc18eaf8360c9bc4e52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b76d1b7062a044d9efc6598c36142edae32bc7776fcdfdb30396052392a5ccbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76d1b7062a044d9efc6598c36142edae32bc7776fcdfdb30396052392a5ccbd->enter($__internal_b76d1b7062a044d9efc6598c36142edae32bc7776fcdfdb30396052392a5ccbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb1ba6e5d9f29bd39691c53e4202bd86432606aff3873c398eeececd162cea29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1ba6e5d9f29bd39691c53e4202bd86432606aff3873c398eeececd162cea29->enter($__internal_fb1ba6e5d9f29bd39691c53e4202bd86432606aff3873c398eeececd162cea29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fb1ba6e5d9f29bd39691c53e4202bd86432606aff3873c398eeececd162cea29->leave($__internal_fb1ba6e5d9f29bd39691c53e4202bd86432606aff3873c398eeececd162cea29_prof);

        
        $__internal_b76d1b7062a044d9efc6598c36142edae32bc7776fcdfdb30396052392a5ccbd->leave($__internal_b76d1b7062a044d9efc6598c36142edae32bc7776fcdfdb30396052392a5ccbd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e60ce7f2e91e7f11ebc5d1d3daacf969887cac1fa2c1913939c4814f71f5c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e60ce7f2e91e7f11ebc5d1d3daacf969887cac1fa2c1913939c4814f71f5c67->enter($__internal_0e60ce7f2e91e7f11ebc5d1d3daacf969887cac1fa2c1913939c4814f71f5c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0b65a2704cefeee556fd04fbf10fdee89fa37252504d73e1798449b65687a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b65a2704cefeee556fd04fbf10fdee89fa37252504d73e1798449b65687a99->enter($__internal_e0b65a2704cefeee556fd04fbf10fdee89fa37252504d73e1798449b65687a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e0b65a2704cefeee556fd04fbf10fdee89fa37252504d73e1798449b65687a99->leave($__internal_e0b65a2704cefeee556fd04fbf10fdee89fa37252504d73e1798449b65687a99_prof);

        
        $__internal_0e60ce7f2e91e7f11ebc5d1d3daacf969887cac1fa2c1913939c4814f71f5c67->leave($__internal_0e60ce7f2e91e7f11ebc5d1d3daacf969887cac1fa2c1913939c4814f71f5c67_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_06633a32f3c13c441286e67249db83bcb3c1026db5cd5c31862799bedfe678f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06633a32f3c13c441286e67249db83bcb3c1026db5cd5c31862799bedfe678f6->enter($__internal_06633a32f3c13c441286e67249db83bcb3c1026db5cd5c31862799bedfe678f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f00c83ce730dc52afc2e8a19b5661414555e5e3f6a63e226ba8fcacb419e4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f00c83ce730dc52afc2e8a19b5661414555e5e3f6a63e226ba8fcacb419e4a0->enter($__internal_1f00c83ce730dc52afc2e8a19b5661414555e5e3f6a63e226ba8fcacb419e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f00c83ce730dc52afc2e8a19b5661414555e5e3f6a63e226ba8fcacb419e4a0->leave($__internal_1f00c83ce730dc52afc2e8a19b5661414555e5e3f6a63e226ba8fcacb419e4a0_prof);

        
        $__internal_06633a32f3c13c441286e67249db83bcb3c1026db5cd5c31862799bedfe678f6->leave($__internal_06633a32f3c13c441286e67249db83bcb3c1026db5cd5c31862799bedfe678f6_prof);

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
", "@Twig/layout.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
