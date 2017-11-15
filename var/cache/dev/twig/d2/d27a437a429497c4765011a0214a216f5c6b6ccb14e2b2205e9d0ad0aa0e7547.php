<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ac0a3171c56a4c0a9fa060a7811103fb7c8f4e632267e5fa5c9d60f6ec83951f extends Twig_Template
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
        $__internal_6b4af1e4d136068e650563eee0d40e7c77ccf943102e28d89c6d12734a6f14aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4af1e4d136068e650563eee0d40e7c77ccf943102e28d89c6d12734a6f14aa->enter($__internal_6b4af1e4d136068e650563eee0d40e7c77ccf943102e28d89c6d12734a6f14aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_16f9414f80dba177a698ecdb1e79ee59e980043eb9d7dd9d44aae76c49cc14cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f9414f80dba177a698ecdb1e79ee59e980043eb9d7dd9d44aae76c49cc14cd->enter($__internal_16f9414f80dba177a698ecdb1e79ee59e980043eb9d7dd9d44aae76c49cc14cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4af1e4d136068e650563eee0d40e7c77ccf943102e28d89c6d12734a6f14aa->leave($__internal_6b4af1e4d136068e650563eee0d40e7c77ccf943102e28d89c6d12734a6f14aa_prof);

        
        $__internal_16f9414f80dba177a698ecdb1e79ee59e980043eb9d7dd9d44aae76c49cc14cd->leave($__internal_16f9414f80dba177a698ecdb1e79ee59e980043eb9d7dd9d44aae76c49cc14cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71dacabef8c01dff68b871eb8b1dab5abadd39de8b964d0c6c64ae29236e3db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dacabef8c01dff68b871eb8b1dab5abadd39de8b964d0c6c64ae29236e3db5->enter($__internal_71dacabef8c01dff68b871eb8b1dab5abadd39de8b964d0c6c64ae29236e3db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d90674b9b440fc2c3688354c6ef66cfd3000bd1c6f6b6db319f8de0ed0d786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d90674b9b440fc2c3688354c6ef66cfd3000bd1c6f6b6db319f8de0ed0d786b->enter($__internal_4d90674b9b440fc2c3688354c6ef66cfd3000bd1c6f6b6db319f8de0ed0d786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4d90674b9b440fc2c3688354c6ef66cfd3000bd1c6f6b6db319f8de0ed0d786b->leave($__internal_4d90674b9b440fc2c3688354c6ef66cfd3000bd1c6f6b6db319f8de0ed0d786b_prof);

        
        $__internal_71dacabef8c01dff68b871eb8b1dab5abadd39de8b964d0c6c64ae29236e3db5->leave($__internal_71dacabef8c01dff68b871eb8b1dab5abadd39de8b964d0c6c64ae29236e3db5_prof);

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
