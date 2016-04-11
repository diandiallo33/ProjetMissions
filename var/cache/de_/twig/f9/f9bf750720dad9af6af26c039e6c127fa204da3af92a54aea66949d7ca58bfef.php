<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7795fe3ddfbd3b93e131ac26c50c26a1e6e8fb0d01896860d543d2b6c48207e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6f6e697cfc6e2245a2fa1ece4e7fe92c142b48d07861d2defa945a0a550a68a5 = $this->env->getExtension("native_profiler");
        $__internal_6f6e697cfc6e2245a2fa1ece4e7fe92c142b48d07861d2defa945a0a550a68a5->enter($__internal_6f6e697cfc6e2245a2fa1ece4e7fe92c142b48d07861d2defa945a0a550a68a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6e697cfc6e2245a2fa1ece4e7fe92c142b48d07861d2defa945a0a550a68a5->leave($__internal_6f6e697cfc6e2245a2fa1ece4e7fe92c142b48d07861d2defa945a0a550a68a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dfb3f5edbbe9a2c13020d3d4baa278aa5ca3d33801129650e690b47629cf66e = $this->env->getExtension("native_profiler");
        $__internal_8dfb3f5edbbe9a2c13020d3d4baa278aa5ca3d33801129650e690b47629cf66e->enter($__internal_8dfb3f5edbbe9a2c13020d3d4baa278aa5ca3d33801129650e690b47629cf66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8dfb3f5edbbe9a2c13020d3d4baa278aa5ca3d33801129650e690b47629cf66e->leave($__internal_8dfb3f5edbbe9a2c13020d3d4baa278aa5ca3d33801129650e690b47629cf66e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
