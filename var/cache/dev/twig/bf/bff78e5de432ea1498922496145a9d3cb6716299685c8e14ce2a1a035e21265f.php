<?php

/* header.html.twig */
class __TwigTemplate_55b3c781e271a948376e53c74aaf5c026240f7c94ead6eafc5235b7df9427d2f extends Twig_Template
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
        $__internal_71df3a27c6ce5de294d5dda4b24ccb993fc354c4654a35f3e1fce7845c188646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71df3a27c6ce5de294d5dda4b24ccb993fc354c4654a35f3e1fce7845c188646->enter($__internal_71df3a27c6ce5de294d5dda4b24ccb993fc354c4654a35f3e1fce7845c188646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_a390be545e59154bd08f22e982ff1e01ed5b1742d2fe1aca6be4c352dd75d166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a390be545e59154bd08f22e982ff1e01ed5b1742d2fe1aca6be4c352dd75d166->enter($__internal_a390be545e59154bd08f22e982ff1e01ed5b1742d2fe1aca6be4c352dd75d166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header id=\"header\">
    <div class=\"navbar-header\" id=\"header_images\">
        <div id=\"logo\" class=\"col-xs-12 col-sm-3\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
        echo "\" class=\"navbar-brand\">
                ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c41fd8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c_logo_1.png");
            // line 6
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
                ";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
                ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "            </a>
        </div>

        <div id=\"header_middle-text\" class=\"hidden-xs col-sm-4 col-sm-push-1\">
            ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9c49391_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9c49391_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9c49391_header-middle-text_1.png");
            // line 13
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "9c49391"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9c49391") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9c49391.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        </div>

        <div id=\"header_birds-text\" class=\"hidden-xs col-sm-4 col-sm-push-1\">
            ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8cb0e91_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8cb0e91_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/8cb0e91_header-birds-text_1.png");
            // line 19
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "8cb0e91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8cb0e91") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/8cb0e91.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.logo"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        </div>

        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>

    <div class=\"collapse navbar-collapse\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- actual menu list -->
            <ul class=\"nav navbar-nav navbar-right\">
                <li";
        // line 34
        if (array_key_exists("projectPage", $context)) {
            echo " class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
        echo "\">
                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.value")), "html", null, true);
        echo "
                    </a>
                </li>
                <li";
        // line 39
        if (array_key_exists("observationPage", $context)) {
            echo " class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
        echo "\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.value")), "html", null, true);
        echo "
                    </a>
                </li>
                <li";
        // line 44
        if (array_key_exists("searchPage", $context)) {
            echo " class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("find");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
        echo "\">
                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.value")), "html", null, true);
        echo "
                    </a>
                </li>
                <li";
        // line 49
        if (array_key_exists("contactPage", $context)) {
            echo " class=\"active\"";
        }
        echo ">
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.contact.link"), "html", null, true);
        echo "\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.contact.value")), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 54
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "                    <li";
            if (array_key_exists("profilePage", $context)) {
                echo " class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.profile.link"), "html", null, true);
            echo "\">
                            ";
            // line 57
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.profile.value")), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.logout.link"), "html", null, true);
            echo "\">
                            ";
            // line 62
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.logout.value")), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        } else {
            // line 66
            echo "                    <li";
            if (array_key_exists("registerPage", $context)) {
                echo " class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.registration.link"), "html", null, true);
            echo "\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.registration.value")), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li";
            // line 71
            if (array_key_exists("loginPage", $context)) {
                echo " class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.login.link"), "html", null, true);
            echo "\">
                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.login.value")), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 77
        echo "            </ul>
        </nav>
    </div>
</header>
";
        
        $__internal_71df3a27c6ce5de294d5dda4b24ccb993fc354c4654a35f3e1fce7845c188646->leave($__internal_71df3a27c6ce5de294d5dda4b24ccb993fc354c4654a35f3e1fce7845c188646_prof);

        
        $__internal_a390be545e59154bd08f22e982ff1e01ed5b1742d2fe1aca6be4c352dd75d166->leave($__internal_a390be545e59154bd08f22e982ff1e01ed5b1742d2fe1aca6be4c352dd75d166_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 77,  266 => 73,  260 => 72,  254 => 71,  248 => 68,  242 => 67,  235 => 66,  228 => 62,  222 => 61,  215 => 57,  209 => 56,  202 => 55,  200 => 54,  194 => 51,  188 => 50,  182 => 49,  176 => 46,  170 => 45,  164 => 44,  158 => 41,  152 => 40,  146 => 39,  140 => 36,  134 => 35,  128 => 34,  113 => 21,  95 => 19,  91 => 18,  86 => 15,  68 => 13,  64 => 12,  58 => 8,  40 => 6,  36 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
    <div class=\"navbar-header\" id=\"header_images\">
        <div id=\"logo\" class=\"col-xs-12 col-sm-3\">
            <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.site.logo'|trans }}\" class=\"navbar-brand\">
                {% image 'http://assets.fhuszti.tech/nao/logo.png' %}
                    <img src=\"{{ asset_url }}\" alt=\"{{'core.site.logo'|trans}}\" />
                {% endimage %}
            </a>
        </div>

        <div id=\"header_middle-text\" class=\"hidden-xs col-sm-4 col-sm-push-1\">
            {% image 'http://assets.fhuszti.tech/nao/header/header-middle-text.png' %}
                <img src=\"{{ asset_url }}\" alt=\"{{'core.site.logo'|trans}}\" />
            {% endimage %}
        </div>

        <div id=\"header_birds-text\" class=\"hidden-xs col-sm-4 col-sm-push-1\">
            {% image 'http://assets.fhuszti.tech/nao/header/header-birds-text.png' %}
                <img src=\"{{ asset_url }}\" alt=\"{{'core.site.logo'|trans}}\" />
            {% endimage %}
        </div>

        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>

    <div class=\"collapse navbar-collapse\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- actual menu list -->
            <ul class=\"nav navbar-nav navbar-right\">
                <li{% if projectPage is defined %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.project.link'|trans }}\">
                        {{ 'core.header.project.value'|trans|upper }}
                    </a>
                </li>
                <li{% if observationPage is defined %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.observation.link'|trans }}\">
                        {{ 'core.header.observation.value'|trans|upper }}
                    </a>
                </li>
                <li{% if searchPage is defined %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('find') }}\" title=\"{{ 'core.header.search.link'|trans }}\">
                        {{ 'core.header.search.value'|trans|upper }}
                    </a>
                </li>
                <li{% if contactPage is defined %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('app_contact') }}\" title=\"{{ 'core.header.contact.link'|trans }}\">
                        {{ 'core.header.contact.value'|trans|upper }}
                    </a>
                </li>
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <li{% if profilePage is defined %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('fos_user_profile_show') }}\" title=\"{{ 'core.header.profile.link'|trans }}\">
                            {{ 'core.header.profile.value'|trans|upper }}
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('fos_user_security_logout') }}\" title=\"{{ 'core.header.logout.link'|trans }}\">
                            {{ 'core.header.logout.value'|trans|upper }}
                        </a>
                    </li>
                {% else %}
                    <li{% if registerPage is defined %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('fos_user_registration_register') }}\" title=\"{{ 'core.header.registration.link'|trans }}\">
                            {{ 'core.header.registration.value'|trans|upper }}
                        </a>
                    </li>
                    <li{% if loginPage is defined %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('fos_user_security_login') }}\" title=\"{{ 'core.header.login.link'|trans }}\">
                            {{ 'core.header.login.value'|trans|upper }}
                        </a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    </div>
</header>
", "header.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/app/Resources/views/header.html.twig");
    }
}
