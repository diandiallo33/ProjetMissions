<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_302e96993177f239aee8dd84d6f4656315296239bcc49ae3651b549125b563ee extends Twig_Template
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
        $__internal_ad3933a9cc27a6a2b504419a17d3c6fdc2f745e176bf432bfbdf219abcfdf123 = $this->env->getExtension("native_profiler");
        $__internal_ad3933a9cc27a6a2b504419a17d3c6fdc2f745e176bf432bfbdf219abcfdf123->enter($__internal_ad3933a9cc27a6a2b504419a17d3c6fdc2f745e176bf432bfbdf219abcfdf123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ad3933a9cc27a6a2b504419a17d3c6fdc2f745e176bf432bfbdf219abcfdf123->leave($__internal_ad3933a9cc27a6a2b504419a17d3c6fdc2f745e176bf432bfbdf219abcfdf123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
