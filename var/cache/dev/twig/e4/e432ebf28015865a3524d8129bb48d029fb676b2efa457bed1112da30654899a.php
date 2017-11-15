<?php

/* footer.html.twig */
class __TwigTemplate_542e27e0a25dc6de50a684e1ad0631185c5aff8b1d0130ec22b5caf347260f81 extends Twig_Template
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
        $__internal_9b16a24e2ac39677faae862278932a39302b96b14d9b33abfae197b021937ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b16a24e2ac39677faae862278932a39302b96b14d9b33abfae197b021937ba9->enter($__internal_9b16a24e2ac39677faae862278932a39302b96b14d9b33abfae197b021937ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_82e6ceaeb6504d79da6fdca8817e4a183688a85a64d2da0d12f9c0329bb78593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e6ceaeb6504d79da6fdca8817e4a183688a85a64d2da0d12f9c0329bb78593->enter($__internal_82e6ceaeb6504d79da6fdca8817e4a183688a85a64d2da0d12f9c0329bb78593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
\t        ";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "\t        \t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_9b16a24e2ac39677faae862278932a39302b96b14d9b33abfae197b021937ba9->leave($__internal_9b16a24e2ac39677faae862278932a39302b96b14d9b33abfae197b021937ba9_prof);

        
        $__internal_82e6ceaeb6504d79da6fdca8817e4a183688a85a64d2da0d12f9c0329bb78593->leave($__internal_82e6ceaeb6504d79da6fdca8817e4a183688a85a64d2da0d12f9c0329bb78593_prof);

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
", "footer.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/app/Resources/views/footer.html.twig");
    }
}
