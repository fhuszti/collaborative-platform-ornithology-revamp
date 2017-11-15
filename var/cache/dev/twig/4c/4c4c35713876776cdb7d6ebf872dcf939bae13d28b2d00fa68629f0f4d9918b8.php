<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f21af2ec97ed0238d72bcc68949bbcfd6548c789a187f2dd7c76473b24ee6c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a1e7cf1b2c566654fff1860cf657afbe082de869121f3b910a3444816e5dae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1e7cf1b2c566654fff1860cf657afbe082de869121f3b910a3444816e5dae5->enter($__internal_6a1e7cf1b2c566654fff1860cf657afbe082de869121f3b910a3444816e5dae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e5e1184be8f87a586724831f02c97b72f9996e0eea46d218dbb4aebb33dac423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e1184be8f87a586724831f02c97b72f9996e0eea46d218dbb4aebb33dac423->enter($__internal_e5e1184be8f87a586724831f02c97b72f9996e0eea46d218dbb4aebb33dac423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6a1e7cf1b2c566654fff1860cf657afbe082de869121f3b910a3444816e5dae5->leave($__internal_6a1e7cf1b2c566654fff1860cf657afbe082de869121f3b910a3444816e5dae5_prof);

        
        $__internal_e5e1184be8f87a586724831f02c97b72f9996e0eea46d218dbb4aebb33dac423->leave($__internal_e5e1184be8f87a586724831f02c97b72f9996e0eea46d218dbb4aebb33dac423_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f0c943429cbcfb0e4417df4c5ab6ad5e6ce33f93d3b57404dddfa0fdebb8183a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c943429cbcfb0e4417df4c5ab6ad5e6ce33f93d3b57404dddfa0fdebb8183a->enter($__internal_f0c943429cbcfb0e4417df4c5ab6ad5e6ce33f93d3b57404dddfa0fdebb8183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c75d55dfef1cca6cb65aa46dc91e5b8fa77e6ec5148bfa47166907a98b09193c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75d55dfef1cca6cb65aa46dc91e5b8fa77e6ec5148bfa47166907a98b09193c->enter($__internal_c75d55dfef1cca6cb65aa46dc91e5b8fa77e6ec5148bfa47166907a98b09193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c75d55dfef1cca6cb65aa46dc91e5b8fa77e6ec5148bfa47166907a98b09193c->leave($__internal_c75d55dfef1cca6cb65aa46dc91e5b8fa77e6ec5148bfa47166907a98b09193c_prof);

        
        $__internal_f0c943429cbcfb0e4417df4c5ab6ad5e6ce33f93d3b57404dddfa0fdebb8183a->leave($__internal_f0c943429cbcfb0e4417df4c5ab6ad5e6ce33f93d3b57404dddfa0fdebb8183a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b5158a834b98c26edae14ba2ebcb270226673c2e6bb756081c6961b8c04e2094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5158a834b98c26edae14ba2ebcb270226673c2e6bb756081c6961b8c04e2094->enter($__internal_b5158a834b98c26edae14ba2ebcb270226673c2e6bb756081c6961b8c04e2094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_621ee5f5e00ee09eb49ebe7be1a6526ee5517cb3e288582eac97ffc2ab2b4d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621ee5f5e00ee09eb49ebe7be1a6526ee5517cb3e288582eac97ffc2ab2b4d93->enter($__internal_621ee5f5e00ee09eb49ebe7be1a6526ee5517cb3e288582eac97ffc2ab2b4d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_621ee5f5e00ee09eb49ebe7be1a6526ee5517cb3e288582eac97ffc2ab2b4d93->leave($__internal_621ee5f5e00ee09eb49ebe7be1a6526ee5517cb3e288582eac97ffc2ab2b4d93_prof);

        
        $__internal_b5158a834b98c26edae14ba2ebcb270226673c2e6bb756081c6961b8c04e2094->leave($__internal_b5158a834b98c26edae14ba2ebcb270226673c2e6bb756081c6961b8c04e2094_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_db06345ebc7b467a4d3b140173ab5c6b59b9a573daed81baaa11ff5449e5b7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db06345ebc7b467a4d3b140173ab5c6b59b9a573daed81baaa11ff5449e5b7fa->enter($__internal_db06345ebc7b467a4d3b140173ab5c6b59b9a573daed81baaa11ff5449e5b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_67a59fbe3c5d19f2f3b11421f364677e0dc28dfc8ba928e292e14258fd88b338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a59fbe3c5d19f2f3b11421f364677e0dc28dfc8ba928e292e14258fd88b338->enter($__internal_67a59fbe3c5d19f2f3b11421f364677e0dc28dfc8ba928e292e14258fd88b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_67a59fbe3c5d19f2f3b11421f364677e0dc28dfc8ba928e292e14258fd88b338->leave($__internal_67a59fbe3c5d19f2f3b11421f364677e0dc28dfc8ba928e292e14258fd88b338_prof);

        
        $__internal_db06345ebc7b467a4d3b140173ab5c6b59b9a573daed81baaa11ff5449e5b7fa->leave($__internal_db06345ebc7b467a4d3b140173ab5c6b59b9a573daed81baaa11ff5449e5b7fa_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_63899904abe589465246e0c2f2740f0deb24534e91fe9448bd30c8cc505edb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63899904abe589465246e0c2f2740f0deb24534e91fe9448bd30c8cc505edb7e->enter($__internal_63899904abe589465246e0c2f2740f0deb24534e91fe9448bd30c8cc505edb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_20e5888ce6b749540c8e6c7776d915201daa27e0cc555c5315e2e0ac4eba619b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e5888ce6b749540c8e6c7776d915201daa27e0cc555c5315e2e0ac4eba619b->enter($__internal_20e5888ce6b749540c8e6c7776d915201daa27e0cc555c5315e2e0ac4eba619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_302c3a3c18e877d5f250bfceed0899f766f47a9ff0dbf9fa4ffe6fabe8ba8ca7 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_f3827d1e390abac36c06b9470a1616be28572e58e10eed53cd1a96763051acd1 = "{{") && ('' === $__internal_f3827d1e390abac36c06b9470a1616be28572e58e10eed53cd1a96763051acd1 || 0 === strpos($__internal_302c3a3c18e877d5f250bfceed0899f766f47a9ff0dbf9fa4ffe6fabe8ba8ca7, $__internal_f3827d1e390abac36c06b9470a1616be28572e58e10eed53cd1a96763051acd1)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_20e5888ce6b749540c8e6c7776d915201daa27e0cc555c5315e2e0ac4eba619b->leave($__internal_20e5888ce6b749540c8e6c7776d915201daa27e0cc555c5315e2e0ac4eba619b_prof);

        
        $__internal_63899904abe589465246e0c2f2740f0deb24534e91fe9448bd30c8cc505edb7e->leave($__internal_63899904abe589465246e0c2f2740f0deb24534e91fe9448bd30c8cc505edb7e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f0f0d0e783201341d2c98c374a7f508a4a20a1c90ad312e3b9be9710a2e5ebe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f0d0e783201341d2c98c374a7f508a4a20a1c90ad312e3b9be9710a2e5ebe4->enter($__internal_f0f0d0e783201341d2c98c374a7f508a4a20a1c90ad312e3b9be9710a2e5ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_30ac61cf85b3767c2faa6fd4d763f99a6db51b96b0d20b513ccf61df10309623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ac61cf85b3767c2faa6fd4d763f99a6db51b96b0d20b513ccf61df10309623->enter($__internal_30ac61cf85b3767c2faa6fd4d763f99a6db51b96b0d20b513ccf61df10309623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_30ac61cf85b3767c2faa6fd4d763f99a6db51b96b0d20b513ccf61df10309623->leave($__internal_30ac61cf85b3767c2faa6fd4d763f99a6db51b96b0d20b513ccf61df10309623_prof);

        
        $__internal_f0f0d0e783201341d2c98c374a7f508a4a20a1c90ad312e3b9be9710a2e5ebe4->leave($__internal_f0f0d0e783201341d2c98c374a7f508a4a20a1c90ad312e3b9be9710a2e5ebe4_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4faecf1b9eca7aadf8ac922a212f08904e3189fc956e8f090955d75676064b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4faecf1b9eca7aadf8ac922a212f08904e3189fc956e8f090955d75676064b57->enter($__internal_4faecf1b9eca7aadf8ac922a212f08904e3189fc956e8f090955d75676064b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_b763b85b8d7782a97f557f8336476f93d80bf109d8c0816a4c795f9cca4c3126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b763b85b8d7782a97f557f8336476f93d80bf109d8c0816a4c795f9cca4c3126->enter($__internal_b763b85b8d7782a97f557f8336476f93d80bf109d8c0816a4c795f9cca4c3126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_b763b85b8d7782a97f557f8336476f93d80bf109d8c0816a4c795f9cca4c3126->leave($__internal_b763b85b8d7782a97f557f8336476f93d80bf109d8c0816a4c795f9cca4c3126_prof);

        
        $__internal_4faecf1b9eca7aadf8ac922a212f08904e3189fc956e8f090955d75676064b57->leave($__internal_4faecf1b9eca7aadf8ac922a212f08904e3189fc956e8f090955d75676064b57_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9a5d9d26ffb96fd0dc3dba080844f283f6d6cc7a943bd5ba264ee0a90885e4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5d9d26ffb96fd0dc3dba080844f283f6d6cc7a943bd5ba264ee0a90885e4a1->enter($__internal_9a5d9d26ffb96fd0dc3dba080844f283f6d6cc7a943bd5ba264ee0a90885e4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1d9eb08de5ecef4a537e825a99596da2fb9cf5cc0d89fae957fe4f55bfdcbb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9eb08de5ecef4a537e825a99596da2fb9cf5cc0d89fae957fe4f55bfdcbb4d->enter($__internal_1d9eb08de5ecef4a537e825a99596da2fb9cf5cc0d89fae957fe4f55bfdcbb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_1d9eb08de5ecef4a537e825a99596da2fb9cf5cc0d89fae957fe4f55bfdcbb4d->leave($__internal_1d9eb08de5ecef4a537e825a99596da2fb9cf5cc0d89fae957fe4f55bfdcbb4d_prof);

        
        $__internal_9a5d9d26ffb96fd0dc3dba080844f283f6d6cc7a943bd5ba264ee0a90885e4a1->leave($__internal_9a5d9d26ffb96fd0dc3dba080844f283f6d6cc7a943bd5ba264ee0a90885e4a1_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2ece2007fadf1ac43ccf37565f1036bffd3d5431d07eeeb52d9a9f000e5a1c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ece2007fadf1ac43ccf37565f1036bffd3d5431d07eeeb52d9a9f000e5a1c84->enter($__internal_2ece2007fadf1ac43ccf37565f1036bffd3d5431d07eeeb52d9a9f000e5a1c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ab229a73926ba45f47317f5495c21700c91ef1bbc414ddbf6398c8a2f222ad2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab229a73926ba45f47317f5495c21700c91ef1bbc414ddbf6398c8a2f222ad2f->enter($__internal_ab229a73926ba45f47317f5495c21700c91ef1bbc414ddbf6398c8a2f222ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_ab229a73926ba45f47317f5495c21700c91ef1bbc414ddbf6398c8a2f222ad2f->leave($__internal_ab229a73926ba45f47317f5495c21700c91ef1bbc414ddbf6398c8a2f222ad2f_prof);

        
        $__internal_2ece2007fadf1ac43ccf37565f1036bffd3d5431d07eeeb52d9a9f000e5a1c84->leave($__internal_2ece2007fadf1ac43ccf37565f1036bffd3d5431d07eeeb52d9a9f000e5a1c84_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e18d34ab3266051bac9bfec03575a71365746bc57e09bc482c99179e66adb2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18d34ab3266051bac9bfec03575a71365746bc57e09bc482c99179e66adb2ee->enter($__internal_e18d34ab3266051bac9bfec03575a71365746bc57e09bc482c99179e66adb2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4134a2f10a4d91ce6b5d36ac6aa6597e9cd1eaf51c95e1902788f0717678c0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4134a2f10a4d91ce6b5d36ac6aa6597e9cd1eaf51c95e1902788f0717678c0ec->enter($__internal_4134a2f10a4d91ce6b5d36ac6aa6597e9cd1eaf51c95e1902788f0717678c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_4134a2f10a4d91ce6b5d36ac6aa6597e9cd1eaf51c95e1902788f0717678c0ec->leave($__internal_4134a2f10a4d91ce6b5d36ac6aa6597e9cd1eaf51c95e1902788f0717678c0ec_prof);

        
        $__internal_e18d34ab3266051bac9bfec03575a71365746bc57e09bc482c99179e66adb2ee->leave($__internal_e18d34ab3266051bac9bfec03575a71365746bc57e09bc482c99179e66adb2ee_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_7b17b4dfec403036ca2ab94f530b17608021d09288104a0a2d7ee13983eea64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b17b4dfec403036ca2ab94f530b17608021d09288104a0a2d7ee13983eea64a->enter($__internal_7b17b4dfec403036ca2ab94f530b17608021d09288104a0a2d7ee13983eea64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_96e86820349b280606dc70ba6ccc6c8a4d288eac76816a61aac08efde8d3aaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e86820349b280606dc70ba6ccc6c8a4d288eac76816a61aac08efde8d3aaff->enter($__internal_96e86820349b280606dc70ba6ccc6c8a4d288eac76816a61aac08efde8d3aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_96e86820349b280606dc70ba6ccc6c8a4d288eac76816a61aac08efde8d3aaff->leave($__internal_96e86820349b280606dc70ba6ccc6c8a4d288eac76816a61aac08efde8d3aaff_prof);

        
        $__internal_7b17b4dfec403036ca2ab94f530b17608021d09288104a0a2d7ee13983eea64a->leave($__internal_7b17b4dfec403036ca2ab94f530b17608021d09288104a0a2d7ee13983eea64a_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7e64144b4a11ad3ae28aa7ad73719055e72ede7cd323ba7377b5ad23ba7b756f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e64144b4a11ad3ae28aa7ad73719055e72ede7cd323ba7377b5ad23ba7b756f->enter($__internal_7e64144b4a11ad3ae28aa7ad73719055e72ede7cd323ba7377b5ad23ba7b756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5d79bbb06502a633d4ab03b4e9a292b75d8c91e9be8868cab08a0870feda3829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d79bbb06502a633d4ab03b4e9a292b75d8c91e9be8868cab08a0870feda3829->enter($__internal_5d79bbb06502a633d4ab03b4e9a292b75d8c91e9be8868cab08a0870feda3829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5d79bbb06502a633d4ab03b4e9a292b75d8c91e9be8868cab08a0870feda3829->leave($__internal_5d79bbb06502a633d4ab03b4e9a292b75d8c91e9be8868cab08a0870feda3829_prof);

        
        $__internal_7e64144b4a11ad3ae28aa7ad73719055e72ede7cd323ba7377b5ad23ba7b756f->leave($__internal_7e64144b4a11ad3ae28aa7ad73719055e72ede7cd323ba7377b5ad23ba7b756f_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_fc7345f3a22a1e20768c962fcba2b3ca20d6089ddc72657048ffc1246b81ee1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7345f3a22a1e20768c962fcba2b3ca20d6089ddc72657048ffc1246b81ee1d->enter($__internal_fc7345f3a22a1e20768c962fcba2b3ca20d6089ddc72657048ffc1246b81ee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b1be88cffb85ba693a9f0b02acdf7364dc95bd8d20e5dfd8ff3995c2f25563ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1be88cffb85ba693a9f0b02acdf7364dc95bd8d20e5dfd8ff3995c2f25563ee->enter($__internal_b1be88cffb85ba693a9f0b02acdf7364dc95bd8d20e5dfd8ff3995c2f25563ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_b1be88cffb85ba693a9f0b02acdf7364dc95bd8d20e5dfd8ff3995c2f25563ee->leave($__internal_b1be88cffb85ba693a9f0b02acdf7364dc95bd8d20e5dfd8ff3995c2f25563ee_prof);

        
        $__internal_fc7345f3a22a1e20768c962fcba2b3ca20d6089ddc72657048ffc1246b81ee1d->leave($__internal_fc7345f3a22a1e20768c962fcba2b3ca20d6089ddc72657048ffc1246b81ee1d_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7e9d60b6130010fd436ca1eb5d3f80512cc8c9101bb7fc43b738a53e49584355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9d60b6130010fd436ca1eb5d3f80512cc8c9101bb7fc43b738a53e49584355->enter($__internal_7e9d60b6130010fd436ca1eb5d3f80512cc8c9101bb7fc43b738a53e49584355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_98b9dd9bb33c0f6b27052be8a9400fc7c9eb293ddf0eed10f9067fb26c6dac3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b9dd9bb33c0f6b27052be8a9400fc7c9eb293ddf0eed10f9067fb26c6dac3f->enter($__internal_98b9dd9bb33c0f6b27052be8a9400fc7c9eb293ddf0eed10f9067fb26c6dac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_98b9dd9bb33c0f6b27052be8a9400fc7c9eb293ddf0eed10f9067fb26c6dac3f->leave($__internal_98b9dd9bb33c0f6b27052be8a9400fc7c9eb293ddf0eed10f9067fb26c6dac3f_prof);

        
        $__internal_7e9d60b6130010fd436ca1eb5d3f80512cc8c9101bb7fc43b738a53e49584355->leave($__internal_7e9d60b6130010fd436ca1eb5d3f80512cc8c9101bb7fc43b738a53e49584355_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_32bfd16ce58a16b6f3c0ddb06431dfb8a8a801ab2638d72a6a26e46f8ba72836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bfd16ce58a16b6f3c0ddb06431dfb8a8a801ab2638d72a6a26e46f8ba72836->enter($__internal_32bfd16ce58a16b6f3c0ddb06431dfb8a8a801ab2638d72a6a26e46f8ba72836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2732fcc8906d4d7815faecf44d4ba4aca901f79fab1e9096cfd9311743123d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2732fcc8906d4d7815faecf44d4ba4aca901f79fab1e9096cfd9311743123d0c->enter($__internal_2732fcc8906d4d7815faecf44d4ba4aca901f79fab1e9096cfd9311743123d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2732fcc8906d4d7815faecf44d4ba4aca901f79fab1e9096cfd9311743123d0c->leave($__internal_2732fcc8906d4d7815faecf44d4ba4aca901f79fab1e9096cfd9311743123d0c_prof);

        
        $__internal_32bfd16ce58a16b6f3c0ddb06431dfb8a8a801ab2638d72a6a26e46f8ba72836->leave($__internal_32bfd16ce58a16b6f3c0ddb06431dfb8a8a801ab2638d72a6a26e46f8ba72836_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_335a4026d7b16fa6492d790686e4ea0b24d451048d25ab9b0869f76b2c66c2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335a4026d7b16fa6492d790686e4ea0b24d451048d25ab9b0869f76b2c66c2b5->enter($__internal_335a4026d7b16fa6492d790686e4ea0b24d451048d25ab9b0869f76b2c66c2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_31f2d15515e988fd8b9bd0fe341a864964a7a4a8502a8d14a65a9020a7e00ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f2d15515e988fd8b9bd0fe341a864964a7a4a8502a8d14a65a9020a7e00ce8->enter($__internal_31f2d15515e988fd8b9bd0fe341a864964a7a4a8502a8d14a65a9020a7e00ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_31f2d15515e988fd8b9bd0fe341a864964a7a4a8502a8d14a65a9020a7e00ce8->leave($__internal_31f2d15515e988fd8b9bd0fe341a864964a7a4a8502a8d14a65a9020a7e00ce8_prof);

        
        $__internal_335a4026d7b16fa6492d790686e4ea0b24d451048d25ab9b0869f76b2c66c2b5->leave($__internal_335a4026d7b16fa6492d790686e4ea0b24d451048d25ab9b0869f76b2c66c2b5_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_02a3240bdc5804afbe351dafbbd36fcc8c2e79815752142ba3d2feafa67e78d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a3240bdc5804afbe351dafbbd36fcc8c2e79815752142ba3d2feafa67e78d8->enter($__internal_02a3240bdc5804afbe351dafbbd36fcc8c2e79815752142ba3d2feafa67e78d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a1e687bb3cb2847729b45adb86440ba1ec71d50ca3527bb094ed0377f04a7c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e687bb3cb2847729b45adb86440ba1ec71d50ca3527bb094ed0377f04a7c7d->enter($__internal_a1e687bb3cb2847729b45adb86440ba1ec71d50ca3527bb094ed0377f04a7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a1e687bb3cb2847729b45adb86440ba1ec71d50ca3527bb094ed0377f04a7c7d->leave($__internal_a1e687bb3cb2847729b45adb86440ba1ec71d50ca3527bb094ed0377f04a7c7d_prof);

        
        $__internal_02a3240bdc5804afbe351dafbbd36fcc8c2e79815752142ba3d2feafa67e78d8->leave($__internal_02a3240bdc5804afbe351dafbbd36fcc8c2e79815752142ba3d2feafa67e78d8_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_04feb7f912307621a0903ac8f44e6426bc83b91bb4f8140efb2ba0970678b293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04feb7f912307621a0903ac8f44e6426bc83b91bb4f8140efb2ba0970678b293->enter($__internal_04feb7f912307621a0903ac8f44e6426bc83b91bb4f8140efb2ba0970678b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d4d676e53658d32aab94d6fed48c00033905867b95089d72348dd1000c54f113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d676e53658d32aab94d6fed48c00033905867b95089d72348dd1000c54f113->enter($__internal_d4d676e53658d32aab94d6fed48c00033905867b95089d72348dd1000c54f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d4d676e53658d32aab94d6fed48c00033905867b95089d72348dd1000c54f113->leave($__internal_d4d676e53658d32aab94d6fed48c00033905867b95089d72348dd1000c54f113_prof);

        
        $__internal_04feb7f912307621a0903ac8f44e6426bc83b91bb4f8140efb2ba0970678b293->leave($__internal_04feb7f912307621a0903ac8f44e6426bc83b91bb4f8140efb2ba0970678b293_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_21fd1a8a2b2382a29bd48c1fa0a52ed91217497bec5b15a875f3104d26e8be44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fd1a8a2b2382a29bd48c1fa0a52ed91217497bec5b15a875f3104d26e8be44->enter($__internal_21fd1a8a2b2382a29bd48c1fa0a52ed91217497bec5b15a875f3104d26e8be44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_28bb56cfdcd9e360acf0e985172f1c1e77f1e76e15fd2f64474cbcdc2d87a8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bb56cfdcd9e360acf0e985172f1c1e77f1e76e15fd2f64474cbcdc2d87a8ce->enter($__internal_28bb56cfdcd9e360acf0e985172f1c1e77f1e76e15fd2f64474cbcdc2d87a8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_28bb56cfdcd9e360acf0e985172f1c1e77f1e76e15fd2f64474cbcdc2d87a8ce->leave($__internal_28bb56cfdcd9e360acf0e985172f1c1e77f1e76e15fd2f64474cbcdc2d87a8ce_prof);

        
        $__internal_21fd1a8a2b2382a29bd48c1fa0a52ed91217497bec5b15a875f3104d26e8be44->leave($__internal_21fd1a8a2b2382a29bd48c1fa0a52ed91217497bec5b15a875f3104d26e8be44_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85e62ca863b4cd9d88ffd781f8fddc1db26166c6f8e5f40956f8ef4fcbe0c4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e62ca863b4cd9d88ffd781f8fddc1db26166c6f8e5f40956f8ef4fcbe0c4e7->enter($__internal_85e62ca863b4cd9d88ffd781f8fddc1db26166c6f8e5f40956f8ef4fcbe0c4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_61ea1addccbd88c3ff34a6fe2a9123fcb68d66b65415246e4a741f667fcfff29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ea1addccbd88c3ff34a6fe2a9123fcb68d66b65415246e4a741f667fcfff29->enter($__internal_61ea1addccbd88c3ff34a6fe2a9123fcb68d66b65415246e4a741f667fcfff29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_61ea1addccbd88c3ff34a6fe2a9123fcb68d66b65415246e4a741f667fcfff29->leave($__internal_61ea1addccbd88c3ff34a6fe2a9123fcb68d66b65415246e4a741f667fcfff29_prof);

        
        $__internal_85e62ca863b4cd9d88ffd781f8fddc1db26166c6f8e5f40956f8ef4fcbe0c4e7->leave($__internal_85e62ca863b4cd9d88ffd781f8fddc1db26166c6f8e5f40956f8ef4fcbe0c4e7_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2fd25dc7dad8d5dfec86abd7a7d105cba3e89e1774ce08e06bd60c858df81f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd25dc7dad8d5dfec86abd7a7d105cba3e89e1774ce08e06bd60c858df81f38->enter($__internal_2fd25dc7dad8d5dfec86abd7a7d105cba3e89e1774ce08e06bd60c858df81f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0e75c56977aaa4d6098f6645bc427762d99b539c5e81db4defe2efb4a443c383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e75c56977aaa4d6098f6645bc427762d99b539c5e81db4defe2efb4a443c383->enter($__internal_0e75c56977aaa4d6098f6645bc427762d99b539c5e81db4defe2efb4a443c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_0e75c56977aaa4d6098f6645bc427762d99b539c5e81db4defe2efb4a443c383->leave($__internal_0e75c56977aaa4d6098f6645bc427762d99b539c5e81db4defe2efb4a443c383_prof);

        
        $__internal_2fd25dc7dad8d5dfec86abd7a7d105cba3e89e1774ce08e06bd60c858df81f38->leave($__internal_2fd25dc7dad8d5dfec86abd7a7d105cba3e89e1774ce08e06bd60c858df81f38_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0cba086fd5b67d7dbf39d31fc927b532fcffd1ca4c62f26a5c52e90a3b314e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cba086fd5b67d7dbf39d31fc927b532fcffd1ca4c62f26a5c52e90a3b314e64->enter($__internal_0cba086fd5b67d7dbf39d31fc927b532fcffd1ca4c62f26a5c52e90a3b314e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_afe33c8ea29ee7ddd73774095421d19fbc382a95d5a8a21c32a6f53909230b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe33c8ea29ee7ddd73774095421d19fbc382a95d5a8a21c32a6f53909230b55->enter($__internal_afe33c8ea29ee7ddd73774095421d19fbc382a95d5a8a21c32a6f53909230b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_afe33c8ea29ee7ddd73774095421d19fbc382a95d5a8a21c32a6f53909230b55->leave($__internal_afe33c8ea29ee7ddd73774095421d19fbc382a95d5a8a21c32a6f53909230b55_prof);

        
        $__internal_0cba086fd5b67d7dbf39d31fc927b532fcffd1ca4c62f26a5c52e90a3b314e64->leave($__internal_0cba086fd5b67d7dbf39d31fc927b532fcffd1ca4c62f26a5c52e90a3b314e64_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_afd6713162450cd52b71a8fdb5476605d6693f2907e770ee146366636e14c879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd6713162450cd52b71a8fdb5476605d6693f2907e770ee146366636e14c879->enter($__internal_afd6713162450cd52b71a8fdb5476605d6693f2907e770ee146366636e14c879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3baa54e22bd76e595452f9df49c3168d1f03be50a5b38255cd4a41e73180761a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baa54e22bd76e595452f9df49c3168d1f03be50a5b38255cd4a41e73180761a->enter($__internal_3baa54e22bd76e595452f9df49c3168d1f03be50a5b38255cd4a41e73180761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3baa54e22bd76e595452f9df49c3168d1f03be50a5b38255cd4a41e73180761a->leave($__internal_3baa54e22bd76e595452f9df49c3168d1f03be50a5b38255cd4a41e73180761a_prof);

        
        $__internal_afd6713162450cd52b71a8fdb5476605d6693f2907e770ee146366636e14c879->leave($__internal_afd6713162450cd52b71a8fdb5476605d6693f2907e770ee146366636e14c879_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0e6c87fc6b168bb0acd122ef0ee5df794607fffc2ce99f17764fdabe9685bdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6c87fc6b168bb0acd122ef0ee5df794607fffc2ce99f17764fdabe9685bdcf->enter($__internal_0e6c87fc6b168bb0acd122ef0ee5df794607fffc2ce99f17764fdabe9685bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d3d6ff5bb6655a10e7955732d4956b6b26504e34d3e349fef845567f2f91a4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d6ff5bb6655a10e7955732d4956b6b26504e34d3e349fef845567f2f91a4ca->enter($__internal_d3d6ff5bb6655a10e7955732d4956b6b26504e34d3e349fef845567f2f91a4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d3d6ff5bb6655a10e7955732d4956b6b26504e34d3e349fef845567f2f91a4ca->leave($__internal_d3d6ff5bb6655a10e7955732d4956b6b26504e34d3e349fef845567f2f91a4ca_prof);

        
        $__internal_0e6c87fc6b168bb0acd122ef0ee5df794607fffc2ce99f17764fdabe9685bdcf->leave($__internal_0e6c87fc6b168bb0acd122ef0ee5df794607fffc2ce99f17764fdabe9685bdcf_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4f8205a0d46ab6302be25f3af47fab406c5977c93acba2f9ad416ee09d0cd25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8205a0d46ab6302be25f3af47fab406c5977c93acba2f9ad416ee09d0cd25c->enter($__internal_4f8205a0d46ab6302be25f3af47fab406c5977c93acba2f9ad416ee09d0cd25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8c62bb134ba507989d586b3138707cf57c6a4c27f13cf0e2adece9e2e8b1fb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c62bb134ba507989d586b3138707cf57c6a4c27f13cf0e2adece9e2e8b1fb60->enter($__internal_8c62bb134ba507989d586b3138707cf57c6a4c27f13cf0e2adece9e2e8b1fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8c62bb134ba507989d586b3138707cf57c6a4c27f13cf0e2adece9e2e8b1fb60->leave($__internal_8c62bb134ba507989d586b3138707cf57c6a4c27f13cf0e2adece9e2e8b1fb60_prof);

        
        $__internal_4f8205a0d46ab6302be25f3af47fab406c5977c93acba2f9ad416ee09d0cd25c->leave($__internal_4f8205a0d46ab6302be25f3af47fab406c5977c93acba2f9ad416ee09d0cd25c_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_04b856d0000d11460fe62ea1f9d988d72ba17dd003594f6fcb3144c4c66acef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b856d0000d11460fe62ea1f9d988d72ba17dd003594f6fcb3144c4c66acef6->enter($__internal_04b856d0000d11460fe62ea1f9d988d72ba17dd003594f6fcb3144c4c66acef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b37785a35940c253574ffa73b76d4d191ad6fa82d7ec59614432b889851c20d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37785a35940c253574ffa73b76d4d191ad6fa82d7ec59614432b889851c20d8->enter($__internal_b37785a35940c253574ffa73b76d4d191ad6fa82d7ec59614432b889851c20d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_b37785a35940c253574ffa73b76d4d191ad6fa82d7ec59614432b889851c20d8->leave($__internal_b37785a35940c253574ffa73b76d4d191ad6fa82d7ec59614432b889851c20d8_prof);

        
        $__internal_04b856d0000d11460fe62ea1f9d988d72ba17dd003594f6fcb3144c4c66acef6->leave($__internal_04b856d0000d11460fe62ea1f9d988d72ba17dd003594f6fcb3144c4c66acef6_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_61df5a04fa7ba690e9abe512c1fd6d8258b84080046d719f38b192c920d37ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61df5a04fa7ba690e9abe512c1fd6d8258b84080046d719f38b192c920d37ae6->enter($__internal_61df5a04fa7ba690e9abe512c1fd6d8258b84080046d719f38b192c920d37ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2b3c25e091a11d4632b75a9e4f5b2f83f1be240adf4a4b14f0abdf5194e6a02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3c25e091a11d4632b75a9e4f5b2f83f1be240adf4a4b14f0abdf5194e6a02c->enter($__internal_2b3c25e091a11d4632b75a9e4f5b2f83f1be240adf4a4b14f0abdf5194e6a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_2b3c25e091a11d4632b75a9e4f5b2f83f1be240adf4a4b14f0abdf5194e6a02c->leave($__internal_2b3c25e091a11d4632b75a9e4f5b2f83f1be240adf4a4b14f0abdf5194e6a02c_prof);

        
        $__internal_61df5a04fa7ba690e9abe512c1fd6d8258b84080046d719f38b192c920d37ae6->leave($__internal_61df5a04fa7ba690e9abe512c1fd6d8258b84080046d719f38b192c920d37ae6_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_dd91c0e512ff1b7600d324a488d0a2a2e4b5ace5953a521a3bebbc25a444cb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd91c0e512ff1b7600d324a488d0a2a2e4b5ace5953a521a3bebbc25a444cb82->enter($__internal_dd91c0e512ff1b7600d324a488d0a2a2e4b5ace5953a521a3bebbc25a444cb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1b8246b08a99cbd8a510ffaebf578f4e657d9fca2a0ed1c21d11f15d80d8f4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8246b08a99cbd8a510ffaebf578f4e657d9fca2a0ed1c21d11f15d80d8f4d8->enter($__internal_1b8246b08a99cbd8a510ffaebf578f4e657d9fca2a0ed1c21d11f15d80d8f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1b8246b08a99cbd8a510ffaebf578f4e657d9fca2a0ed1c21d11f15d80d8f4d8->leave($__internal_1b8246b08a99cbd8a510ffaebf578f4e657d9fca2a0ed1c21d11f15d80d8f4d8_prof);

        
        $__internal_dd91c0e512ff1b7600d324a488d0a2a2e4b5ace5953a521a3bebbc25a444cb82->leave($__internal_dd91c0e512ff1b7600d324a488d0a2a2e4b5ace5953a521a3bebbc25a444cb82_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/Durden/Documents/activites_oc/projet5/nao/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
