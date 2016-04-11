<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8f9a21dfa4fa6151215d8f7d0c0a91c97dde8e12dff8171f97d526126cc8d427 extends Twig_Template
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
        $__internal_84505439276961f729377d50ce5be44477152ef176265161cdde0fae4ff81402 = $this->env->getExtension("native_profiler");
        $__internal_84505439276961f729377d50ce5be44477152ef176265161cdde0fae4ff81402->enter($__internal_84505439276961f729377d50ce5be44477152ef176265161cdde0fae4ff81402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_84505439276961f729377d50ce5be44477152ef176265161cdde0fae4ff81402->leave($__internal_84505439276961f729377d50ce5be44477152ef176265161cdde0fae4ff81402_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
