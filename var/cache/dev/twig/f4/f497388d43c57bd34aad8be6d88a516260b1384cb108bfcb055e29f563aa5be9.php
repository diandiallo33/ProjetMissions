<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_07f7954cc19c7c459cdb9104ce62952e5f3f658dd65e2f92fa40e37476ad91b7 extends Twig_Template
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
        $__internal_4ad942be8eb5ca45742752de5f668aca513597add2611ec571725c7476d06f97 = $this->env->getExtension("native_profiler");
        $__internal_4ad942be8eb5ca45742752de5f668aca513597add2611ec571725c7476d06f97->enter($__internal_4ad942be8eb5ca45742752de5f668aca513597add2611ec571725c7476d06f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4ad942be8eb5ca45742752de5f668aca513597add2611ec571725c7476d06f97->leave($__internal_4ad942be8eb5ca45742752de5f668aca513597add2611ec571725c7476d06f97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
