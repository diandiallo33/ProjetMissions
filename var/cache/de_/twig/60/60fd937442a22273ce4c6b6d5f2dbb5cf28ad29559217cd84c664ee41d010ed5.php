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
        $__internal_5c1224c46ac764a3347a69f506b0137eb82d82f0e9ddfe77267a26c8ec9bc0c8 = $this->env->getExtension("native_profiler");
        $__internal_5c1224c46ac764a3347a69f506b0137eb82d82f0e9ddfe77267a26c8ec9bc0c8->enter($__internal_5c1224c46ac764a3347a69f506b0137eb82d82f0e9ddfe77267a26c8ec9bc0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1224c46ac764a3347a69f506b0137eb82d82f0e9ddfe77267a26c8ec9bc0c8->leave($__internal_5c1224c46ac764a3347a69f506b0137eb82d82f0e9ddfe77267a26c8ec9bc0c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_719e2640618063f180479b00b11be137c984bac92c15c9c61778027fae209a95 = $this->env->getExtension("native_profiler");
        $__internal_719e2640618063f180479b00b11be137c984bac92c15c9c61778027fae209a95->enter($__internal_719e2640618063f180479b00b11be137c984bac92c15c9c61778027fae209a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_719e2640618063f180479b00b11be137c984bac92c15c9c61778027fae209a95->leave($__internal_719e2640618063f180479b00b11be137c984bac92c15c9c61778027fae209a95_prof);

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
