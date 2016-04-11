<?php

/* UtilisateursBundle:Default:assistantRH.html.twig */
class __TwigTemplate_8fbabb7bfb5bae541dd3a07e4fd97af1dd776b4423c59dd8276303af06296cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:assistantRH.html.twig", 1);
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
        $__internal_fe1dc3f83656f1ea5b4ce307b2fa1c8adcf61c6796194c8535124ef700f66e64 = $this->env->getExtension("native_profiler");
        $__internal_fe1dc3f83656f1ea5b4ce307b2fa1c8adcf61c6796194c8535124ef700f66e64->enter($__internal_fe1dc3f83656f1ea5b4ce307b2fa1c8adcf61c6796194c8535124ef700f66e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:assistantRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe1dc3f83656f1ea5b4ce307b2fa1c8adcf61c6796194c8535124ef700f66e64->leave($__internal_fe1dc3f83656f1ea5b4ce307b2fa1c8adcf61c6796194c8535124ef700f66e64_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2b42b80d3740c2d5b88ed12db234a156b04b0de4a8a6ad82a21b86b4b2bcb1 = $this->env->getExtension("native_profiler");
        $__internal_cf2b42b80d3740c2d5b88ed12db234a156b04b0de4a8a6ad82a21b86b4b2bcb1->enter($__internal_cf2b42b80d3740c2d5b88ed12db234a156b04b0de4a8a6ad82a21b86b4b2bcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf2b42b80d3740c2d5b88ed12db234a156b04b0de4a8a6ad82a21b86b4b2bcb1->leave($__internal_cf2b42b80d3740c2d5b88ed12db234a156b04b0de4a8a6ad82a21b86b4b2bcb1_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:assistantRH.html.twig";
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
