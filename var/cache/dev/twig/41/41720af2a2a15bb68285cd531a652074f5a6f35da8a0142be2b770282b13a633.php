<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9ec613d25e0d2ea474f6f4b9ed0e64d123d630c2d7aa39e1b5469eff4d252275 extends Twig_Template
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
        $__internal_98ccac77250e9a6c5373af6f2d592f6da5a6381b2f4de3f03eeadc33ac190b53 = $this->env->getExtension("native_profiler");
        $__internal_98ccac77250e9a6c5373af6f2d592f6da5a6381b2f4de3f03eeadc33ac190b53->enter($__internal_98ccac77250e9a6c5373af6f2d592f6da5a6381b2f4de3f03eeadc33ac190b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_98ccac77250e9a6c5373af6f2d592f6da5a6381b2f4de3f03eeadc33ac190b53->leave($__internal_98ccac77250e9a6c5373af6f2d592f6da5a6381b2f4de3f03eeadc33ac190b53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
