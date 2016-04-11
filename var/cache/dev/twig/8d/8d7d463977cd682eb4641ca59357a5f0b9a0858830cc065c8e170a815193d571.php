<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cdb2c75c7a6bf95e30aa897d7c70004610245fc92680a7b13a5dfdfdf700f2d9 extends Twig_Template
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
        $__internal_f1e5a4ed669f2eac4ca054a7f15c7ee29425391e2aba2c8529f1b45303bca0b9 = $this->env->getExtension("native_profiler");
        $__internal_f1e5a4ed669f2eac4ca054a7f15c7ee29425391e2aba2c8529f1b45303bca0b9->enter($__internal_f1e5a4ed669f2eac4ca054a7f15c7ee29425391e2aba2c8529f1b45303bca0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f1e5a4ed669f2eac4ca054a7f15c7ee29425391e2aba2c8529f1b45303bca0b9->leave($__internal_f1e5a4ed669f2eac4ca054a7f15c7ee29425391e2aba2c8529f1b45303bca0b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
