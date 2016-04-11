<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_334e68a487d79ac2b54ac1444fc7486f7977237602caff8c484b41cca66b9ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c1fd3c38261b4329a0d678c2bbea55f9888012958dd980d82ac43539ce797a71 = $this->env->getExtension("native_profiler");
        $__internal_c1fd3c38261b4329a0d678c2bbea55f9888012958dd980d82ac43539ce797a71->enter($__internal_c1fd3c38261b4329a0d678c2bbea55f9888012958dd980d82ac43539ce797a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1fd3c38261b4329a0d678c2bbea55f9888012958dd980d82ac43539ce797a71->leave($__internal_c1fd3c38261b4329a0d678c2bbea55f9888012958dd980d82ac43539ce797a71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_206dc0a209e0567e447bb056de047b62f961976023d61ab5ab2c242c1d7d40c4 = $this->env->getExtension("native_profiler");
        $__internal_206dc0a209e0567e447bb056de047b62f961976023d61ab5ab2c242c1d7d40c4->enter($__internal_206dc0a209e0567e447bb056de047b62f961976023d61ab5ab2c242c1d7d40c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_206dc0a209e0567e447bb056de047b62f961976023d61ab5ab2c242c1d7d40c4->leave($__internal_206dc0a209e0567e447bb056de047b62f961976023d61ab5ab2c242c1d7d40c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
