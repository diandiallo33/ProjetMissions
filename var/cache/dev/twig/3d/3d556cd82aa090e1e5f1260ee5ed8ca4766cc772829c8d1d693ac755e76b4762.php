<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_fa190eb95b5ff49cae4a0d782f5c94fd83a01bc01634d8e2e7438a5ef5306150 extends Twig_Template
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
        $__internal_335e2162567d67a41ef7231d23dd4a8bef43bc957dbde37f5071995b109a836b = $this->env->getExtension("native_profiler");
        $__internal_335e2162567d67a41ef7231d23dd4a8bef43bc957dbde37f5071995b109a836b->enter($__internal_335e2162567d67a41ef7231d23dd4a8bef43bc957dbde37f5071995b109a836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_335e2162567d67a41ef7231d23dd4a8bef43bc957dbde37f5071995b109a836b->leave($__internal_335e2162567d67a41ef7231d23dd4a8bef43bc957dbde37f5071995b109a836b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
