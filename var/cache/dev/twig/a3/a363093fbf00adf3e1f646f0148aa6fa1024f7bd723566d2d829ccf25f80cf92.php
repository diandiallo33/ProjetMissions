<?php

/* @Utilisateurs/Default/dg.html.twig */
class __TwigTemplate_741af39e4b31f49efabcde3c90d093d298bb01462ee43f119b1f46dd601e6b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/dg.html.twig", 1);
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
        $__internal_359baa94104283b71a28120c91fb6c02bf7300c0ebbc120bdc7ec0f6314c09d6 = $this->env->getExtension("native_profiler");
        $__internal_359baa94104283b71a28120c91fb6c02bf7300c0ebbc120bdc7ec0f6314c09d6->enter($__internal_359baa94104283b71a28120c91fb6c02bf7300c0ebbc120bdc7ec0f6314c09d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/dg.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359baa94104283b71a28120c91fb6c02bf7300c0ebbc120bdc7ec0f6314c09d6->leave($__internal_359baa94104283b71a28120c91fb6c02bf7300c0ebbc120bdc7ec0f6314c09d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7146d00d4fd542d473d838a52a20680fe51b8f823301fa3baacd154d12ed14f8 = $this->env->getExtension("native_profiler");
        $__internal_7146d00d4fd542d473d838a52a20680fe51b8f823301fa3baacd154d12ed14f8->enter($__internal_7146d00d4fd542d473d838a52a20680fe51b8f823301fa3baacd154d12ed14f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace DG Atos </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>&nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"newProject\"> Received Projects</a> &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"projectStatus\"> Projects Status </a>  
   
    <div id=\"divProfile\">
        ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "
          <div class=\"results\"> </div> 
          <hr/>
        ";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "
        <span class=\"passwordResult\"> </span>
    </div>
        
    <div id=\"divNewProject\">
      Received Projects
    </div>  
    
     <div id=\"divProjectStatus\">
       Project Status
    </div>

";
        
        $__internal_7146d00d4fd542d473d838a52a20680fe51b8f823301fa3baacd154d12ed14f8->leave($__internal_7146d00d4fd542d473d838a52a20680fe51b8f823301fa3baacd154d12ed14f8_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ce916c46454c80a0a7a2df39ef53d1d390c4c0d48e8429e0bf14faf075cd7b3 = $this->env->getExtension("native_profiler");
        $__internal_5ce916c46454c80a0a7a2df39ef53d1d390c4c0d48e8429e0bf14faf075cd7b3->enter($__internal_5ce916c46454c80a0a7a2df39ef53d1d390c4c0d48e8429e0bf14faf075cd7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#newProject\" ).click(function() {

                        \$('#divNewProject').css({'display':'block'}); 
                        \$('#divProjectStatus').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'});
                     });
                     
                     \$( \"#projectStatus\" ).click(function() {

                        \$('#divProjectStatus').css({'display':'block'}); 
                        \$('#divNewProject').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'});
                     });
       
                 
         });
      </script>
";
        
        $__internal_5ce916c46454c80a0a7a2df39ef53d1d390c4c0d48e8429e0bf14faf075cd7b3->leave($__internal_5ce916c46454c80a0a7a2df39ef53d1d390c4c0d48e8429e0bf14faf075cd7b3_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/dg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  78 => 28,  58 => 14,  52 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace DG Atos </h2>*/
/*     <a href="#" id="profile"> My Profile</a>&nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="newProject"> Received Projects</a> &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="projectStatus"> Projects Status </a>  */
/*    */
/*     <div id="divProfile">*/
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/*           <div class="results"> </div> */
/*           <hr/>*/
/*         {{ render(controller('FOSUserBundle:ChangePassword:changePassword'))}}*/
/*         <span class="passwordResult"> </span>*/
/*     </div>*/
/*         */
/*     <div id="divNewProject">*/
/*       Received Projects*/
/*     </div>  */
/*     */
/*      <div id="divProjectStatus">*/
/*        Project Status*/
/*     </div>*/
/* */
/* {%endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*               */
/*                      $( "#newProject" ).click(function() {*/
/* */
/*                         $('#divNewProject').css({'display':'block'}); */
/*                         $('#divProjectStatus').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'});*/
/*                      });*/
/*                      */
/*                      $( "#projectStatus" ).click(function() {*/
/* */
/*                         $('#divProjectStatus').css({'display':'block'}); */
/*                         $('#divNewProject').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'});*/
/*                      });*/
/*        */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
