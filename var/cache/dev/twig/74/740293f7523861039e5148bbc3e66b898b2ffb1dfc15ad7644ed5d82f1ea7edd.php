<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_31d4144020bd178c2fe19c6cfb5d8b2d5c43d5b1115e3789ecf0fbaa138112c0 extends Twig_Template
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
        $__internal_d5953f187c7447efd881ff956f2c6da5b0a9c58522d156fba2b0164f207179c6 = $this->env->getExtension("native_profiler");
        $__internal_d5953f187c7447efd881ff956f2c6da5b0a9c58522d156fba2b0164f207179c6->enter($__internal_d5953f187c7447efd881ff956f2c6da5b0a9c58522d156fba2b0164f207179c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d5953f187c7447efd881ff956f2c6da5b0a9c58522d156fba2b0164f207179c6->leave($__internal_d5953f187c7447efd881ff956f2c6da5b0a9c58522d156fba2b0164f207179c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
