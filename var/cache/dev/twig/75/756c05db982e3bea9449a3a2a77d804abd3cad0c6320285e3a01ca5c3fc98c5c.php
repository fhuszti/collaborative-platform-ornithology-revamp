<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc987a2efc19a527029a54bde72f34b4c4d6e838742a3a5b7844b57532c7b74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76a337735e5b5f982d82d9a88bb98440cc78b3f7c4da60770309b2c213a7b7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a337735e5b5f982d82d9a88bb98440cc78b3f7c4da60770309b2c213a7b7b4->enter($__internal_76a337735e5b5f982d82d9a88bb98440cc78b3f7c4da60770309b2c213a7b7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_102090724147368d0635fe6fed33460bedbe616d69279ccdffc257663dd1ca12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102090724147368d0635fe6fed33460bedbe616d69279ccdffc257663dd1ca12->enter($__internal_102090724147368d0635fe6fed33460bedbe616d69279ccdffc257663dd1ca12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a337735e5b5f982d82d9a88bb98440cc78b3f7c4da60770309b2c213a7b7b4->leave($__internal_76a337735e5b5f982d82d9a88bb98440cc78b3f7c4da60770309b2c213a7b7b4_prof);

        
        $__internal_102090724147368d0635fe6fed33460bedbe616d69279ccdffc257663dd1ca12->leave($__internal_102090724147368d0635fe6fed33460bedbe616d69279ccdffc257663dd1ca12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_389b75e1e9bf5d704a4178a3e6619a001e61203ef070ea1ecf6e51b50d515f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389b75e1e9bf5d704a4178a3e6619a001e61203ef070ea1ecf6e51b50d515f2d->enter($__internal_389b75e1e9bf5d704a4178a3e6619a001e61203ef070ea1ecf6e51b50d515f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d127cd6f6ca944071625ddd9ef71461ba3509770cf9a1393db5b91a5701b5cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d127cd6f6ca944071625ddd9ef71461ba3509770cf9a1393db5b91a5701b5cdc->enter($__internal_d127cd6f6ca944071625ddd9ef71461ba3509770cf9a1393db5b91a5701b5cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d127cd6f6ca944071625ddd9ef71461ba3509770cf9a1393db5b91a5701b5cdc->leave($__internal_d127cd6f6ca944071625ddd9ef71461ba3509770cf9a1393db5b91a5701b5cdc_prof);

        
        $__internal_389b75e1e9bf5d704a4178a3e6619a001e61203ef070ea1ecf6e51b50d515f2d->leave($__internal_389b75e1e9bf5d704a4178a3e6619a001e61203ef070ea1ecf6e51b50d515f2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
