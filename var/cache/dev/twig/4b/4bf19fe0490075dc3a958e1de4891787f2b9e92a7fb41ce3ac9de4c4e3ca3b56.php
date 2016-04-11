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
        $__internal_fd8c216fd4d102e58753752a1d73855a7a3abd1bd4d6445e5af9ab7eeb4d9955 = $this->env->getExtension("native_profiler");
        $__internal_fd8c216fd4d102e58753752a1d73855a7a3abd1bd4d6445e5af9ab7eeb4d9955->enter($__internal_fd8c216fd4d102e58753752a1d73855a7a3abd1bd4d6445e5af9ab7eeb4d9955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fd8c216fd4d102e58753752a1d73855a7a3abd1bd4d6445e5af9ab7eeb4d9955->leave($__internal_fd8c216fd4d102e58753752a1d73855a7a3abd1bd4d6445e5af9ab7eeb4d9955_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7837d6d4b25a0dc1a32ec83bdd01b6e75ef0dda7ca2d7060de234b97b632e958 = $this->env->getExtension("native_profiler");
        $__internal_7837d6d4b25a0dc1a32ec83bdd01b6e75ef0dda7ca2d7060de234b97b632e958->enter($__internal_7837d6d4b25a0dc1a32ec83bdd01b6e75ef0dda7ca2d7060de234b97b632e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7837d6d4b25a0dc1a32ec83bdd01b6e75ef0dda7ca2d7060de234b97b632e958->leave($__internal_7837d6d4b25a0dc1a32ec83bdd01b6e75ef0dda7ca2d7060de234b97b632e958_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_97e70a67059aa048e1b512177d0e1bca5691da1c4081ff5a60d62ab2ffa25c70 = $this->env->getExtension("native_profiler");
        $__internal_97e70a67059aa048e1b512177d0e1bca5691da1c4081ff5a60d62ab2ffa25c70->enter($__internal_97e70a67059aa048e1b512177d0e1bca5691da1c4081ff5a60d62ab2ffa25c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_97e70a67059aa048e1b512177d0e1bca5691da1c4081ff5a60d62ab2ffa25c70->leave($__internal_97e70a67059aa048e1b512177d0e1bca5691da1c4081ff5a60d62ab2ffa25c70_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d83bc9163d9d840cade0b152e201f3e4a27a5e50f3fe22c2913bf6b723abc16 = $this->env->getExtension("native_profiler");
        $__internal_0d83bc9163d9d840cade0b152e201f3e4a27a5e50f3fe22c2913bf6b723abc16->enter($__internal_0d83bc9163d9d840cade0b152e201f3e4a27a5e50f3fe22c2913bf6b723abc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d83bc9163d9d840cade0b152e201f3e4a27a5e50f3fe22c2913bf6b723abc16->leave($__internal_0d83bc9163d9d840cade0b152e201f3e4a27a5e50f3fe22c2913bf6b723abc16_prof);

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
