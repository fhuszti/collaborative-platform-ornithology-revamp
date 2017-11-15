<?php

/* layout.html.twig */
class __TwigTemplate_543a1d4885d588aa9c7913eb70f619f61fa4d3b7619613ca3b871006176e9d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4697bedd09a721d27b9294f85d3cbe833f016ba3dcc24fcfea258da9c51ca612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4697bedd09a721d27b9294f85d3cbe833f016ba3dcc24fcfea258da9c51ca612->enter($__internal_4697bedd09a721d27b9294f85d3cbe833f016ba3dcc24fcfea258da9c51ca612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_650446138dde08a10e8c9278a7a9da2b6a39dd8b0dee20c9eb4ceae17b978b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650446138dde08a10e8c9278a7a9da2b6a39dd8b0dee20c9eb4ceae17b978b18->enter($__internal_650446138dde08a10e8c9278a7a9da2b6a39dd8b0dee20c9eb4ceae17b978b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        </title>

        ";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "
        <link rel=\"shortcut icon\" href=\"http://assets.fhuszti.tech/favicon.ico\" type=\"image/x-icon\" />

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body role=\"document\">
        <div>
            ";
        // line 41
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

            <div class=\"container\" id=\"wrapper\">
                <div id=\"content\" role=\"main\"";
        // line 44
        if ( !array_key_exists("homePage", $context)) {
            echo " class=\"col-sm-10\"";
        }
        echo ">
                    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "                </div>

                ";
        // line 49
        if ( !array_key_exists("homePage", $context)) {
            // line 50
            echo "                    <div class=\"hidden-xs col-sm-2\" id=\"second-menu\">
                        ";
            // line 51
            echo twig_include($this->env, $context, "second-menu.html.twig");
            echo "
                    </div>
                ";
        }
        // line 54
        echo "            </div>

            ";
        // line 56
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
        </div>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 69
        echo "    </body>
</html>";
        
        $__internal_4697bedd09a721d27b9294f85d3cbe833f016ba3dcc24fcfea258da9c51ca612->leave($__internal_4697bedd09a721d27b9294f85d3cbe833f016ba3dcc24fcfea258da9c51ca612_prof);

        
        $__internal_650446138dde08a10e8c9278a7a9da2b6a39dd8b0dee20c9eb4ceae17b978b18->leave($__internal_650446138dde08a10e8c9278a7a9da2b6a39dd8b0dee20c9eb4ceae17b978b18_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_17ed9fe26ebacff3351768b3609e9fff20eac97fc7b9b621d65e1467dbc6118b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ed9fe26ebacff3351768b3609e9fff20eac97fc7b9b621d65e1467dbc6118b->enter($__internal_17ed9fe26ebacff3351768b3609e9fff20eac97fc7b9b621d65e1467dbc6118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6419866d168745d5c3b128c2dcd9b1753198aab0a5f88f94a209073ca42e9f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6419866d168745d5c3b128c2dcd9b1753198aab0a5f88f94a209073ca42e9f45->enter($__internal_6419866d168745d5c3b128c2dcd9b1753198aab0a5f88f94a209073ca42e9f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.title"), "html", null, true);
        echo "
            ";
        
        $__internal_6419866d168745d5c3b128c2dcd9b1753198aab0a5f88f94a209073ca42e9f45->leave($__internal_6419866d168745d5c3b128c2dcd9b1753198aab0a5f88f94a209073ca42e9f45_prof);

        
        $__internal_17ed9fe26ebacff3351768b3609e9fff20eac97fc7b9b621d65e1467dbc6118b->leave($__internal_17ed9fe26ebacff3351768b3609e9fff20eac97fc7b9b621d65e1467dbc6118b_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_b3b2cabdd747e42f9c36efc3003e0cc64123e4568ac7d5bb89eafe7b9882b12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b2cabdd747e42f9c36efc3003e0cc64123e4568ac7d5bb89eafe7b9882b12c->enter($__internal_b3b2cabdd747e42f9c36efc3003e0cc64123e4568ac7d5bb89eafe7b9882b12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_1977dfcc6894e151b6816dbd5570aadc4daedc2a49e0ffe5723fee248fc29448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1977dfcc6894e151b6816dbd5570aadc4daedc2a49e0ffe5723fee248fc29448->enter($__internal_1977dfcc6894e151b6816dbd5570aadc4daedc2a49e0ffe5723fee248fc29448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        echo "        ";
        
        $__internal_1977dfcc6894e151b6816dbd5570aadc4daedc2a49e0ffe5723fee248fc29448->leave($__internal_1977dfcc6894e151b6816dbd5570aadc4daedc2a49e0ffe5723fee248fc29448_prof);

        
        $__internal_b3b2cabdd747e42f9c36efc3003e0cc64123e4568ac7d5bb89eafe7b9882b12c->leave($__internal_b3b2cabdd747e42f9c36efc3003e0cc64123e4568ac7d5bb89eafe7b9882b12c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_684b335055952647c9319f86262c30738cc11351257cdf2249181cba43ff6eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684b335055952647c9319f86262c30738cc11351257cdf2249181cba43ff6eed->enter($__internal_684b335055952647c9319f86262c30738cc11351257cdf2249181cba43ff6eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35a20d034c57eb9db611b49996f78fba47c220e8b52b7254db3cc2ea32e53760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a20d034c57eb9db611b49996f78fba47c220e8b52b7254db3cc2ea32e53760->enter($__internal_35a20d034c57eb9db611b49996f78fba47c220e8b52b7254db3cc2ea32e53760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e9a299_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_bootstrap.min_1.css");
            // line 27
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_jquery-ui_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_main_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_second-menu_4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_header_5.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_footer_6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        } else {
            // asset "1e9a299"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
        
        $__internal_35a20d034c57eb9db611b49996f78fba47c220e8b52b7254db3cc2ea32e53760->leave($__internal_35a20d034c57eb9db611b49996f78fba47c220e8b52b7254db3cc2ea32e53760_prof);

        
        $__internal_684b335055952647c9319f86262c30738cc11351257cdf2249181cba43ff6eed->leave($__internal_684b335055952647c9319f86262c30738cc11351257cdf2249181cba43ff6eed_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1921e8da15ca0692a958623a1ecd659e8bbca15b88981bcce02b5973ccb2aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1921e8da15ca0692a958623a1ecd659e8bbca15b88981bcce02b5973ccb2aab->enter($__internal_f1921e8da15ca0692a958623a1ecd659e8bbca15b88981bcce02b5973ccb2aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0a25c2f1787d9035d78ab55deff5fe649facdb21e7ad52e47fc272a23ba7d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a25c2f1787d9035d78ab55deff5fe649facdb21e7ad52e47fc272a23ba7d15->enter($__internal_b0a25c2f1787d9035d78ab55deff5fe649facdb21e7ad52e47fc272a23ba7d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "                    ";
        
        $__internal_b0a25c2f1787d9035d78ab55deff5fe649facdb21e7ad52e47fc272a23ba7d15->leave($__internal_b0a25c2f1787d9035d78ab55deff5fe649facdb21e7ad52e47fc272a23ba7d15_prof);

        
        $__internal_f1921e8da15ca0692a958623a1ecd659e8bbca15b88981bcce02b5973ccb2aab->leave($__internal_f1921e8da15ca0692a958623a1ecd659e8bbca15b88981bcce02b5973ccb2aab_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07b1f125ccb1783969246a22d84cfb23a5fa1b12b8a69e15b4f7fdad63162948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b1f125ccb1783969246a22d84cfb23a5fa1b12b8a69e15b4f7fdad63162948->enter($__internal_07b1f125ccb1783969246a22d84cfb23a5fa1b12b8a69e15b4f7fdad63162948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3334ec8f0ec8ae58c0a6fbbde7999cb3e73ef37e6ff3f2c298d5819e0a22974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3334ec8f0ec8ae58c0a6fbbde7999cb3e73ef37e6ff3f2c298d5819e0a22974->enter($__internal_b3334ec8f0ec8ae58c0a6fbbde7999cb3e73ef37e6ff3f2c298d5819e0a22974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f5ea75_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-3.2.1.min_1.js");
            // line 64
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-ui_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_bootstrap.min_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2f5ea75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 66
        echo "        ";
        
        $__internal_b3334ec8f0ec8ae58c0a6fbbde7999cb3e73ef37e6ff3f2c298d5819e0a22974->leave($__internal_b3334ec8f0ec8ae58c0a6fbbde7999cb3e73ef37e6ff3f2c298d5819e0a22974_prof);

        
        $__internal_07b1f125ccb1783969246a22d84cfb23a5fa1b12b8a69e15b4f7fdad63162948->leave($__internal_07b1f125ccb1783969246a22d84cfb23a5fa1b12b8a69e15b4f7fdad63162948_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_938fd251897e05ff8e803248de84ea27c1e8a6141abbe9f88ff1856bf37d0a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938fd251897e05ff8e803248de84ea27c1e8a6141abbe9f88ff1856bf37d0a4e->enter($__internal_938fd251897e05ff8e803248de84ea27c1e8a6141abbe9f88ff1856bf37d0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_da1ea35eb205ef28077f0d0095f433994328d51eacf4ff263224aa6374f89bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1ea35eb205ef28077f0d0095f433994328d51eacf4ff263224aa6374f89bbe->enter($__internal_da1ea35eb205ef28077f0d0095f433994328d51eacf4ff263224aa6374f89bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 68
        echo "        ";
        
        $__internal_da1ea35eb205ef28077f0d0095f433994328d51eacf4ff263224aa6374f89bbe->leave($__internal_da1ea35eb205ef28077f0d0095f433994328d51eacf4ff263224aa6374f89bbe_prof);

        
        $__internal_938fd251897e05ff8e803248de84ea27c1e8a6141abbe9f88ff1856bf37d0a4e->leave($__internal_938fd251897e05ff8e803248de84ea27c1e8a6141abbe9f88ff1856bf37d0a4e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 68,  305 => 67,  295 => 66,  269 => 64,  264 => 60,  255 => 59,  245 => 46,  236 => 45,  226 => 29,  182 => 27,  177 => 20,  168 => 19,  158 => 15,  149 => 14,  136 => 10,  127 => 9,  116 => 69,  113 => 67,  111 => 59,  105 => 56,  101 => 54,  95 => 51,  92 => 50,  90 => 49,  86 => 47,  84 => 45,  78 => 44,  72 => 41,  59 => 30,  57 => 19,  52 => 16,  50 => 14,  46 => 12,  44 => 9,  34 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')[0] }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>
            {% block title %}
                {{ 'core.site.title'|trans }}
            {% endblock %}
        </title>

        {% block meta %}
        {% endblock %}

        <link rel=\"shortcut icon\" href=\"http://assets.fhuszti.tech/favicon.ico\" type=\"image/x-icon\" />

        {% block stylesheets %}
            {% stylesheets filter='cssrewrite, ?scssphp'
                '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'
                '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
                'bundles/app/css/main.css'
                'bundles/app/css/second-menu.css'
                'bundles/app/css/header.css'
                'bundles/app/css/footer.css' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
            {% endstylesheets %}
        {% endblock %}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body role=\"document\">
        <div>
            {{ include('header.html.twig') }}

            <div class=\"container\" id=\"wrapper\">
                <div id=\"content\" role=\"main\"{% if homePage is not defined %} class=\"col-sm-10\"{% endif %}>
                    {% block body %}
                    {% endblock %}
                </div>

                {% if homePage is not defined %}
                    <div class=\"hidden-xs col-sm-2\" id=\"second-menu\">
                        {{ include('second-menu.html.twig') }}
                    </div>
                {% endif %}
            </div>

            {{ include('footer.html.twig') }}
        </div>

        {% block javascripts %}
            {% javascripts filter='?jsqueeze'
                '//code.jquery.com/jquery-3.2.1.min.js'
                '//code.jquery.com/ui/1.12.1/jquery-ui.js' 
                '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js' %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
        {% block script %}
        {% endblock %}
    </body>
</html>", "layout.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao-revamp/app/Resources/views/layout.html.twig");
    }
}
