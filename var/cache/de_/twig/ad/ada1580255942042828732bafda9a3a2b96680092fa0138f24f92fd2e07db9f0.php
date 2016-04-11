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
        $__internal_fc1223fe8404983aea94a2b83db2e82721ecab78333f31a08950f8f54c0cccff = $this->env->getExtension("native_profiler");
        $__internal_fc1223fe8404983aea94a2b83db2e82721ecab78333f31a08950f8f54c0cccff->enter($__internal_fc1223fe8404983aea94a2b83db2e82721ecab78333f31a08950f8f54c0cccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc1223fe8404983aea94a2b83db2e82721ecab78333f31a08950f8f54c0cccff->leave($__internal_fc1223fe8404983aea94a2b83db2e82721ecab78333f31a08950f8f54c0cccff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c4f1562ba13159a3f397a13b930195d5504f5746ae94be738eb5bbcc8b00d0d = $this->env->getExtension("native_profiler");
        $__internal_0c4f1562ba13159a3f397a13b930195d5504f5746ae94be738eb5bbcc8b00d0d->enter($__internal_0c4f1562ba13159a3f397a13b930195d5504f5746ae94be738eb5bbcc8b00d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c4f1562ba13159a3f397a13b930195d5504f5746ae94be738eb5bbcc8b00d0d->leave($__internal_0c4f1562ba13159a3f397a13b930195d5504f5746ae94be738eb5bbcc8b00d0d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_62deb30efab85bbe2ac34a8696d1703813a01e3afafdc11fd3e23e1d39dadf57 = $this->env->getExtension("native_profiler");
        $__internal_62deb30efab85bbe2ac34a8696d1703813a01e3afafdc11fd3e23e1d39dadf57->enter($__internal_62deb30efab85bbe2ac34a8696d1703813a01e3afafdc11fd3e23e1d39dadf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_62deb30efab85bbe2ac34a8696d1703813a01e3afafdc11fd3e23e1d39dadf57->leave($__internal_62deb30efab85bbe2ac34a8696d1703813a01e3afafdc11fd3e23e1d39dadf57_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1be5aac27822a3373e2936ca3193143ef440569bbb445126ef8b5dab1658cac9 = $this->env->getExtension("native_profiler");
        $__internal_1be5aac27822a3373e2936ca3193143ef440569bbb445126ef8b5dab1658cac9->enter($__internal_1be5aac27822a3373e2936ca3193143ef440569bbb445126ef8b5dab1658cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1be5aac27822a3373e2936ca3193143ef440569bbb445126ef8b5dab1658cac9->leave($__internal_1be5aac27822a3373e2936ca3193143ef440569bbb445126ef8b5dab1658cac9_prof);

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
