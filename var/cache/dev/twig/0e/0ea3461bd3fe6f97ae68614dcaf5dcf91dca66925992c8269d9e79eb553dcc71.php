<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_591056c384999ca93b3443363379cfdca8000716c7a00ab4e65dc077b95b53ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6367f9bb7e12a1fddf461c361157109675b2c48c94e61285da016ca3bdeefc22 = $this->env->getExtension("native_profiler");
        $__internal_6367f9bb7e12a1fddf461c361157109675b2c48c94e61285da016ca3bdeefc22->enter($__internal_6367f9bb7e12a1fddf461c361157109675b2c48c94e61285da016ca3bdeefc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6367f9bb7e12a1fddf461c361157109675b2c48c94e61285da016ca3bdeefc22->leave($__internal_6367f9bb7e12a1fddf461c361157109675b2c48c94e61285da016ca3bdeefc22_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bbc8a2748cc392a9e1928f8eaf20406ec266fe938c3b8b8d3dc64a56d2737d9 = $this->env->getExtension("native_profiler");
        $__internal_8bbc8a2748cc392a9e1928f8eaf20406ec266fe938c3b8b8d3dc64a56d2737d9->enter($__internal_8bbc8a2748cc392a9e1928f8eaf20406ec266fe938c3b8b8d3dc64a56d2737d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8bbc8a2748cc392a9e1928f8eaf20406ec266fe938c3b8b8d3dc64a56d2737d9->leave($__internal_8bbc8a2748cc392a9e1928f8eaf20406ec266fe938c3b8b8d3dc64a56d2737d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
