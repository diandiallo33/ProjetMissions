<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_55c1a1c70b59da2d1d2b7bf64d5d750b70bde83e3176aebd082b2e27c6d2dd46 extends Twig_Template
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
        $__internal_1aa31c211b1ebb6dfd9f6a83e0b7cdf4e155ba6d5fd35d1055ee06444f33ba0f = $this->env->getExtension("native_profiler");
        $__internal_1aa31c211b1ebb6dfd9f6a83e0b7cdf4e155ba6d5fd35d1055ee06444f33ba0f->enter($__internal_1aa31c211b1ebb6dfd9f6a83e0b7cdf4e155ba6d5fd35d1055ee06444f33ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1aa31c211b1ebb6dfd9f6a83e0b7cdf4e155ba6d5fd35d1055ee06444f33ba0f->leave($__internal_1aa31c211b1ebb6dfd9f6a83e0b7cdf4e155ba6d5fd35d1055ee06444f33ba0f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8e289280b0c78ff123e7825d235ede42f12104ff327760812ff951e4efa60fb = $this->env->getExtension("native_profiler");
        $__internal_e8e289280b0c78ff123e7825d235ede42f12104ff327760812ff951e4efa60fb->enter($__internal_e8e289280b0c78ff123e7825d235ede42f12104ff327760812ff951e4efa60fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e8e289280b0c78ff123e7825d235ede42f12104ff327760812ff951e4efa60fb->leave($__internal_e8e289280b0c78ff123e7825d235ede42f12104ff327760812ff951e4efa60fb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4c4ddc24a60db5fdfaac27d6f8812815f8a6a83fde47ee07801fff510d90d0cf = $this->env->getExtension("native_profiler");
        $__internal_4c4ddc24a60db5fdfaac27d6f8812815f8a6a83fde47ee07801fff510d90d0cf->enter($__internal_4c4ddc24a60db5fdfaac27d6f8812815f8a6a83fde47ee07801fff510d90d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c4ddc24a60db5fdfaac27d6f8812815f8a6a83fde47ee07801fff510d90d0cf->leave($__internal_4c4ddc24a60db5fdfaac27d6f8812815f8a6a83fde47ee07801fff510d90d0cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d684f25c5371af64bfef54defea69f1acf1ee4e28eb635966edbd2666e8d3320 = $this->env->getExtension("native_profiler");
        $__internal_d684f25c5371af64bfef54defea69f1acf1ee4e28eb635966edbd2666e8d3320->enter($__internal_d684f25c5371af64bfef54defea69f1acf1ee4e28eb635966edbd2666e8d3320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d684f25c5371af64bfef54defea69f1acf1ee4e28eb635966edbd2666e8d3320->leave($__internal_d684f25c5371af64bfef54defea69f1acf1ee4e28eb635966edbd2666e8d3320_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
