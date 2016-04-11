<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2e03e4463f93118321d542ebdcf78e657d7bb189f1488b2ba19a845b5c2d38ca extends Twig_Template
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
        $__internal_abdbcb8a5fc104db81e4ef85936312c217057d3b81151f028857eda8b1edd6a2 = $this->env->getExtension("native_profiler");
        $__internal_abdbcb8a5fc104db81e4ef85936312c217057d3b81151f028857eda8b1edd6a2->enter($__internal_abdbcb8a5fc104db81e4ef85936312c217057d3b81151f028857eda8b1edd6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_abdbcb8a5fc104db81e4ef85936312c217057d3b81151f028857eda8b1edd6a2->leave($__internal_abdbcb8a5fc104db81e4ef85936312c217057d3b81151f028857eda8b1edd6a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
