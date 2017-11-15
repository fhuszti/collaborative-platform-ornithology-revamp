<?php

/* footer.html.twig */
class __TwigTemplate_1422c25d656f24f4661dc3ffbe2a85a508a1f6dd3d470c826b4c825cc7429d75 extends Twig_Template
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
        $__internal_88c6289ddafbb80dd04efe8fc8a6b097d24200d15798f1654d7b00971e7b72c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c6289ddafbb80dd04efe8fc8a6b097d24200d15798f1654d7b00971e7b72c2->enter($__internal_88c6289ddafbb80dd04efe8fc8a6b097d24200d15798f1654d7b00971e7b72c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_36b8394936acc8085bcb0bb9ebd7a17678766f8536fc74d84672f1fc20d1f2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b8394936acc8085bcb0bb9ebd7a17678766f8536fc74d84672f1fc20d1f2a8->enter($__internal_36b8394936acc8085bcb0bb9ebd7a17678766f8536fc74d84672f1fc20d1f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"navbar navbar-default\" id=\"footer\">
\t<div class=\"col-xs-12 col-sm-push-7 col-sm-5\" id=\"footer_right-links\">
\t\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.legal.title"), "html", null, true);
        echo "\">
\t      \t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.legal.link"), "html", null, true);
        echo "
\t    </a>
\t    -
\t    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.status.title"), "html", null, true);
        echo "\">
\t      \t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.status.link"), "html", null, true);
        echo "
\t    </a>
\t    -
\t    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.agency.title"), "html", null, true);
        echo "\">
\t      \t";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.right_links.agency.link"), "html", null, true);
        echo "
\t    </a>
\t</div>

\t<div class=\"hidden-xs col-sm-2\" id=\"footer_logo\">
\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
        echo "\">
\t\t\t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c41fd8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c_logo_1.png");
            // line 19
            echo "\t        \t<img src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
\t        ";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "\t        \t<img src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
\t        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        </a>
\t</div>

\t<div class=\"col-xs-12 col-sm-pull-7 col-sm-5\">
\t\t<div class=\"hidden-xs col-sm-12\" id=\"footer_left-links\">
\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.search.title"), "html", null, true);
        echo "\">
\t\t      \t";
        // line 27
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.search.link")), "html", null, true);
        echo "
\t\t    </a>
\t\t    <br />
\t\t    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.observations.title"), "html", null, true);
        echo "\">
\t\t      \t";
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.observations.link")), "html", null, true);
        echo "
\t\t    </a>
\t\t    <br />
\t\t    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.project.title"), "html", null, true);
        echo "\">
\t\t      \t";
        // line 35
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.left_links.project.link")), "html", null, true);
        echo "
\t\t    </a>
\t\t</div>

\t\t<div class=\"col-xs-12\" id=\"footer_copyright\">
\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.footer.copyright"), "html", null, true);
        echo "
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_88c6289ddafbb80dd04efe8fc8a6b097d24200d15798f1654d7b00971e7b72c2->leave($__internal_88c6289ddafbb80dd04efe8fc8a6b097d24200d15798f1654d7b00971e7b72c2_prof);

        
        $__internal_36b8394936acc8085bcb0bb9ebd7a17678766f8536fc74d84672f1fc20d1f2a8->leave($__internal_36b8394936acc8085bcb0bb9ebd7a17678766f8536fc74d84672f1fc20d1f2a8_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  132 => 35,  126 => 34,  120 => 31,  114 => 30,  108 => 27,  102 => 26,  95 => 21,  77 => 19,  73 => 18,  67 => 17,  59 => 12,  53 => 11,  47 => 8,  41 => 7,  35 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"navbar navbar-default\" id=\"footer\">
\t<div class=\"col-xs-12 col-sm-push-7 col-sm-5\" id=\"footer_right-links\">
\t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.right_links.legal.title'|trans }}\">
\t      \t{{ 'core.footer.right_links.legal.link'|trans }}
\t    </a>
\t    -
\t    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.right_links.status.title'|trans }}\">
\t      \t{{ 'core.footer.right_links.status.link'|trans }}
\t    </a>
\t    -
\t    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.right_links.agency.title'|trans }}\">
\t      \t{{ 'core.footer.right_links.agency.link'|trans }}
\t    </a>
\t</div>

\t<div class=\"hidden-xs col-sm-2\" id=\"footer_logo\">
\t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.site.logo'|trans }}\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/logo.png' %}
\t        \t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.site.logo'|trans }}\" />
\t        {% endimage %}
        </a>
\t</div>

\t<div class=\"col-xs-12 col-sm-pull-7 col-sm-5\">
\t\t<div class=\"hidden-xs col-sm-12\" id=\"footer_left-links\">
\t\t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.left_links.search.title'|trans }}\">
\t\t      \t{{ 'core.footer.left_links.search.link'|trans|upper }}
\t\t    </a>
\t\t    <br />
\t\t    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.left_links.observations.title'|trans }}\">
\t\t      \t{{ 'core.footer.left_links.observations.link'|trans|upper }}
\t\t    </a>
\t\t    <br />
\t\t    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.footer.left_links.project.title'|trans }}\">
\t\t      \t{{ 'core.footer.left_links.project.link'|trans|upper }}
\t\t    </a>
\t\t</div>

\t\t<div class=\"col-xs-12\" id=\"footer_copyright\">
\t\t\t{{ 'core.footer.copyright'|trans }}
\t\t</div>
\t</div>
</footer>
", "footer.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/views/footer.html.twig");
    }
}
