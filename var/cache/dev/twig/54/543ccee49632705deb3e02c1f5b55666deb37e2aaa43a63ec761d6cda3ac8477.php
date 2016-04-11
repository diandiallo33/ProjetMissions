<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bd2be19d8ac8cdfa8fbee67e275966f527e90e6ee75da53deb8cb5e02ffc211d extends Twig_Template
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
        $__internal_f95b0809c1a5b6e5becd82c759a039f608a1d6acc3ac91d981b13480890e412f = $this->env->getExtension("native_profiler");
        $__internal_f95b0809c1a5b6e5becd82c759a039f608a1d6acc3ac91d981b13480890e412f->enter($__internal_f95b0809c1a5b6e5becd82c759a039f608a1d6acc3ac91d981b13480890e412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f95b0809c1a5b6e5becd82c759a039f608a1d6acc3ac91d981b13480890e412f->leave($__internal_f95b0809c1a5b6e5becd82c759a039f608a1d6acc3ac91d981b13480890e412f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
