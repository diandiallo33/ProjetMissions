<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_eab1de6627307879b18366c8a9c159734df160d3cabcd4094e9fdf116703c9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_33976f93f9c6e744c00b17ad8946c6d2dc1a26830d88bf41ab1e73514dbdf7a7 = $this->env->getExtension("native_profiler");
        $__internal_33976f93f9c6e744c00b17ad8946c6d2dc1a26830d88bf41ab1e73514dbdf7a7->enter($__internal_33976f93f9c6e744c00b17ad8946c6d2dc1a26830d88bf41ab1e73514dbdf7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33976f93f9c6e744c00b17ad8946c6d2dc1a26830d88bf41ab1e73514dbdf7a7->leave($__internal_33976f93f9c6e744c00b17ad8946c6d2dc1a26830d88bf41ab1e73514dbdf7a7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33b46a1d92d59d79817c6a1fd3d160051814ba265cb8f9b2f171111c82822a2b = $this->env->getExtension("native_profiler");
        $__internal_33b46a1d92d59d79817c6a1fd3d160051814ba265cb8f9b2f171111c82822a2b->enter($__internal_33b46a1d92d59d79817c6a1fd3d160051814ba265cb8f9b2f171111c82822a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_33b46a1d92d59d79817c6a1fd3d160051814ba265cb8f9b2f171111c82822a2b->leave($__internal_33b46a1d92d59d79817c6a1fd3d160051814ba265cb8f9b2f171111c82822a2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
