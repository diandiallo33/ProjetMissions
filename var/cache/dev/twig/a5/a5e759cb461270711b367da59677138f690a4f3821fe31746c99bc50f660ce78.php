<?php

/* @Utilisateurs/Default/directeurRH.html.twig */
class __TwigTemplate_6244d29deb715431b81c589eae138b4dce4728a35e556a4c4ff98434b1f84586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/directeurRH.html.twig", 1);
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
        $__internal_d7b46a0f7c823a7e41c5f5370479b69a5a13fb00685e583d65c83053b256af40 = $this->env->getExtension("native_profiler");
        $__internal_d7b46a0f7c823a7e41c5f5370479b69a5a13fb00685e583d65c83053b256af40->enter($__internal_d7b46a0f7c823a7e41c5f5370479b69a5a13fb00685e583d65c83053b256af40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b46a0f7c823a7e41c5f5370479b69a5a13fb00685e583d65c83053b256af40->leave($__internal_d7b46a0f7c823a7e41c5f5370479b69a5a13fb00685e583d65c83053b256af40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_566ed44d7245443ba91ed06b2f7bd6c00114ffce1528d9723530c3aba71ec9d9 = $this->env->getExtension("native_profiler");
        $__internal_566ed44d7245443ba91ed06b2f7bd6c00114ffce1528d9723530c3aba71ec9d9->enter($__internal_566ed44d7245443ba91ed06b2f7bd6c00114ffce1528d9723530c3aba71ec9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Directeur RH </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>
   
    <div id=\"divProfile\">

        ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "

    </div>

";
        
        $__internal_566ed44d7245443ba91ed06b2f7bd6c00114ffce1528d9723530c3aba71ec9d9->leave($__internal_566ed44d7245443ba91ed06b2f7bd6c00114ffce1528d9723530c3aba71ec9d9_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/directeurRH.html.twig";
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
/*     <h2> Espace Directeur RH </h2>*/
/*     <a href="#" id="profile"> My Profile</a>*/
/*    */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/* */
/*     </div>*/
/* */
/* {%endblock  body %}*/
/* */
