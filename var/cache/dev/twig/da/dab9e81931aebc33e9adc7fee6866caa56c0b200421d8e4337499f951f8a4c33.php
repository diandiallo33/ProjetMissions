<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba1d754b09384dbb031256c9687f8002fd9e796c1b1c2a6781e257a47d044bcd extends Twig_Template
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
        $__internal_5c0deac1ebcd297a798b71e99a85e0b919d4402ce1b7456d0c444dbffe7bd353 = $this->env->getExtension("native_profiler");
        $__internal_5c0deac1ebcd297a798b71e99a85e0b919d4402ce1b7456d0c444dbffe7bd353->enter($__internal_5c0deac1ebcd297a798b71e99a85e0b919d4402ce1b7456d0c444dbffe7bd353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5c0deac1ebcd297a798b71e99a85e0b919d4402ce1b7456d0c444dbffe7bd353->leave($__internal_5c0deac1ebcd297a798b71e99a85e0b919d4402ce1b7456d0c444dbffe7bd353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
