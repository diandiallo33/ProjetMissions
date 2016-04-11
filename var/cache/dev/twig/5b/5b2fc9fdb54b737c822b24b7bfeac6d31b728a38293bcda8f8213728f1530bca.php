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
        $__internal_9f318af1645aabe01c8c1bee14804f2908217084f0a3162f2eeb34e0a3b4da2e = $this->env->getExtension("native_profiler");
        $__internal_9f318af1645aabe01c8c1bee14804f2908217084f0a3162f2eeb34e0a3b4da2e->enter($__internal_9f318af1645aabe01c8c1bee14804f2908217084f0a3162f2eeb34e0a3b4da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9f318af1645aabe01c8c1bee14804f2908217084f0a3162f2eeb34e0a3b4da2e->leave($__internal_9f318af1645aabe01c8c1bee14804f2908217084f0a3162f2eeb34e0a3b4da2e_prof);

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
