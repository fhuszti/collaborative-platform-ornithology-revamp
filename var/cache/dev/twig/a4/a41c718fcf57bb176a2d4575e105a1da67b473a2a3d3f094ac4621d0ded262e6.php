<?php

/* second-menu.html.twig */
class __TwigTemplate_0f1a387372488bb16d30d4974d426a45b6419a2b00b25516e469992b95a5685e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34a1528ae559c18fc18b86bca0aa065d5a90780abceade22e1d172d32e4b080b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a1528ae559c18fc18b86bca0aa065d5a90780abceade22e1d172d32e4b080b->enter($__internal_34a1528ae559c18fc18b86bca0aa065d5a90780abceade22e1d172d32e4b080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "second-menu.html.twig"));

        $__internal_7e4796fee5a894de54967c3a9fb0f4afba75af58d59e5c05be8ba74a04df6604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4796fee5a894de54967c3a9fb0f4afba75af58d59e5c05be8ba74a04df6604->enter($__internal_7e4796fee5a894de54967c3a9fb0f4afba75af58d59e5c05be8ba74a04df6604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "second-menu.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.observation"), "html", null, true);
        echo "\">
\t<div class=\"col-sm-12\">
\t\t";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44a4ae9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_44a4ae9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/44a4ae9_observation_1.png");
            // line 4
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.observation"), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "44a4ae9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_44a4ae9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/44a4ae9.png");
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.observation"), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 6
        echo "\t</div>
</a>

<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.search"), "html", null, true);
        echo "\">
\t<div class=\"col-sm-12\">
\t\t";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36110ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac_search_1.png");
            // line 12
            echo "    \t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.search"), "html", null, true);
            echo "\" />
    \t";
        } else {
            // asset "36110ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac.png");
            echo "    \t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.search"), "html", null, true);
            echo "\" />
    \t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t</div>
</a>

<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.contact"), "html", null, true);
        echo "\">
\t<div class=\"col-sm-12\">
\t\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9aa0c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0_contact_1.png");
            // line 20
            echo "    \t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.contact"), "html", null, true);
            echo "\" />
    \t";
        } else {
            // asset "e9aa0c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0.png");
            echo "    \t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.contact"), "html", null, true);
            echo "\" />
    \t";
        }
        unset($context["asset_url"]);
        // line 22
        echo "\t</div>
</a>

";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.profile"), "html", null, true);
            echo "\">
\t\t<div class=\"col-sm-12\">
\t\t\t";
            // line 28
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "b761f5e_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b761f5e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/b761f5e_profile_1.png");
                // line 29
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.profile"), "html", null, true);
                echo "\" />
\t    \t";
            } else {
                // asset "b761f5e"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b761f5e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/b761f5e.png");
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.profile"), "html", null, true);
                echo "\" />
\t    \t";
            }
            unset($context["asset_url"]);
            // line 31
            echo "\t\t</div>
\t</a>

\t<a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.logout"), "html", null, true);
            echo "\">
\t\t<div class=\"col-sm-12\">
\t\t\t";
            // line 36
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d0ea0cc_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d0ea0cc_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d0ea0cc_logout_1.png");
                // line 37
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.logout"), "html", null, true);
                echo "\" />
\t    \t";
            } else {
                // asset "d0ea0cc"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d0ea0cc") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d0ea0cc.png");
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.logout"), "html", null, true);
                echo "\" />
\t    \t";
            }
            unset($context["asset_url"]);
            // line 39
            echo "\t\t</div>
\t</a>
";
        } else {
            // line 42
            echo "\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.register"), "html", null, true);
            echo "\">
\t\t<div class=\"col-sm-12\">
\t\t\t";
            // line 44
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "436d7cf_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_436d7cf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/436d7cf_register_1.png");
                // line 45
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.register"), "html", null, true);
                echo "\" />
\t    \t";
            } else {
                // asset "436d7cf"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_436d7cf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/436d7cf.png");
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.register"), "html", null, true);
                echo "\" />
\t    \t";
            }
            unset($context["asset_url"]);
            // line 47
            echo "\t\t</div>
\t</a>

\t<a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.login"), "html", null, true);
            echo "\">
\t\t<div class=\"col-sm-12\">
\t\t\t";
            // line 52
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "9938540_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540_login_1.png");
                // line 53
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.login"), "html", null, true);
                echo "\" />
\t    \t";
            } else {
                // asset "9938540"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540.png");
                echo "\t    \t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.login"), "html", null, true);
                echo "\" />
\t    \t";
            }
            unset($context["asset_url"]);
            // line 55
            echo "\t\t</div>
\t</a>
";
        }
        
        $__internal_34a1528ae559c18fc18b86bca0aa065d5a90780abceade22e1d172d32e4b080b->leave($__internal_34a1528ae559c18fc18b86bca0aa065d5a90780abceade22e1d172d32e4b080b_prof);

        
        $__internal_7e4796fee5a894de54967c3a9fb0f4afba75af58d59e5c05be8ba74a04df6604->leave($__internal_7e4796fee5a894de54967c3a9fb0f4afba75af58d59e5c05be8ba74a04df6604_prof);

    }

    public function getTemplateName()
    {
        return "second-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 55,  245 => 53,  241 => 52,  234 => 50,  229 => 47,  211 => 45,  207 => 44,  199 => 42,  194 => 39,  176 => 37,  172 => 36,  165 => 34,  160 => 31,  142 => 29,  138 => 28,  130 => 26,  128 => 25,  123 => 22,  105 => 20,  101 => 19,  94 => 17,  89 => 14,  71 => 12,  67 => 11,  60 => 9,  55 => 6,  37 => 4,  33 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.observation'|trans }}\">
\t<div class=\"col-sm-12\">
\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/observation.png' %}
\t\t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.observation'|trans }}\" />
\t\t{% endimage %}
\t</div>
</a>

<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.search'|trans }}\">
\t<div class=\"col-sm-12\">
\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/search.png' %}
    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.search'|trans }}\" />
    \t{% endimage %}
\t</div>
</a>

<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.contact'|trans }}\">
\t<div class=\"col-sm-12\">
\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/contact.png' %}
    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.contact'|trans }}\" />
    \t{% endimage %}
\t</div>
</a>

{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.profile'|trans }}\">
\t\t<div class=\"col-sm-12\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/profile.png' %}
\t    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.profile'|trans }}\" />
\t    \t{% endimage %}
\t\t</div>
\t</a>

\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.logout'|trans }}\">
\t\t<div class=\"col-sm-12\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/logout.png' %}
\t    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.logout'|trans }}\" />
\t    \t{% endimage %}
\t\t</div>
\t</a>
{% else %}
\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.register'|trans }}\">
\t\t<div class=\"col-sm-12\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/register.png' %}
\t    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.register'|trans }}\" />
\t    \t{% endimage %}
\t\t</div>
\t</a>

\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.second-menu.login'|trans }}\">
\t\t<div class=\"col-sm-12\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/login.png' %}
\t    \t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.login'|trans }}\" />
\t    \t{% endimage %}
\t\t</div>
\t</a>
{% endif %}
", "second-menu.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/views/second-menu.html.twig");
    }
}
