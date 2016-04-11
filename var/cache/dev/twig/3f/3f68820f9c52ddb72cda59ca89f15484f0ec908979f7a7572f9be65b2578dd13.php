<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_7ae259866b9de84eb0d23199593a3411ddd3d2f2381a7467064b15e2ad7271d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f5ed02b0add3579b5b3c677683f44c4185666810c5b7f82f2e149c9b97f196aa = $this->env->getExtension("native_profiler");
        $__internal_f5ed02b0add3579b5b3c677683f44c4185666810c5b7f82f2e149c9b97f196aa->enter($__internal_f5ed02b0add3579b5b3c677683f44c4185666810c5b7f82f2e149c9b97f196aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ed02b0add3579b5b3c677683f44c4185666810c5b7f82f2e149c9b97f196aa->leave($__internal_f5ed02b0add3579b5b3c677683f44c4185666810c5b7f82f2e149c9b97f196aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f4af1e97e08eeef10b370692582b379555c99f3fca311e163c13eeca64d82df = $this->env->getExtension("native_profiler");
        $__internal_3f4af1e97e08eeef10b370692582b379555c99f3fca311e163c13eeca64d82df->enter($__internal_3f4af1e97e08eeef10b370692582b379555c99f3fca311e163c13eeca64d82df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3f4af1e97e08eeef10b370692582b379555c99f3fca311e163c13eeca64d82df->leave($__internal_3f4af1e97e08eeef10b370692582b379555c99f3fca311e163c13eeca64d82df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
