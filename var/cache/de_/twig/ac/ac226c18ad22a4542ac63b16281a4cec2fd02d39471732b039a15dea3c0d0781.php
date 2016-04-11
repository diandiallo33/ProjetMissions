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
        $__internal_42d87592808f0e9057783a339ab3e0557ba884982e75acf28749ee68ae76ea8d = $this->env->getExtension("native_profiler");
        $__internal_42d87592808f0e9057783a339ab3e0557ba884982e75acf28749ee68ae76ea8d->enter($__internal_42d87592808f0e9057783a339ab3e0557ba884982e75acf28749ee68ae76ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d87592808f0e9057783a339ab3e0557ba884982e75acf28749ee68ae76ea8d->leave($__internal_42d87592808f0e9057783a339ab3e0557ba884982e75acf28749ee68ae76ea8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b78d6aaab94f5bd9c90ccc777620c08aa270d24ebde297e28ad409c60ed1af = $this->env->getExtension("native_profiler");
        $__internal_86b78d6aaab94f5bd9c90ccc777620c08aa270d24ebde297e28ad409c60ed1af->enter($__internal_86b78d6aaab94f5bd9c90ccc777620c08aa270d24ebde297e28ad409c60ed1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86b78d6aaab94f5bd9c90ccc777620c08aa270d24ebde297e28ad409c60ed1af->leave($__internal_86b78d6aaab94f5bd9c90ccc777620c08aa270d24ebde297e28ad409c60ed1af_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78debd45dd9da222e096d2e7723dcae6310a14bb08597dc097a169f9e125baa6 = $this->env->getExtension("native_profiler");
        $__internal_78debd45dd9da222e096d2e7723dcae6310a14bb08597dc097a169f9e125baa6->enter($__internal_78debd45dd9da222e096d2e7723dcae6310a14bb08597dc097a169f9e125baa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_78debd45dd9da222e096d2e7723dcae6310a14bb08597dc097a169f9e125baa6->leave($__internal_78debd45dd9da222e096d2e7723dcae6310a14bb08597dc097a169f9e125baa6_prof);

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
