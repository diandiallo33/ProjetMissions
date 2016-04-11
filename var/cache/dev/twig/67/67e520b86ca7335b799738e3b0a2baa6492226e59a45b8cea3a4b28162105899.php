<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3779b6cf8fb6522804cdb181bfef81104754930c38bde3dfdc84cb435256f703 extends Twig_Template
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
        $__internal_01fe27a53ba62a16c2a66e2e196e97c802c4e15407444b102d221d2f75abb181 = $this->env->getExtension("native_profiler");
        $__internal_01fe27a53ba62a16c2a66e2e196e97c802c4e15407444b102d221d2f75abb181->enter($__internal_01fe27a53ba62a16c2a66e2e196e97c802c4e15407444b102d221d2f75abb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_01fe27a53ba62a16c2a66e2e196e97c802c4e15407444b102d221d2f75abb181->leave($__internal_01fe27a53ba62a16c2a66e2e196e97c802c4e15407444b102d221d2f75abb181_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
