<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9d0c27b089ba256e5593f7257d378f741fed83b2694d05d957b3bff151361122 extends Twig_Template
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
        $__internal_31da2fcf2be41c319f22dec81a198cad800b758317a0d86beb34b02921c064ba = $this->env->getExtension("native_profiler");
        $__internal_31da2fcf2be41c319f22dec81a198cad800b758317a0d86beb34b02921c064ba->enter($__internal_31da2fcf2be41c319f22dec81a198cad800b758317a0d86beb34b02921c064ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_31da2fcf2be41c319f22dec81a198cad800b758317a0d86beb34b02921c064ba->leave($__internal_31da2fcf2be41c319f22dec81a198cad800b758317a0d86beb34b02921c064ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
