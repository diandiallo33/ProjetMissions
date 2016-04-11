<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_89bc97dfea08188ae912bf4fb910e0fd361d0dd8c5aef265a44ee87ceb5f6aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_00b9049f55db7409cb5f01efbab95f4cddea46553924119428e7ae3d2387dd92 = $this->env->getExtension("native_profiler");
        $__internal_00b9049f55db7409cb5f01efbab95f4cddea46553924119428e7ae3d2387dd92->enter($__internal_00b9049f55db7409cb5f01efbab95f4cddea46553924119428e7ae3d2387dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b9049f55db7409cb5f01efbab95f4cddea46553924119428e7ae3d2387dd92->leave($__internal_00b9049f55db7409cb5f01efbab95f4cddea46553924119428e7ae3d2387dd92_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06c3c5dee93ea079d4b039a20f8d1ab5c67fde27aa11eb11f51db7dd58133f72 = $this->env->getExtension("native_profiler");
        $__internal_06c3c5dee93ea079d4b039a20f8d1ab5c67fde27aa11eb11f51db7dd58133f72->enter($__internal_06c3c5dee93ea079d4b039a20f8d1ab5c67fde27aa11eb11f51db7dd58133f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_06c3c5dee93ea079d4b039a20f8d1ab5c67fde27aa11eb11f51db7dd58133f72->leave($__internal_06c3c5dee93ea079d4b039a20f8d1ab5c67fde27aa11eb11f51db7dd58133f72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
