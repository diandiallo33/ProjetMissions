<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_76b578ccfcf634c36c9efb451f023146b343fa9a5ea2424fe3a864a46c98f14a extends Twig_Template
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
        $__internal_b1b05ab3063e458d6e02275992fe0a4da25d911c57e58e6355a69c6c524703e1 = $this->env->getExtension("native_profiler");
        $__internal_b1b05ab3063e458d6e02275992fe0a4da25d911c57e58e6355a69c6c524703e1->enter($__internal_b1b05ab3063e458d6e02275992fe0a4da25d911c57e58e6355a69c6c524703e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b1b05ab3063e458d6e02275992fe0a4da25d911c57e58e6355a69c6c524703e1->leave($__internal_b1b05ab3063e458d6e02275992fe0a4da25d911c57e58e6355a69c6c524703e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
