<?php

/* core/find.html.twig */
class __TwigTemplate_f6587d941d11c65dd802d2e0b581010c09a00835b5f0be028738951fab7b896d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "core/find.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19a4363bb090367875ba37121921e72f580f5a5bdf67dd80e3059900c7e6c17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a4363bb090367875ba37121921e72f580f5a5bdf67dd80e3059900c7e6c17a->enter($__internal_19a4363bb090367875ba37121921e72f580f5a5bdf67dd80e3059900c7e6c17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/find.html.twig"));

        $__internal_2c28e7fb34fdc149a577f1e2082d4e7b11d5e8bbba7adbd23ed361ae02c50db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c28e7fb34fdc149a577f1e2082d4e7b11d5e8bbba7adbd23ed361ae02c50db7->enter($__internal_2c28e7fb34fdc149a577f1e2082d4e7b11d5e8bbba7adbd23ed361ae02c50db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/find.html.twig"));

        // line 2
        $context["homepage"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a4363bb090367875ba37121921e72f580f5a5bdf67dd80e3059900c7e6c17a->leave($__internal_19a4363bb090367875ba37121921e72f580f5a5bdf67dd80e3059900c7e6c17a_prof);

        
        $__internal_2c28e7fb34fdc149a577f1e2082d4e7b11d5e8bbba7adbd23ed361ae02c50db7->leave($__internal_2c28e7fb34fdc149a577f1e2082d4e7b11d5e8bbba7adbd23ed361ae02c50db7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69df4bbdf7c3ba71b46075b01ba18584e9d03de52c56b90e6a1c5c0f19096759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69df4bbdf7c3ba71b46075b01ba18584e9d03de52c56b90e6a1c5c0f19096759->enter($__internal_69df4bbdf7c3ba71b46075b01ba18584e9d03de52c56b90e6a1c5c0f19096759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_007aefc8d04c1655d319fcd374344e249c6835f8a572005289e5eebb9c13cc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007aefc8d04c1655d319fcd374344e249c6835f8a572005289e5eebb9c13cc05->enter($__internal_007aefc8d04c1655d319fcd374344e249c6835f8a572005289e5eebb9c13cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a86de9d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a86de9d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a86de9d_search_1.css");
            // line 8
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "a86de9d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a86de9d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a86de9d_jcarousel.responsive_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "a86de9d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a86de9d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a86de9d.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_007aefc8d04c1655d319fcd374344e249c6835f8a572005289e5eebb9c13cc05->leave($__internal_007aefc8d04c1655d319fcd374344e249c6835f8a572005289e5eebb9c13cc05_prof);

        
        $__internal_69df4bbdf7c3ba71b46075b01ba18584e9d03de52c56b90e6a1c5c0f19096759->leave($__internal_69df4bbdf7c3ba71b46075b01ba18584e9d03de52c56b90e6a1c5c0f19096759_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c935bfa82c60c4e5fe4543825e75cae75b9747bd76de32bb7a854dab1f3112f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c935bfa82c60c4e5fe4543825e75cae75b9747bd76de32bb7a854dab1f3112f9->enter($__internal_c935bfa82c60c4e5fe4543825e75cae75b9747bd76de32bb7a854dab1f3112f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf1877dbe27c7a944844c88d6ec35a9895ef0e1041662e276ff97e02926d5920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1877dbe27c7a944844c88d6ec35a9895ef0e1041662e276ff97e02926d5920->enter($__internal_bf1877dbe27c7a944844c88d6ec35a9895ef0e1041662e276ff97e02926d5920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>RECHERCHE</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t\t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36110ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac_search_1.png");
            // line 19
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
        } else {
            // asset "36110ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac.png");
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 21
        echo "\t</div>
</div>
<div class=\"col-xs-12\" id=\"search_content\">
\t<div id=\"container_fiche\" style=\"display:none;\">
\t</div>
\t<div id=\"container_find\">

\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t    <div class=\"input-group\">
\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mySearch", array()), 'widget');
        echo "
\t\t<div class=\"input-group-btn\">
\t      <button class=\"btn btn-lg btn-default search-btn\" type=\"button\">
\t        <i class=\"glyphicon glyphicon-search\"></i>
\t      </button>
\t\t</div>
\t\t</div>
\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


\t  <div class=\"list-group search-list\" id=\"results\">
\t  </div>
\t</div>
</div>
";
        
        $__internal_bf1877dbe27c7a944844c88d6ec35a9895ef0e1041662e276ff97e02926d5920->leave($__internal_bf1877dbe27c7a944844c88d6ec35a9895ef0e1041662e276ff97e02926d5920_prof);

        
        $__internal_c935bfa82c60c4e5fe4543825e75cae75b9747bd76de32bb7a854dab1f3112f9->leave($__internal_c935bfa82c60c4e5fe4543825e75cae75b9747bd76de32bb7a854dab1f3112f9_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86a6cad06ae2eff4a671f995f182ab5157d2d8bbbcbb99f4a8d1405c03c45625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a6cad06ae2eff4a671f995f182ab5157d2d8bbbcbb99f4a8d1405c03c45625->enter($__internal_86a6cad06ae2eff4a671f995f182ab5157d2d8bbbcbb99f4a8d1405c03c45625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06de430d5897359dcbe61f2d0daf52d118805bf859d1e944e31eeb020d186657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06de430d5897359dcbe61f2d0daf52d118805bf859d1e944e31eeb020d186657->enter($__internal_06de430d5897359dcbe61f2d0daf52d118805bf859d1e944e31eeb020d186657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_06de430d5897359dcbe61f2d0daf52d118805bf859d1e944e31eeb020d186657->leave($__internal_06de430d5897359dcbe61f2d0daf52d118805bf859d1e944e31eeb020d186657_prof);

        
        $__internal_86a6cad06ae2eff4a671f995f182ab5157d2d8bbbcbb99f4a8d1405c03c45625->leave($__internal_86a6cad06ae2eff4a671f995f182ab5157d2d8bbbcbb99f4a8d1405c03c45625_prof);

    }

    // line 48
    public function block_script($context, array $blocks = array())
    {
        $__internal_6468b33d7034536ea19844fb85d24b87f053fd6a944676579eeeff67d5b0d390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6468b33d7034536ea19844fb85d24b87f053fd6a944676579eeeff67d5b0d390->enter($__internal_6468b33d7034536ea19844fb85d24b87f053fd6a944676579eeeff67d5b0d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_cb4eb281f3ec0b1fc282ee77163a9aa9dcc5c3e222a339850b093e8c73c5445d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4eb281f3ec0b1fc282ee77163a9aa9dcc5c3e222a339850b093e8c73c5445d->enter($__internal_cb4eb281f3ec0b1fc282ee77163a9aa9dcc5c3e222a339850b093e8c73c5445d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 49
        echo "<script>
\$(document).ready(function(){
\t\$('#form_mySearch').keyup(function() {
\t  var value = \$(this).val();
\t  \tif(value === '' || value.length < 3) {
\t  \t\t\$('#results').empty();
  \t\t}
  \t\telse {
\t      \$.ajax({
\t         url : '";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "', 
\t         type : 'GET', 
\t         data : 'search=' + value,
\t         success: function(reponse) { 
\t     \t\t\$('#results').empty();
\t     \t    if (reponse.error) {
     \t    \t\t\$('#results').prepend('<p>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.find.msg.nofind"), "html", null, true);
        echo "</p>');
\t     \t    }
\t     \t    else {
\t\t\t\t\tObject.keys(reponse).forEach(function(key) {

\t\t\t\t\t\tif (key == 0) {
\t\t\t\t\t\t\t\$('#results').append('<a href=\"'+ reponse[key].link +'\" class=\"list-group-item theFind w3-green w3-opacity-3\">'+ reponse[key].name +'</a>');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {

\t\t\t\t\t    \t\$('#results').append('<a href=\"'+ reponse[key].link +'\" class=\"list-group-item theFind\">'+ reponse[key].name +'</a>');
\t\t\t\t\t    }
\t\t\t\t\t});
\t     \t    }
\t          },
             error: function() { 
                \$('#results').empty();
                \$('#results').html('<p>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.find.msg.error"), "html", null, true);
        echo "</p>');
                }
\t      });
  \t\t}
\t});

});

\$(\"#results\").on(\"click\", \"a.theFind\", function(){
\tvar href = \$(this).attr('href');
    \$('#container_find,.nao_title').hide('slow');
    \$('body').css({'background-image': 'url(http://assets.fhuszti.tech/nao/search/search-bg.jpg)'});
    \$('#container_fiche').load(href);
    \$('#container_fiche').show('slow');
    return false;
});

</script>
";
        
        $__internal_cb4eb281f3ec0b1fc282ee77163a9aa9dcc5c3e222a339850b093e8c73c5445d->leave($__internal_cb4eb281f3ec0b1fc282ee77163a9aa9dcc5c3e222a339850b093e8c73c5445d_prof);

        
        $__internal_6468b33d7034536ea19844fb85d24b87f053fd6a944676579eeeff67d5b0d390->leave($__internal_6468b33d7034536ea19844fb85d24b87f053fd6a944676579eeeff67d5b0d390_prof);

    }

    public function getTemplateName()
    {
        return "core/find.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 81,  220 => 64,  211 => 58,  200 => 49,  191 => 48,  178 => 46,  169 => 45,  151 => 37,  141 => 30,  136 => 28,  127 => 21,  113 => 19,  109 => 18,  101 => 12,  92 => 11,  64 => 8,  60 => 5,  55 => 4,  46 => 3,  36 => 1,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% set homepage = true %}
{% block stylesheets %}
\t{{ parent() }}
    {% stylesheets filter='cssrewrite, ?scssphp'
    'bundles/app/css/search.css'
        'bundles/app/css/jcarousel.responsive.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
{% endblock %}
{% block body %}
<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>RECHERCHE</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/search.png' %}
\t\t\t<img src=\"{{ asset_url }}\" alt=\"\" />
\t\t{% endimage %}
\t</div>
</div>
<div class=\"col-xs-12\" id=\"search_content\">
\t<div id=\"container_fiche\" style=\"display:none;\">
\t</div>
\t<div id=\"container_find\">

\t\t{{ form_start(form) }}
\t    <div class=\"input-group\">
\t\t{{ form_widget(form.mySearch) }}
\t\t<div class=\"input-group-btn\">
\t      <button class=\"btn btn-lg btn-default search-btn\" type=\"button\">
\t        <i class=\"glyphicon glyphicon-search\"></i>
\t      </button>
\t\t</div>
\t\t</div>
\t\t{{ form_end(form) }}


\t  <div class=\"list-group search-list\" id=\"results\">
\t  </div>
\t</div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
{% block script %}
<script>
\$(document).ready(function(){
\t\$('#form_mySearch').keyup(function() {
\t  var value = \$(this).val();
\t  \tif(value === '' || value.length < 3) {
\t  \t\t\$('#results').empty();
  \t\t}
  \t\telse {
\t      \$.ajax({
\t         url : '{{ path('search') }}', 
\t         type : 'GET', 
\t         data : 'search=' + value,
\t         success: function(reponse) { 
\t     \t\t\$('#results').empty();
\t     \t    if (reponse.error) {
     \t    \t\t\$('#results').prepend('<p>{{ 'core.find.msg.nofind'|trans }}</p>');
\t     \t    }
\t     \t    else {
\t\t\t\t\tObject.keys(reponse).forEach(function(key) {

\t\t\t\t\t\tif (key == 0) {
\t\t\t\t\t\t\t\$('#results').append('<a href=\"'+ reponse[key].link +'\" class=\"list-group-item theFind w3-green w3-opacity-3\">'+ reponse[key].name +'</a>');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {

\t\t\t\t\t    \t\$('#results').append('<a href=\"'+ reponse[key].link +'\" class=\"list-group-item theFind\">'+ reponse[key].name +'</a>');
\t\t\t\t\t    }
\t\t\t\t\t});
\t     \t    }
\t          },
             error: function() { 
                \$('#results').empty();
                \$('#results').html('<p>{{ 'core.find.msg.error'|trans }}</p>');
                }
\t      });
  \t\t}
\t});

});

\$(\"#results\").on(\"click\", \"a.theFind\", function(){
\tvar href = \$(this).attr('href');
    \$('#container_find,.nao_title').hide('slow');
    \$('body').css({'background-image': 'url(http://assets.fhuszti.tech/nao/search/search-bg.jpg)'});
    \$('#container_fiche').load(href);
    \$('#container_fiche').show('slow');
    return false;
});

</script>
{% endblock %}", "core/find.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/views/core/find.html.twig");
    }
}
