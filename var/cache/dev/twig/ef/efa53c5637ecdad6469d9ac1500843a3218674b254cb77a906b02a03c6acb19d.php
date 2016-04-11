<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_575514d9a8af5cce443e2eb16a089a6d0fa760f161a24e7697065dae2e25d19b extends Twig_Template
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
        $__internal_b0cae1b5a204d7752389842766f42a4f82d74773817f4fe4f46827ea3c14191b = $this->env->getExtension("native_profiler");
        $__internal_b0cae1b5a204d7752389842766f42a4f82d74773817f4fe4f46827ea3c14191b->enter($__internal_b0cae1b5a204d7752389842766f42a4f82d74773817f4fe4f46827ea3c14191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b0cae1b5a204d7752389842766f42a4f82d74773817f4fe4f46827ea3c14191b->leave($__internal_b0cae1b5a204d7752389842766f42a4f82d74773817f4fe4f46827ea3c14191b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
