<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_afc925acb1c2c5b64305f3d405c71b79b5c1cbef03440ab9f409b601d6967b61 extends Twig_Template
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
        $__internal_e1ba49b94e63fff616ab9f110f7399dec137cf6efb8906afd88c36b793fb53c6 = $this->env->getExtension("native_profiler");
        $__internal_e1ba49b94e63fff616ab9f110f7399dec137cf6efb8906afd88c36b793fb53c6->enter($__internal_e1ba49b94e63fff616ab9f110f7399dec137cf6efb8906afd88c36b793fb53c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e1ba49b94e63fff616ab9f110f7399dec137cf6efb8906afd88c36b793fb53c6->leave($__internal_e1ba49b94e63fff616ab9f110f7399dec137cf6efb8906afd88c36b793fb53c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
