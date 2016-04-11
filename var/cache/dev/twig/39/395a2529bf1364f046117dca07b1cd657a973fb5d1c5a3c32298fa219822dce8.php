<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_6895fb625fa7fe75d2996567c25e1dac73dedadaa817f0f7ce49eeb69293d7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_76f4816805777cc4e7632b2866a96760977c7c870c34599af3c88512fdd7ab9c = $this->env->getExtension("native_profiler");
        $__internal_76f4816805777cc4e7632b2866a96760977c7c870c34599af3c88512fdd7ab9c->enter($__internal_76f4816805777cc4e7632b2866a96760977c7c870c34599af3c88512fdd7ab9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f4816805777cc4e7632b2866a96760977c7c870c34599af3c88512fdd7ab9c->leave($__internal_76f4816805777cc4e7632b2866a96760977c7c870c34599af3c88512fdd7ab9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_077e76aa8666cb895c724511bede2208f3f181116e96bb8c75ea5a8c2da09f8a = $this->env->getExtension("native_profiler");
        $__internal_077e76aa8666cb895c724511bede2208f3f181116e96bb8c75ea5a8c2da09f8a->enter($__internal_077e76aa8666cb895c724511bede2208f3f181116e96bb8c75ea5a8c2da09f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_077e76aa8666cb895c724511bede2208f3f181116e96bb8c75ea5a8c2da09f8a->leave($__internal_077e76aa8666cb895c724511bede2208f3f181116e96bb8c75ea5a8c2da09f8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
