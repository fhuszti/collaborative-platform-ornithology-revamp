<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9fdd86ed25eb83d159826efc940948ff2a2399b3d25b6685a01764103adc81f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68d7da43b909d2b2624d79e2068463f6d7cb917135cd311cd6be0d7ee429f27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d7da43b909d2b2624d79e2068463f6d7cb917135cd311cd6be0d7ee429f27a->enter($__internal_68d7da43b909d2b2624d79e2068463f6d7cb917135cd311cd6be0d7ee429f27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_aa36a582f2dfd3e1565a5f56a180aed164c45e9689a0bf0d70b111f9636c4d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36a582f2dfd3e1565a5f56a180aed164c45e9689a0bf0d70b111f9636c4d86->enter($__internal_aa36a582f2dfd3e1565a5f56a180aed164c45e9689a0bf0d70b111f9636c4d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 2
        $context["loginPage"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d7da43b909d2b2624d79e2068463f6d7cb917135cd311cd6be0d7ee429f27a->leave($__internal_68d7da43b909d2b2624d79e2068463f6d7cb917135cd311cd6be0d7ee429f27a_prof);

        
        $__internal_aa36a582f2dfd3e1565a5f56a180aed164c45e9689a0bf0d70b111f9636c4d86->leave($__internal_aa36a582f2dfd3e1565a5f56a180aed164c45e9689a0bf0d70b111f9636c4d86_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_643c2b05e07dfbd5a17feb6b1651f32fa7ea225b1d0f8501ba9d9c0de00d2c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643c2b05e07dfbd5a17feb6b1651f32fa7ea225b1d0f8501ba9d9c0de00d2c4c->enter($__internal_643c2b05e07dfbd5a17feb6b1651f32fa7ea225b1d0f8501ba9d9c0de00d2c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca9b6218be73eeb8544eeb2d40aef6b12831b546c4833850fee7461d8e6c7ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9b6218be73eeb8544eeb2d40aef6b12831b546c4833850fee7461d8e6c7ca6->enter($__internal_ca9b6218be73eeb8544eeb2d40aef6b12831b546c4833850fee7461d8e6c7ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca9b6218be73eeb8544eeb2d40aef6b12831b546c4833850fee7461d8e6c7ca6->leave($__internal_ca9b6218be73eeb8544eeb2d40aef6b12831b546c4833850fee7461d8e6c7ca6_prof);

        
        $__internal_643c2b05e07dfbd5a17feb6b1651f32fa7ea225b1d0f8501ba9d9c0de00d2c4c->leave($__internal_643c2b05e07dfbd5a17feb6b1651f32fa7ea225b1d0f8501ba9d9c0de00d2c4c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50f560cabf317bc47406e5d4be0781ebe606556d87b05252d692cc1cf673286a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f560cabf317bc47406e5d4be0781ebe606556d87b05252d692cc1cf673286a->enter($__internal_50f560cabf317bc47406e5d4be0781ebe606556d87b05252d692cc1cf673286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86d4745b4158cfb680e8834e83b250cca1de782e9939f19fb1e4090f7a4dbee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d4745b4158cfb680e8834e83b250cca1de782e9939f19fb1e4090f7a4dbee1->enter($__internal_86d4745b4158cfb680e8834e83b250cca1de782e9939f19fb1e4090f7a4dbee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "63b1450_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_63b1450_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/63b1450_login_1.css");
            // line 13
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "63b1450"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_63b1450") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/63b1450.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_86d4745b4158cfb680e8834e83b250cca1de782e9939f19fb1e4090f7a4dbee1->leave($__internal_86d4745b4158cfb680e8834e83b250cca1de782e9939f19fb1e4090f7a4dbee1_prof);

        
        $__internal_50f560cabf317bc47406e5d4be0781ebe606556d87b05252d692cc1cf673286a->leave($__internal_50f560cabf317bc47406e5d4be0781ebe606556d87b05252d692cc1cf673286a_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b565d04bcbe6398f315d006f1a498bfa1a064c522984dbbdc3915194d0bdb457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b565d04bcbe6398f315d006f1a498bfa1a064c522984dbbdc3915194d0bdb457->enter($__internal_b565d04bcbe6398f315d006f1a498bfa1a064c522984dbbdc3915194d0bdb457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2642b4e783923b5d25537865f91ffe8c6a7ad0d33069c7761d46137b8b8c9587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2642b4e783923b5d25537865f91ffe8c6a7ad0d33069c7761d46137b8b8c9587->enter($__internal_2642b4e783923b5d25537865f91ffe8c6a7ad0d33069c7761d46137b8b8c9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2642b4e783923b5d25537865f91ffe8c6a7ad0d33069c7761d46137b8b8c9587->leave($__internal_2642b4e783923b5d25537865f91ffe8c6a7ad0d33069c7761d46137b8b8c9587_prof);

        
        $__internal_b565d04bcbe6398f315d006f1a498bfa1a064c522984dbbdc3915194d0bdb457->leave($__internal_b565d04bcbe6398f315d006f1a498bfa1a064c522984dbbdc3915194d0bdb457_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0fb76b9f50172b74f2589f51ddd322babdc29f6c0cc16393186c502869e1633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fb76b9f50172b74f2589f51ddd322babdc29f6c0cc16393186c502869e1633->enter($__internal_d0fb76b9f50172b74f2589f51ddd322babdc29f6c0cc16393186c502869e1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_46f385c0f13bdff2c08315f83a810d07c91de0e80d9aa003027ca3439ea1d905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f385c0f13bdff2c08315f83a810d07c91de0e80d9aa003027ca3439ea1d905->enter($__internal_46f385c0f13bdff2c08315f83a810d07c91de0e80d9aa003027ca3439ea1d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a7b7d14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a7b7d14_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a7b7d14_login_1.js");
            // line 26
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "a7b7d14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a7b7d14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a7b7d14.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_46f385c0f13bdff2c08315f83a810d07c91de0e80d9aa003027ca3439ea1d905->leave($__internal_46f385c0f13bdff2c08315f83a810d07c91de0e80d9aa003027ca3439ea1d905_prof);

        
        $__internal_d0fb76b9f50172b74f2589f51ddd322babdc29f6c0cc16393186c502869e1633->leave($__internal_d0fb76b9f50172b74f2589f51ddd322babdc29f6c0cc16393186c502869e1633_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 26,  148 => 24,  142 => 22,  133 => 21,  120 => 18,  111 => 17,  89 => 13,  85 => 11,  79 => 9,  70 => 8,  55 => 5,  46 => 4,  36 => 1,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% set loginPage = true %}

{% block title %}
    {{ 'core.login.title'|trans }} - {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {% stylesheets filter='cssrewrite, ?scssphp'
        'bundles/app/css/login.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
{% endblock %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

{% block javascripts %}
    {{ parent() }}

    {% javascripts filter='?jsqueeze'
        'bundles/app/js/login.js' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
