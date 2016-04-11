<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9b6f33cf8e98613f8579ae6f4eab39730e5607fd3d6133240a5b3850774868c9 extends Twig_Template
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
        $__internal_1de236f0aead7bd86de8f98d54afcfc54e6b657cdccf57d5048d1ab9f53ef972 = $this->env->getExtension("native_profiler");
        $__internal_1de236f0aead7bd86de8f98d54afcfc54e6b657cdccf57d5048d1ab9f53ef972->enter($__internal_1de236f0aead7bd86de8f98d54afcfc54e6b657cdccf57d5048d1ab9f53ef972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1de236f0aead7bd86de8f98d54afcfc54e6b657cdccf57d5048d1ab9f53ef972->leave($__internal_1de236f0aead7bd86de8f98d54afcfc54e6b657cdccf57d5048d1ab9f53ef972_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
