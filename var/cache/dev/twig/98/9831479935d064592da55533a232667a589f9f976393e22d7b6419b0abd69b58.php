<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_db3abcdcce96846a4c14849f91b2490090338fe9e6178add5f8fec56c1bc4c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_26d702c955c010c49a933eb741be27dbaf57bc869424fe0c3351de073b7ca1e8 = $this->env->getExtension("native_profiler");
        $__internal_26d702c955c010c49a933eb741be27dbaf57bc869424fe0c3351de073b7ca1e8->enter($__internal_26d702c955c010c49a933eb741be27dbaf57bc869424fe0c3351de073b7ca1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d702c955c010c49a933eb741be27dbaf57bc869424fe0c3351de073b7ca1e8->leave($__internal_26d702c955c010c49a933eb741be27dbaf57bc869424fe0c3351de073b7ca1e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede7f36b4c8b7a553bb981a9f88bf21fb2cc923429444ca9a8b8d54878edb3df = $this->env->getExtension("native_profiler");
        $__internal_ede7f36b4c8b7a553bb981a9f88bf21fb2cc923429444ca9a8b8d54878edb3df->enter($__internal_ede7f36b4c8b7a553bb981a9f88bf21fb2cc923429444ca9a8b8d54878edb3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ede7f36b4c8b7a553bb981a9f88bf21fb2cc923429444ca9a8b8d54878edb3df->leave($__internal_ede7f36b4c8b7a553bb981a9f88bf21fb2cc923429444ca9a8b8d54878edb3df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
