<?php

/* @Utilisateurs/Default/collaborateur.html.twig */
class __TwigTemplate_882168600302ea33942932c236d12d858d975d32ffffdae10e3b336bf0e39152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/collaborateur.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_136321dc7f27f3f86e4a22581b082dda55e8cc21ec1d141a50065f9cdef65051 = $this->env->getExtension("native_profiler");
        $__internal_136321dc7f27f3f86e4a22581b082dda55e8cc21ec1d141a50065f9cdef65051->enter($__internal_136321dc7f27f3f86e4a22581b082dda55e8cc21ec1d141a50065f9cdef65051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/collaborateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136321dc7f27f3f86e4a22581b082dda55e8cc21ec1d141a50065f9cdef65051->leave($__internal_136321dc7f27f3f86e4a22581b082dda55e8cc21ec1d141a50065f9cdef65051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b32507a69eb6340724be03e7adb73d2a251f3e95559d6fd16f68ad2146001408 = $this->env->getExtension("native_profiler");
        $__internal_b32507a69eb6340724be03e7adb73d2a251f3e95559d6fd16f68ad2146001408->enter($__internal_b32507a69eb6340724be03e7adb73d2a251f3e95559d6fd16f68ad2146001408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Collaborateur </h2>
 
<a href=\"#\" id=\"profile\"> My Profile</a> &nbsp;&nbsp;&nbsp;
<a href=\"#\" id=\"frais\"> Frais</a>
   
<div id=\"divProfile\">
    
    ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "
     <div class=\"results\"> </div> 
    <hr/>
    ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "
    <span class=\"passwordResult\"> </span>
</div>
    
";
        
        $__internal_b32507a69eb6340724be03e7adb73d2a251f3e95559d6fd16f68ad2146001408->leave($__internal_b32507a69eb6340724be03e7adb73d2a251f3e95559d6fd16f68ad2146001408_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b72ca88b5ed1c83079f632658c090c854a18600acad2e2671f3cb328d4e15f3 = $this->env->getExtension("native_profiler");
        $__internal_5b72ca88b5ed1c83079f632658c090c854a18600acad2e2671f3cb328d4e15f3->enter($__internal_5b72ca88b5ed1c83079f632658c090c854a18600acad2e2671f3cb328d4e15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
            
                \$( \"#frais\" ).click(function() {

                        \$('#divProfile').css({'display':'none'}); 

                  });
                                    
         });
      </script>
";
        
        $__internal_5b72ca88b5ed1c83079f632658c090c854a18600acad2e2671f3cb328d4e15f3->leave($__internal_5b72ca88b5ed1c83079f632658c090c854a18600acad2e2671f3cb328d4e15f3_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/collaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  71 => 21,  59 => 15,  53 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Collaborateur </h2>*/
/*  */
/* <a href="#" id="profile"> My Profile</a> &nbsp;&nbsp;&nbsp;*/
/* <a href="#" id="frais"> Frais</a>*/
/*    */
/* <div id="divProfile">*/
/*     */
/*     {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/*      <div class="results"> </div> */
/*     <hr/>*/
/*     {{ render(controller('FOSUserBundle:ChangePassword:changePassword'))}}*/
/*     <span class="passwordResult"> </span>*/
/* </div>*/
/*     */
/* {%endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*             */
/*                 $( "#frais" ).click(function() {*/
/* */
/*                         $('#divProfile').css({'display':'none'}); */
/* */
/*                   });*/
/*                                     */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
