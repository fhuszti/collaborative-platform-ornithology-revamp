<?php

/* core/contact.html.twig */
class __TwigTemplate_7c0e50626939e736608cb8b330f3a27ce6cb01d54d2b107c4a58e8337f4e2f52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "core/contact.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d9ae574af7a852d43717a9ae448cabdf05dbc1cce9017250785e2097b3158a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d9ae574af7a852d43717a9ae448cabdf05dbc1cce9017250785e2097b3158a->enter($__internal_a0d9ae574af7a852d43717a9ae448cabdf05dbc1cce9017250785e2097b3158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/contact.html.twig"));

        $__internal_2aaa285c94861f9d3c98163d926a431743d323efd4cf13960b015aa91623078c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaa285c94861f9d3c98163d926a431743d323efd4cf13960b015aa91623078c->enter($__internal_2aaa285c94861f9d3c98163d926a431743d323efd4cf13960b015aa91623078c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/contact.html.twig"));

        // line 2
        $context["homepage"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d9ae574af7a852d43717a9ae448cabdf05dbc1cce9017250785e2097b3158a->leave($__internal_a0d9ae574af7a852d43717a9ae448cabdf05dbc1cce9017250785e2097b3158a_prof);

        
        $__internal_2aaa285c94861f9d3c98163d926a431743d323efd4cf13960b015aa91623078c->leave($__internal_2aaa285c94861f9d3c98163d926a431743d323efd4cf13960b015aa91623078c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14a7a307727fa2e5672a030ed796a052cb3e1b458189fdcd26064d7a20f70a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a7a307727fa2e5672a030ed796a052cb3e1b458189fdcd26064d7a20f70a01->enter($__internal_14a7a307727fa2e5672a030ed796a052cb3e1b458189fdcd26064d7a20f70a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4693fa64cc8f407fb05bdc569175cd889bea209cefbbdc9556f22c90ed48af4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4693fa64cc8f407fb05bdc569175cd889bea209cefbbdc9556f22c90ed48af4b->enter($__internal_4693fa64cc8f407fb05bdc569175cd889bea209cefbbdc9556f22c90ed48af4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8197b1e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8197b1e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8197b1e_contact_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "8197b1e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8197b1e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8197b1e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_4693fa64cc8f407fb05bdc569175cd889bea209cefbbdc9556f22c90ed48af4b->leave($__internal_4693fa64cc8f407fb05bdc569175cd889bea209cefbbdc9556f22c90ed48af4b_prof);

        
        $__internal_14a7a307727fa2e5672a030ed796a052cb3e1b458189fdcd26064d7a20f70a01->leave($__internal_14a7a307727fa2e5672a030ed796a052cb3e1b458189fdcd26064d7a20f70a01_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_11155d637f9a1985be8e9186d892510f4dfd6dd3c8548146958e9d3f61ca68d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11155d637f9a1985be8e9186d892510f4dfd6dd3c8548146958e9d3f61ca68d6->enter($__internal_11155d637f9a1985be8e9186d892510f4dfd6dd3c8548146958e9d3f61ca68d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4eb3bd7e5430f1194223b93123000876530554182da301a3688cd333c2903417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb3bd7e5430f1194223b93123000876530554182da301a3688cd333c2903417->enter($__internal_4eb3bd7e5430f1194223b93123000876530554182da301a3688cd333c2903417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>CONTACTEZ-NOUS</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t\t";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9aa0c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0_contact_1.png");
            // line 18
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
        } else {
            // asset "e9aa0c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e9aa0c0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/e9aa0c0.png");
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 20
        echo "\t</div>
</div>
<div class=\"col-xs-12\" id=\"containerformContact\">
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "contact-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t  <p><strong>MERCI !</strong><br /> ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "contact-form", "class" => "form-horizontal")));
        echo "

\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "*</div>
\t      <div class=\"col-sm-8\">
\t        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "*</div>
\t      <div class=\"col-sm-8\">
\t        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'label');
        echo "*</div>
\t      <div class=\"col-sm-8\">
\t        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget');
        echo "
\t        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">
\t      \t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label');
        echo "*
\t\t\t ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c41fd8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c_logo_1.png");
            // line 55
            echo "\t            <img id=\"pelican\" class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/pelican.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t         ";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "\t            <img id=\"pelican\" class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/pelican.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t         ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "\t      </div>
\t      <div class=\"col-sm-8\">
\t        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
\t      </div>
\t    </div>

\t\t\t<div id=\"save\">
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "
\t\t\t</div>
\t\t";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"col-xs-12\" id=\"blocAdress\">
\t\t\t<div id=\"adress\">
\t\t\t\t<p>ASSOCIATION NOS AMIS LES OISEAUX</p>
\t\t\t\t<p>156 BOULEVARD BONNE NOUVELLE</p>
\t\t\t\t<p>75 010 PARIS CEDEX</p>
\t\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"locIcon\" class=\"col-sm-4\">
\t\t\t\t";
        // line 77
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c41fd8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c_logo_1.png");
            // line 78
            echo "\t\t\t\t<img class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/blue-loc-icon.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t\t\t\t";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "\t\t\t\t<img class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/blue-loc-icon.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 80
        echo "\t        </div>
\t        <div id=\"phoneNumber\" class=\"col-sm-4\">
\t        \t<p>01.78.35.90.56</p>
\t        </div>
\t        <div id=\"email\" class=\"col-sm-4\">
\t        \t<p>nosalisoiseaux@gmail.fr</p>
\t        </div>
        </div>
        <div id=\"separatorLine\">
\t\t\t";
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c41fd8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c_logo_1.png");
            // line 90
            echo "\t\t\t<img class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/separator-line.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t\t\t";
        } else {
            // asset "c41fd8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c41fd8c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/c41fd8c.png");
            echo "\t\t\t<img class=\"img-responsive\" src=\"";
            echo "http://assets.fhuszti.tech/nao/separator-line.png";
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("core.logo.alt"), "html", null, true);
            echo "\" class=\"hidden-xs\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 92
        echo "        </div>
</div>
";
        
        $__internal_4eb3bd7e5430f1194223b93123000876530554182da301a3688cd333c2903417->leave($__internal_4eb3bd7e5430f1194223b93123000876530554182da301a3688cd333c2903417_prof);

        
        $__internal_11155d637f9a1985be8e9186d892510f4dfd6dd3c8548146958e9d3f61ca68d6->leave($__internal_11155d637f9a1985be8e9186d892510f4dfd6dd3c8548146958e9d3f61ca68d6_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28be6cf341c0d69f4946f07e417411cd209f39adecea2ad07119cf72002bad16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28be6cf341c0d69f4946f07e417411cd209f39adecea2ad07119cf72002bad16->enter($__internal_28be6cf341c0d69f4946f07e417411cd209f39adecea2ad07119cf72002bad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e0b3e61076072d76b9ff9c62218529e0bf5d5dc6b318c89401df786e4fe5337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0b3e61076072d76b9ff9c62218529e0bf5d5dc6b318c89401df786e4fe5337->enter($__internal_3e0b3e61076072d76b9ff9c62218529e0bf5d5dc6b318c89401df786e4fe5337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a16b12d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a16b12d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a16b12d_parsley.min_1.js");
            // line 100
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    <script>
\$('#contact-form').parsley();

    \$('#contact-form').on('submit', function(e) {
    \te.preventDefault();
    \t\$('#contact_save').button('loading');
    \tvar \$this = \$(this); 
\t   if (\$('#contact-form').parsley().isValid()) {
\t   \t\t\$('#contact_save').button('loading');
            \$.ajax({
                url: '";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
            echo "', 
                type: \$this.attr('method'), 
                data: \$this.serialize(),
                success: function(data) { 
                    if (data.status == 'success') {
                    \t\$('#containerformContact').hide().empty();
\t     \t    \t\t\$('#containerformContact').prepend('<div id=\"textThanks\"><p>Merci!</p><p>Votre message vient d\\'être envoyé, nous vous répondrons dans les plus brefs délais.</p></div>').fadeIn(\"slow\");
                    }
                    else {
                    \t\$('#contact_save').button(\"reset\");
                    }
                },
                error: function () { 
                \t\$('#contact_save').button(\"reset\");
                },
            });
\t    }
\t});
\t</script>
\t";
        } else {
            // asset "a16b12d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a16b12d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a16b12d.js");
            // line 100
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    <script>
\$('#contact-form').parsley();

    \$('#contact-form').on('submit', function(e) {
    \te.preventDefault();
    \t\$('#contact_save').button('loading');
    \tvar \$this = \$(this); 
\t   if (\$('#contact-form').parsley().isValid()) {
\t   \t\t\$('#contact_save').button('loading');
            \$.ajax({
                url: '";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
            echo "', 
                type: \$this.attr('method'), 
                data: \$this.serialize(),
                success: function(data) { 
                    if (data.status == 'success') {
                    \t\$('#containerformContact').hide().empty();
\t     \t    \t\t\$('#containerformContact').prepend('<div id=\"textThanks\"><p>Merci!</p><p>Votre message vient d\\'être envoyé, nous vous répondrons dans les plus brefs délais.</p></div>').fadeIn(\"slow\");
                    }
                    else {
                    \t\$('#contact_save').button(\"reset\");
                    }
                },
                error: function () { 
                \t\$('#contact_save').button(\"reset\");
                },
            });
\t    }
\t});
\t</script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_3e0b3e61076072d76b9ff9c62218529e0bf5d5dc6b318c89401df786e4fe5337->leave($__internal_3e0b3e61076072d76b9ff9c62218529e0bf5d5dc6b318c89401df786e4fe5337_prof);

        
        $__internal_28be6cf341c0d69f4946f07e417411cd209f39adecea2ad07119cf72002bad16->leave($__internal_28be6cf341c0d69f4946f07e417411cd209f39adecea2ad07119cf72002bad16_prof);

    }

    public function getTemplateName()
    {
        return "core/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 111,  382 => 100,  357 => 111,  342 => 100,  338 => 97,  333 => 96,  324 => 95,  312 => 92,  294 => 90,  290 => 89,  279 => 80,  261 => 78,  257 => 77,  244 => 67,  239 => 65,  231 => 60,  227 => 59,  223 => 57,  205 => 55,  201 => 54,  197 => 53,  189 => 48,  185 => 47,  180 => 45,  173 => 41,  169 => 40,  164 => 38,  157 => 34,  153 => 33,  148 => 31,  141 => 28,  132 => 25,  129 => 24,  125 => 23,  120 => 20,  106 => 18,  102 => 17,  94 => 11,  85 => 10,  63 => 7,  59 => 5,  54 => 4,  45 => 3,  35 => 1,  33 => 2,  11 => 1,);
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
        'bundles/app/css/contact.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\">
    {% endstylesheets %}
{% endblock %}
{% block body  %}
<div class=\"col-xs-12 nao_title\">
\t<div class=\"col-xs-10 col-sm-6\">
\t\t<h1>CONTACTEZ-NOUS</h1>
\t</div>

\t<div class=\"hidden-xs col-sm-2 nao_title-icon\">
\t\t{% image 'http://assets.fhuszti.tech/nao/second-menu/contact.png' %}
\t\t\t<img src=\"{{ asset_url }}\" alt=\"\" />
\t\t{% endimage %}
\t</div>
</div>
<div class=\"col-xs-12\" id=\"containerformContact\">
\t\t\t{% for message in app.session.flashbag.get('contact-notice') %}
\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t  <p><strong>MERCI !</strong><br /> {{ message }}</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{{ form_start(form, {'attr': {'id': 'contact-form', 'class': 'form-horizontal'}}) }}

\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">{{ form_label(form.name) }}*</div>
\t      <div class=\"col-sm-8\">
\t        {{ form_widget(form.name) }}
\t        {{ form_errors(form.name) }}
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">{{ form_label(form.email) }}*</div>
\t      <div class=\"col-sm-8\">
\t        {{ form_widget(form.email) }}
\t        {{ form_errors(form.email) }}
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">{{ form_label(form.subject) }}*</div>
\t      <div class=\"col-sm-8\">
\t        {{ form_widget(form.subject) }}
\t        {{ form_errors(form.subject) }}
\t      </div>
\t    </div>
\t\t<div class=\"form-group\">
\t      <div class=\"col-sm-4\">
\t      \t{{ form_label(form.message) }}*
\t\t\t {% image 'http://assets.fhuszti.tech/nao/logo.png' %}
\t            <img id=\"pelican\" class=\"img-responsive\" src=\"{{ 'http://assets.fhuszti.tech/nao/pelican.png' }}\" alt=\"{{'core.logo.alt'|trans}}\" class=\"hidden-xs\" />
\t         {% endimage %}
\t      </div>
\t      <div class=\"col-sm-8\">
\t        {{ form_widget(form.message) }}
\t        {{ form_errors(form.message) }}
\t      </div>
\t    </div>

\t\t\t<div id=\"save\">
\t\t\t\t{{ form_row(form.save) }}
\t\t\t</div>
\t\t{{ form_end(form) }}
</div>
<div class=\"col-xs-12\" id=\"blocAdress\">
\t\t\t<div id=\"adress\">
\t\t\t\t<p>ASSOCIATION NOS AMIS LES OISEAUX</p>
\t\t\t\t<p>156 BOULEVARD BONNE NOUVELLE</p>
\t\t\t\t<p>75 010 PARIS CEDEX</p>
\t\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"locIcon\" class=\"col-sm-4\">
\t\t\t\t{% image 'http://assets.fhuszti.tech/nao/logo.png' %}
\t\t\t\t<img class=\"img-responsive\" src=\"{{ 'http://assets.fhuszti.tech/nao/blue-loc-icon.png' }}\" alt=\"{{'core.logo.alt'|trans}}\" class=\"hidden-xs\" />
\t\t\t\t{% endimage %}
\t        </div>
\t        <div id=\"phoneNumber\" class=\"col-sm-4\">
\t        \t<p>01.78.35.90.56</p>
\t        </div>
\t        <div id=\"email\" class=\"col-sm-4\">
\t        \t<p>nosalisoiseaux@gmail.fr</p>
\t        </div>
        </div>
        <div id=\"separatorLine\">
\t\t\t{% image 'http://assets.fhuszti.tech/nao/logo.png' %}
\t\t\t<img class=\"img-responsive\" src=\"{{ 'http://assets.fhuszti.tech/nao/separator-line.png' }}\" alt=\"{{'core.logo.alt'|trans}}\" class=\"hidden-xs\" />
\t\t\t{% endimage %}
        </div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% javascripts filter='?jsqueeze'
        'bundles/app/js/parsley.min.js'
    %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    <script>
\$('#contact-form').parsley();

    \$('#contact-form').on('submit', function(e) {
    \te.preventDefault();
    \t\$('#contact_save').button('loading');
    \tvar \$this = \$(this); 
\t   if (\$('#contact-form').parsley().isValid()) {
\t   \t\t\$('#contact_save').button('loading');
            \$.ajax({
                url: '{{ path('app_contact') }}', 
                type: \$this.attr('method'), 
                data: \$this.serialize(),
                success: function(data) { 
                    if (data.status == 'success') {
                    \t\$('#containerformContact').hide().empty();
\t     \t    \t\t\$('#containerformContact').prepend('<div id=\"textThanks\"><p>Merci!</p><p>Votre message vient d\\'être envoyé, nous vous répondrons dans les plus brefs délais.</p></div>').fadeIn(\"slow\");
                    }
                    else {
                    \t\$('#contact_save').button(\"reset\");
                    }
                },
                error: function () { 
                \t\$('#contact_save').button(\"reset\");
                },
            });
\t    }
\t});
\t</script>
\t{% endjavascripts %}
{% endblock %}
", "core/contact.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/app/Resources/views/core/contact.html.twig");
    }
}
