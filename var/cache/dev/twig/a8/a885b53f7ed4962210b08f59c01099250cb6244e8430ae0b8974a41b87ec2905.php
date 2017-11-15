<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5f7bcb244b899f54d02dcf9b83466b880075abfb9bf95e53297b5631762773b8 extends Twig_Template
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
        $__internal_b3cdea16bd56714fd8e94acf335db66c25a1558bdeecb9598583c04eed8e2d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cdea16bd56714fd8e94acf335db66c25a1558bdeecb9598583c04eed8e2d46->enter($__internal_b3cdea16bd56714fd8e94acf335db66c25a1558bdeecb9598583c04eed8e2d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_bdaa7348c8d8247463628a425aa971627d60bc6454db41fbb4541ca4a98aea16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaa7348c8d8247463628a425aa971627d60bc6454db41fbb4541ca4a98aea16->enter($__internal_bdaa7348c8d8247463628a425aa971627d60bc6454db41fbb4541ca4a98aea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b3cdea16bd56714fd8e94acf335db66c25a1558bdeecb9598583c04eed8e2d46->leave($__internal_b3cdea16bd56714fd8e94acf335db66c25a1558bdeecb9598583c04eed8e2d46_prof);

        
        $__internal_bdaa7348c8d8247463628a425aa971627d60bc6454db41fbb4541ca4a98aea16->leave($__internal_bdaa7348c8d8247463628a425aa971627d60bc6454db41fbb4541ca4a98aea16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
