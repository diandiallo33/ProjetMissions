<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_31bffe60c6ee256b632b715184b160f39652052225a828284a027dda44d9bee2 extends Twig_Template
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
        $__internal_9c81a33bef8e6ef749d56d01602da6a1e053d56995218eff1cc0045c81731868 = $this->env->getExtension("native_profiler");
        $__internal_9c81a33bef8e6ef749d56d01602da6a1e053d56995218eff1cc0045c81731868->enter($__internal_9c81a33bef8e6ef749d56d01602da6a1e053d56995218eff1cc0045c81731868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9c81a33bef8e6ef749d56d01602da6a1e053d56995218eff1cc0045c81731868->leave($__internal_9c81a33bef8e6ef749d56d01602da6a1e053d56995218eff1cc0045c81731868_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
