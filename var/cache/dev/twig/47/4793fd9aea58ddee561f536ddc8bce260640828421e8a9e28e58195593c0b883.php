<?php

/* @Utilisateurs/Default/assistantRH.html.twig */
class __TwigTemplate_0855fc67cb5efa5c617b4f71c96abfb7363132a8a8a412553f8f16e26cb3267e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/assistantRH.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a458cff60f8307435d3fb49e0c50c2d769843aa72c3802309c0dfdc118cc0fd = $this->env->getExtension("native_profiler");
        $__internal_3a458cff60f8307435d3fb49e0c50c2d769843aa72c3802309c0dfdc118cc0fd->enter($__internal_3a458cff60f8307435d3fb49e0c50c2d769843aa72c3802309c0dfdc118cc0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/assistantRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a458cff60f8307435d3fb49e0c50c2d769843aa72c3802309c0dfdc118cc0fd->leave($__internal_3a458cff60f8307435d3fb49e0c50c2d769843aa72c3802309c0dfdc118cc0fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1feb26cb049782544d5fe7f21abff46ad2d7d8910aba363bc4032675391d1bc0 = $this->env->getExtension("native_profiler");
        $__internal_1feb26cb049782544d5fe7f21abff46ad2d7d8910aba363bc4032675391d1bc0->enter($__internal_1feb26cb049782544d5fe7f21abff46ad2d7d8910aba363bc4032675391d1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Assistant RH </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>
   
    <div id=\"divProfile\">

        ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "

    </div>

";
        
        $__internal_1feb26cb049782544d5fe7f21abff46ad2d7d8910aba363bc4032675391d1bc0->leave($__internal_1feb26cb049782544d5fe7f21abff46ad2d7d8910aba363bc4032675391d1bc0_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/assistantRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Assistant RH </h2>*/
/*     <a href="#" id="profile"> My Profile</a>*/
/*    */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/* */
/*     </div>*/
/* */
/* {%endblock  body %}*/
