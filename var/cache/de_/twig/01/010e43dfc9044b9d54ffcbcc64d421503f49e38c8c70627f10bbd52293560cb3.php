<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d3f10b62b1a759ff0852e3f3abbb8777514d01cc79914c8564ca716476bc0dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8119acd45c602d12ed6a10229f387ed696850e1f11844bbf02c79418e7aefd8a = $this->env->getExtension("native_profiler");
        $__internal_8119acd45c602d12ed6a10229f387ed696850e1f11844bbf02c79418e7aefd8a->enter($__internal_8119acd45c602d12ed6a10229f387ed696850e1f11844bbf02c79418e7aefd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8119acd45c602d12ed6a10229f387ed696850e1f11844bbf02c79418e7aefd8a->leave($__internal_8119acd45c602d12ed6a10229f387ed696850e1f11844bbf02c79418e7aefd8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa95b6e44a642894aafe8b8ce6e11c3ff50d68314da1b4d260c1f381dbb81d3d = $this->env->getExtension("native_profiler");
        $__internal_fa95b6e44a642894aafe8b8ce6e11c3ff50d68314da1b4d260c1f381dbb81d3d->enter($__internal_fa95b6e44a642894aafe8b8ce6e11c3ff50d68314da1b4d260c1f381dbb81d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fa95b6e44a642894aafe8b8ce6e11c3ff50d68314da1b4d260c1f381dbb81d3d->leave($__internal_fa95b6e44a642894aafe8b8ce6e11c3ff50d68314da1b4d260c1f381dbb81d3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
