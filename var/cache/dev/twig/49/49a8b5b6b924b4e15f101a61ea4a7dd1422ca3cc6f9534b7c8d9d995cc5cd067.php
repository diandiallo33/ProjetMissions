<?php

/* UtilisateursBundle:Default:directeurRH.html.twig */
class __TwigTemplate_fbdcf31963254a042fd92cfc0e77c7478a70b7f272642048dec48c9bfed514b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:directeurRH.html.twig", 1);
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
        $__internal_48f87c8ea6120ab59e7a2b046fc3babc33fb8872eba1d986aadfa2528ff7788a = $this->env->getExtension("native_profiler");
        $__internal_48f87c8ea6120ab59e7a2b046fc3babc33fb8872eba1d986aadfa2528ff7788a->enter($__internal_48f87c8ea6120ab59e7a2b046fc3babc33fb8872eba1d986aadfa2528ff7788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f87c8ea6120ab59e7a2b046fc3babc33fb8872eba1d986aadfa2528ff7788a->leave($__internal_48f87c8ea6120ab59e7a2b046fc3babc33fb8872eba1d986aadfa2528ff7788a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3937e809b31b423b2192b3101de719975e114f17a23996b26e7200bba3e17cb3 = $this->env->getExtension("native_profiler");
        $__internal_3937e809b31b423b2192b3101de719975e114f17a23996b26e7200bba3e17cb3->enter($__internal_3937e809b31b423b2192b3101de719975e114f17a23996b26e7200bba3e17cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3937e809b31b423b2192b3101de719975e114f17a23996b26e7200bba3e17cb3->leave($__internal_3937e809b31b423b2192b3101de719975e114f17a23996b26e7200bba3e17cb3_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:directeurRH.html.twig";
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
