<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ce1586bb1b7c127355be7605a842acdc36a6c985c22edecf50620312dcc34400 extends Twig_Template
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
        $__internal_2a6ecb287ec482a493e59794d9fcb1179dbdd6d5247963f298a6682ff0bebbe7 = $this->env->getExtension("native_profiler");
        $__internal_2a6ecb287ec482a493e59794d9fcb1179dbdd6d5247963f298a6682ff0bebbe7->enter($__internal_2a6ecb287ec482a493e59794d9fcb1179dbdd6d5247963f298a6682ff0bebbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2a6ecb287ec482a493e59794d9fcb1179dbdd6d5247963f298a6682ff0bebbe7->leave($__internal_2a6ecb287ec482a493e59794d9fcb1179dbdd6d5247963f298a6682ff0bebbe7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
