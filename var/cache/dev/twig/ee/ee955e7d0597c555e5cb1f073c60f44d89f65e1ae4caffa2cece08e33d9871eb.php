<?php

/* UtilisateursBundle:Default:collaborateur.html.twig */
class __TwigTemplate_3f0677351dad0b1ce081c6612e3b8d87357638be59c026ba4acaeed80eb7e33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:collaborateur.html.twig", 1);
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
        $__internal_985e6468174bd5d523d465f87a80578a75ff76ab87aeaae9fce6eedb17f0cc0a = $this->env->getExtension("native_profiler");
        $__internal_985e6468174bd5d523d465f87a80578a75ff76ab87aeaae9fce6eedb17f0cc0a->enter($__internal_985e6468174bd5d523d465f87a80578a75ff76ab87aeaae9fce6eedb17f0cc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:collaborateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985e6468174bd5d523d465f87a80578a75ff76ab87aeaae9fce6eedb17f0cc0a->leave($__internal_985e6468174bd5d523d465f87a80578a75ff76ab87aeaae9fce6eedb17f0cc0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_857f4f3a3ad1faa4071aaf1f732e616f6051cb7016417b3e77625d514033eb24 = $this->env->getExtension("native_profiler");
        $__internal_857f4f3a3ad1faa4071aaf1f732e616f6051cb7016417b3e77625d514033eb24->enter($__internal_857f4f3a3ad1faa4071aaf1f732e616f6051cb7016417b3e77625d514033eb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_857f4f3a3ad1faa4071aaf1f732e616f6051cb7016417b3e77625d514033eb24->leave($__internal_857f4f3a3ad1faa4071aaf1f732e616f6051cb7016417b3e77625d514033eb24_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d22dfeff1e481039a26439918788b1d947b4d135e9fd6b81ddab30ca0f2ecd17 = $this->env->getExtension("native_profiler");
        $__internal_d22dfeff1e481039a26439918788b1d947b4d135e9fd6b81ddab30ca0f2ecd17->enter($__internal_d22dfeff1e481039a26439918788b1d947b4d135e9fd6b81ddab30ca0f2ecd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d22dfeff1e481039a26439918788b1d947b4d135e9fd6b81ddab30ca0f2ecd17->leave($__internal_d22dfeff1e481039a26439918788b1d947b4d135e9fd6b81ddab30ca0f2ecd17_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:collaborateur.html.twig";
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
