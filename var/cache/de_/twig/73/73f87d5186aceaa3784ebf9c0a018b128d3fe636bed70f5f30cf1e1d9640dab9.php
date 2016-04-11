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
        $__internal_b3903534f41878af976906822779dcb57e2a24c92a48fc3406b955917836a20c = $this->env->getExtension("native_profiler");
        $__internal_b3903534f41878af976906822779dcb57e2a24c92a48fc3406b955917836a20c->enter($__internal_b3903534f41878af976906822779dcb57e2a24c92a48fc3406b955917836a20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3903534f41878af976906822779dcb57e2a24c92a48fc3406b955917836a20c->leave($__internal_b3903534f41878af976906822779dcb57e2a24c92a48fc3406b955917836a20c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cd800f914b1834983cc12b0af27535c95e9061a111cdf69502f546e8a3f8fe3 = $this->env->getExtension("native_profiler");
        $__internal_6cd800f914b1834983cc12b0af27535c95e9061a111cdf69502f546e8a3f8fe3->enter($__internal_6cd800f914b1834983cc12b0af27535c95e9061a111cdf69502f546e8a3f8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6cd800f914b1834983cc12b0af27535c95e9061a111cdf69502f546e8a3f8fe3->leave($__internal_6cd800f914b1834983cc12b0af27535c95e9061a111cdf69502f546e8a3f8fe3_prof);

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
