<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3fa4c5c7ba43811aa8c43ff0216db066e9437e1409272cd1c1d397d88071e5cb extends Twig_Template
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
        $__internal_1c75685d2470d37199bad4b8d62d4060aec5b858450035c73df98a4c6459b262 = $this->env->getExtension("native_profiler");
        $__internal_1c75685d2470d37199bad4b8d62d4060aec5b858450035c73df98a4c6459b262->enter($__internal_1c75685d2470d37199bad4b8d62d4060aec5b858450035c73df98a4c6459b262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1c75685d2470d37199bad4b8d62d4060aec5b858450035c73df98a4c6459b262->leave($__internal_1c75685d2470d37199bad4b8d62d4060aec5b858450035c73df98a4c6459b262_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
