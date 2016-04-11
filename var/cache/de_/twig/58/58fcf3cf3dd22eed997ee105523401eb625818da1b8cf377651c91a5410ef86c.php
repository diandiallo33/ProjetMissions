<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_54bb90905ef114f21e7a2fe1e3f2b1845994ae135657bf23f56024a49588ea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b90cfee1f6dc54a13adfb8b7ddad3d4e9473a660784b71439cc8daa4853e24fd = $this->env->getExtension("native_profiler");
        $__internal_b90cfee1f6dc54a13adfb8b7ddad3d4e9473a660784b71439cc8daa4853e24fd->enter($__internal_b90cfee1f6dc54a13adfb8b7ddad3d4e9473a660784b71439cc8daa4853e24fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90cfee1f6dc54a13adfb8b7ddad3d4e9473a660784b71439cc8daa4853e24fd->leave($__internal_b90cfee1f6dc54a13adfb8b7ddad3d4e9473a660784b71439cc8daa4853e24fd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef37ff74d09fa997dc7dad4e59f583790a785551c52a19749e8dcf21110c86fe = $this->env->getExtension("native_profiler");
        $__internal_ef37ff74d09fa997dc7dad4e59f583790a785551c52a19749e8dcf21110c86fe->enter($__internal_ef37ff74d09fa997dc7dad4e59f583790a785551c52a19749e8dcf21110c86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ef37ff74d09fa997dc7dad4e59f583790a785551c52a19749e8dcf21110c86fe->leave($__internal_ef37ff74d09fa997dc7dad4e59f583790a785551c52a19749e8dcf21110c86fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
