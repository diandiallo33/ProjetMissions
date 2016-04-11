<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a6466a4c02478b6d0ffb599c44cee8497503182ec9804bd5fc4c0eb3116059e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_59e5e8934f1408d3852203df28f7015ac88d49bb96e3a40d57f8fdd9c96f45bc = $this->env->getExtension("native_profiler");
        $__internal_59e5e8934f1408d3852203df28f7015ac88d49bb96e3a40d57f8fdd9c96f45bc->enter($__internal_59e5e8934f1408d3852203df28f7015ac88d49bb96e3a40d57f8fdd9c96f45bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e5e8934f1408d3852203df28f7015ac88d49bb96e3a40d57f8fdd9c96f45bc->leave($__internal_59e5e8934f1408d3852203df28f7015ac88d49bb96e3a40d57f8fdd9c96f45bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72d9d46c81f3a27e8e47217ddec62fe76af48f8d1c5ffd2e82cc03de1a2e4d74 = $this->env->getExtension("native_profiler");
        $__internal_72d9d46c81f3a27e8e47217ddec62fe76af48f8d1c5ffd2e82cc03de1a2e4d74->enter($__internal_72d9d46c81f3a27e8e47217ddec62fe76af48f8d1c5ffd2e82cc03de1a2e4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_72d9d46c81f3a27e8e47217ddec62fe76af48f8d1c5ffd2e82cc03de1a2e4d74->leave($__internal_72d9d46c81f3a27e8e47217ddec62fe76af48f8d1c5ffd2e82cc03de1a2e4d74_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
