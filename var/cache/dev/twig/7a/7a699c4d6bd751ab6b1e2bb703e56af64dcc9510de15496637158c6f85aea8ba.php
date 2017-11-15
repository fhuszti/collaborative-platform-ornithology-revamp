<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_826c0a33ad2ef68646cb35e3b5447c15c0a5c68a474adc69e212946cee3b5814 extends Twig_Template
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
        $__internal_82b6aaa58521d2fac9522b61d99ad3f3ab69c774f76a18ee0c1fdcae8eb79642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b6aaa58521d2fac9522b61d99ad3f3ab69c774f76a18ee0c1fdcae8eb79642->enter($__internal_82b6aaa58521d2fac9522b61d99ad3f3ab69c774f76a18ee0c1fdcae8eb79642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_55c6681fd849a4a3f620d1106d39614b55bd1dcb28e54ff75d7e71789d862a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c6681fd849a4a3f620d1106d39614b55bd1dcb28e54ff75d7e71789d862a89->enter($__internal_55c6681fd849a4a3f620d1106d39614b55bd1dcb28e54ff75d7e71789d862a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_82b6aaa58521d2fac9522b61d99ad3f3ab69c774f76a18ee0c1fdcae8eb79642->leave($__internal_82b6aaa58521d2fac9522b61d99ad3f3ab69c774f76a18ee0c1fdcae8eb79642_prof);

        
        $__internal_55c6681fd849a4a3f620d1106d39614b55bd1dcb28e54ff75d7e71789d862a89->leave($__internal_55c6681fd849a4a3f620d1106d39614b55bd1dcb28e54ff75d7e71789d862a89_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
