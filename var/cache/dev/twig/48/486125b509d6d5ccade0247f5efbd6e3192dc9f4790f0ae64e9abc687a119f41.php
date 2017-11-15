<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_981d5d578be5096d7605b19ddb434cf4556be67ef8bcb5291d2c1d76e4d5007a extends Twig_Template
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
        $__internal_07755c4d9998ea4ba86aee5ffd733189a0d76279e1384e322e568ced5085fbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07755c4d9998ea4ba86aee5ffd733189a0d76279e1384e322e568ced5085fbcb->enter($__internal_07755c4d9998ea4ba86aee5ffd733189a0d76279e1384e322e568ced5085fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4a862e3bfa1d97c725598340a398d2fdc45f752c8eede3f6ce34c1f4eaad162f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a862e3bfa1d97c725598340a398d2fdc45f752c8eede3f6ce34c1f4eaad162f->enter($__internal_4a862e3bfa1d97c725598340a398d2fdc45f752c8eede3f6ce34c1f4eaad162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07755c4d9998ea4ba86aee5ffd733189a0d76279e1384e322e568ced5085fbcb->leave($__internal_07755c4d9998ea4ba86aee5ffd733189a0d76279e1384e322e568ced5085fbcb_prof);

        
        $__internal_4a862e3bfa1d97c725598340a398d2fdc45f752c8eede3f6ce34c1f4eaad162f->leave($__internal_4a862e3bfa1d97c725598340a398d2fdc45f752c8eede3f6ce34c1f4eaad162f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_997f12c2ffd48ea071a395e46a37ca6315f3667de5917332d8fe19f31a741887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997f12c2ffd48ea071a395e46a37ca6315f3667de5917332d8fe19f31a741887->enter($__internal_997f12c2ffd48ea071a395e46a37ca6315f3667de5917332d8fe19f31a741887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e70d364fdf6f88ec6c428166ee3867152639a46fc8faa739980ef5885912388f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70d364fdf6f88ec6c428166ee3867152639a46fc8faa739980ef5885912388f->enter($__internal_e70d364fdf6f88ec6c428166ee3867152639a46fc8faa739980ef5885912388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e70d364fdf6f88ec6c428166ee3867152639a46fc8faa739980ef5885912388f->leave($__internal_e70d364fdf6f88ec6c428166ee3867152639a46fc8faa739980ef5885912388f_prof);

        
        $__internal_997f12c2ffd48ea071a395e46a37ca6315f3667de5917332d8fe19f31a741887->leave($__internal_997f12c2ffd48ea071a395e46a37ca6315f3667de5917332d8fe19f31a741887_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
