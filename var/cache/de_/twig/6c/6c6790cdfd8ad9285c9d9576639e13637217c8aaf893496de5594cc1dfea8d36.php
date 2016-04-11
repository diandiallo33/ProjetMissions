<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_208cc5a418d879080e9a659f99ffaaa2ace71d40f0b41132e42e1181d0bf807a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f8e475b0109dc526dcbe95a0650c40105f02bcf3ad4c4baeacd34ddbd7cda378 = $this->env->getExtension("native_profiler");
        $__internal_f8e475b0109dc526dcbe95a0650c40105f02bcf3ad4c4baeacd34ddbd7cda378->enter($__internal_f8e475b0109dc526dcbe95a0650c40105f02bcf3ad4c4baeacd34ddbd7cda378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e475b0109dc526dcbe95a0650c40105f02bcf3ad4c4baeacd34ddbd7cda378->leave($__internal_f8e475b0109dc526dcbe95a0650c40105f02bcf3ad4c4baeacd34ddbd7cda378_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa7fa575b90b7e565dd8b74c26c3b7b2dc45fcc6751164ba1acde4fd66cb396b = $this->env->getExtension("native_profiler");
        $__internal_aa7fa575b90b7e565dd8b74c26c3b7b2dc45fcc6751164ba1acde4fd66cb396b->enter($__internal_aa7fa575b90b7e565dd8b74c26c3b7b2dc45fcc6751164ba1acde4fd66cb396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_aa7fa575b90b7e565dd8b74c26c3b7b2dc45fcc6751164ba1acde4fd66cb396b->leave($__internal_aa7fa575b90b7e565dd8b74c26c3b7b2dc45fcc6751164ba1acde4fd66cb396b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
