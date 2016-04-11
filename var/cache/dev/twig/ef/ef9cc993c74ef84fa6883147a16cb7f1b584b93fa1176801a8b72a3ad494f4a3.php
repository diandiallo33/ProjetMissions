<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_43f64a30b3547f84b13c5dd6dda1ce2aff407f7714d26f2051d66ce993661e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_371ab5517b4b5f3a9298775c06296fdda879d201a36450048dbdc7d5d958eed3 = $this->env->getExtension("native_profiler");
        $__internal_371ab5517b4b5f3a9298775c06296fdda879d201a36450048dbdc7d5d958eed3->enter($__internal_371ab5517b4b5f3a9298775c06296fdda879d201a36450048dbdc7d5d958eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371ab5517b4b5f3a9298775c06296fdda879d201a36450048dbdc7d5d958eed3->leave($__internal_371ab5517b4b5f3a9298775c06296fdda879d201a36450048dbdc7d5d958eed3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aabe259550f8ff37744077350251cf9e3295cf28b46c5f572d27e46737b9cfb = $this->env->getExtension("native_profiler");
        $__internal_1aabe259550f8ff37744077350251cf9e3295cf28b46c5f572d27e46737b9cfb->enter($__internal_1aabe259550f8ff37744077350251cf9e3295cf28b46c5f572d27e46737b9cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1aabe259550f8ff37744077350251cf9e3295cf28b46c5f572d27e46737b9cfb->leave($__internal_1aabe259550f8ff37744077350251cf9e3295cf28b46c5f572d27e46737b9cfb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
