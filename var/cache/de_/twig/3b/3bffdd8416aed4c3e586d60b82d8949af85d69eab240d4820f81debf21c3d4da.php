<?php

/* ::accueil.html.twig */
class __TwigTemplate_4bd3ea9c5671b6564571f15cc746dc92ddfe30ce599fd3ffbd63858a239a786c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7d0cf8197d72108f6852ce30c7cdaf2b4d5e61b4314c02cb932fa7305b9c81d = $this->env->getExtension("native_profiler");
        $__internal_a7d0cf8197d72108f6852ce30c7cdaf2b4d5e61b4314c02cb932fa7305b9c81d->enter($__internal_a7d0cf8197d72108f6852ce30c7cdaf2b4d5e61b4314c02cb932fa7305b9c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "    </body>
</html>
";
        
        $__internal_a7d0cf8197d72108f6852ce30c7cdaf2b4d5e61b4314c02cb932fa7305b9c81d->leave($__internal_a7d0cf8197d72108f6852ce30c7cdaf2b4d5e61b4314c02cb932fa7305b9c81d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_419139037aa4d3c5857bcf1610f1ce0e63e8de3ee02f2e8a1c676e2517e2244b = $this->env->getExtension("native_profiler");
        $__internal_419139037aa4d3c5857bcf1610f1ce0e63e8de3ee02f2e8a1c676e2517e2244b->enter($__internal_419139037aa4d3c5857bcf1610f1ce0e63e8de3ee02f2e8a1c676e2517e2244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_419139037aa4d3c5857bcf1610f1ce0e63e8de3ee02f2e8a1c676e2517e2244b->leave($__internal_419139037aa4d3c5857bcf1610f1ce0e63e8de3ee02f2e8a1c676e2517e2244b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f00cdb9378fc9737b6042ec06400ba28c41a8a32cfeff3b727846b8b3cc0402f = $this->env->getExtension("native_profiler");
        $__internal_f00cdb9378fc9737b6042ec06400ba28c41a8a32cfeff3b727846b8b3cc0402f->enter($__internal_f00cdb9378fc9737b6042ec06400ba28c41a8a32cfeff3b727846b8b3cc0402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styleEspace.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f00cdb9378fc9737b6042ec06400ba28c41a8a32cfeff3b727846b8b3cc0402f->leave($__internal_f00cdb9378fc9737b6042ec06400ba28c41a8a32cfeff3b727846b8b3cc0402f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8effb51ffeb4ea707ead0e66c2e32a91139f6c6975edb2030f3e9eea52ff15 = $this->env->getExtension("native_profiler");
        $__internal_6e8effb51ffeb4ea707ead0e66c2e32a91139f6c6975edb2030f3e9eea52ff15->enter($__internal_6e8effb51ffeb4ea707ead0e66c2e32a91139f6c6975edb2030f3e9eea52ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "            <h4>Welcome ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h4>
            <table style=\"width: 100%\">
             <tr>   
                 <td><h3>Atos SENEGAL </h3> </td>
                 <td align=\"right\"> 
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </a>
                 </td>
             </tr> 
            
            </table>
            <hr/>
        
        ";
        
        $__internal_6e8effb51ffeb4ea707ead0e66c2e32a91139f6c6975edb2030f3e9eea52ff15->leave($__internal_6e8effb51ffeb4ea707ead0e66c2e32a91139f6c6975edb2030f3e9eea52ff15_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9900f197167ae90e035dba73c875570566100a88b01086b0fee9fc807f364024 = $this->env->getExtension("native_profiler");
        $__internal_9900f197167ae90e035dba73c875570566100a88b01086b0fee9fc807f364024->enter($__internal_9900f197167ae90e035dba73c875570566100a88b01086b0fee9fc807f364024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
          
            <script >
             \$(function(){

                    
                    \$( \"#profile\" ).click(function() {

                        \$('#divProfile').css({'display':'block'}); 
                        \$('#divNewUser').css({'display':'none'});
                        \$('#divAutre').css({'display':'none'});
                        \$('#divNewProject').css({'display':'none'});
                        \$('#divProjectStatus').css({'display':'none'}); 
                     });
                        
                     
                   //************* Profile *****************  
                    \$( \".fos_user_profile_edit\" ).submit(function(e) {
                      e.preventDefault();
                      //var donnees = \$(this).serialize();
                       var values = {};
                      \$('.fos_user_profile_edit').serializeArray().forEach(function (field) {
                          values[field.name] = field.value;
                      });

                            \$.ajax({
                            url: \"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\",
                            data: values,
                            type: 'post'
                            }).done(function (data) {
                                \$(\".results\").html(\"<h3>Successful.</h3>\");
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
                    
                    //************* Password *****************  
                    \$( \".fos_user_change_password\" ).submit(function(e) {

                        e.preventDefault();
                        //var donnees = \$(this).serialize();
                         var val1, val2,i=0; 
                         var values = {};
                        \$('.fos_user_change_password').serializeArray().forEach(function (field) {
                            values[field.name] = field.value;

                              if (i===0) { val1=field.value; i++;}
                               else if(i===1)  {val2=field.value; i++; }
                        });

                        if (val1===val2)
                        {
                            \$.ajax({

                              type: \"POST\",
                              url: \"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\",
                              data: values,
                              dataType: \"text\",
                              success: function(result){
                              \$(\".passwordResult\").text(\"succes\"); 
                              }
                           }); 
                        }
                        else {\$(\".passwordResult\").text(\"Mot de passe different\");}
                       
                    });

              });     
            
    </script>
        ";
        
        $__internal_9900f197167ae90e035dba73c875570566100a88b01086b0fee9fc807f364024->leave($__internal_9900f197167ae90e035dba73c875570566100a88b01086b0fee9fc807f364024_prof);

    }

    public function getTemplateName()
    {
        return "::accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 91,  157 => 55,  127 => 29,  121 => 28,  105 => 18,  101 => 17,  92 => 12,  86 => 11,  76 => 7,  70 => 6,  58 => 5,  49 => 107,  47 => 28,  44 => 27,  42 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('css/styleEspace.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <h4>Welcome {{app.user.username}} </h4>*/
/*             <table style="width: 100%">*/
/*              <tr>   */
/*                  <td><h3>Atos SENEGAL </h3> </td>*/
/*                  <td align="right"> */
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a>*/
/*                  </td>*/
/*              </tr> */
/*             */
/*             </table>*/
/*             <hr/>*/
/*         */
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}*/
/*           <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*           */
/*             <script >*/
/*              $(function(){*/
/* */
/*                     */
/*                     $( "#profile" ).click(function() {*/
/* */
/*                         $('#divProfile').css({'display':'block'}); */
/*                         $('#divNewUser').css({'display':'none'});*/
/*                         $('#divAutre').css({'display':'none'});*/
/*                         $('#divNewProject').css({'display':'none'});*/
/*                         $('#divProjectStatus').css({'display':'none'}); */
/*                      });*/
/*                         */
/*                      */
/*                    //************* Profile *****************  */
/*                     $( ".fos_user_profile_edit" ).submit(function(e) {*/
/*                       e.preventDefault();*/
/*                       //var donnees = $(this).serialize();*/
/*                        var values = {};*/
/*                       $('.fos_user_profile_edit').serializeArray().forEach(function (field) {*/
/*                           values[field.name] = field.value;*/
/*                       });*/
/* */
/*                             $.ajax({*/
/*                             url: "{{ path('fos_user_profile_edit') }}",*/
/*                             data: values,*/
/*                             type: 'post'*/
/*                             }).done(function (data) {*/
/*                                 $(".results").html("<h3>Successful.</h3>");*/
/*                                 /*setTimeout(function () {*/
/*                                     window.location.reload(1);*/
/*                                 }, 2000);*//* */
/*                             }).fail(function (data) {*/
/*                                 var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                                     return ('<li>' + value + '</li>');*/
/*                                 });*/
/*                                 $(".results").html(newHTML);*/
/*                             });*/
/* */
/*                     });*/
/*                     */
/*                     //************* Password *****************  */
/*                     $( ".fos_user_change_password" ).submit(function(e) {*/
/* */
/*                         e.preventDefault();*/
/*                         //var donnees = $(this).serialize();*/
/*                          var val1, val2,i=0; */
/*                          var values = {};*/
/*                         $('.fos_user_change_password').serializeArray().forEach(function (field) {*/
/*                             values[field.name] = field.value;*/
/* */
/*                               if (i===0) { val1=field.value; i++;}*/
/*                                else if(i===1)  {val2=field.value; i++; }*/
/*                         });*/
/* */
/*                         if (val1===val2)*/
/*                         {*/
/*                             $.ajax({*/
/* */
/*                               type: "POST",*/
/*                               url: "{{ path('fos_user_change_password') }}",*/
/*                               data: values,*/
/*                               dataType: "text",*/
/*                               success: function(result){*/
/*                               $(".passwordResult").text("succes"); */
/*                               }*/
/*                            }); */
/*                         }*/
/*                         else {$(".passwordResult").text("Mot de passe different");}*/
/*                        */
/*                     });*/
/* */
/*               });     */
/*             */
/*     </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
