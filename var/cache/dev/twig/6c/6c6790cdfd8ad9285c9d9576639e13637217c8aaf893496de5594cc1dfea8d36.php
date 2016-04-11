<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_208cc5a418d879080e9a659f99ffaaa2ace71d40f0b41132e42e1181d0bf807a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dad80ee7d65376eb1c50d9c03e73e179e5ab49995c69c1107d9adb49fa5eb2ac = $this->env->getExtension("native_profiler");
        $__internal_dad80ee7d65376eb1c50d9c03e73e179e5ab49995c69c1107d9adb49fa5eb2ac->enter($__internal_dad80ee7d65376eb1c50d9c03e73e179e5ab49995c69c1107d9adb49fa5eb2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad80ee7d65376eb1c50d9c03e73e179e5ab49995c69c1107d9adb49fa5eb2ac->leave($__internal_dad80ee7d65376eb1c50d9c03e73e179e5ab49995c69c1107d9adb49fa5eb2ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_416399aa59263ce652d08d0d6b35b80faf1218731f8e905997ea991c9e7a8cee = $this->env->getExtension("native_profiler");
        $__internal_416399aa59263ce652d08d0d6b35b80faf1218731f8e905997ea991c9e7a8cee->enter($__internal_416399aa59263ce652d08d0d6b35b80faf1218731f8e905997ea991c9e7a8cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_416399aa59263ce652d08d0d6b35b80faf1218731f8e905997ea991c9e7a8cee->leave($__internal_416399aa59263ce652d08d0d6b35b80faf1218731f8e905997ea991c9e7a8cee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
