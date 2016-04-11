<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_3386e510d3037382cfdca2ffa4f5aec97f08577b5b64d09200f68aca5a7c8faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_1bd754ef372a8f9c161c987eaf59ed7ef71adaf25575c0e9f2c8ec01fb158529 = $this->env->getExtension("native_profiler");
        $__internal_1bd754ef372a8f9c161c987eaf59ed7ef71adaf25575c0e9f2c8ec01fb158529->enter($__internal_1bd754ef372a8f9c161c987eaf59ed7ef71adaf25575c0e9f2c8ec01fb158529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd754ef372a8f9c161c987eaf59ed7ef71adaf25575c0e9f2c8ec01fb158529->leave($__internal_1bd754ef372a8f9c161c987eaf59ed7ef71adaf25575c0e9f2c8ec01fb158529_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8d7e6c65e04228fda2749f90136a44c17eae8c36e5189688ad087f07e999f78 = $this->env->getExtension("native_profiler");
        $__internal_f8d7e6c65e04228fda2749f90136a44c17eae8c36e5189688ad087f07e999f78->enter($__internal_f8d7e6c65e04228fda2749f90136a44c17eae8c36e5189688ad087f07e999f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f8d7e6c65e04228fda2749f90136a44c17eae8c36e5189688ad087f07e999f78->leave($__internal_f8d7e6c65e04228fda2749f90136a44c17eae8c36e5189688ad087f07e999f78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
