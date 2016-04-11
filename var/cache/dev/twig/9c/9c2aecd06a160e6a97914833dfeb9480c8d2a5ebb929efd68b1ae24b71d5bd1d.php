<?php

/* UtilisateursBundle:Default:dg.html.twig */
class __TwigTemplate_2852d32e68d28a5036781e9b2feddafa8a0e2ccc8ada20096dce5fa7d33e40b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:dg.html.twig", 1);
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
        $__internal_471926e712312cf86456ff24b92b1409dc971728d1fcc257f3f4f24822001f8d = $this->env->getExtension("native_profiler");
        $__internal_471926e712312cf86456ff24b92b1409dc971728d1fcc257f3f4f24822001f8d->enter($__internal_471926e712312cf86456ff24b92b1409dc971728d1fcc257f3f4f24822001f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:dg.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471926e712312cf86456ff24b92b1409dc971728d1fcc257f3f4f24822001f8d->leave($__internal_471926e712312cf86456ff24b92b1409dc971728d1fcc257f3f4f24822001f8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef0f036e8a845e617c5bc8b7e8b533fff3bf216a71d23daeec89df32b008530 = $this->env->getExtension("native_profiler");
        $__internal_eef0f036e8a845e617c5bc8b7e8b533fff3bf216a71d23daeec89df32b008530->enter($__internal_eef0f036e8a845e617c5bc8b7e8b533fff3bf216a71d23daeec89df32b008530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eef0f036e8a845e617c5bc8b7e8b533fff3bf216a71d23daeec89df32b008530->leave($__internal_eef0f036e8a845e617c5bc8b7e8b533fff3bf216a71d23daeec89df32b008530_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed7be87d17cd1cb936cd6abb1fb25483c6f628532daeb5bf8400baddff0b2399 = $this->env->getExtension("native_profiler");
        $__internal_ed7be87d17cd1cb936cd6abb1fb25483c6f628532daeb5bf8400baddff0b2399->enter($__internal_ed7be87d17cd1cb936cd6abb1fb25483c6f628532daeb5bf8400baddff0b2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ed7be87d17cd1cb936cd6abb1fb25483c6f628532daeb5bf8400baddff0b2399->leave($__internal_ed7be87d17cd1cb936cd6abb1fb25483c6f628532daeb5bf8400baddff0b2399_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:dg.html.twig";
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
