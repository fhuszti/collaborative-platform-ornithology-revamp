<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8c4e44140d4dbdad6c4691774da5bd352f13b4802b28155d2f9abae3cb67a6f3 extends Twig_Template
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
        $__internal_a8be25c41fbe464f1bae16c113247972e2c05686ec43efc5f76738ce0e4a32d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8be25c41fbe464f1bae16c113247972e2c05686ec43efc5f76738ce0e4a32d3->enter($__internal_a8be25c41fbe464f1bae16c113247972e2c05686ec43efc5f76738ce0e4a32d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_64f9b7709c21f11e975490f6ec4bcc85795182eb7b15e10d3f8262de4fb6b4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f9b7709c21f11e975490f6ec4bcc85795182eb7b15e10d3f8262de4fb6b4ee->enter($__internal_64f9b7709c21f11e975490f6ec4bcc85795182eb7b15e10d3f8262de4fb6b4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8be25c41fbe464f1bae16c113247972e2c05686ec43efc5f76738ce0e4a32d3->leave($__internal_a8be25c41fbe464f1bae16c113247972e2c05686ec43efc5f76738ce0e4a32d3_prof);

        
        $__internal_64f9b7709c21f11e975490f6ec4bcc85795182eb7b15e10d3f8262de4fb6b4ee->leave($__internal_64f9b7709c21f11e975490f6ec4bcc85795182eb7b15e10d3f8262de4fb6b4ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41df2761ecb5d887dba9f81df6a156229613a0358a000ba934e40aa1d81e5b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41df2761ecb5d887dba9f81df6a156229613a0358a000ba934e40aa1d81e5b44->enter($__internal_41df2761ecb5d887dba9f81df6a156229613a0358a000ba934e40aa1d81e5b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e59c9061ef52a6cd008d4bb71210bd3d550e6ff267a227b2d520b2498dc74ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59c9061ef52a6cd008d4bb71210bd3d550e6ff267a227b2d520b2498dc74ad1->enter($__internal_e59c9061ef52a6cd008d4bb71210bd3d550e6ff267a227b2d520b2498dc74ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e59c9061ef52a6cd008d4bb71210bd3d550e6ff267a227b2d520b2498dc74ad1->leave($__internal_e59c9061ef52a6cd008d4bb71210bd3d550e6ff267a227b2d520b2498dc74ad1_prof);

        
        $__internal_41df2761ecb5d887dba9f81df6a156229613a0358a000ba934e40aa1d81e5b44->leave($__internal_41df2761ecb5d887dba9f81df6a156229613a0358a000ba934e40aa1d81e5b44_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_431fb20e0cf5a6d4ff541da9d8f855cb37430d6be28a73d3c52ff6a759fc3d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431fb20e0cf5a6d4ff541da9d8f855cb37430d6be28a73d3c52ff6a759fc3d6f->enter($__internal_431fb20e0cf5a6d4ff541da9d8f855cb37430d6be28a73d3c52ff6a759fc3d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e6573601e1502e21c12ec730a3806706f8a9f0c0745317219bbd282f8c169b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6573601e1502e21c12ec730a3806706f8a9f0c0745317219bbd282f8c169b7->enter($__internal_5e6573601e1502e21c12ec730a3806706f8a9f0c0745317219bbd282f8c169b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e6573601e1502e21c12ec730a3806706f8a9f0c0745317219bbd282f8c169b7->leave($__internal_5e6573601e1502e21c12ec730a3806706f8a9f0c0745317219bbd282f8c169b7_prof);

        
        $__internal_431fb20e0cf5a6d4ff541da9d8f855cb37430d6be28a73d3c52ff6a759fc3d6f->leave($__internal_431fb20e0cf5a6d4ff541da9d8f855cb37430d6be28a73d3c52ff6a759fc3d6f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_095e73d3d7f5f3475d2108a2b3ae3e2e71848cb72ffe8d30043914c9d94cb5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095e73d3d7f5f3475d2108a2b3ae3e2e71848cb72ffe8d30043914c9d94cb5aa->enter($__internal_095e73d3d7f5f3475d2108a2b3ae3e2e71848cb72ffe8d30043914c9d94cb5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecbbc336c4d4f601120425edbf080b1f59fa2dc3a1a4444c4ce2b761de50e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbbc336c4d4f601120425edbf080b1f59fa2dc3a1a4444c4ce2b761de50e7cf->enter($__internal_ecbbc336c4d4f601120425edbf080b1f59fa2dc3a1a4444c4ce2b761de50e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ecbbc336c4d4f601120425edbf080b1f59fa2dc3a1a4444c4ce2b761de50e7cf->leave($__internal_ecbbc336c4d4f601120425edbf080b1f59fa2dc3a1a4444c4ce2b761de50e7cf_prof);

        
        $__internal_095e73d3d7f5f3475d2108a2b3ae3e2e71848cb72ffe8d30043914c9d94cb5aa->leave($__internal_095e73d3d7f5f3475d2108a2b3ae3e2e71848cb72ffe8d30043914c9d94cb5aa_prof);

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
