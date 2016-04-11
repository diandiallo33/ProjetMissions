<?php

/* @Utilisateurs/Default/projet.html.twig */
class __TwigTemplate_e561d746d9025691088c993b98ade65ca598b87409a01c8c6ec2fd5bfa88b1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/projet.html.twig", 1);
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
        $__internal_b2983ce3101cc97c709fd854783e8fd95fb48482f2006353ff8546f32d171b02 = $this->env->getExtension("native_profiler");
        $__internal_b2983ce3101cc97c709fd854783e8fd95fb48482f2006353ff8546f32d171b02->enter($__internal_b2983ce3101cc97c709fd854783e8fd95fb48482f2006353ff8546f32d171b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2983ce3101cc97c709fd854783e8fd95fb48482f2006353ff8546f32d171b02->leave($__internal_b2983ce3101cc97c709fd854783e8fd95fb48482f2006353ff8546f32d171b02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a933c197695891ad18c50b7ecc6918074d43451fffce3e750a01d56a716b52f8 = $this->env->getExtension("native_profiler");
        $__internal_a933c197695891ad18c50b7ecc6918074d43451fffce3e750a01d56a716b52f8->enter($__internal_a933c197695891ad18c50b7ecc6918074d43451fffce3e750a01d56a716b52f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a933c197695891ad18c50b7ecc6918074d43451fffce3e750a01d56a716b52f8->leave($__internal_a933c197695891ad18c50b7ecc6918074d43451fffce3e750a01d56a716b52f8_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_843be681b8ce12c85bf8ed3dbc315b08fcd2834f59f2af5aef5c572bd9026c06 = $this->env->getExtension("native_profiler");
        $__internal_843be681b8ce12c85bf8ed3dbc315b08fcd2834f59f2af5aef5c572bd9026c06->enter($__internal_843be681b8ce12c85bf8ed3dbc315b08fcd2834f59f2af5aef5c572bd9026c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_843be681b8ce12c85bf8ed3dbc315b08fcd2834f59f2af5aef5c572bd9026c06->leave($__internal_843be681b8ce12c85bf8ed3dbc315b08fcd2834f59f2af5aef5c572bd9026c06_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/projet.html.twig";
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
