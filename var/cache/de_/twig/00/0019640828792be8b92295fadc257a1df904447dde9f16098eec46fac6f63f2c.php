<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a9c0dd131bc16464078a07bacf0684702e2aba05b0b54ca424d0079ee135c317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_119a77be3e74f8fb8e62f2118941f511507e1f861665faf1dbc6eb9cbea65194 = $this->env->getExtension("native_profiler");
        $__internal_119a77be3e74f8fb8e62f2118941f511507e1f861665faf1dbc6eb9cbea65194->enter($__internal_119a77be3e74f8fb8e62f2118941f511507e1f861665faf1dbc6eb9cbea65194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119a77be3e74f8fb8e62f2118941f511507e1f861665faf1dbc6eb9cbea65194->leave($__internal_119a77be3e74f8fb8e62f2118941f511507e1f861665faf1dbc6eb9cbea65194_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa6b4d419844f0bc0a53c434dae83fd5a390697f511f5289afb718f4990bcb78 = $this->env->getExtension("native_profiler");
        $__internal_aa6b4d419844f0bc0a53c434dae83fd5a390697f511f5289afb718f4990bcb78->enter($__internal_aa6b4d419844f0bc0a53c434dae83fd5a390697f511f5289afb718f4990bcb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_aa6b4d419844f0bc0a53c434dae83fd5a390697f511f5289afb718f4990bcb78->leave($__internal_aa6b4d419844f0bc0a53c434dae83fd5a390697f511f5289afb718f4990bcb78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
