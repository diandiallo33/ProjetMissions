<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_eab1de6627307879b18366c8a9c159734df160d3cabcd4094e9fdf116703c9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9081abe027714330ce0ad85dc145a829a3036a11be3e6190c99b9906b57df556 = $this->env->getExtension("native_profiler");
        $__internal_9081abe027714330ce0ad85dc145a829a3036a11be3e6190c99b9906b57df556->enter($__internal_9081abe027714330ce0ad85dc145a829a3036a11be3e6190c99b9906b57df556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9081abe027714330ce0ad85dc145a829a3036a11be3e6190c99b9906b57df556->leave($__internal_9081abe027714330ce0ad85dc145a829a3036a11be3e6190c99b9906b57df556_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d25737c8d0ebc262678127864898119d7b555ca6c22a4c3ae24bb84a54ed073 = $this->env->getExtension("native_profiler");
        $__internal_1d25737c8d0ebc262678127864898119d7b555ca6c22a4c3ae24bb84a54ed073->enter($__internal_1d25737c8d0ebc262678127864898119d7b555ca6c22a4c3ae24bb84a54ed073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1d25737c8d0ebc262678127864898119d7b555ca6c22a4c3ae24bb84a54ed073->leave($__internal_1d25737c8d0ebc262678127864898119d7b555ca6c22a4c3ae24bb84a54ed073_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
