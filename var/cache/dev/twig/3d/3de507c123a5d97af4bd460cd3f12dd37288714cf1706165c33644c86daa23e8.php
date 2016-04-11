<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf5be373c6848f3b352e8440db2c08a08c75fe838cf22037d6764b214b65f5a1 extends Twig_Template
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
        $__internal_e89de9e4c59c34102d8b315f82b8ed76246c05e9961da1154ead57a896ffdca5 = $this->env->getExtension("native_profiler");
        $__internal_e89de9e4c59c34102d8b315f82b8ed76246c05e9961da1154ead57a896ffdca5->enter($__internal_e89de9e4c59c34102d8b315f82b8ed76246c05e9961da1154ead57a896ffdca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e89de9e4c59c34102d8b315f82b8ed76246c05e9961da1154ead57a896ffdca5->leave($__internal_e89de9e4c59c34102d8b315f82b8ed76246c05e9961da1154ead57a896ffdca5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
