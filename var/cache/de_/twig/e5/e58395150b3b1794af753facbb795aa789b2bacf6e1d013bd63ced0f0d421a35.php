<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7130e09444aff02c3a34e54015a0d639089962bbacea1478d60fa81154ba2fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_7405ad141dda3a82bdd27851ec4a4154ffe348061d22c761be2a072b5e6fdd72 = $this->env->getExtension("native_profiler");
        $__internal_7405ad141dda3a82bdd27851ec4a4154ffe348061d22c761be2a072b5e6fdd72->enter($__internal_7405ad141dda3a82bdd27851ec4a4154ffe348061d22c761be2a072b5e6fdd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7405ad141dda3a82bdd27851ec4a4154ffe348061d22c761be2a072b5e6fdd72->leave($__internal_7405ad141dda3a82bdd27851ec4a4154ffe348061d22c761be2a072b5e6fdd72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03c87358cf04e547bd411e17d425b2fe70b78b2a983f2a3853bb3ae21c8272a0 = $this->env->getExtension("native_profiler");
        $__internal_03c87358cf04e547bd411e17d425b2fe70b78b2a983f2a3853bb3ae21c8272a0->enter($__internal_03c87358cf04e547bd411e17d425b2fe70b78b2a983f2a3853bb3ae21c8272a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_03c87358cf04e547bd411e17d425b2fe70b78b2a983f2a3853bb3ae21c8272a0->leave($__internal_03c87358cf04e547bd411e17d425b2fe70b78b2a983f2a3853bb3ae21c8272a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
