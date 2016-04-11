<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e11f418a9838e66bdcb0e963b421519f4b21d47d715ca1590291b7ed3d159ca6 extends Twig_Template
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
        $__internal_396a3e29b6dcdfdc11ee441316c03291ec520479680d9aa806f5580900149f50 = $this->env->getExtension("native_profiler");
        $__internal_396a3e29b6dcdfdc11ee441316c03291ec520479680d9aa806f5580900149f50->enter($__internal_396a3e29b6dcdfdc11ee441316c03291ec520479680d9aa806f5580900149f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_396a3e29b6dcdfdc11ee441316c03291ec520479680d9aa806f5580900149f50->leave($__internal_396a3e29b6dcdfdc11ee441316c03291ec520479680d9aa806f5580900149f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
