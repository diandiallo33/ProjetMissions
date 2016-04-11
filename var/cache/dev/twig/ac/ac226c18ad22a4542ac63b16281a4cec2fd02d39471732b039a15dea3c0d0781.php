<?php

/* UtilisateursBundle:Default:projet.html.twig */
class __TwigTemplate_1730600239ffba82549f3af110462e2dbc0d3fa958febcad6cb96fcb64521420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:projet.html.twig", 1);
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
        $__internal_532ee49d9e6ff456f3084b42570366a99b27ef6308f2ed443a5b827e6f58b01d = $this->env->getExtension("native_profiler");
        $__internal_532ee49d9e6ff456f3084b42570366a99b27ef6308f2ed443a5b827e6f58b01d->enter($__internal_532ee49d9e6ff456f3084b42570366a99b27ef6308f2ed443a5b827e6f58b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532ee49d9e6ff456f3084b42570366a99b27ef6308f2ed443a5b827e6f58b01d->leave($__internal_532ee49d9e6ff456f3084b42570366a99b27ef6308f2ed443a5b827e6f58b01d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb749b546dd84d3fc08fea92adaa4e82323e942e232cc681b2f967c40350fd85 = $this->env->getExtension("native_profiler");
        $__internal_bb749b546dd84d3fc08fea92adaa4e82323e942e232cc681b2f967c40350fd85->enter($__internal_bb749b546dd84d3fc08fea92adaa4e82323e942e232cc681b2f967c40350fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Entité Atos Porteur du Projet</h2>
    <a href=\"#\" id=\"newProject\"> New Project</a> &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"projectStatus\"> Projects Status </a>  &nbsp;&nbsp;&nbsp;
    
     <div id=\"divNewProject\">
       New Project
    </div>  
    
     <div id=\"divProjectStatus\">
       Project Status
    </div>  
";
        
        $__internal_bb749b546dd84d3fc08fea92adaa4e82323e942e232cc681b2f967c40350fd85->leave($__internal_bb749b546dd84d3fc08fea92adaa4e82323e942e232cc681b2f967c40350fd85_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f2d86c29e5d110ea54dbd319e46339dda8194aaf430f5af12d3e67fa30a6bb3 = $this->env->getExtension("native_profiler");
        $__internal_5f2d86c29e5d110ea54dbd319e46339dda8194aaf430f5af12d3e67fa30a6bb3->enter($__internal_5f2d86c29e5d110ea54dbd319e46339dda8194aaf430f5af12d3e67fa30a6bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#newProject\" ).click(function() {

                        \$('#divNewProject').css({'display':'block'}); 
                        \$('#divProjectStatus').css({'display':'none'}); 
                     });
                     
                     \$( \"#projectStatus\" ).click(function() {

                        \$('#divProjectStatus').css({'display':'block'}); 
                        \$('#divNewProject').css({'display':'none'}); 
                     });
       
                 
         });
      </script>
";
        
        $__internal_5f2d86c29e5d110ea54dbd319e46339dda8194aaf430f5af12d3e67fa30a6bb3->leave($__internal_5f2d86c29e5d110ea54dbd319e46339dda8194aaf430f5af12d3e67fa30a6bb3_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  62 => 18,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Entité Atos Porteur du Projet</h2>*/
/*     <a href="#" id="newProject"> New Project</a> &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="projectStatus"> Projects Status </a>  &nbsp;&nbsp;&nbsp;*/
/*     */
/*      <div id="divNewProject">*/
/*        New Project*/
/*     </div>  */
/*     */
/*      <div id="divProjectStatus">*/
/*        Project Status*/
/*     </div>  */
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
/*                      });*/
/*                      */
/*                      $( "#projectStatus" ).click(function() {*/
/* */
/*                         $('#divProjectStatus').css({'display':'block'}); */
/*                         $('#divNewProject').css({'display':'none'}); */
/*                      });*/
/*        */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
