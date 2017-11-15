<?php

/* core/index.html.twig */
class __TwigTemplate_5d87d385c048de4b633c0383952e43300c2749a92b6265088d81ab2f37d68c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "core/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0441a0fc9b2e1600e86b12d74425ad9554cb07004c028ac6d1bdba439b05fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0441a0fc9b2e1600e86b12d74425ad9554cb07004c028ac6d1bdba439b05fdb->enter($__internal_b0441a0fc9b2e1600e86b12d74425ad9554cb07004c028ac6d1bdba439b05fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        $__internal_0a042f7f05e86f4163535d26a791acbddff400f62ff1813cd084f4ff8dd15991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a042f7f05e86f4163535d26a791acbddff400f62ff1813cd084f4ff8dd15991->enter($__internal_0a042f7f05e86f4163535d26a791acbddff400f62ff1813cd084f4ff8dd15991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        // line 2
        $context["homePage"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0441a0fc9b2e1600e86b12d74425ad9554cb07004c028ac6d1bdba439b05fdb->leave($__internal_b0441a0fc9b2e1600e86b12d74425ad9554cb07004c028ac6d1bdba439b05fdb_prof);

        
        $__internal_0a042f7f05e86f4163535d26a791acbddff400f62ff1813cd084f4ff8dd15991->leave($__internal_0a042f7f05e86f4163535d26a791acbddff400f62ff1813cd084f4ff8dd15991_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6ac1a7160fdb789588c670374606b0c6812b85ba36db7531427f2b55fd4759f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ac1a7160fdb789588c670374606b0c6812b85ba36db7531427f2b55fd4759f->enter($__internal_d6ac1a7160fdb789588c670374606b0c6812b85ba36db7531427f2b55fd4759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01926d82d180190f941d71d97ed2ccd7e48c5d0df3d8608a4661ebef79f04628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01926d82d180190f941d71d97ed2ccd7e48c5d0df3d8608a4661ebef79f04628->enter($__internal_01926d82d180190f941d71d97ed2ccd7e48c5d0df3d8608a4661ebef79f04628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b487b39_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b487b39_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b487b39_home_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "b487b39"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b487b39") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b487b39.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_01926d82d180190f941d71d97ed2ccd7e48c5d0df3d8608a4661ebef79f04628->leave($__internal_01926d82d180190f941d71d97ed2ccd7e48c5d0df3d8608a4661ebef79f04628_prof);

        
        $__internal_d6ac1a7160fdb789588c670374606b0c6812b85ba36db7531427f2b55fd4759f->leave($__internal_d6ac1a7160fdb789588c670374606b0c6812b85ba36db7531427f2b55fd4759f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_830b7fc35a5f4584b81dc506aeba39dad222d8cdd1e7e70b86516c500d68ba04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830b7fc35a5f4584b81dc506aeba39dad222d8cdd1e7e70b86516c500d68ba04->enter($__internal_830b7fc35a5f4584b81dc506aeba39dad222d8cdd1e7e70b86516c500d68ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afb361dd4eb0dac47128b57535c18ed18bda0839f8a160b1a50c9870e75634d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb361dd4eb0dac47128b57535c18ed18bda0839f8a160b1a50c9870e75634d2->enter($__internal_afb361dd4eb0dac47128b57535c18ed18bda0839f8a160b1a50c9870e75634d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<div id=\"carousel\" class=\"row carousel slide\" data-ride=\"carousel\">
\t  \t<ol class=\"carousel-indicators\">
\t\t    <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
\t\t    <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
\t  \t</ol>

\t  \t<div class=\"carousel-inner\">
\t\t    <div class=\"item active\">
\t\t\t    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
        echo "\">
\t                ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "958c526_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_958c526_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/958c526_slide-observation_1.png");
            // line 25
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "958c526"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_958c526") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/958c526.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "\t            </a>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t    \t<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
        echo "\">
\t                ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc0c9bf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc0c9bf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/fc0c9bf_slide-search_1.png");
            // line 32
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "fc0c9bf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc0c9bf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/fc0c9bf.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "\t            </a>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t    \t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
        echo "\">
\t                ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "58749e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_58749e8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/58749e8_slide-project_1.png");
            // line 39
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "58749e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_58749e8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/58749e8.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "\t            </a>
\t\t    </div>
\t  \t</div>

\t  \t<a class=\"left carousel-control\" href=\"#carousel\" data-slide=\"prev\">
\t    \t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t  \t</a>
\t  \t<a class=\"right carousel-control\" href=\"#carousel\" data-slide=\"next\">
\t    \t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t  \t</a>
\t</div>

    <div id=\"mainContent\" class=\"row\">
    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t<a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
        echo "\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t";
        // line 57
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44a4ae9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_44a4ae9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/44a4ae9_observation_1.png");
            // line 58
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "44a4ae9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_44a4ae9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/44a4ae9.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.observation.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_obs.title"), "html", null, true);
        echo "</h3>

\t\t    \t\t<p>
\t\t    \t\t\t";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_obs.text"), "html", null, true);
        echo "
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
    \t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
        echo "\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8540466_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8540466_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/8540466_project_1.png");
            // line 75
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 75, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "8540466"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8540466") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/8540466.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 75, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.project.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 77
        echo "\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_project.title"), "html", null, true);
        echo "</h3>

