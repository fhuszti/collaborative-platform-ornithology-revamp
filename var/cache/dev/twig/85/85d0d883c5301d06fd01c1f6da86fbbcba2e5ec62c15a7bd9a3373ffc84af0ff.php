<?php

/* layout.html.twig */
class __TwigTemplate_6bdee430d75a483574988d8b85299316a472e2a75ac2ae2c75b916e81d9f33a9 extends Twig_Template
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
        $__internal_66abfe515bb182adc71164b7021461ee6d542cf0dd868c5b0518ae36e0a669cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66abfe515bb182adc71164b7021461ee6d542cf0dd868c5b0518ae36e0a669cc->enter($__internal_66abfe515bb182adc71164b7021461ee6d542cf0dd868c5b0518ae36e0a669cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_b0cb830a8796d4f06f59b8485dd18cd0253bbe8bd96fa932ec03eda6da403633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cb830a8796d4f06f59b8485dd18cd0253bbe8bd96fa932ec03eda6da403633->enter($__internal_b0cb830a8796d4f06f59b8485dd18cd0253bbe8bd96fa932ec03eda6da403633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
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
        
        $__internal_66abfe515bb182adc71164b7021461ee6d542cf0dd868c5b0518ae36e0a669cc->leave($__internal_66abfe515bb182adc71164b7021461ee6d542cf0dd868c5b0518ae36e0a669cc_prof);

        
        $__internal_b0cb830a8796d4f06f59b8485dd18cd0253bbe8bd96fa932ec03eda6da403633->leave($__internal_b0cb830a8796d4f06f59b8485dd18cd0253bbe8bd96fa932ec03eda6da403633_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_02a5c849dbdce83d027e5523b97ebf9d8500c9d25e29bcb5818f9c01aa407b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a5c849dbdce83d027e5523b97ebf9d8500c9d25e29bcb5818f9c01aa407b33->enter($__internal_02a5c849dbdce83d027e5523b97ebf9d8500c9d25e29bcb5818f9c01aa407b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b955ac44da49c2cc939df229c7f579c4e2d76d5b78c1db6841dd469500f1b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b955ac44da49c2cc939df229c7f579c4e2d76d5b78c1db6841dd469500f1b2f->enter($__internal_6b955ac44da49c2cc939df229c7f579c4e2d76d5b78c1db6841dd469500f1b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.site.title"), "html", null, true);
        echo "
            ";
        
        $__internal_6b955ac44da49c2cc939df229c7f579c4e2d76d5b78c1db6841dd469500f1b2f->leave($__internal_6b955ac44da49c2cc939df229c7f579c4e2d76d5b78c1db6841dd469500f1b2f_prof);

        
        $__internal_02a5c849dbdce83d027e5523b97ebf9d8500c9d25e29bcb5818f9c01aa407b33->leave($__internal_02a5c849dbdce83d027e5523b97ebf9d8500c9d25e29bcb5818f9c01aa407b33_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_6f1aae84bb8e9807396b237585839027cde4b4569daf435feba0b10c9fe497b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1aae84bb8e9807396b237585839027cde4b4569daf435feba0b10c9fe497b4->enter($__internal_6f1aae84bb8e9807396b237585839027cde4b4569daf435feba0b10c9fe497b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_fe38bb100253a0700c58aedfcd4ff0f5ffbaaad83c4a515a36c447322c670d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe38bb100253a0700c58aedfcd4ff0f5ffbaaad83c4a515a36c447322c670d76->enter($__internal_fe38bb100253a0700c58aedfcd4ff0f5ffbaaad83c4a515a36c447322c670d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        echo "        ";
        
        $__internal_fe38bb100253a0700c58aedfcd4ff0f5ffbaaad83c4a515a36c447322c670d76->leave($__internal_fe38bb100253a0700c58aedfcd4ff0f5ffbaaad83c4a515a36c447322c670d76_prof);

        
        $__internal_6f1aae84bb8e9807396b237585839027cde4b4569daf435feba0b10c9fe497b4->leave($__internal_6f1aae84bb8e9807396b237585839027cde4b4569daf435feba0b10c9fe497b4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2ec69e6c03053ddf852afd86c79158b99a887124567f1895cb9c1c1dd7722d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ec69e6c03053ddf852afd86c79158b99a887124567f1895cb9c1c1dd7722d4->enter($__internal_a2ec69e6c03053ddf852afd86c79158b99a887124567f1895cb9c1c1dd7722d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00e446cd1db2b0d25cabb0cbcc23fb24d1fdde6f6a566d3ef1f2f1daab687cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e446cd1db2b0d25cabb0cbcc23fb24d1fdde6f6a566d3ef1f2f1daab687cd8->enter($__internal_00e446cd1db2b0d25cabb0cbcc23fb24d1fdde6f6a566d3ef1f2f1daab687cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e9a299_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_bootstrap.min_1.css");
            // line 27
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_jquery-ui_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_main_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_second-menu_4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_header_5.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
            // asset "1e9a299_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299_footer_6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        } else {
            // asset "1e9a299"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e9a299") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1e9a299.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
        
        $__internal_00e446cd1db2b0d25cabb0cbcc23fb24d1fdde6f6a566d3ef1f2f1daab687cd8->leave($__internal_00e446cd1db2b0d25cabb0cbcc23fb24d1fdde6f6a566d3ef1f2f1daab687cd8_prof);

        
        $__internal_a2ec69e6c03053ddf852afd86c79158b99a887124567f1895cb9c1c1dd7722d4->leave($__internal_a2ec69e6c03053ddf852afd86c79158b99a887124567f1895cb9c1c1dd7722d4_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_f23b426b272fbd1728f68925fb25c43096976b5c435f2626d8e7b50a93b296ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23b426b272fbd1728f68925fb25c43096976b5c435f2626d8e7b50a93b296ae->enter($__internal_f23b426b272fbd1728f68925fb25c43096976b5c435f2626d8e7b50a93b296ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64918d93d2c0e0815a66b380f997f4ffda17377f85f7eb02fa91ebe4cd8b6559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64918d93d2c0e0815a66b380f997f4ffda17377f85f7eb02fa91ebe4cd8b6559->enter($__internal_64918d93d2c0e0815a66b380f997f4ffda17377f85f7eb02fa91ebe4cd8b6559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "                    ";
        
        $__internal_64918d93d2c0e0815a66b380f997f4ffda17377f85f7eb02fa91ebe4cd8b6559->leave($__internal_64918d93d2c0e0815a66b380f997f4ffda17377f85f7eb02fa91ebe4cd8b6559_prof);

        
        $__internal_f23b426b272fbd1728f68925fb25c43096976b5c435f2626d8e7b50a93b296ae->leave($__internal_f23b426b272fbd1728f68925fb25c43096976b5c435f2626d8e7b50a93b296ae_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79d3f01685e41f9ae77c58f05987d921a9b69166e26841d2bd792120614114f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d3f01685e41f9ae77c58f05987d921a9b69166e26841d2bd792120614114f2->enter($__internal_79d3f01685e41f9ae77c58f05987d921a9b69166e26841d2bd792120614114f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d8ee21527726ae1eeacab76348511cb6a443062ac70107b6299c11acfec54e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ee21527726ae1eeacab76348511cb6a443062ac70107b6299c11acfec54e72->enter($__internal_d8ee21527726ae1eeacab76348511cb6a443062ac70107b6299c11acfec54e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2f5ea75_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-3.2.1.min_1.js");
            // line 64
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_jquery-ui_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2f5ea75_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75_bootstrap.min_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2f5ea75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2f5ea75") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2f5ea75.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 66
        echo "        ";
        
        $__internal_d8ee21527726ae1eeacab76348511cb6a443062ac70107b6299c11acfec54e72->leave($__internal_d8ee21527726ae1eeacab76348511cb6a443062ac70107b6299c11acfec54e72_prof);

        
        $__internal_79d3f01685e41f9ae77c58f05987d921a9b69166e26841d2bd792120614114f2->leave($__internal_79d3f01685e41f9ae77c58f05987d921a9b69166e26841d2bd792120614114f2_prof);

    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        $__internal_bea84a84613220774ad77ac72e9c917105811acef1ec645d806775be59926ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea84a84613220774ad77ac72e9c917105811acef1ec645d806775be59926ce6->enter($__internal_bea84a84613220774ad77ac72e9c917105811acef1ec645d806775be59926ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_4da96ce3797665abbfdf92cf7e0db4bf196adc82ffbc923e1941cf9de457ace7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da96ce3797665abbfdf92cf7e0db4bf196adc82ffbc923e1941cf9de457ace7->enter($__internal_4da96ce3797665abbfdf92cf7e0db4bf196adc82ffbc923e1941cf9de457ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 68
        echo "        ";
        
        $__internal_4da96ce3797665abbfdf92cf7e0db4bf196adc82ffbc923e1941cf9de457ace7->leave($__internal_4da96ce3797665abbfdf92cf7e0db4bf196adc82ffbc923e1941cf9de457ace7_prof);

        
        $__internal_bea84a84613220774ad77ac72e9c917105811acef1ec645d806775be59926ce6->leave($__internal_bea84a84613220774ad77ac72e9c917105811acef1ec645d806775be59926ce6_prof);

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
