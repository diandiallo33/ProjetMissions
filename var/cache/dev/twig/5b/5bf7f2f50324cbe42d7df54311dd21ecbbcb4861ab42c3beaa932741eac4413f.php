<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d53a0dea41940017ef97b6cb2e4c03490de18296cfdddb994daa9756e480de1c extends Twig_Template
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
        $__internal_e1a964e9c1166f61eff416e00b38ca5eac536cf8b67423f7205f763c91fd1a00 = $this->env->getExtension("native_profiler");
        $__internal_e1a964e9c1166f61eff416e00b38ca5eac536cf8b67423f7205f763c91fd1a00->enter($__internal_e1a964e9c1166f61eff416e00b38ca5eac536cf8b67423f7205f763c91fd1a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e1a964e9c1166f61eff416e00b38ca5eac536cf8b67423f7205f763c91fd1a00->leave($__internal_e1a964e9c1166f61eff416e00b38ca5eac536cf8b67423f7205f763c91fd1a00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
