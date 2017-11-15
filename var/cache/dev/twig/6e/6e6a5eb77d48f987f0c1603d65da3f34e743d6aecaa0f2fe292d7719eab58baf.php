<?php

/* layout.html.twig */
class __TwigTemplate_15bdd39bfe9b6bda30299d00f7d1f43e77eae26df84c0ed734ad215abb064528 extends Twig_Template
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
        $__internal_14c8f304338d05979fcb307b41ecd6cc7af1cfe5c884bd7034778a83889f2d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c8f304338d05979fcb307b41ecd6cc7af1cfe5c884bd7034778a83889f2d8d->enter($__internal_14c8f304338d05979fcb307b41ecd6cc7af1cfe5c884bd7034778a83889f2d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_2775f3a46c3e637b228237591fc749565fd9db7b0f215fdbdf495a0172fa69e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775f3a46c3e637b228237591fc749565fd9db7b0f215fdbdf495a0172fa69e6->enter($__internal_2775f3a46c3e637b228237591fc749565fd9db7b0f215fdbdf495a0172fa69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
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
        
        $__internal_14c8f304338d05979fcb307b41ecd6cc7af1cfe5c884bd7034778a83889f2d8d->leave($__internal_14c8f304338d05979fcb307b41ecd6cc7af1cfe5c884bd7034778a83889f2d8d_prof);

        
        $__internal_2775f3a46c3e637b228237591fc749565fd9db7b0f215fdbdf495a0172fa69e6->leave($__internal_2775f3a46c3e637b228237591fc749565fd9db7b0f215fdbdf495a0172fa69e6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d405f5a34e57494dac9f68ebbb89f1f1d75108a1e91f14b244917b76279d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d405f5a34e57494dac9f68ebbb89f1f1d75108a1e91f14b244917b76279d02->enter($__internal_22d405f5a34e57494dac9f68ebbb89f1f1d75108a1e91f14b244917b76279d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5738cb61f5d2c17336d05d6c9de779117ae920c1aa42c23b787ebb86b6c2313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5738cb61f5d2c17336d05d6c9de779117ae920c1aa42c23b787ebb86b6c2313e->enter($__internal_5738cb61f5d2c17336d05d6c9de779117ae920c1aa42c23b787ebb86b6c2313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.title"), "html", null, true);
        echo "
            ";
        
        $__internal_5738cb61f5d2c17336d05d6c9de779117ae920c1aa42c23b787ebb86b6c2313e->leave($__internal_5738cb61f5d2c17336d05d6c9de779117ae920c1aa42c23b787ebb86b6c2313e_prof);

        
        $__internal_22d405f5a34e57494dac9f68ebbb89f1f1d75108a1e91f14b244917b76279d02->leave($__internal_22d405f5a34e57494dac9f68ebbb89f1f1d75108a1e91f14b244917b76279d02_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e8bad99050bd596d0c938ed32eb04eee3810afab28dd36175897997d5665f39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bad99050bd596d0c938ed32eb04eee3810afab28dd36175897997d5665f39f->enter($__internal_e8bad99050bd596d0c938ed32eb04eee3810afab28dd36175897997d5665f39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_a86ec4ed47dc1e300b7b5e995effad09227814251e0040041ba3a31a516212d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86ec4ed47dc1e300b7b5e995effad09227814251e0040041ba3a31a516212d9->enter($__internal_a86ec4ed47dc1e300b7b5e995effad09227814251e0040041ba3a31a516212d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        echo "        ";
        
        $__internal_a86ec4ed47dc1e300b7b5e995effad09227814251e0040041ba3a31a516212d9->leave($__internal_a86ec4ed47dc1e300b7b5e995effad09227814251e0040041ba3a31a516212d9_prof);

        
        $__internal_e8bad99050bd596d0c938ed32eb04eee3810afab28dd36175897997d5665f39f->leave($__internal_e8bad99050bd596d0c938ed32eb04eee3810afab28dd36175897997d5665f39f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e823e11ab0a5fb4e2106a854c495500f0d6963adae9318b39d882bb8a3fe341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e823e11ab0a5fb4e2106a854c495500f0d6963adae9318b39d882bb8a3fe341->enter($__internal_8e823e11ab0a5fb4e2106a854c495500f0d6963adae9318b39d882bb8a3fe341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bccb50991bdedd30f11635bbcc2c3a60954164d6cd0367a201e0ae05524882a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccb50991bdedd30f11635bbcc2c3a60954164d6cd0367a201e0ae05524882a0->enter($__internal_bccb50991bdedd30f11635bbcc2c3a60954164d6cd0367a201e0ae05524882a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e9a299_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_bootstrap.min_1.css");
            // line 27
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_jquery-ui_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_main_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_second-menu_4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_header_5.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_footer_6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        } else {
            // asset "1e9a299"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
        
        $__internal_bccb50991bdedd30f11635bbcc2c3a60954164d6cd0367a201e0ae05524882a0->leave($__internal_bccb50991bdedd30f11635bbcc2c3a60954164d6cd0367a201e0ae05524882a0_prof);

        
        $__internal_8e823e11ab0a5fb4e2106a854c495500f0d6963adae9318b39d882bb8a3fe341->leave($__internal_8e823e11ab0a5fb4e2106a854c495500f0d6963adae9318b39d882bb8a3fe341_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_2494930a95dc155279ea60c8d8913affff0a5b14fd5cd464996d0c87c4750ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2494930a95dc155279ea60c8d8913affff0a5b14fd5cd464996d0c87c4750ae1->enter($__internal_2494930a95dc155279ea60c8d8913affff0a5b14fd5cd464996d0c87c4750ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58e7e0e65087e169951d04396483274e3a01a0baeb99007a0de8ffae2d44126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58e7e0e65087e169951d04396483274e3a01a0baeb99007a0de8ffae2d44126->enter($__internal_c58e7e0e65087e169951d04396483274e3a01a0baeb99007a0de8ffae2d44126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "                    ";
        
        $__internal_c58e7e0e65087e169951d04396483274e3a01a0baeb99007a0de8ffae2d44126->leave($__internal_c58e7e0e65087e169951d04396483274e3a01a0baeb99007a0de8ffae2d44126_prof);

        
        $__internal_2494930a95dc155279ea60c8d8913affff0a5b14fd5cd464996d0c87c4750ae1->leave($__internal_2494930a95dc155279ea60c8d8913affff0a5b14fd5cd464996d0c87c4750ae1_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1344c44ecf7220dbee1775e8b51406af743d7a7dcb9e7011c2b0a8addb16a882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1344c44ecf7220dbee1775e8b51406af743d7a7dcb9e7011c2b0a8addb16a882->enter($__internal_1344c44ecf7220dbee1775e8b51406af743d7a7dcb9e7011c2b0a8addb16a882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4284c14eb24ea33967956fb73c24669c859a8f02c00147603c4f7ffa5e6e682e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4284c14eb24ea33967956fb73c24669c859a8f02c00147603c4f7ffa5e6e682e->enter($__internal_4284c14eb24ea33967956fb73c24669c859a8f02c00147603c4f7ffa5e6e682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f5ea75_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-3.2.1.min_1.js");
            // line 64
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-ui_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_bootstrap.min_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2f5ea75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 66
        echo "        ";
        
        $__internal_4284c14eb24ea33967956fb73c24669c859a8f02c00147603c4f7ffa5e6e682e->leave($__internal_4284c14eb24ea33967956fb73c24669c859a8f02c00147603c4f7ffa5e6e682e_prof);

        
        $__internal_1344c44ecf7220dbee1775e8b51406af743d7a7dcb9e7011c2b0a8addb16a882->leave($__internal_1344c44ecf7220dbee1775e8b51406af743d7a7dcb9e7011c2b0a8addb16a882_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_fdb303047835c5e15daee39300ed6cd9975a49406b247b109f6e02f8781c5b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb303047835c5e15daee39300ed6cd9975a49406b247b109f6e02f8781c5b99->enter($__internal_fdb303047835c5e15daee39300ed6cd9975a49406b247b109f6e02f8781c5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_4ea23ea36a3fb94f1744ac28eb7512452a9a4fc83f6ef2a66a761b6fa910e484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea23ea36a3fb94f1744ac28eb7512452a9a4fc83f6ef2a66a761b6fa910e484->enter($__internal_4ea23ea36a3fb94f1744ac28eb7512452a9a4fc83f6ef2a66a761b6fa910e484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 68
        echo "        ";
        
        $__internal_4ea23ea36a3fb94f1744ac28eb7512452a9a4fc83f6ef2a66a761b6fa910e484->leave($__internal_4ea23ea36a3fb94f1744ac28eb7512452a9a4fc83f6ef2a66a761b6fa910e484_prof);

        
        $__internal_fdb303047835c5e15daee39300ed6cd9975a49406b247b109f6e02f8781c5b99->leave($__internal_fdb303047835c5e15daee39300ed6cd9975a49406b247b109f6e02f8781c5b99_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
</html>", "layout.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/views/layout.html.twig");
    }
}
