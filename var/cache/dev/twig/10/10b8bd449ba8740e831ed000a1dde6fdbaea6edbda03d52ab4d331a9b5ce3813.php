<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_0ef04a946f5a08b927dc36db21305dae486eecd2819dec77ab3011baa292e500 extends Twig_Template
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
        $__internal_ccb87256e5e57abd15f775e7d147ea6920b4f242b45128b90d578b4e42320635 = $this->env->getExtension("native_profiler");
        $__internal_ccb87256e5e57abd15f775e7d147ea6920b4f242b45128b90d578b4e42320635->enter($__internal_ccb87256e5e57abd15f775e7d147ea6920b4f242b45128b90d578b4e42320635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ccb87256e5e57abd15f775e7d147ea6920b4f242b45128b90d578b4e42320635->leave($__internal_ccb87256e5e57abd15f775e7d147ea6920b4f242b45128b90d578b4e42320635_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
