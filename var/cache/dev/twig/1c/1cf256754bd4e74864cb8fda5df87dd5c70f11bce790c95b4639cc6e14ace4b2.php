<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_22f648d40ffbadc355f73ddb08acbef2095e52811133626fc2afdac691597d2f extends Twig_Template
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
        $__internal_02dafab074b3bb94f98955f3cbbe337d3fb39ea6f8c73a85e9d3ccd7ea335677 = $this->env->getExtension("native_profiler");
        $__internal_02dafab074b3bb94f98955f3cbbe337d3fb39ea6f8c73a85e9d3ccd7ea335677->enter($__internal_02dafab074b3bb94f98955f3cbbe337d3fb39ea6f8c73a85e9d3ccd7ea335677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_02dafab074b3bb94f98955f3cbbe337d3fb39ea6f8c73a85e9d3ccd7ea335677->leave($__internal_02dafab074b3bb94f98955f3cbbe337d3fb39ea6f8c73a85e9d3ccd7ea335677_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
