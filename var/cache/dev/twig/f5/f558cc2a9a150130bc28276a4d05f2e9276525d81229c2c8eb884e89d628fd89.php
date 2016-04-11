<?php

/* ::principale.html.twig */
class __TwigTemplate_4899637bba710ab1027002458fd36a45fc11684118cb145cfe2bd00dd64c0448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d09fd05961037eeb6d3eb64d19ab319ca28150ee86a1e43a94e06da4587152d4 = $this->env->getExtension("native_profiler");
        $__internal_d09fd05961037eeb6d3eb64d19ab319ca28150ee86a1e43a94e06da4587152d4->enter($__internal_d09fd05961037eeb6d3eb64d19ab319ca28150ee86a1e43a94e06da4587152d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_d09fd05961037eeb6d3eb64d19ab319ca28150ee86a1e43a94e06da4587152d4->leave($__internal_d09fd05961037eeb6d3eb64d19ab319ca28150ee86a1e43a94e06da4587152d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a3bee8366267c0a3983a49d88b0f0f91def0f1d7655da629d34f58d3b5f152c = $this->env->getExtension("native_profiler");
        $__internal_2a3bee8366267c0a3983a49d88b0f0f91def0f1d7655da629d34f58d3b5f152c->enter($__internal_2a3bee8366267c0a3983a49d88b0f0f91def0f1d7655da629d34f58d3b5f152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a3bee8366267c0a3983a49d88b0f0f91def0f1d7655da629d34f58d3b5f152c->leave($__internal_2a3bee8366267c0a3983a49d88b0f0f91def0f1d7655da629d34f58d3b5f152c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c0f98db0f9d01e4efc66d71da1948405824dad0a2e8c1964d8c4cb2655a5ae3 = $this->env->getExtension("native_profiler");
        $__internal_5c0f98db0f9d01e4efc66d71da1948405824dad0a2e8c1964d8c4cb2655a5ae3->enter($__internal_5c0f98db0f9d01e4efc66d71da1948405824dad0a2e8c1964d8c4cb2655a5ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_5c0f98db0f9d01e4efc66d71da1948405824dad0a2e8c1964d8c4cb2655a5ae3->leave($__internal_5c0f98db0f9d01e4efc66d71da1948405824dad0a2e8c1964d8c4cb2655a5ae3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5b93cc7e37d8cd46893e46aa2317b86da170915041b97bd94f57470551347b5 = $this->env->getExtension("native_profiler");
        $__internal_b5b93cc7e37d8cd46893e46aa2317b86da170915041b97bd94f57470551347b5->enter($__internal_b5b93cc7e37d8cd46893e46aa2317b86da170915041b97bd94f57470551347b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5b93cc7e37d8cd46893e46aa2317b86da170915041b97bd94f57470551347b5->leave($__internal_b5b93cc7e37d8cd46893e46aa2317b86da170915041b97bd94f57470551347b5_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_788373c8c1ce3baaee1ea7d2b2b9235fbe0ff2994fdb8f8e1abf323c111821e5 = $this->env->getExtension("native_profiler");
        $__internal_788373c8c1ce3baaee1ea7d2b2b9235fbe0ff2994fdb8f8e1abf323c111821e5->enter($__internal_788373c8c1ce3baaee1ea7d2b2b9235fbe0ff2994fdb8f8e1abf323c111821e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "                                                                                                                                                                                                                                                                                                                                                          
        ";
        
        $__internal_788373c8c1ce3baaee1ea7d2b2b9235fbe0ff2994fdb8f8e1abf323c111821e5->leave($__internal_788373c8c1ce3baaee1ea7d2b2b9235fbe0ff2994fdb8f8e1abf323c111821e5_prof);

    }

    public function getTemplateName()
    {
        return "::principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 13,  95 => 12,  84 => 11,  74 => 7,  68 => 6,  56 => 5,  47 => 15,  44 => 12,  42 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*                                                                                                                                                                                                                                                                                                                                                           */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
