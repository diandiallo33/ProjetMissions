<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ee9e780c0d9842f3ab098f35212a328d3e3cb87a78876e86130cf5990b2080e3 extends Twig_Template
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
        $__internal_0e2807dc2d0b4e76e1d38f07dc817f228185819a5d7b221ea34566533c1bc0ee = $this->env->getExtension("native_profiler");
        $__internal_0e2807dc2d0b4e76e1d38f07dc817f228185819a5d7b221ea34566533c1bc0ee->enter($__internal_0e2807dc2d0b4e76e1d38f07dc817f228185819a5d7b221ea34566533c1bc0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0e2807dc2d0b4e76e1d38f07dc817f228185819a5d7b221ea34566533c1bc0ee->leave($__internal_0e2807dc2d0b4e76e1d38f07dc817f228185819a5d7b221ea34566533c1bc0ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
