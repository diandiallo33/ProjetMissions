<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3c70ba49a0e0e2cb36c3ed0cdcccbf8c389eeee9dd25501b494abf866b2c759e extends Twig_Template
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
        $__internal_8560e58f143212c5601df0d3c44f2c6feb7c7fd3e618b5318af8b9ca2711e39e = $this->env->getExtension("native_profiler");
        $__internal_8560e58f143212c5601df0d3c44f2c6feb7c7fd3e618b5318af8b9ca2711e39e->enter($__internal_8560e58f143212c5601df0d3c44f2c6feb7c7fd3e618b5318af8b9ca2711e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8560e58f143212c5601df0d3c44f2c6feb7c7fd3e618b5318af8b9ca2711e39e->leave($__internal_8560e58f143212c5601df0d3c44f2c6feb7c7fd3e618b5318af8b9ca2711e39e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2a216352cd531ebf9635c419411ebca3d2fad5aef097e1d4cc1b58ccfee1401e = $this->env->getExtension("native_profiler");
        $__internal_2a216352cd531ebf9635c419411ebca3d2fad5aef097e1d4cc1b58ccfee1401e->enter($__internal_2a216352cd531ebf9635c419411ebca3d2fad5aef097e1d4cc1b58ccfee1401e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2a216352cd531ebf9635c419411ebca3d2fad5aef097e1d4cc1b58ccfee1401e->leave($__internal_2a216352cd531ebf9635c419411ebca3d2fad5aef097e1d4cc1b58ccfee1401e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58e011da0f8b07d36a8b5f7cf8348ee0f5599392f45250a0aaa02613e6206739 = $this->env->getExtension("native_profiler");
        $__internal_58e011da0f8b07d36a8b5f7cf8348ee0f5599392f45250a0aaa02613e6206739->enter($__internal_58e011da0f8b07d36a8b5f7cf8348ee0f5599392f45250a0aaa02613e6206739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_58e011da0f8b07d36a8b5f7cf8348ee0f5599392f45250a0aaa02613e6206739->leave($__internal_58e011da0f8b07d36a8b5f7cf8348ee0f5599392f45250a0aaa02613e6206739_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7de5ff075cf224732c96d066881ce3249c8f76cf7ffa0c9ecf4723fca805a3a5 = $this->env->getExtension("native_profiler");
        $__internal_7de5ff075cf224732c96d066881ce3249c8f76cf7ffa0c9ecf4723fca805a3a5->enter($__internal_7de5ff075cf224732c96d066881ce3249c8f76cf7ffa0c9ecf4723fca805a3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7de5ff075cf224732c96d066881ce3249c8f76cf7ffa0c9ecf4723fca805a3a5->leave($__internal_7de5ff075cf224732c96d066881ce3249c8f76cf7ffa0c9ecf4723fca805a3a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