\t\t    \t\t<p>
\t\t    \t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_project.text"), "html", null, true);
        echo "
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
    \t\t<a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
        echo "\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t";
        // line 91
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36110ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac_search_1.png");
            // line 92
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "36110ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_36110ac") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/36110ac.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.search.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 94
        echo "\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_search.title"), "html", null, true);
        echo "</h3>

\t\t    \t\t<p>
\t\t    \t\t\t";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_search.text"), "html", null, true);
        echo "
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6";
        // line 105
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " col-md-5 col-md-push-1";
        } else {
            echo " col-md-4";
        }
        echo " home-block\">
    \t\t<a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.contact.link"), "html", null, true);
        echo "\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t";
        // line 108
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9aa0c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0_contact_1.png");
            // line 109
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 109, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.contact.link"), "html", null, true);
            echo "\" />
\t                ";
        } else {
            // asset "e9aa0c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0.png");
            echo "\t                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 109, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.contact.link"), "html", null, true);
            echo "\" />
\t                ";
        }
        unset($context["asset_url"]);
        // line 111
        echo "\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_contact.title"), "html", null, true);
        echo "</h3>

\t\t    \t\t<p>
\t\t    \t\t\t";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_contact.text"), "html", null, true);
        echo "
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t";
        // line 122
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 123
            echo "    \t\t<div class=\"col-xs-12 col-md-5 col-md-push-1 home-block\" id=\"home_block-profile\">
\t    \t\t<a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.profile.link"), "html", null, true);
            echo "\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t";
            // line 126
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "b761f5e_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b761f5e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/b761f5e_profile_1.png");
                // line 127
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 127, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.profile.link"), "html", null, true);
                echo "\" />
\t\t                ";
            } else {
                // asset "b761f5e"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b761f5e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/b761f5e.png");
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 127, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.profile.link"), "html", null, true);
                echo "\" />
\t\t                ";
            }
            unset($context["asset_url"]);
            // line 129
            echo "\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_profile.title"), "html", null, true);
            echo "</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_profile.text"), "html", null, true);
            echo "
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>
    \t";
        } else {
            // line 140
            echo "\t    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t\t<a href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.registration.link"), "html", null, true);
            echo "\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t";
            // line 143
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "436d7cf_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_436d7cf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/436d7cf_register_1.png");
                // line 144
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 144, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.registration.link"), "html", null, true);
                echo "\" />
\t\t                ";
            } else {
                // asset "436d7cf"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_436d7cf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/436d7cf.png");
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 144, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.registration.link"), "html", null, true);
                echo "\" />
\t\t                ";
            }
            unset($context["asset_url"]);
            // line 146
            echo "\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_register.title"), "html", null, true);
            echo "</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_register.text"), "html", null, true);
            echo "
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>

\t    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t\t<a href=\"";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_home");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.login.link"), "html", null, true);
            echo "\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t";
            // line 160
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "9938540_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540_login_1.png");
                // line 161
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 161, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.login.link"), "html", null, true);
                echo "\" />
\t\t                ";
            } else {
                // asset "9938540"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9938540") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/9938540.png");
                echo "\t\t                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 161, $this->getSourceContext()); })()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.header.login.link"), "html", null, true);
                echo "\" />
\t\t                ";
            }
            unset($context["asset_url"]);
            // line 163
            echo "\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_login.title"), "html", null, true);
            echo "</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.home.block_login.text"), "html", null, true);
            echo "
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>
    \t";
        }
        // line 174
        echo "    </div>
