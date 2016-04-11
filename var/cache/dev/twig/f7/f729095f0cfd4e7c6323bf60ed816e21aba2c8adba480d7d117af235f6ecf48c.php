<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_9070f4cbc4e990abd68f8f058cb99993203e47f9153adeed8181a4fb10f38cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_94926d0cbcd6a159e3f96a815004f7623f19f3d7c462110abb4fa3dcadd8915b = $this->env->getExtension("native_profiler");
        $__internal_94926d0cbcd6a159e3f96a815004f7623f19f3d7c462110abb4fa3dcadd8915b->enter($__internal_94926d0cbcd6a159e3f96a815004f7623f19f3d7c462110abb4fa3dcadd8915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94926d0cbcd6a159e3f96a815004f7623f19f3d7c462110abb4fa3dcadd8915b->leave($__internal_94926d0cbcd6a159e3f96a815004f7623f19f3d7c462110abb4fa3dcadd8915b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3212a421437ddbcf392c7d6db4a83f9933a1d680f39278f5391c149063f5f16 = $this->env->getExtension("native_profiler");
        $__internal_e3212a421437ddbcf392c7d6db4a83f9933a1d680f39278f5391c149063f5f16->enter($__internal_e3212a421437ddbcf392c7d6db4a83f9933a1d680f39278f5391c149063f5f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e3212a421437ddbcf392c7d6db4a83f9933a1d680f39278f5391c149063f5f16->leave($__internal_e3212a421437ddbcf392c7d6db4a83f9933a1d680f39278f5391c149063f5f16_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
