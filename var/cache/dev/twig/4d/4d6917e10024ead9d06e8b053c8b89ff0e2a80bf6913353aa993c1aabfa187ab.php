<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6868869567e467dd35b0ea2d0e22369191e3ab86392e82ed49c41e333e4afae3 extends Twig_Template
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
        $__internal_0957263812b6b5c1debcbf3cfc353e12a506c6b7eb2791dcd8e6fb0be24f04cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0957263812b6b5c1debcbf3cfc353e12a506c6b7eb2791dcd8e6fb0be24f04cb->enter($__internal_0957263812b6b5c1debcbf3cfc353e12a506c6b7eb2791dcd8e6fb0be24f04cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_167cf7df8041932d07875755b245ae6c42b2edac72a63e1fb297948162ba0e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167cf7df8041932d07875755b245ae6c42b2edac72a63e1fb297948162ba0e81->enter($__internal_167cf7df8041932d07875755b245ae6c42b2edac72a63e1fb297948162ba0e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0957263812b6b5c1debcbf3cfc353e12a506c6b7eb2791dcd8e6fb0be24f04cb->leave($__internal_0957263812b6b5c1debcbf3cfc353e12a506c6b7eb2791dcd8e6fb0be24f04cb_prof);

        
        $__internal_167cf7df8041932d07875755b245ae6c42b2edac72a63e1fb297948162ba0e81->leave($__internal_167cf7df8041932d07875755b245ae6c42b2edac72a63e1fb297948162ba0e81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
