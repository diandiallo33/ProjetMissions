<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a956e873e13aa81c26a711be2810dee83b3f7514579f819d1db9e379876b2218 extends Twig_Template
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
        $__internal_09b9056473119594182c7b37b8cbb3ec253751a89356097b4afc72a7cfc57341 = $this->env->getExtension("native_profiler");
        $__internal_09b9056473119594182c7b37b8cbb3ec253751a89356097b4afc72a7cfc57341->enter($__internal_09b9056473119594182c7b37b8cbb3ec253751a89356097b4afc72a7cfc57341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_09b9056473119594182c7b37b8cbb3ec253751a89356097b4afc72a7cfc57341->leave($__internal_09b9056473119594182c7b37b8cbb3ec253751a89356097b4afc72a7cfc57341_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
