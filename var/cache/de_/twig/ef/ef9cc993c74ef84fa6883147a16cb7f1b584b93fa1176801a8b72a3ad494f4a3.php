<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_43f64a30b3547f84b13c5dd6dda1ce2aff407f7714d26f2051d66ce993661e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b3589a1dd19275414cf97da6107223f56119800911d60bacd21d75d0f22c6777 = $this->env->getExtension("native_profiler");
        $__internal_b3589a1dd19275414cf97da6107223f56119800911d60bacd21d75d0f22c6777->enter($__internal_b3589a1dd19275414cf97da6107223f56119800911d60bacd21d75d0f22c6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3589a1dd19275414cf97da6107223f56119800911d60bacd21d75d0f22c6777->leave($__internal_b3589a1dd19275414cf97da6107223f56119800911d60bacd21d75d0f22c6777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aeebc3de569d57deed4761f702c549cd19d41c997039755b53684e914713c9d1 = $this->env->getExtension("native_profiler");
        $__internal_aeebc3de569d57deed4761f702c549cd19d41c997039755b53684e914713c9d1->enter($__internal_aeebc3de569d57deed4761f702c549cd19d41c997039755b53684e914713c9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_aeebc3de569d57deed4761f702c549cd19d41c997039755b53684e914713c9d1->leave($__internal_aeebc3de569d57deed4761f702c549cd19d41c997039755b53684e914713c9d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
