<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_30f9e1abce3423494c9ab3edede1cc93a7bc322d18d734b518a56f5934dd7eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e92a00135bdb4bddbe5072e479f2795ef08bbd229542564e6780d78e2cd1fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e92a00135bdb4bddbe5072e479f2795ef08bbd229542564e6780d78e2cd1fb5->enter($__internal_9e92a00135bdb4bddbe5072e479f2795ef08bbd229542564e6780d78e2cd1fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_7daf35a1d11d2106c06deb5999f970ce689c6a8570930ab4c471b1fcc615b4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daf35a1d11d2106c06deb5999f970ce689c6a8570930ab4c471b1fcc615b4dd->enter($__internal_7daf35a1d11d2106c06deb5999f970ce689c6a8570930ab4c471b1fcc615b4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9e92a00135bdb4bddbe5072e479f2795ef08bbd229542564e6780d78e2cd1fb5->leave($__internal_9e92a00135bdb4bddbe5072e479f2795ef08bbd229542564e6780d78e2cd1fb5_prof);

        
        $__internal_7daf35a1d11d2106c06deb5999f970ce689c6a8570930ab4c471b1fcc615b4dd->leave($__internal_7daf35a1d11d2106c06deb5999f970ce689c6a8570930ab4c471b1fcc615b4dd_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3fb7a37180ff73fdab1e5acb4effb4d163345d5352d94af39a01c6222d918d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fb7a37180ff73fdab1e5acb4effb4d163345d5352d94af39a01c6222d918d0->enter($__internal_b3fb7a37180ff73fdab1e5acb4effb4d163345d5352d94af39a01c6222d918d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_734ed8dc28df0776c03665d19921237cf600844a1766e95df8fe25b65753222d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734ed8dc28df0776c03665d19921237cf600844a1766e95df8fe25b65753222d->enter($__internal_734ed8dc28df0776c03665d19921237cf600844a1766e95df8fe25b65753222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 2)->display($context);
        
        $__internal_734ed8dc28df0776c03665d19921237cf600844a1766e95df8fe25b65753222d->leave($__internal_734ed8dc28df0776c03665d19921237cf600844a1766e95df8fe25b65753222d_prof);

        
        $__internal_b3fb7a37180ff73fdab1e5acb4effb4d163345d5352d94af39a01c6222d918d0->leave($__internal_b3fb7a37180ff73fdab1e5acb4effb4d163345d5352d94af39a01c6222d918d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
