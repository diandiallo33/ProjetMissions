<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0856b05b0ccfda08c095c703e0bd475c502e04173f45f5bea58c8539e6d5f1d0 extends Twig_Template
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
        $__internal_efecc2a625b52a8f8f8fb77405f3ed6f2961bf7327865234483dd3a8ca010b0a = $this->env->getExtension("native_profiler");
        $__internal_efecc2a625b52a8f8f8fb77405f3ed6f2961bf7327865234483dd3a8ca010b0a->enter($__internal_efecc2a625b52a8f8f8fb77405f3ed6f2961bf7327865234483dd3a8ca010b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_efecc2a625b52a8f8f8fb77405f3ed6f2961bf7327865234483dd3a8ca010b0a->leave($__internal_efecc2a625b52a8f8f8fb77405f3ed6f2961bf7327865234483dd3a8ca010b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
