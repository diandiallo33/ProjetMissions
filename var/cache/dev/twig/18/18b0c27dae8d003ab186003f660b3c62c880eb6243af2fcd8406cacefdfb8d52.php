<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a1bf2196e5c50c1fd05e34d5fd6e46fb02077c21b0bef65fc950dff30c9ebef6 extends Twig_Template
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
        $__internal_244490a1a4078d8ec02aca7705c018365184b20ea624338e65dff8d89c69d429 = $this->env->getExtension("native_profiler");
        $__internal_244490a1a4078d8ec02aca7705c018365184b20ea624338e65dff8d89c69d429->enter($__internal_244490a1a4078d8ec02aca7705c018365184b20ea624338e65dff8d89c69d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_244490a1a4078d8ec02aca7705c018365184b20ea624338e65dff8d89c69d429->leave($__internal_244490a1a4078d8ec02aca7705c018365184b20ea624338e65dff8d89c69d429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
