<?php

/* @Utilisateurs/Default/index.html.twig */
class __TwigTemplate_72c0807e3ff07f93883dafd272ff7211eed1ef8973560e8b42a4d9cde0d8edef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb918e435603ed8f58eb858d5695d1298bf96c62a353662e367bef0d5f9c95a4 = $this->env->getExtension("native_profiler");
        $__internal_cb918e435603ed8f58eb858d5695d1298bf96c62a353662e367bef0d5f9c95a4->enter($__internal_cb918e435603ed8f58eb858d5695d1298bf96c62a353662e367bef0d5f9c95a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/index.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UtilisateursBundle:Default:afterLogin"));
        echo "

Hello World!
";
        
        $__internal_cb918e435603ed8f58eb858d5695d1298bf96c62a353662e367bef0d5f9c95a4->leave($__internal_cb918e435603ed8f58eb858d5695d1298bf96c62a353662e367bef0d5f9c95a4_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('UtilisateursBundle:Default:afterLogin'))}}*/
/* */
/* Hello World!*/
/* */
