<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b8e32e2f5a25e7626b80d59a1326b9e311d5fae5c1823a0895cfc08ec958ce1f extends Twig_Template
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
        $__internal_f1ff71501a913fbc5567811c9f872ba2c190172e02ab10a0aef9efeb43373380 = $this->env->getExtension("native_profiler");
        $__internal_f1ff71501a913fbc5567811c9f872ba2c190172e02ab10a0aef9efeb43373380->enter($__internal_f1ff71501a913fbc5567811c9f872ba2c190172e02ab10a0aef9efeb43373380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f1ff71501a913fbc5567811c9f872ba2c190172e02ab10a0aef9efeb43373380->leave($__internal_f1ff71501a913fbc5567811c9f872ba2c190172e02ab10a0aef9efeb43373380_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
