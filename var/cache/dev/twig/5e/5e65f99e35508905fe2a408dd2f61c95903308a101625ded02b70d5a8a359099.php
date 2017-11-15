<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0122bddfc968a169a9cdf3b01eadc87070ebe771af005fe74fe4918cc5c5a145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5e01186c57fabf373de3ae902cbb05f44787f7038148a1eb604d8b853b41d128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e01186c57fabf373de3ae902cbb05f44787f7038148a1eb604d8b853b41d128->enter($__internal_5e01186c57fabf373de3ae902cbb05f44787f7038148a1eb604d8b853b41d128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d6e7150f9218f5234d790808ef46715ddf86422493932f86876fef654a532e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6e7150f9218f5234d790808ef46715ddf86422493932f86876fef654a532e3->enter($__internal_0d6e7150f9218f5234d790808ef46715ddf86422493932f86876fef654a532e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e01186c57fabf373de3ae902cbb05f44787f7038148a1eb604d8b853b41d128->leave($__internal_5e01186c57fabf373de3ae902cbb05f44787f7038148a1eb604d8b853b41d128_prof);

        
        $__internal_0d6e7150f9218f5234d790808ef46715ddf86422493932f86876fef654a532e3->leave($__internal_0d6e7150f9218f5234d790808ef46715ddf86422493932f86876fef654a532e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b33df45819401529304ad381b04ca1456d75cefb4e203388a272b425475db79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b33df45819401529304ad381b04ca1456d75cefb4e203388a272b425475db79->enter($__internal_8b33df45819401529304ad381b04ca1456d75cefb4e203388a272b425475db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81271abcc80ff0711da62e3e25731eba7ddffedab1507ea97ef31d89fa20de65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81271abcc80ff0711da62e3e25731eba7ddffedab1507ea97ef31d89fa20de65->enter($__internal_81271abcc80ff0711da62e3e25731eba7ddffedab1507ea97ef31d89fa20de65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81271abcc80ff0711da62e3e25731eba7ddffedab1507ea97ef31d89fa20de65->leave($__internal_81271abcc80ff0711da62e3e25731eba7ddffedab1507ea97ef31d89fa20de65_prof);

        
        $__internal_8b33df45819401529304ad381b04ca1456d75cefb4e203388a272b425475db79->leave($__internal_8b33df45819401529304ad381b04ca1456d75cefb4e203388a272b425475db79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac58184f7d86d36fb4608a032a423170b4009ae2fe4545d1bcd1a36b4b0e17dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac58184f7d86d36fb4608a032a423170b4009ae2fe4545d1bcd1a36b4b0e17dc->enter($__internal_ac58184f7d86d36fb4608a032a423170b4009ae2fe4545d1bcd1a36b4b0e17dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_656e0cb3bdce08838263197d809dee58a75aa04c31d0123e8b4a5a8c9f9c31a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656e0cb3bdce08838263197d809dee58a75aa04c31d0123e8b4a5a8c9f9c31a7->enter($__internal_656e0cb3bdce08838263197d809dee58a75aa04c31d0123e8b4a5a8c9f9c31a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_656e0cb3bdce08838263197d809dee58a75aa04c31d0123e8b4a5a8c9f9c31a7->leave($__internal_656e0cb3bdce08838263197d809dee58a75aa04c31d0123e8b4a5a8c9f9c31a7_prof);

        
        $__internal_ac58184f7d86d36fb4608a032a423170b4009ae2fe4545d1bcd1a36b4b0e17dc->leave($__internal_ac58184f7d86d36fb4608a032a423170b4009ae2fe4545d1bcd1a36b4b0e17dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49b6587d22a09412e20625471d6b0ae8d42f0cdd1c5a50835fcf68328cb555b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b6587d22a09412e20625471d6b0ae8d42f0cdd1c5a50835fcf68328cb555b0->enter($__internal_49b6587d22a09412e20625471d6b0ae8d42f0cdd1c5a50835fcf68328cb555b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6c1b88944eda2751fc2b7462267c48d4bb4b5a0edab7020b7a1b88962eaa77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c1b88944eda2751fc2b7462267c48d4bb4b5a0edab7020b7a1b88962eaa77b->enter($__internal_c6c1b88944eda2751fc2b7462267c48d4bb4b5a0edab7020b7a1b88962eaa77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c6c1b88944eda2751fc2b7462267c48d4bb4b5a0edab7020b7a1b88962eaa77b->leave($__internal_c6c1b88944eda2751fc2b7462267c48d4bb4b5a0edab7020b7a1b88962eaa77b_prof);

        
        $__internal_49b6587d22a09412e20625471d6b0ae8d42f0cdd1c5a50835fcf68328cb555b0->leave($__internal_49b6587d22a09412e20625471d6b0ae8d42f0cdd1c5a50835fcf68328cb555b0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
