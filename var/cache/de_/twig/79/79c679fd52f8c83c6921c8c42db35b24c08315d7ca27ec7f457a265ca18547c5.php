<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4f57db51c7f288b8e8e399e31b1fcca8990b56b2dd4b5aa001455200e212363f extends Twig_Template
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
        $__internal_09f9cff314716b8531991afb8a9f103b6d0f76a11a5cdee115608b15ee14b59c = $this->env->getExtension("native_profiler");
        $__internal_09f9cff314716b8531991afb8a9f103b6d0f76a11a5cdee115608b15ee14b59c->enter($__internal_09f9cff314716b8531991afb8a9f103b6d0f76a11a5cdee115608b15ee14b59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_09f9cff314716b8531991afb8a9f103b6d0f76a11a5cdee115608b15ee14b59c->leave($__internal_09f9cff314716b8531991afb8a9f103b6d0f76a11a5cdee115608b15ee14b59c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
