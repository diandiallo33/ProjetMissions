<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_42a4824a013c311acecd6f68d9649e623221c1214327fcd310b8239cff158631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_0aac6724d2bdb4b5829c680fb460b377f821cd38331b691b57f31ba8c1fa01bc = $this->env->getExtension("native_profiler");
        $__internal_0aac6724d2bdb4b5829c680fb460b377f821cd38331b691b57f31ba8c1fa01bc->enter($__internal_0aac6724d2bdb4b5829c680fb460b377f821cd38331b691b57f31ba8c1fa01bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aac6724d2bdb4b5829c680fb460b377f821cd38331b691b57f31ba8c1fa01bc->leave($__internal_0aac6724d2bdb4b5829c680fb460b377f821cd38331b691b57f31ba8c1fa01bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7995cadd535c415aff722adc76a0cbd1655ef7498b901bdc6e74a488f003ced = $this->env->getExtension("native_profiler");
        $__internal_f7995cadd535c415aff722adc76a0cbd1655ef7498b901bdc6e74a488f003ced->enter($__internal_f7995cadd535c415aff722adc76a0cbd1655ef7498b901bdc6e74a488f003ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_f7995cadd535c415aff722adc76a0cbd1655ef7498b901bdc6e74a488f003ced->leave($__internal_f7995cadd535c415aff722adc76a0cbd1655ef7498b901bdc6e74a488f003ced_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
