<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c747f409a48929c8b580af628142bedf3cce3f3d7f7d1a422f289b7e8bdbdf2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b7b6eef39ed3f4a50e1f5fe87959fb4f7053c51ce5ad3dc045a7c33c82b4d529 = $this->env->getExtension("native_profiler");
        $__internal_b7b6eef39ed3f4a50e1f5fe87959fb4f7053c51ce5ad3dc045a7c33c82b4d529->enter($__internal_b7b6eef39ed3f4a50e1f5fe87959fb4f7053c51ce5ad3dc045a7c33c82b4d529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b6eef39ed3f4a50e1f5fe87959fb4f7053c51ce5ad3dc045a7c33c82b4d529->leave($__internal_b7b6eef39ed3f4a50e1f5fe87959fb4f7053c51ce5ad3dc045a7c33c82b4d529_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_872cd690a8c8152d3514ec4b523e410bc057748a5db9638c14aa5af20f912f39 = $this->env->getExtension("native_profiler");
        $__internal_872cd690a8c8152d3514ec4b523e410bc057748a5db9638c14aa5af20f912f39->enter($__internal_872cd690a8c8152d3514ec4b523e410bc057748a5db9638c14aa5af20f912f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_872cd690a8c8152d3514ec4b523e410bc057748a5db9638c14aa5af20f912f39->leave($__internal_872cd690a8c8152d3514ec4b523e410bc057748a5db9638c14aa5af20f912f39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
