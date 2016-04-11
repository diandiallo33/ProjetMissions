<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2eae8904bd99ed0af7b92f722a322368c3c6ddcce9c16c5f608ce147418e35db extends Twig_Template
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
        $__internal_43ccd46f047488d68aee0d62448c88bd19878271287232d5cd27b685fef6864b = $this->env->getExtension("native_profiler");
        $__internal_43ccd46f047488d68aee0d62448c88bd19878271287232d5cd27b685fef6864b->enter($__internal_43ccd46f047488d68aee0d62448c88bd19878271287232d5cd27b685fef6864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43ccd46f047488d68aee0d62448c88bd19878271287232d5cd27b685fef6864b->leave($__internal_43ccd46f047488d68aee0d62448c88bd19878271287232d5cd27b685fef6864b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
