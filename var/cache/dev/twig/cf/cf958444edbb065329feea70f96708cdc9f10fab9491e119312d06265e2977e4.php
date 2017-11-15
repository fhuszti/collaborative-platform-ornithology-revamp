<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_caedd788992e488a2dfe931ff8ef5e3d8440f3c882db5a90339a4cfcc9400b71 extends Twig_Template
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
        $__internal_117ca8933257fe6cd3db4f8974d34603aab5992f14fe8b6a353b1420b0e0be8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117ca8933257fe6cd3db4f8974d34603aab5992f14fe8b6a353b1420b0e0be8c->enter($__internal_117ca8933257fe6cd3db4f8974d34603aab5992f14fe8b6a353b1420b0e0be8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c8fc37e1dfb89038ba117f40779d05d2dc7092138a515d00ade230fa7182162e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fc37e1dfb89038ba117f40779d05d2dc7092138a515d00ade230fa7182162e->enter($__internal_c8fc37e1dfb89038ba117f40779d05d2dc7092138a515d00ade230fa7182162e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117ca8933257fe6cd3db4f8974d34603aab5992f14fe8b6a353b1420b0e0be8c->leave($__internal_117ca8933257fe6cd3db4f8974d34603aab5992f14fe8b6a353b1420b0e0be8c_prof);

        
        $__internal_c8fc37e1dfb89038ba117f40779d05d2dc7092138a515d00ade230fa7182162e->leave($__internal_c8fc37e1dfb89038ba117f40779d05d2dc7092138a515d00ade230fa7182162e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1b6e3d0665b724902162ba21f8fda2f59d368407fb611e12c129ca6ad2be793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b6e3d0665b724902162ba21f8fda2f59d368407fb611e12c129ca6ad2be793->enter($__internal_c1b6e3d0665b724902162ba21f8fda2f59d368407fb611e12c129ca6ad2be793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd3651349d8cfbfca78b0b6a0b87ea97660d0b06278eb3bef7cf5c029e8dc307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3651349d8cfbfca78b0b6a0b87ea97660d0b06278eb3bef7cf5c029e8dc307->enter($__internal_cd3651349d8cfbfca78b0b6a0b87ea97660d0b06278eb3bef7cf5c029e8dc307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd3651349d8cfbfca78b0b6a0b87ea97660d0b06278eb3bef7cf5c029e8dc307->leave($__internal_cd3651349d8cfbfca78b0b6a0b87ea97660d0b06278eb3bef7cf5c029e8dc307_prof);

        
        $__internal_c1b6e3d0665b724902162ba21f8fda2f59d368407fb611e12c129ca6ad2be793->leave($__internal_c1b6e3d0665b724902162ba21f8fda2f59d368407fb611e12c129ca6ad2be793_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_958227b9416b14df80981bdec8d20794b20b55c917468905581c2da872a6826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958227b9416b14df80981bdec8d20794b20b55c917468905581c2da872a6826f->enter($__internal_958227b9416b14df80981bdec8d20794b20b55c917468905581c2da872a6826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e62a9a22079555db001285ed50da96f93948d8c0a38ad08faae2a029ebe4dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e62a9a22079555db001285ed50da96f93948d8c0a38ad08faae2a029ebe4dc5->enter($__internal_8e62a9a22079555db001285ed50da96f93948d8c0a38ad08faae2a029ebe4dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e62a9a22079555db001285ed50da96f93948d8c0a38ad08faae2a029ebe4dc5->leave($__internal_8e62a9a22079555db001285ed50da96f93948d8c0a38ad08faae2a029ebe4dc5_prof);

        
        $__internal_958227b9416b14df80981bdec8d20794b20b55c917468905581c2da872a6826f->leave($__internal_958227b9416b14df80981bdec8d20794b20b55c917468905581c2da872a6826f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25e850d4d2f6492e3345ff6825a0646d212fe2b7a7167a49c890b121ffc26d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e850d4d2f6492e3345ff6825a0646d212fe2b7a7167a49c890b121ffc26d9a->enter($__internal_25e850d4d2f6492e3345ff6825a0646d212fe2b7a7167a49c890b121ffc26d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88edd289c5c13f5fe132c5db8ac2cc6b9c1fd7a0e1166017fd6cacd98f843314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88edd289c5c13f5fe132c5db8ac2cc6b9c1fd7a0e1166017fd6cacd98f843314->enter($__internal_88edd289c5c13f5fe132c5db8ac2cc6b9c1fd7a0e1166017fd6cacd98f843314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_88edd289c5c13f5fe132c5db8ac2cc6b9c1fd7a0e1166017fd6cacd98f843314->leave($__internal_88edd289c5c13f5fe132c5db8ac2cc6b9c1fd7a0e1166017fd6cacd98f843314_prof);

        
        $__internal_25e850d4d2f6492e3345ff6825a0646d212fe2b7a7167a49c890b121ffc26d9a->leave($__internal_25e850d4d2f6492e3345ff6825a0646d212fe2b7a7167a49c890b121ffc26d9a_prof);

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
