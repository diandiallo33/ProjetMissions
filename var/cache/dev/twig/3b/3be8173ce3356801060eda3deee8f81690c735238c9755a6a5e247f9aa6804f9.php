<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6dff036d62c33f7f3f45e72062221683abdfe15bbac6be064a6fa1d7f4833f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8f18967f1b148cbea07ae0adb0e5663b858918050ffaa6e66973ba305bd5759b = $this->env->getExtension("native_profiler");
        $__internal_8f18967f1b148cbea07ae0adb0e5663b858918050ffaa6e66973ba305bd5759b->enter($__internal_8f18967f1b148cbea07ae0adb0e5663b858918050ffaa6e66973ba305bd5759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f18967f1b148cbea07ae0adb0e5663b858918050ffaa6e66973ba305bd5759b->leave($__internal_8f18967f1b148cbea07ae0adb0e5663b858918050ffaa6e66973ba305bd5759b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_722ac9bb9cd6478fe4f3eba6ed81dbfe154daf98c75bb5fa9dffb588be535915 = $this->env->getExtension("native_profiler");
        $__internal_722ac9bb9cd6478fe4f3eba6ed81dbfe154daf98c75bb5fa9dffb588be535915->enter($__internal_722ac9bb9cd6478fe4f3eba6ed81dbfe154daf98c75bb5fa9dffb588be535915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_722ac9bb9cd6478fe4f3eba6ed81dbfe154daf98c75bb5fa9dffb588be535915->leave($__internal_722ac9bb9cd6478fe4f3eba6ed81dbfe154daf98c75bb5fa9dffb588be535915_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
