<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b924abf6513c7774f370583c21db52e48ccf55af44852a7908b41595289d44c7 extends Twig_Template
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
        $__internal_9288213040621022f24e28903ac4180b12e171aac2f73db3c58fc2704852a4e8 = $this->env->getExtension("native_profiler");
        $__internal_9288213040621022f24e28903ac4180b12e171aac2f73db3c58fc2704852a4e8->enter($__internal_9288213040621022f24e28903ac4180b12e171aac2f73db3c58fc2704852a4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9288213040621022f24e28903ac4180b12e171aac2f73db3c58fc2704852a4e8->leave($__internal_9288213040621022f24e28903ac4180b12e171aac2f73db3c58fc2704852a4e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
