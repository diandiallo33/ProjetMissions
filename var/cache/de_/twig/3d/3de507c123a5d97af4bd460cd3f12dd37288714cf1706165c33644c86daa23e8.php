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
        $__internal_73e7773e336e66e764e3fe02b63421a7b703b259e18e6c2551f470292a085ec0 = $this->env->getExtension("native_profiler");
        $__internal_73e7773e336e66e764e3fe02b63421a7b703b259e18e6c2551f470292a085ec0->enter($__internal_73e7773e336e66e764e3fe02b63421a7b703b259e18e6c2551f470292a085ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_73e7773e336e66e764e3fe02b63421a7b703b259e18e6c2551f470292a085ec0->leave($__internal_73e7773e336e66e764e3fe02b63421a7b703b259e18e6c2551f470292a085ec0_prof);

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
