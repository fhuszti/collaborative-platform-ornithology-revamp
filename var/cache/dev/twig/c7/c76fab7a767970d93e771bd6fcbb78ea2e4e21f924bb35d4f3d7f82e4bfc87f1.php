<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_541efc276f67fe1502d9a848b12f5bfe67867536b272ff7ce0945e7f66289b1e extends Twig_Template
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
        $__internal_d3a445ba827d4cee5cb2b047c82fb4b2e9c8192dc8a7ab29ef99b46c039999f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a445ba827d4cee5cb2b047c82fb4b2e9c8192dc8a7ab29ef99b46c039999f1->enter($__internal_d3a445ba827d4cee5cb2b047c82fb4b2e9c8192dc8a7ab29ef99b46c039999f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_598c763d7ba7f350d08aec60605f5876ffce971623f43f32bb9b0492870ff8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598c763d7ba7f350d08aec60605f5876ffce971623f43f32bb9b0492870ff8f5->enter($__internal_598c763d7ba7f350d08aec60605f5876ffce971623f43f32bb9b0492870ff8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.modal.content"), "html", null, true);
        echo "

<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request form-horizontal\" id=\"login_forgotten-pass-modal-form\">
    <div class=\"form-group\">
        <label for=\"username\" class=\"col-sm-4 control-label\">
        \t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.email.label"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm-8\">
\t\t\t<input type=\"email\" id=\"username\" name=\"username\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.email.placeholder"), "html", null, true);
        echo "\" class=\"form-control input-lg\" required=\"required\" />
\t\t</div>
    </div>
    <div class=\"form-group\" id=\"login_modal-submit-group\">
        <button type=\"submit\" class=\"btn btn-info\" id=\"login_forgotten-pass-modal-button\" data-loading-text=\"<span class='glyphicon glyphicon-repeat'></span>\">
        \t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.login.modal.button"), "html", null, true);
        echo "
        </button>
    </div>
</form>
";
        
        $__internal_d3a445ba827d4cee5cb2b047c82fb4b2e9c8192dc8a7ab29ef99b46c039999f1->leave($__internal_d3a445ba827d4cee5cb2b047c82fb4b2e9c8192dc8a7ab29ef99b46c039999f1_prof);

        
        $__internal_598c763d7ba7f350d08aec60605f5876ffce971623f43f32bb9b0492870ff8f5->leave($__internal_598c763d7ba7f350d08aec60605f5876ffce971623f43f32bb9b0492870ff8f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 9,  36 => 6,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'core.login.modal.content'|trans }}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request form-horizontal\" id=\"login_forgotten-pass-modal-form\">
    <div class=\"form-group\">
        <label for=\"username\" class=\"col-sm-4 control-label\">
        \t{{ 'core.login.email.label'|trans }}
        </label>
        <div class=\"col-sm-8\">
\t\t\t<input type=\"email\" id=\"username\" name=\"username\" placeholder=\"{{ 'core.login.email.placeholder'|trans }}\" class=\"form-control input-lg\" required=\"required\" />
\t\t</div>
    </div>
    <div class=\"form-group\" id=\"login_modal-submit-group\">
        <button type=\"submit\" class=\"btn btn-info\" id=\"login_forgotten-pass-modal-button\" data-loading-text=\"<span class='glyphicon glyphicon-repeat'></span>\">
        \t{{ 'core.login.modal.button'|trans }}
        </button>
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
