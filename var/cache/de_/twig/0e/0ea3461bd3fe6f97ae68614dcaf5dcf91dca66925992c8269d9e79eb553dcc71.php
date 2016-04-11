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
        $__internal_2f23fe1b41fb6a315d85f34e92ccffd487d522c9106d79d80df449b1af37dee0 = $this->env->getExtension("native_profiler");
        $__internal_2f23fe1b41fb6a315d85f34e92ccffd487d522c9106d79d80df449b1af37dee0->enter($__internal_2f23fe1b41fb6a315d85f34e92ccffd487d522c9106d79d80df449b1af37dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f23fe1b41fb6a315d85f34e92ccffd487d522c9106d79d80df449b1af37dee0->leave($__internal_2f23fe1b41fb6a315d85f34e92ccffd487d522c9106d79d80df449b1af37dee0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d04022aacc147700b591f3bb2a5a963228b887ab2d485028c4c030186f6e81d6 = $this->env->getExtension("native_profiler");
        $__internal_d04022aacc147700b591f3bb2a5a963228b887ab2d485028c4c030186f6e81d6->enter($__internal_d04022aacc147700b591f3bb2a5a963228b887ab2d485028c4c030186f6e81d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d04022aacc147700b591f3bb2a5a963228b887ab2d485028c4c030186f6e81d6->leave($__internal_d04022aacc147700b591f3bb2a5a963228b887ab2d485028c4c030186f6e81d6_prof);

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
