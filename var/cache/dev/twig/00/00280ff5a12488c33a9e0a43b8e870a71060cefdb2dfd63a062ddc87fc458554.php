<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_51cd6fcf3169115121b9700e57279398e2f4bfad9bdf197e8cd74ebdf33ef55b extends Twig_Template
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
        $__internal_1f1baf70c66c6d160c59fe41b2583c9add6e96aec79e1f6d562a2d9620f0047a = $this->env->getExtension("native_profiler");
        $__internal_1f1baf70c66c6d160c59fe41b2583c9add6e96aec79e1f6d562a2d9620f0047a->enter($__internal_1f1baf70c66c6d160c59fe41b2583c9add6e96aec79e1f6d562a2d9620f0047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1f1baf70c66c6d160c59fe41b2583c9add6e96aec79e1f6d562a2d9620f0047a->leave($__internal_1f1baf70c66c6d160c59fe41b2583c9add6e96aec79e1f6d562a2d9620f0047a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
