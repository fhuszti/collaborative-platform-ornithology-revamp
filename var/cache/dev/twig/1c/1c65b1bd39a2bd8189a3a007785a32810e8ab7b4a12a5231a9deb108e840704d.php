<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a630a128a6891036f3668aa0ce146dde2a261843a241b8aff96ccea3e3d63fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de4a71f3ebc7ac3ec96416d12b8d4fd7089f6ed76b4ee600d82b5416c1724e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de4a71f3ebc7ac3ec96416d12b8d4fd7089f6ed76b4ee600d82b5416c1724e0->enter($__internal_4de4a71f3ebc7ac3ec96416d12b8d4fd7089f6ed76b4ee600d82b5416c1724e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dc0510dc33b53d1b04020d6333369accb3b4be54538109a0c603d4b7d316ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0510dc33b53d1b04020d6333369accb3b4be54538109a0c603d4b7d316ceac->enter($__internal_dc0510dc33b53d1b04020d6333369accb3b4be54538109a0c603d4b7d316ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de4a71f3ebc7ac3ec96416d12b8d4fd7089f6ed76b4ee600d82b5416c1724e0->leave($__internal_4de4a71f3ebc7ac3ec96416d12b8d4fd7089f6ed76b4ee600d82b5416c1724e0_prof);

        
        $__internal_dc0510dc33b53d1b04020d6333369accb3b4be54538109a0c603d4b7d316ceac->leave($__internal_dc0510dc33b53d1b04020d6333369accb3b4be54538109a0c603d4b7d316ceac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61727a2abdd8585d54a1d3bef408d32645e6ada92ac44cb3643729d53eb25261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61727a2abdd8585d54a1d3bef408d32645e6ada92ac44cb3643729d53eb25261->enter($__internal_61727a2abdd8585d54a1d3bef408d32645e6ada92ac44cb3643729d53eb25261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_223b59292434de3b0f68b42f3f277fbc7552be9a602be623e8aba04706c5432c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223b59292434de3b0f68b42f3f277fbc7552be9a602be623e8aba04706c5432c->enter($__internal_223b59292434de3b0f68b42f3f277fbc7552be9a602be623e8aba04706c5432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_223b59292434de3b0f68b42f3f277fbc7552be9a602be623e8aba04706c5432c->leave($__internal_223b59292434de3b0f68b42f3f277fbc7552be9a602be623e8aba04706c5432c_prof);

        
        $__internal_61727a2abdd8585d54a1d3bef408d32645e6ada92ac44cb3643729d53eb25261->leave($__internal_61727a2abdd8585d54a1d3bef408d32645e6ada92ac44cb3643729d53eb25261_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd88767f5b1ea2836e3ab8daca3843a1b12c06cdae2f3107685ef7cc05bbf5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd88767f5b1ea2836e3ab8daca3843a1b12c06cdae2f3107685ef7cc05bbf5f2->enter($__internal_fd88767f5b1ea2836e3ab8daca3843a1b12c06cdae2f3107685ef7cc05bbf5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26a02a17387ca3db34c48e3cde8410d7bc0939d4c366a8ae17b2e29498c30351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a02a17387ca3db34c48e3cde8410d7bc0939d4c366a8ae17b2e29498c30351->enter($__internal_26a02a17387ca3db34c48e3cde8410d7bc0939d4c366a8ae17b2e29498c30351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26a02a17387ca3db34c48e3cde8410d7bc0939d4c366a8ae17b2e29498c30351->leave($__internal_26a02a17387ca3db34c48e3cde8410d7bc0939d4c366a8ae17b2e29498c30351_prof);

        
        $__internal_fd88767f5b1ea2836e3ab8daca3843a1b12c06cdae2f3107685ef7cc05bbf5f2->leave($__internal_fd88767f5b1ea2836e3ab8daca3843a1b12c06cdae2f3107685ef7cc05bbf5f2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca84de584045d0d428e4f5bb9b1a8bc169bc49231536ec9a71f00d9ec373347b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca84de584045d0d428e4f5bb9b1a8bc169bc49231536ec9a71f00d9ec373347b->enter($__internal_ca84de584045d0d428e4f5bb9b1a8bc169bc49231536ec9a71f00d9ec373347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c353374516195c095b9f1c42edb5631a58f99ab36e1f0f7b1dcdc5688436bbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c353374516195c095b9f1c42edb5631a58f99ab36e1f0f7b1dcdc5688436bbcc->enter($__internal_c353374516195c095b9f1c42edb5631a58f99ab36e1f0f7b1dcdc5688436bbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c353374516195c095b9f1c42edb5631a58f99ab36e1f0f7b1dcdc5688436bbcc->leave($__internal_c353374516195c095b9f1c42edb5631a58f99ab36e1f0f7b1dcdc5688436bbcc_prof);

        
        $__internal_ca84de584045d0d428e4f5bb9b1a8bc169bc49231536ec9a71f00d9ec373347b->leave($__internal_ca84de584045d0d428e4f5bb9b1a8bc169bc49231536ec9a71f00d9ec373347b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
