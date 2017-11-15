<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6ca5cdb5120510beba4c269633a88a2cdb4ff5af65d95f56818101d0b93dd77c extends Twig_Template
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
        $__internal_0fc6fc2ddd15fe981d6e24e571db2a33ce8d7db3076bc3fa72bbfc50c7a94a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc6fc2ddd15fe981d6e24e571db2a33ce8d7db3076bc3fa72bbfc50c7a94a94->enter($__internal_0fc6fc2ddd15fe981d6e24e571db2a33ce8d7db3076bc3fa72bbfc50c7a94a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2d49e9e9288a779db096f62339173489ec29400e3b53194dc9fb76edb64b8359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d49e9e9288a779db096f62339173489ec29400e3b53194dc9fb76edb64b8359->enter($__internal_2d49e9e9288a779db096f62339173489ec29400e3b53194dc9fb76edb64b8359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc6fc2ddd15fe981d6e24e571db2a33ce8d7db3076bc3fa72bbfc50c7a94a94->leave($__internal_0fc6fc2ddd15fe981d6e24e571db2a33ce8d7db3076bc3fa72bbfc50c7a94a94_prof);

        
        $__internal_2d49e9e9288a779db096f62339173489ec29400e3b53194dc9fb76edb64b8359->leave($__internal_2d49e9e9288a779db096f62339173489ec29400e3b53194dc9fb76edb64b8359_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92e66e5c0762730d3b7ab3f0302f825288adb7b913293af47aaa3674e4b3cac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e66e5c0762730d3b7ab3f0302f825288adb7b913293af47aaa3674e4b3cac0->enter($__internal_92e66e5c0762730d3b7ab3f0302f825288adb7b913293af47aaa3674e4b3cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1e9bd19e0be80524bc77304204b9df6125a66d5945f2794ed08b061562f4a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e9bd19e0be80524bc77304204b9df6125a66d5945f2794ed08b061562f4a23->enter($__internal_f1e9bd19e0be80524bc77304204b9df6125a66d5945f2794ed08b061562f4a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f1e9bd19e0be80524bc77304204b9df6125a66d5945f2794ed08b061562f4a23->leave($__internal_f1e9bd19e0be80524bc77304204b9df6125a66d5945f2794ed08b061562f4a23_prof);

        
        $__internal_92e66e5c0762730d3b7ab3f0302f825288adb7b913293af47aaa3674e4b3cac0->leave($__internal_92e66e5c0762730d3b7ab3f0302f825288adb7b913293af47aaa3674e4b3cac0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1332211543d61516772fadd8c238adedaaedc6e303a0156b2fb8a6526bd3202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1332211543d61516772fadd8c238adedaaedc6e303a0156b2fb8a6526bd3202b->enter($__internal_1332211543d61516772fadd8c238adedaaedc6e303a0156b2fb8a6526bd3202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ded4c003c40862c89abb550d69de8bf88a3239288ea07c606686d5c5f4770265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded4c003c40862c89abb550d69de8bf88a3239288ea07c606686d5c5f4770265->enter($__internal_ded4c003c40862c89abb550d69de8bf88a3239288ea07c606686d5c5f4770265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ded4c003c40862c89abb550d69de8bf88a3239288ea07c606686d5c5f4770265->leave($__internal_ded4c003c40862c89abb550d69de8bf88a3239288ea07c606686d5c5f4770265_prof);

        
        $__internal_1332211543d61516772fadd8c238adedaaedc6e303a0156b2fb8a6526bd3202b->leave($__internal_1332211543d61516772fadd8c238adedaaedc6e303a0156b2fb8a6526bd3202b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8895a1756b7e6a1d88c51ce7b5af911165a7b3d1375db906efad53d05dbded4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8895a1756b7e6a1d88c51ce7b5af911165a7b3d1375db906efad53d05dbded4e->enter($__internal_8895a1756b7e6a1d88c51ce7b5af911165a7b3d1375db906efad53d05dbded4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29d7084b2d9ad531b1ff8fa5c9b06333142b291d9fd0699370df33b859cec707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d7084b2d9ad531b1ff8fa5c9b06333142b291d9fd0699370df33b859cec707->enter($__internal_29d7084b2d9ad531b1ff8fa5c9b06333142b291d9fd0699370df33b859cec707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_29d7084b2d9ad531b1ff8fa5c9b06333142b291d9fd0699370df33b859cec707->leave($__internal_29d7084b2d9ad531b1ff8fa5c9b06333142b291d9fd0699370df33b859cec707_prof);

        
        $__internal_8895a1756b7e6a1d88c51ce7b5af911165a7b3d1375db906efad53d05dbded4e->leave($__internal_8895a1756b7e6a1d88c51ce7b5af911165a7b3d1375db906efad53d05dbded4e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
