<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_4257b5e7101678328b3d074eb5fe61e84f9c6f06ae789bfdfc4a3f7e6a89f8d2 extends Twig_Template
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
        $__internal_b8ebeadd6b0d19e46df0febfe42c8f1863b10429ea3c148d57082aa9dd7c206f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ebeadd6b0d19e46df0febfe42c8f1863b10429ea3c148d57082aa9dd7c206f->enter($__internal_b8ebeadd6b0d19e46df0febfe42c8f1863b10429ea3c148d57082aa9dd7c206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_0044b6efa63e0392270d52deeb40bf34ca83119258360221b2a727f0938cf318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0044b6efa63e0392270d52deeb40bf34ca83119258360221b2a727f0938cf318->enter($__internal_0044b6efa63e0392270d52deeb40bf34ca83119258360221b2a727f0938cf318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.title")), "html", null, true);
        echo "</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9938540_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540_login_1.png");
            // line 8
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.login"), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "9938540"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540.png");
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.second-menu.login"), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "\t</div>
</div>

<div class=\"col-xs-12\" id=\"login_content\">
\t<div id=\"login_btn-register\" class=\"row\">
\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.register_button"), "html", null, true);
        echo "\" class=\"btn btn-info\">
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.register_button"), "html", null, true);
        echo "
\t\t</a>
\t</div>

\t";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "\t    <div class=\"alert alert-warning login_error\">
\t    \t";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
\t    </div>
\t";
        }
        // line 25
        echo "
\t<form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
\t    ";
        // line 27
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 28
            echo "\t        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
\t    ";
        }
        // line 30
        echo "
\t    <div class=\"form-group\">
\t\t    <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.email.label"), "html", null, true);
        echo "</label>
\t\t    <div class=\"col-sm-8\">
\t\t    \t<input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.email.placeholder"), "html", null, true);
        echo "\" required=\"required\" class=\"form-control input-lg\" />
\t\t    </div>
\t    </div>

\t    <div class=\"form-group\">
\t\t    <div class=\"col-sm-4\" id=\"login_pass-label-group\">
\t\t    \t<label for=\"password\" class=\"control-label\">
\t\t    \t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.password.label"), "html", null, true);
        echo "
\t\t    \t</label>
\t\t    \t<div data-toggle=\"modal\" href=\"#login_forgotten-pass-modal\" id=\"login_forgotten-pass-link\">
\t\t\t\t\t<a id=\"login_forgotten-link\" data-action=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.forgotten_pass"), "html", null, true);
        echo "</a>
\t\t\t\t</div>
\t\t    </div>
\t\t    <div class=\"col-sm-8\">
\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.password.placeholder"), "html", null, true);
        echo "\" required=\"required\" class=\"form-control input-lg\" />
\t\t    </div>
\t    </div>

\t\t<div class=\"form-group\" id=\"login_remember-group\">
\t    \t<label for=\"remember_me\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.remember_me"), "html", null, true);
        echo "</label>
\t    \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t</div>
\t    
\t    <div class=\"form-group\" id=\"login_submit-group\">
\t    \t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.submit"), "html", null, true);
        echo "\" class=\"btn btn-info btn-lg\" />
\t    </div>

\t</form>

\t<div class=\"modal fade\" id=\"login_forgotten-pass-modal\">
\t  \t<div class=\"modal-dialog\">
\t\t    <div class=\"modal-content\">
\t\t      \t<div class=\"modal-header\">
\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
\t\t        \t<h4 class=\"modal-title\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.modal.title"), "html", null, true);
        echo "</h4>
\t\t        </div>
\t\t      \t
\t\t      \t<div class=\"modal-body\" id=\"login_forgotten-pass-modal-body\">
\t\t      \t\t<!-- filled with AJAX -->
\t\t      \t</div>

\t\t    </div>
\t  \t</div>
\t</div>

