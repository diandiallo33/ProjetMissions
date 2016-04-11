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
        $__internal_23065f555fb30c58080a448cd24759c3d9ca4822fa9972a452d7d7cb154a5ab7 = $this->env->getExtension("native_profiler");
        $__internal_23065f555fb30c58080a448cd24759c3d9ca4822fa9972a452d7d7cb154a5ab7->enter($__internal_23065f555fb30c58080a448cd24759c3d9ca4822fa9972a452d7d7cb154a5ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23065f555fb30c58080a448cd24759c3d9ca4822fa9972a452d7d7cb154a5ab7->leave($__internal_23065f555fb30c58080a448cd24759c3d9ca4822fa9972a452d7d7cb154a5ab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f464516371faa3cae640ea1a2da6c47ad5ce280f69e7500576b0c254bf1143e0 = $this->env->getExtension("native_profiler");
        $__internal_f464516371faa3cae640ea1a2da6c47ad5ce280f69e7500576b0c254bf1143e0->enter($__internal_f464516371faa3cae640ea1a2da6c47ad5ce280f69e7500576b0c254bf1143e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f464516371faa3cae640ea1a2da6c47ad5ce280f69e7500576b0c254bf1143e0->leave($__internal_f464516371faa3cae640ea1a2da6c47ad5ce280f69e7500576b0c254bf1143e0_prof);

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
