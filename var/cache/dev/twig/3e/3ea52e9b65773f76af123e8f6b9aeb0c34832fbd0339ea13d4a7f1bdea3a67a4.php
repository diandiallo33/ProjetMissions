<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_17112ac2c8afd5af288281d5d1ff952653b379a999436bab092bffa5cefb02f4 extends Twig_Template
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
        $__internal_9f532c1ac22a8f9e1c38ad773501284b53dda37c984a131dde393435cfb33fb9 = $this->env->getExtension("native_profiler");
        $__internal_9f532c1ac22a8f9e1c38ad773501284b53dda37c984a131dde393435cfb33fb9->enter($__internal_9f532c1ac22a8f9e1c38ad773501284b53dda37c984a131dde393435cfb33fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9f532c1ac22a8f9e1c38ad773501284b53dda37c984a131dde393435cfb33fb9->leave($__internal_9f532c1ac22a8f9e1c38ad773501284b53dda37c984a131dde393435cfb33fb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