\t<div id=\"login_bird\" class=\"\"></div>
</div>
";
        
        $__internal_b8ebeadd6b0d19e46df0febfe42c8f1863b10429ea3c148d57082aa9dd7c206f->leave($__internal_b8ebeadd6b0d19e46df0febfe42c8f1863b10429ea3c148d57082aa9dd7c206f_prof);

        
        $__internal_0044b6efa63e0392270d52deeb40bf34ca83119258360221b2a727f0938cf318->leave($__internal_0044b6efa63e0392270d52deeb40bf34ca83119258360221b2a727f0938cf318_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 68,  156 => 58,  148 => 53,  140 => 48,  131 => 44,  125 => 41,  113 => 34,  108 => 32,  104 => 30,  98 => 28,  96 => 27,  92 => 26,  89 => 25,  83 => 22,  80 => 21,  78 => 20,  71 => 16,  65 => 15,  58 => 10,  40 => 8,  36 => 7,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>{{ 'core.login.title'|trans|upper }}</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t{% image 'http://assets.fhuszti.tech/nao/second-menu/login.png' %}
\t\t\t<img src=\"{{ asset_url }}\" alt=\"{{ 'core.second-menu.login'|trans }}\" />
\t\t{% endimage %}
\t</div>
</div>

<div class=\"col-xs-12\" id=\"login_content\">
\t<div id=\"login_btn-register\" class=\"row\">
\t\t<a href=\"{{ path('fos_user_registration_register') }}\" title=\"{{ 'core.login.register_button'|trans }}\" class=\"btn btn-info\">
\t\t\t{{ 'core.login.register_button'|trans }}
\t\t</a>
\t</div>

\t{% if error %}
\t    <div class=\"alert alert-warning login_error\">
\t    \t{{ error.messageKey|trans(error.messageData, 'security') }}
\t    </div>
\t{% endif %}

\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-horizontal\">
\t    {% if csrf_token %}
\t        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t    {% endif %}

\t    <div class=\"form-group\">
\t\t    <label for=\"username\" class=\"col-sm-4 control-label\">{{ 'core.login.email.label'|trans }}</label>
\t\t    <div class=\"col-sm-8\">
\t\t    \t<input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'core.login.email.placeholder'|trans }}\" required=\"required\" class=\"form-control input-lg\" />
\t\t    </div>
\t    </div>

\t    <div class=\"form-group\">
\t\t    <div class=\"col-sm-4\" id=\"login_pass-label-group\">
\t\t    \t<label for=\"password\" class=\"control-label\">
\t\t    \t\t{{ 'core.login.password.label'|trans }}
\t\t    \t</label>
\t\t    \t<div data-toggle=\"modal\" href=\"#login_forgotten-pass-modal\" id=\"login_forgotten-pass-link\">
\t\t\t\t\t<a id=\"login_forgotten-link\" data-action=\"{{ path('fos_user_resetting_request') }}\">{{ 'core.login.forgotten_pass'|trans }}</a>
\t\t\t\t</div>
\t\t    </div>
\t\t    <div class=\"col-sm-8\">
\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"{{ 'core.login.password.placeholder'|trans }}\" required=\"required\" class=\"form-control input-lg\" />
\t\t    </div>
\t    </div>

\t\t<div class=\"form-group\" id=\"login_remember-group\">
\t    \t<label for=\"remember_me\">{{ 'core.login.remember_me'|trans }}</label>
\t    \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t</div>
\t    
\t    <div class=\"form-group\" id=\"login_submit-group\">
\t    \t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'core.login.submit'|trans }}\" class=\"btn btn-info btn-lg\" />
\t    </div>

\t</form>

\t<div class=\"modal fade\" id=\"login_forgotten-pass-modal\">
\t  \t<div class=\"modal-dialog\">
\t\t    <div class=\"modal-content\">
\t\t      \t<div class=\"modal-header\">
\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
\t\t        \t<h4 class=\"modal-title\">{{ 'core.login.modal.title'|trans }}</h4>
\t\t        </div>
\t\t      \t
\t\t      \t<div class=\"modal-body\" id=\"login_forgotten-pass-modal-body\">
\t\t      \t\t<!-- filled with AJAX -->
\t\t      \t</div>

\t\t    </div>
\t  \t</div>
\t</div>

\t<div id=\"login_bird\" class=\"\"></div>
</div>
", "@FOSUser/Security/login_content.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
