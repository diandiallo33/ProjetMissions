<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c7e2ebcfca676b152655ef639b0cb13538147223f87171eb257924292c9843ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1a48a99be80878140a9888ae6c80257272710302cbf808d0308e024362edd9d6 = $this->env->getExtension("native_profiler");
        $__internal_1a48a99be80878140a9888ae6c80257272710302cbf808d0308e024362edd9d6->enter($__internal_1a48a99be80878140a9888ae6c80257272710302cbf808d0308e024362edd9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a48a99be80878140a9888ae6c80257272710302cbf808d0308e024362edd9d6->leave($__internal_1a48a99be80878140a9888ae6c80257272710302cbf808d0308e024362edd9d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ad1d5ee1a0e808fa164efab8723b48d65e67a4a18a267a2dd125d1d9c13f9e9 = $this->env->getExtension("native_profiler");
        $__internal_5ad1d5ee1a0e808fa164efab8723b48d65e67a4a18a267a2dd125d1d9c13f9e9->enter($__internal_5ad1d5ee1a0e808fa164efab8723b48d65e67a4a18a267a2dd125d1d9c13f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5ad1d5ee1a0e808fa164efab8723b48d65e67a4a18a267a2dd125d1d9c13f9e9->leave($__internal_5ad1d5ee1a0e808fa164efab8723b48d65e67a4a18a267a2dd125d1d9c13f9e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
