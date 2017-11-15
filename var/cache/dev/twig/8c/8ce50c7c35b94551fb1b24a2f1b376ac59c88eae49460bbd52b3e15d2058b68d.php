<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6ed908e8b0af62c7620d6e229ffd18df167048e3641caa9c4c77c4d0b5096480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c7f1d5d35af02b984db9ac8315bff452bab8d266092bf3f5d4c459162bd6050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7f1d5d35af02b984db9ac8315bff452bab8d266092bf3f5d4c459162bd6050->enter($__internal_5c7f1d5d35af02b984db9ac8315bff452bab8d266092bf3f5d4c459162bd6050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_beb47c3a73692725b1357e888c9a73b1c54c3cad01df7618d63356f833b818a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb47c3a73692725b1357e888c9a73b1c54c3cad01df7618d63356f833b818a9->enter($__internal_beb47c3a73692725b1357e888c9a73b1c54c3cad01df7618d63356f833b818a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c7f1d5d35af02b984db9ac8315bff452bab8d266092bf3f5d4c459162bd6050->leave($__internal_5c7f1d5d35af02b984db9ac8315bff452bab8d266092bf3f5d4c459162bd6050_prof);

        
        $__internal_beb47c3a73692725b1357e888c9a73b1c54c3cad01df7618d63356f833b818a9->leave($__internal_beb47c3a73692725b1357e888c9a73b1c54c3cad01df7618d63356f833b818a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1e24dd32b77456f8a3c80053bfff1694f9cd1785ed6884cdbf61aea6cbbd04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e24dd32b77456f8a3c80053bfff1694f9cd1785ed6884cdbf61aea6cbbd04c->enter($__internal_b1e24dd32b77456f8a3c80053bfff1694f9cd1785ed6884cdbf61aea6cbbd04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_062511fc0359772bde5fb81d59a0885cc1be78620c48d5759e11394404e4c229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062511fc0359772bde5fb81d59a0885cc1be78620c48d5759e11394404e4c229->enter($__internal_062511fc0359772bde5fb81d59a0885cc1be78620c48d5759e11394404e4c229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_062511fc0359772bde5fb81d59a0885cc1be78620c48d5759e11394404e4c229->leave($__internal_062511fc0359772bde5fb81d59a0885cc1be78620c48d5759e11394404e4c229_prof);

        
        $__internal_b1e24dd32b77456f8a3c80053bfff1694f9cd1785ed6884cdbf61aea6cbbd04c->leave($__internal_b1e24dd32b77456f8a3c80053bfff1694f9cd1785ed6884cdbf61aea6cbbd04c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_902af662684e71b39500555b18c35f02699fe65ef8ed4243f97e942b3afac2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902af662684e71b39500555b18c35f02699fe65ef8ed4243f97e942b3afac2e4->enter($__internal_902af662684e71b39500555b18c35f02699fe65ef8ed4243f97e942b3afac2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6900911d262cc6ea3fe3a3736c3e14276bf38a14f1e47ed9bd3106820953cdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6900911d262cc6ea3fe3a3736c3e14276bf38a14f1e47ed9bd3106820953cdc1->enter($__internal_6900911d262cc6ea3fe3a3736c3e14276bf38a14f1e47ed9bd3106820953cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        
        $__internal_6900911d262cc6ea3fe3a3736c3e14276bf38a14f1e47ed9bd3106820953cdc1->leave($__internal_6900911d262cc6ea3fe3a3736c3e14276bf38a14f1e47ed9bd3106820953cdc1_prof);

        
        $__internal_902af662684e71b39500555b18c35f02699fe65ef8ed4243f97e942b3afac2e4->leave($__internal_902af662684e71b39500555b18c35f02699fe65ef8ed4243f97e942b3afac2e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {% block fos_user_content %}
    {% endblock %}
{% endblock %}
", "@FOSUser/layout.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
