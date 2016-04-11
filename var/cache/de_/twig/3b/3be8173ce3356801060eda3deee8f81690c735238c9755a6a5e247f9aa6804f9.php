<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6dff036d62c33f7f3f45e72062221683abdfe15bbac6be064a6fa1d7f4833f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ae62cbc41ce4a128a855ad8d2850c23d4df1f202bb77165ad01b40ec21653798 = $this->env->getExtension("native_profiler");
        $__internal_ae62cbc41ce4a128a855ad8d2850c23d4df1f202bb77165ad01b40ec21653798->enter($__internal_ae62cbc41ce4a128a855ad8d2850c23d4df1f202bb77165ad01b40ec21653798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae62cbc41ce4a128a855ad8d2850c23d4df1f202bb77165ad01b40ec21653798->leave($__internal_ae62cbc41ce4a128a855ad8d2850c23d4df1f202bb77165ad01b40ec21653798_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bdb98d7e9ba61bf149e8b1ea9760d282fa0dcafe3c31597cfb25ad64b30f120 = $this->env->getExtension("native_profiler");
        $__internal_7bdb98d7e9ba61bf149e8b1ea9760d282fa0dcafe3c31597cfb25ad64b30f120->enter($__internal_7bdb98d7e9ba61bf149e8b1ea9760d282fa0dcafe3c31597cfb25ad64b30f120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7bdb98d7e9ba61bf149e8b1ea9760d282fa0dcafe3c31597cfb25ad64b30f120->leave($__internal_7bdb98d7e9ba61bf149e8b1ea9760d282fa0dcafe3c31597cfb25ad64b30f120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
