<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_ee8e42122d75b810fc743b24ad00fbd2a57fd4941157e82326627a095af44a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a5ab069adcf1c34c507d87ad528eb570eb456d77d5a9e535458329e54905f3e9 = $this->env->getExtension("native_profiler");
        $__internal_a5ab069adcf1c34c507d87ad528eb570eb456d77d5a9e535458329e54905f3e9->enter($__internal_a5ab069adcf1c34c507d87ad528eb570eb456d77d5a9e535458329e54905f3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ab069adcf1c34c507d87ad528eb570eb456d77d5a9e535458329e54905f3e9->leave($__internal_a5ab069adcf1c34c507d87ad528eb570eb456d77d5a9e535458329e54905f3e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e0b1e3b87ced5b82fa74f0677494691991e0f23810248be99c68c3b74b86f6 = $this->env->getExtension("native_profiler");
        $__internal_70e0b1e3b87ced5b82fa74f0677494691991e0f23810248be99c68c3b74b86f6->enter($__internal_70e0b1e3b87ced5b82fa74f0677494691991e0f23810248be99c68c3b74b86f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_70e0b1e3b87ced5b82fa74f0677494691991e0f23810248be99c68c3b74b86f6->leave($__internal_70e0b1e3b87ced5b82fa74f0677494691991e0f23810248be99c68c3b74b86f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
