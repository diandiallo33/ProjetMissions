<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_df24371becf40d99dfe80f0de9d5200cf6a48ac45213c5e18d6b074c1ad9d774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_145523c97f563d1d252a35f300688976a724b4c915fd3755b7db5b55aec7ed12 = $this->env->getExtension("native_profiler");
        $__internal_145523c97f563d1d252a35f300688976a724b4c915fd3755b7db5b55aec7ed12->enter($__internal_145523c97f563d1d252a35f300688976a724b4c915fd3755b7db5b55aec7ed12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145523c97f563d1d252a35f300688976a724b4c915fd3755b7db5b55aec7ed12->leave($__internal_145523c97f563d1d252a35f300688976a724b4c915fd3755b7db5b55aec7ed12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8289a8f79cf48aa6facf78c3e507354b34f5009e556d5c9d9cb73ff8108de747 = $this->env->getExtension("native_profiler");
        $__internal_8289a8f79cf48aa6facf78c3e507354b34f5009e556d5c9d9cb73ff8108de747->enter($__internal_8289a8f79cf48aa6facf78c3e507354b34f5009e556d5c9d9cb73ff8108de747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_8289a8f79cf48aa6facf78c3e507354b34f5009e556d5c9d9cb73ff8108de747->leave($__internal_8289a8f79cf48aa6facf78c3e507354b34f5009e556d5c9d9cb73ff8108de747_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
