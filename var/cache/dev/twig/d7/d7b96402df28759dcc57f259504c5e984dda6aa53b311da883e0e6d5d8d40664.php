<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d9264496ec728db901969a9aa88f1b59267afeba42341d66960aa95b8668a954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d820239ab848999c9defab7aacfb532ff8a9bf303b204decdc69bf3f4566059 = $this->env->getExtension("native_profiler");
        $__internal_1d820239ab848999c9defab7aacfb532ff8a9bf303b204decdc69bf3f4566059->enter($__internal_1d820239ab848999c9defab7aacfb532ff8a9bf303b204decdc69bf3f4566059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d820239ab848999c9defab7aacfb532ff8a9bf303b204decdc69bf3f4566059->leave($__internal_1d820239ab848999c9defab7aacfb532ff8a9bf303b204decdc69bf3f4566059_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe40c01b3fb70d585efe37e2ef489d5f444eda5ec84eebf79900b1d2d5a49243 = $this->env->getExtension("native_profiler");
        $__internal_fe40c01b3fb70d585efe37e2ef489d5f444eda5ec84eebf79900b1d2d5a49243->enter($__internal_fe40c01b3fb70d585efe37e2ef489d5f444eda5ec84eebf79900b1d2d5a49243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"connexion\">
        <h3>Atos SENEGAL </h3>
        ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "            <div class=\"erreurs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 11
        echo "
        <div class=\"forms\">
            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"User ID or e-mail\"/> 

               <!-- <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password</a>-->
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"/>
                
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </form>
            
         </div>
    </div>    
";
        
        $__internal_fe40c01b3fb70d585efe37e2ef489d5f444eda5ec84eebf79900b1d2d5a49243->leave($__internal_fe40c01b3fb70d585efe37e2ef489d5f444eda5ec84eebf79900b1d2d5a49243_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  70 => 18,  65 => 16,  60 => 14,  56 => 13,  52 => 11,  46 => 9,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*  {% block fos_user_content %}*/
/*     <div class="connexion">*/
/*         <h3>Atos SENEGAL </h3>*/
/*         {% if error %}*/
/*             <div class="erreurs">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/*         <div class="forms">*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="User ID or e-mail"/> */
/* */
/*                <!-- <a href="{{path('fos_user_resetting_request')}}">Forgot Password</a>-->*/
/*                 <input type="password" id="password" name="_password" required="required" placeholder="Password"/>*/
/*                 */
/*                 <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             </form>*/
/*             */
/*          </div>*/
/*     </div>    */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* */
