<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d5e9bd7b26d868ec5a7d79257d59f70227046b497cd66126b3e3e2d6c66331d8 extends Twig_Template
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
        $__internal_d01bb43c79c7ebfc5c7de7d21cbecd12be469bfd531731b3435750fdbfbf87a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01bb43c79c7ebfc5c7de7d21cbecd12be469bfd531731b3435750fdbfbf87a3->enter($__internal_d01bb43c79c7ebfc5c7de7d21cbecd12be469bfd531731b3435750fdbfbf87a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_479226d5ede5c3b97f4ffbc314b78895870dffbf6c68a407cb0ec38158f455c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479226d5ede5c3b97f4ffbc314b78895870dffbf6c68a407cb0ec38158f455c5->enter($__internal_479226d5ede5c3b97f4ffbc314b78895870dffbf6c68a407cb0ec38158f455c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01bb43c79c7ebfc5c7de7d21cbecd12be469bfd531731b3435750fdbfbf87a3->leave($__internal_d01bb43c79c7ebfc5c7de7d21cbecd12be469bfd531731b3435750fdbfbf87a3_prof);

        
        $__internal_479226d5ede5c3b97f4ffbc314b78895870dffbf6c68a407cb0ec38158f455c5->leave($__internal_479226d5ede5c3b97f4ffbc314b78895870dffbf6c68a407cb0ec38158f455c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a4d37683cfa8be1981cfe173ac7c17db165687a0851cb0d021cbb3d637e276d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4d37683cfa8be1981cfe173ac7c17db165687a0851cb0d021cbb3d637e276d->enter($__internal_2a4d37683cfa8be1981cfe173ac7c17db165687a0851cb0d021cbb3d637e276d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf173165ea6d5571df8d759fca3371f63c3fb65c989e669f6055fa8e2b97639d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf173165ea6d5571df8d759fca3371f63c3fb65c989e669f6055fa8e2b97639d->enter($__internal_bf173165ea6d5571df8d759fca3371f63c3fb65c989e669f6055fa8e2b97639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf173165ea6d5571df8d759fca3371f63c3fb65c989e669f6055fa8e2b97639d->leave($__internal_bf173165ea6d5571df8d759fca3371f63c3fb65c989e669f6055fa8e2b97639d_prof);

        
        $__internal_2a4d37683cfa8be1981cfe173ac7c17db165687a0851cb0d021cbb3d637e276d->leave($__internal_2a4d37683cfa8be1981cfe173ac7c17db165687a0851cb0d021cbb3d637e276d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89d47fa6b56a352bfb38c211a956d280e9f568c41bfe8e7f498dbf30cd45ecc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d47fa6b56a352bfb38c211a956d280e9f568c41bfe8e7f498dbf30cd45ecc9->enter($__internal_89d47fa6b56a352bfb38c211a956d280e9f568c41bfe8e7f498dbf30cd45ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f005085fa4965fc676455505b8b8405a5d28d5874d32a8ce7a2d417d231929a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f005085fa4965fc676455505b8b8405a5d28d5874d32a8ce7a2d417d231929a5->enter($__internal_f005085fa4965fc676455505b8b8405a5d28d5874d32a8ce7a2d417d231929a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f005085fa4965fc676455505b8b8405a5d28d5874d32a8ce7a2d417d231929a5->leave($__internal_f005085fa4965fc676455505b8b8405a5d28d5874d32a8ce7a2d417d231929a5_prof);

        
        $__internal_89d47fa6b56a352bfb38c211a956d280e9f568c41bfe8e7f498dbf30cd45ecc9->leave($__internal_89d47fa6b56a352bfb38c211a956d280e9f568c41bfe8e7f498dbf30cd45ecc9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee6eea4fd656ad784d409c1d483e0069426f0a8a3873e28a2b834567e9f612e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6eea4fd656ad784d409c1d483e0069426f0a8a3873e28a2b834567e9f612e9->enter($__internal_ee6eea4fd656ad784d409c1d483e0069426f0a8a3873e28a2b834567e9f612e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c43d99cb5a33a32e67875f0c378f48d81d1ad3261746b03ab4f062f4a0b85975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43d99cb5a33a32e67875f0c378f48d81d1ad3261746b03ab4f062f4a0b85975->enter($__internal_c43d99cb5a33a32e67875f0c378f48d81d1ad3261746b03ab4f062f4a0b85975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c43d99cb5a33a32e67875f0c378f48d81d1ad3261746b03ab4f062f4a0b85975->leave($__internal_c43d99cb5a33a32e67875f0c378f48d81d1ad3261746b03ab4f062f4a0b85975_prof);

        
        $__internal_ee6eea4fd656ad784d409c1d483e0069426f0a8a3873e28a2b834567e9f612e9->leave($__internal_ee6eea4fd656ad784d409c1d483e0069426f0a8a3873e28a2b834567e9f612e9_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