";
        
        $__internal_afb361dd4eb0dac47128b57535c18ed18bda0839f8a160b1a50c9870e75634d2->leave($__internal_afb361dd4eb0dac47128b57535c18ed18bda0839f8a160b1a50c9870e75634d2_prof);

        
        $__internal_830b7fc35a5f4584b81dc506aeba39dad222d8cdd1e7e70b86516c500d68ba04->leave($__internal_830b7fc35a5f4584b81dc506aeba39dad222d8cdd1e7e70b86516c500d68ba04_prof);

    }

    public function getTemplateName()
    {
        return "core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 174,  561 => 168,  555 => 165,  551 => 163,  533 => 161,  529 => 160,  522 => 158,  512 => 151,  506 => 148,  502 => 146,  484 => 144,  480 => 143,  473 => 141,  470 => 140,  461 => 134,  455 => 131,  451 => 129,  433 => 127,  429 => 126,  422 => 124,  419 => 123,  417 => 122,  408 => 116,  402 => 113,  398 => 111,  380 => 109,  376 => 108,  369 => 106,  361 => 105,  352 => 99,  346 => 96,  342 => 94,  324 => 92,  320 => 91,  313 => 89,  303 => 82,  297 => 79,  293 => 77,  275 => 75,  271 => 74,  264 => 72,  254 => 65,  248 => 62,  244 => 60,  226 => 58,  222 => 57,  215 => 55,  199 => 41,  181 => 39,  177 => 38,  171 => 37,  166 => 34,  148 => 32,  144 => 31,  138 => 30,  133 => 27,  115 => 25,  111 => 24,  105 => 23,  94 => 14,  85 => 13,  63 => 9,  59 => 7,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% set homePage = true %}

{% block stylesheets %}
    {{ parent() }}

    {% stylesheets filter='cssrewrite, ?scssphp'
        'bundles/app/css/home.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
{% endblock %}

{% block body %}
\t<div id=\"carousel\" class=\"row carousel slide\" data-ride=\"carousel\">
\t  \t<ol class=\"carousel-indicators\">
\t\t    <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
\t\t    <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
\t  \t</ol>

\t  \t<div class=\"carousel-inner\">
\t\t    <div class=\"item active\">
\t\t\t    <a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.observation.link'|trans }}\">
\t                {% image 'http://assets.fhuszti.tech/nao/home/slide-observation.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.observation.link'|trans}}\" />
\t                {% endimage %}
\t            </a>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t    \t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.search.link'|trans }}\">
\t                {% image 'http://assets.fhuszti.tech/nao/home/slide-search.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.search.link'|trans}}\" />
\t                {% endimage %}
\t            </a>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t    \t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.project.link'|trans }}\">
\t                {% image 'http://assets.fhuszti.tech/nao/home/slide-project.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.project.link'|trans}}\" />
\t                {% endimage %}
\t            </a>
\t\t    </div>
\t  \t</div>

\t  \t<a class=\"left carousel-control\" href=\"#carousel\" data-slide=\"prev\">
\t    \t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t  \t</a>
\t  \t<a class=\"right carousel-control\" href=\"#carousel\" data-slide=\"next\">
\t    \t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t  \t</a>
\t</div>

    <div id=\"mainContent\" class=\"row\">
    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.observation.link'|trans }}\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/observation.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.observation.link'|trans}}\" />
\t                {% endimage %}
\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>{{ 'core.home.block_obs.title'|trans }}</h3>

\t\t    \t\t<p>
\t\t    \t\t\t{{ 'core.home.block_obs.text'|trans }}
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.project.link'|trans }}\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/project.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.project.link'|trans}}\" />
\t                {% endimage %}
\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>{{ 'core.home.block_project.title'|trans }}</h3>

\t\t    \t\t<p>
\t\t    \t\t\t{{ 'core.home.block_project.text'|trans }}
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.search.link'|trans }}\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/search.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.search.link'|trans}}\" />
\t                {% endimage %}
\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>{{ 'core.home.block_search.title'|trans }}</h3>

\t\t    \t\t<p>
\t\t    \t\t\t{{ 'core.home.block_search.text'|trans }}
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t<div class=\"col-xs-12 col-sm-6{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %} col-md-5 col-md-push-1{% else %} col-md-4{% endif %} home-block\">
    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.contact.link'|trans }}\">
\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/contact.png' %}
\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.contact.link'|trans}}\" />
\t                {% endimage %}
\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t    \t\t<h3>{{ 'core.home.block_contact.title'|trans }}</h3>

\t\t    \t\t<p>
\t\t    \t\t\t{{ 'core.home.block_contact.text'|trans }}
\t\t    \t\t</p>
\t\t    \t</div>
\t    \t</a>
    \t</div>

    \t{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
    \t\t<div class=\"col-xs-12 col-md-5 col-md-push-1 home-block\" id=\"home_block-profile\">
\t    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.profile.link'|trans }}\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/profile.png' %}
\t\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.profile.link'|trans}}\" />
\t\t                {% endimage %}
\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>{{ 'core.home.block_profile.title'|trans }}</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t{{ 'core.home.block_profile.text'|trans }}
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>
    \t{% else %}
\t    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.registration.link'|trans }}\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/register.png' %}
\t\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.registration.link'|trans}}\" />
\t\t                {% endimage %}
\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>{{ 'core.home.block_register.title'|trans }}</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t{{ 'core.home.block_register.text'|trans }}
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>

\t    \t<div class=\"col-xs-12 col-sm-6 col-md-4 home-block\">
\t    \t\t<a href=\"{{ path('core_home') }}\" title=\"{{ 'core.header.login.link'|trans }}\">
\t\t\t    \t<div class=\"col-xs-12 alert alert-info\">
\t\t\t    \t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/login.png' %}
\t\t                    <img src=\"{{ asset_url }}\" alt=\"{{'core.header.login.link'|trans}}\" />
\t\t                {% endimage %}
\t\t\t    \t</div>
\t\t\t    \t<div class=\"col-xs-12 home-block-content\">
\t\t\t    \t\t<h3>{{ 'core.home.block_login.title'|trans }}</h3>

\t\t\t    \t\t<p>
\t\t\t    \t\t\t{{ 'core.home.block_login.text'|trans }}
\t\t\t    \t\t</p>
\t\t\t    \t</div>
\t\t    \t</a>
\t    \t</div>
    \t{% endif %}
    </div>
{% endblock %}
", "core/index.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/app/Resources/views/core/index.html.twig");
    }
}
