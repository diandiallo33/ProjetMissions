<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7b85e787ab833b81cca0289276852713b35661c949cbd9f67b241b20002b8d1f extends Twig_Template
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
        $__internal_75989eaa7e6de857275f6eb6d6ce517ee9cbe025a99d79e44dc9b2a9d2a54288 = $this->env->getExtension("native_profiler");
        $__internal_75989eaa7e6de857275f6eb6d6ce517ee9cbe025a99d79e44dc9b2a9d2a54288->enter($__internal_75989eaa7e6de857275f6eb6d6ce517ee9cbe025a99d79e44dc9b2a9d2a54288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_75989eaa7e6de857275f6eb6d6ce517ee9cbe025a99d79e44dc9b2a9d2a54288->leave($__internal_75989eaa7e6de857275f6eb6d6ce517ee9cbe025a99d79e44dc9b2a9d2a54288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
