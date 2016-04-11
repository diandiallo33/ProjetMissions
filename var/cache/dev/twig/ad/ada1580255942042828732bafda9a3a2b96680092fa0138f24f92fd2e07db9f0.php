<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1ab74441d8a0a75f8c68bc05e9ceb7aa0e3c4348a1023d05daea154d05009747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab1ac4279db6fbb5ac23a62a47f105a80234ebbce3b21d6a1d2841e275954b1f = $this->env->getExtension("native_profiler");
        $__internal_ab1ac4279db6fbb5ac23a62a47f105a80234ebbce3b21d6a1d2841e275954b1f->enter($__internal_ab1ac4279db6fbb5ac23a62a47f105a80234ebbce3b21d6a1d2841e275954b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ab1ac4279db6fbb5ac23a62a47f105a80234ebbce3b21d6a1d2841e275954b1f->leave($__internal_ab1ac4279db6fbb5ac23a62a47f105a80234ebbce3b21d6a1d2841e275954b1f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_47ff6e03d511bc34e6f1e4961ec8c0871d19404e2546a0c27cb7b39dde1b8e40 = $this->env->getExtension("native_profiler");
        $__internal_47ff6e03d511bc34e6f1e4961ec8c0871d19404e2546a0c27cb7b39dde1b8e40->enter($__internal_47ff6e03d511bc34e6f1e4961ec8c0871d19404e2546a0c27cb7b39dde1b8e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_47ff6e03d511bc34e6f1e4961ec8c0871d19404e2546a0c27cb7b39dde1b8e40->leave($__internal_47ff6e03d511bc34e6f1e4961ec8c0871d19404e2546a0c27cb7b39dde1b8e40_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3397e8e8fd02f708731ebc87121f7f0ff6f2a4e68f42ad48751d711bb3f6407e = $this->env->getExtension("native_profiler");
        $__internal_3397e8e8fd02f708731ebc87121f7f0ff6f2a4e68f42ad48751d711bb3f6407e->enter($__internal_3397e8e8fd02f708731ebc87121f7f0ff6f2a4e68f42ad48751d711bb3f6407e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3397e8e8fd02f708731ebc87121f7f0ff6f2a4e68f42ad48751d711bb3f6407e->leave($__internal_3397e8e8fd02f708731ebc87121f7f0ff6f2a4e68f42ad48751d711bb3f6407e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d4a47d0e63c6827e26d619a98aaf9267bcd011aa3e0a43443fb3ac3467314810 = $this->env->getExtension("native_profiler");
        $__internal_d4a47d0e63c6827e26d619a98aaf9267bcd011aa3e0a43443fb3ac3467314810->enter($__internal_d4a47d0e63c6827e26d619a98aaf9267bcd011aa3e0a43443fb3ac3467314810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4a47d0e63c6827e26d619a98aaf9267bcd011aa3e0a43443fb3ac3467314810->leave($__internal_d4a47d0e63c6827e26d619a98aaf9267bcd011aa3e0a43443fb3ac3467314810_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
