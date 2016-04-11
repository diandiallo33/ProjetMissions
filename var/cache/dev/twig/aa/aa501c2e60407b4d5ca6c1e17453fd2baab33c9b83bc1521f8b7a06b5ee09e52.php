<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9ce53937b921ee671830f2dcdb67d145bb1b4790f91d181fb18cdbb1ea74af40 extends Twig_Template
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
        $__internal_12a5fc5f0130cf9a08a0806149c74fe5136e81e59b13a11473c0e625c4a5d2d7 = $this->env->getExtension("native_profiler");
        $__internal_12a5fc5f0130cf9a08a0806149c74fe5136e81e59b13a11473c0e625c4a5d2d7->enter($__internal_12a5fc5f0130cf9a08a0806149c74fe5136e81e59b13a11473c0e625c4a5d2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_12a5fc5f0130cf9a08a0806149c74fe5136e81e59b13a11473c0e625c4a5d2d7->leave($__internal_12a5fc5f0130cf9a08a0806149c74fe5136e81e59b13a11473c0e625c4a5d2d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
