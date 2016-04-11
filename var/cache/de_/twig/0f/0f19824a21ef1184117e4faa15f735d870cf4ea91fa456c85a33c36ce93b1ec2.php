<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0f275b9fad401310c3cf114517bfd59f5fc5c49903defa8ac5c122a279738b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_85c15b889531859f26057077a0377c63cda171fd96cdc025e93ed1def624bca8 = $this->env->getExtension("native_profiler");
        $__internal_85c15b889531859f26057077a0377c63cda171fd96cdc025e93ed1def624bca8->enter($__internal_85c15b889531859f26057077a0377c63cda171fd96cdc025e93ed1def624bca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c15b889531859f26057077a0377c63cda171fd96cdc025e93ed1def624bca8->leave($__internal_85c15b889531859f26057077a0377c63cda171fd96cdc025e93ed1def624bca8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fcfb08b3f3d34358e9db561fdfecb2bcad0acce3fd7574ff69141842faa3dc6 = $this->env->getExtension("native_profiler");
        $__internal_9fcfb08b3f3d34358e9db561fdfecb2bcad0acce3fd7574ff69141842faa3dc6->enter($__internal_9fcfb08b3f3d34358e9db561fdfecb2bcad0acce3fd7574ff69141842faa3dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9fcfb08b3f3d34358e9db561fdfecb2bcad0acce3fd7574ff69141842faa3dc6->leave($__internal_9fcfb08b3f3d34358e9db561fdfecb2bcad0acce3fd7574ff69141842faa3dc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
