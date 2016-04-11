<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4ec9fba07248c26c119cee2b100aa0907b4a63e6c30c734a7076946b6d26152 extends Twig_Template
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
        $__internal_d7892af5de0a238ca77a61fd7b2e7696320c538db4aba5bc6f5ad4b1a6f0897a = $this->env->getExtension("native_profiler");
        $__internal_d7892af5de0a238ca77a61fd7b2e7696320c538db4aba5bc6f5ad4b1a6f0897a->enter($__internal_d7892af5de0a238ca77a61fd7b2e7696320c538db4aba5bc6f5ad4b1a6f0897a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d7892af5de0a238ca77a61fd7b2e7696320c538db4aba5bc6f5ad4b1a6f0897a->leave($__internal_d7892af5de0a238ca77a61fd7b2e7696320c538db4aba5bc6f5ad4b1a6f0897a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
