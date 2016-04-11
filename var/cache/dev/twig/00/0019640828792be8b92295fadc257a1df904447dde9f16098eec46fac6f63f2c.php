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
        $__internal_123bf52743dcf341fa2554c44acb1f043ae3fde811f7da1d8d797efc23ee1a4a = $this->env->getExtension("native_profiler");
        $__internal_123bf52743dcf341fa2554c44acb1f043ae3fde811f7da1d8d797efc23ee1a4a->enter($__internal_123bf52743dcf341fa2554c44acb1f043ae3fde811f7da1d8d797efc23ee1a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_123bf52743dcf341fa2554c44acb1f043ae3fde811f7da1d8d797efc23ee1a4a->leave($__internal_123bf52743dcf341fa2554c44acb1f043ae3fde811f7da1d8d797efc23ee1a4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda7be4a2bf86434b58ddc127fe21e61e031f4a45c8edc6b9227a508f634431d = $this->env->getExtension("native_profiler");
        $__internal_cda7be4a2bf86434b58ddc127fe21e61e031f4a45c8edc6b9227a508f634431d->enter($__internal_cda7be4a2bf86434b58ddc127fe21e61e031f4a45c8edc6b9227a508f634431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cda7be4a2bf86434b58ddc127fe21e61e031f4a45c8edc6b9227a508f634431d->leave($__internal_cda7be4a2bf86434b58ddc127fe21e61e031f4a45c8edc6b9227a508f634431d_prof);

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
