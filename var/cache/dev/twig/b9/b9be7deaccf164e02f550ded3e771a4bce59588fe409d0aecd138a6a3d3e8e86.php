<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_1f9b8f372f75cb9c8399c8c8b0052fdc85f81635390152ad96cec3f5f48efd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1562a20a1de1e23d9d9c8b156b64d999cacb5dba632aac19471be8ca16d51a90 = $this->env->getExtension("native_profiler");
        $__internal_1562a20a1de1e23d9d9c8b156b64d999cacb5dba632aac19471be8ca16d51a90->enter($__internal_1562a20a1de1e23d9d9c8b156b64d999cacb5dba632aac19471be8ca16d51a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1562a20a1de1e23d9d9c8b156b64d999cacb5dba632aac19471be8ca16d51a90->leave($__internal_1562a20a1de1e23d9d9c8b156b64d999cacb5dba632aac19471be8ca16d51a90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3cafd48183e956151ae75d04b8faca9318648059e08d3e849bdf369826a900e = $this->env->getExtension("native_profiler");
        $__internal_e3cafd48183e956151ae75d04b8faca9318648059e08d3e849bdf369826a900e->enter($__internal_e3cafd48183e956151ae75d04b8faca9318648059e08d3e849bdf369826a900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e3cafd48183e956151ae75d04b8faca9318648059e08d3e849bdf369826a900e->leave($__internal_e3cafd48183e956151ae75d04b8faca9318648059e08d3e849bdf369826a900e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
