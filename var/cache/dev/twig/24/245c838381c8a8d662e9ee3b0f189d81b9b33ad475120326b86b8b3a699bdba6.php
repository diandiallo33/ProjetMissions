<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e5676e984c054f28fd0dd8be3ee4b5f0caac8c33b4f02c2010be2449f68ac99d extends Twig_Template
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
        $__internal_46311a462334fcadf74c4774882b730eed43ffe1dc8489cd2219b28373f25377 = $this->env->getExtension("native_profiler");
        $__internal_46311a462334fcadf74c4774882b730eed43ffe1dc8489cd2219b28373f25377->enter($__internal_46311a462334fcadf74c4774882b730eed43ffe1dc8489cd2219b28373f25377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_46311a462334fcadf74c4774882b730eed43ffe1dc8489cd2219b28373f25377->leave($__internal_46311a462334fcadf74c4774882b730eed43ffe1dc8489cd2219b28373f25377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
