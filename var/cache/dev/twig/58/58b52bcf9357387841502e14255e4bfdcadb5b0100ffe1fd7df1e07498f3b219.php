<?php

/* UtilisateursBundle:Default:admin.html.twig */
class __TwigTemplate_286146457b5a12cee7e9d76d0c16a055baa2bb4944fd80affb42e9c5314bd32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:admin.html.twig", 1);
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
        $__internal_7ad21075851f7b3d505e55a9e115c5b59bb60e1201f69d325ab6f03076135a03 = $this->env->getExtension("native_profiler");
        $__internal_7ad21075851f7b3d505e55a9e115c5b59bb60e1201f69d325ab6f03076135a03->enter($__internal_7ad21075851f7b3d505e55a9e115c5b59bb60e1201f69d325ab6f03076135a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad21075851f7b3d505e55a9e115c5b59bb60e1201f69d325ab6f03076135a03->leave($__internal_7ad21075851f7b3d505e55a9e115c5b59bb60e1201f69d325ab6f03076135a03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad9ac9f63ae09e810ff2eea245fc6b4919f0eeca6907fe3d4551b84c0d73e81 = $this->env->getExtension("native_profiler");
        $__internal_1ad9ac9f63ae09e810ff2eea245fc6b4919f0eeca6907fe3d4551b84c0d73e81->enter($__internal_1ad9ac9f63ae09e810ff2eea245fc6b4919f0eeca6907fe3d4551b84c0d73e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Administrateur </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a> &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"newUser\"> New User </a>  &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"manage\"> Manage Account </a>

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
    
    <div id=\"divNewUser\">

        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"));
        echo "
         <div class=\"results\"> </div>  
    </div>
        
    <div id=\"divAutre\">
       
    </div>    
";
        
        $__internal_1ad9ac9f63ae09e810ff2eea245fc6b4919f0eeca6907fe3d4551b84c0d73e81->leave($__internal_1ad9ac9f63ae09e810ff2eea245fc6b4919f0eeca6907fe3d4551b84c0d73e81_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bac3d5dc955503717e8d9f7c9b753989963121d8ce4d7db874e5b0283026e8c4 = $this->env->getExtension("native_profiler");
        $__internal_bac3d5dc955503717e8d9f7c9b753989963121d8ce4d7db874e5b0283026e8c4->enter($__internal_bac3d5dc955503717e8d9f7c9b753989963121d8ce4d7db874e5b0283026e8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#newUser\" ).click(function() {

                        \$('#divNewUser').css({'display':'block'}); 
                        \$('#divProfile').css({'display':'none'}); 
                         \$('#divAutre').css({'display':'none'});
                     });
                     
                     \$( \"#manage\" ).click(function() {

                        \$('#divNewUser').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'}); 
                        \$('#divAutre').css({'display':'block'}); 
                     });
              
              //************** Users list *************
              
               \$( \"#manage\" ).click(function() {
                     \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("utilisateurs_users");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function(result){
                    \$(\"#divAutre\").html(result); 
                    }
                 }); 
                  
                });
                
                
              //************* Registration *****************  
                    
                \$(\".fos_user_registration_register\").submit(function (e) {
                e.preventDefault();
                var values = {};
                \$('.fos_user_registration_register').serializeArray().forEach(function (field) {
                    values[field.name] = field.value;
                });
                \$.ajax({
                    url: \"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\",
                    data: values,
                    type: 'post'
                }).done(function (data) {
                    \$(\".results\").html(\"<h3>You are successfully registered.</h3>\");
                    /*setTimeout(function () {
                        window.location.reload(1);
                    }, 2000);*/
                }).fail(function (data) {
                    var newHTML = \$.map(data.responseJSON.message, function (value) {
                        return ('<li>' + value + '</li>');
                    });
                    \$(\".results\").html(newHTML);
                });
            });
            
                //************** Users Enabled *************
       
                
                   
                 
         });
      </script>
";
        
        $__internal_bac3d5dc955503717e8d9f7c9b753989963121d8ce4d7db874e5b0283026e8c4->leave($__internal_bac3d5dc955503717e8d9f7c9b753989963121d8ce4d7db874e5b0283026e8c4_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 75,  117 => 55,  89 => 31,  83 => 30,  68 => 21,  59 => 15,  53 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Administrateur </h2>*/
/*     <a href="#" id="profile"> My Profile</a> &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="newUser"> New User </a>  &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="manage"> Manage Account </a>*/
/* */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/*           <div class="results"> </div> */
/*           <hr/>*/
/*         {{ render(controller('FOSUserBundle:ChangePassword:changePassword'))}}*/
/*         <span class="passwordResult"> </span>*/
/*     </div>*/
/*     */
/*     <div id="divNewUser">*/
/* */
/*         {{ render(controller('FOSUserBundle:Registration:register'))}}*/
/*          <div class="results"> </div>  */
/*     </div>*/
/*         */
/*     <div id="divAutre">*/
/*        */
/*     </div>    */
/* {%endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*               */
/*                      $( "#newUser" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'block'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                          $('#divAutre').css({'display':'none'});*/
/*                      });*/
/*                      */
/*                      $( "#manage" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                         $('#divAutre').css({'display':'block'}); */
/*                      });*/
/*               */
/*               //************** Users list **************/
/*               */
/*                $( "#manage" ).click(function() {*/
/*                      $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('utilisateurs_users') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function(result){*/
/*                     $("#divAutre").html(result); */
/*                     }*/
/*                  }); */
/*                   */
/*                 });*/
/*                 */
/*                 */
/*               //************* Registration *****************  */
/*                     */
/*                 $(".fos_user_registration_register").submit(function (e) {*/
/*                 e.preventDefault();*/
/*                 var values = {};*/
/*                 $('.fos_user_registration_register').serializeArray().forEach(function (field) {*/
/*                     values[field.name] = field.value;*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{ path('fos_user_registration_register') }}",*/
/*                     data: values,*/
/*                     type: 'post'*/
/*                 }).done(function (data) {*/
/*                     $(".results").html("<h3>You are successfully registered.</h3>");*/
/*                     /*setTimeout(function () {*/
/*                         window.location.reload(1);*/
/*                     }, 2000);*//* */
/*                 }).fail(function (data) {*/
/*                     var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                         return ('<li>' + value + '</li>');*/
/*                     });*/
/*                     $(".results").html(newHTML);*/
/*                 });*/
/*             });*/
/*             */
/*                 //************** Users Enabled **************/
/*        */
/*                 */
/*                    */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
