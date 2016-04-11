<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e8de5dec97aceabe3e29a120ac83ddf1ee9354bf2aba62c1e0706454801398b4 extends Twig_Template
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
        $__internal_f386d6e89aae6bd2a3d603197742dfaf02960f8df277191d2735136f8c0a3f56 = $this->env->getExtension("native_profiler");
        $__internal_f386d6e89aae6bd2a3d603197742dfaf02960f8df277191d2735136f8c0a3f56->enter($__internal_f386d6e89aae6bd2a3d603197742dfaf02960f8df277191d2735136f8c0a3f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f386d6e89aae6bd2a3d603197742dfaf02960f8df277191d2735136f8c0a3f56->leave($__internal_f386d6e89aae6bd2a3d603197742dfaf02960f8df277191d2735136f8c0a3f56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
