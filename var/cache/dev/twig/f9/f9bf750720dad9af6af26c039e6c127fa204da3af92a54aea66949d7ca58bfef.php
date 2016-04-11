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
        $__internal_18cca26142e364257882093ad00a84e52b5c526140ba0e7621724a9380fef729 = $this->env->getExtension("native_profiler");
        $__internal_18cca26142e364257882093ad00a84e52b5c526140ba0e7621724a9380fef729->enter($__internal_18cca26142e364257882093ad00a84e52b5c526140ba0e7621724a9380fef729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18cca26142e364257882093ad00a84e52b5c526140ba0e7621724a9380fef729->leave($__internal_18cca26142e364257882093ad00a84e52b5c526140ba0e7621724a9380fef729_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6203956d9f3cbba3dd8ad0e401c9320443f03c933061a6b3c12f3ff0d1dd9f3 = $this->env->getExtension("native_profiler");
        $__internal_a6203956d9f3cbba3dd8ad0e401c9320443f03c933061a6b3c12f3ff0d1dd9f3->enter($__internal_a6203956d9f3cbba3dd8ad0e401c9320443f03c933061a6b3c12f3ff0d1dd9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a6203956d9f3cbba3dd8ad0e401c9320443f03c933061a6b3c12f3ff0d1dd9f3->leave($__internal_a6203956d9f3cbba3dd8ad0e401c9320443f03c933061a6b3c12f3ff0d1dd9f3_prof);

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
