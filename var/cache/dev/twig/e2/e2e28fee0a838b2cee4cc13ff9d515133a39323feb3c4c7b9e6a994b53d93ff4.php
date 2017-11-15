<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be8bb034b207208bd16a3c25bf18d454399ee314b0655fe9c11088450d00c7ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8095432f3d8b75bd2fe52161fec276c08221192a70571f5cb667610426f9fa7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8095432f3d8b75bd2fe52161fec276c08221192a70571f5cb667610426f9fa7d->enter($__internal_8095432f3d8b75bd2fe52161fec276c08221192a70571f5cb667610426f9fa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ea4dc4b044a35670e245f5cfc33f375f88b2e752d46a8dd4cc95ad73bf67dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea4dc4b044a35670e245f5cfc33f375f88b2e752d46a8dd4cc95ad73bf67dd9->enter($__internal_8ea4dc4b044a35670e245f5cfc33f375f88b2e752d46a8dd4cc95ad73bf67dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8095432f3d8b75bd2fe52161fec276c08221192a70571f5cb667610426f9fa7d->leave($__internal_8095432f3d8b75bd2fe52161fec276c08221192a70571f5cb667610426f9fa7d_prof);

        
        $__internal_8ea4dc4b044a35670e245f5cfc33f375f88b2e752d46a8dd4cc95ad73bf67dd9->leave($__internal_8ea4dc4b044a35670e245f5cfc33f375f88b2e752d46a8dd4cc95ad73bf67dd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b70502d0a2948fa20a242d54034fb3b48c8fbd1121548b8c34a350fe144286e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70502d0a2948fa20a242d54034fb3b48c8fbd1121548b8c34a350fe144286e8->enter($__internal_b70502d0a2948fa20a242d54034fb3b48c8fbd1121548b8c34a350fe144286e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0dc9adb86ae3fe83b19c2b13f0e827da130d50de96b706cff41da10677fb72cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc9adb86ae3fe83b19c2b13f0e827da130d50de96b706cff41da10677fb72cf->enter($__internal_0dc9adb86ae3fe83b19c2b13f0e827da130d50de96b706cff41da10677fb72cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0dc9adb86ae3fe83b19c2b13f0e827da130d50de96b706cff41da10677fb72cf->leave($__internal_0dc9adb86ae3fe83b19c2b13f0e827da130d50de96b706cff41da10677fb72cf_prof);

        
        $__internal_b70502d0a2948fa20a242d54034fb3b48c8fbd1121548b8c34a350fe144286e8->leave($__internal_b70502d0a2948fa20a242d54034fb3b48c8fbd1121548b8c34a350fe144286e8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f95e842280204edbc77024fa2660968d2582d70ce8b431cf81d35b474f1b90ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95e842280204edbc77024fa2660968d2582d70ce8b431cf81d35b474f1b90ac->enter($__internal_f95e842280204edbc77024fa2660968d2582d70ce8b431cf81d35b474f1b90ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_052f4aab60a33c60074bb17371dd6487a4af68f2621392756be8495d2b2aab25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052f4aab60a33c60074bb17371dd6487a4af68f2621392756be8495d2b2aab25->enter($__internal_052f4aab60a33c60074bb17371dd6487a4af68f2621392756be8495d2b2aab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_052f4aab60a33c60074bb17371dd6487a4af68f2621392756be8495d2b2aab25->leave($__internal_052f4aab60a33c60074bb17371dd6487a4af68f2621392756be8495d2b2aab25_prof);

        
        $__internal_f95e842280204edbc77024fa2660968d2582d70ce8b431cf81d35b474f1b90ac->leave($__internal_f95e842280204edbc77024fa2660968d2582d70ce8b431cf81d35b474f1b90ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9e008f13b3a890ea7388c42e215d21dad178c45f324a98d74414ca8479beea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e008f13b3a890ea7388c42e215d21dad178c45f324a98d74414ca8479beea4->enter($__internal_b9e008f13b3a890ea7388c42e215d21dad178c45f324a98d74414ca8479beea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_009d45e0433768a53b6c74e62f310bd2015ab49b322bb2e581d597b77351c2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009d45e0433768a53b6c74e62f310bd2015ab49b322bb2e581d597b77351c2e7->enter($__internal_009d45e0433768a53b6c74e62f310bd2015ab49b322bb2e581d597b77351c2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_009d45e0433768a53b6c74e62f310bd2015ab49b322bb2e581d597b77351c2e7->leave($__internal_009d45e0433768a53b6c74e62f310bd2015ab49b322bb2e581d597b77351c2e7_prof);

        
        $__internal_b9e008f13b3a890ea7388c42e215d21dad178c45f324a98d74414ca8479beea4->leave($__internal_b9e008f13b3a890ea7388c42e215d21dad178c45f324a98d74414ca8479beea4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
