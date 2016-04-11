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
        $__internal_8346d855a20aed885216f4432c530d3d5fcadca0d910e52485f504442d9e04e2 = $this->env->getExtension("native_profiler");
        $__internal_8346d855a20aed885216f4432c530d3d5fcadca0d910e52485f504442d9e04e2->enter($__internal_8346d855a20aed885216f4432c530d3d5fcadca0d910e52485f504442d9e04e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8346d855a20aed885216f4432c530d3d5fcadca0d910e52485f504442d9e04e2->leave($__internal_8346d855a20aed885216f4432c530d3d5fcadca0d910e52485f504442d9e04e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a51eff036cf59174c667fedc7553aaf9f16264ad00879822242a90b45d3cc497 = $this->env->getExtension("native_profiler");
        $__internal_a51eff036cf59174c667fedc7553aaf9f16264ad00879822242a90b45d3cc497->enter($__internal_a51eff036cf59174c667fedc7553aaf9f16264ad00879822242a90b45d3cc497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a51eff036cf59174c667fedc7553aaf9f16264ad00879822242a90b45d3cc497->leave($__internal_a51eff036cf59174c667fedc7553aaf9f16264ad00879822242a90b45d3cc497_prof);

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
