<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_93d039fed5ba8f725ea26019024580a30c101ab9d34e5f215b65be9b03be8e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_149ceb3ea296cd7d80d402f046395d6076ba508578f1275413d2cb43980f17f5 = $this->env->getExtension("native_profiler");
        $__internal_149ceb3ea296cd7d80d402f046395d6076ba508578f1275413d2cb43980f17f5->enter($__internal_149ceb3ea296cd7d80d402f046395d6076ba508578f1275413d2cb43980f17f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149ceb3ea296cd7d80d402f046395d6076ba508578f1275413d2cb43980f17f5->leave($__internal_149ceb3ea296cd7d80d402f046395d6076ba508578f1275413d2cb43980f17f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_288569b8eecaf28f0c2248d12f30835e5b2c28922025bb6b9359c0a61f2ae794 = $this->env->getExtension("native_profiler");
        $__internal_288569b8eecaf28f0c2248d12f30835e5b2c28922025bb6b9359c0a61f2ae794->enter($__internal_288569b8eecaf28f0c2248d12f30835e5b2c28922025bb6b9359c0a61f2ae794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_288569b8eecaf28f0c2248d12f30835e5b2c28922025bb6b9359c0a61f2ae794->leave($__internal_288569b8eecaf28f0c2248d12f30835e5b2c28922025bb6b9359c0a61f2ae794_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
