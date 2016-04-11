<?php

/* ::base.html.twig */
class __TwigTemplate_5135088ab57dbc307d233a1c28ded43b82c6b7221c2548558ca69e286f7b13b3 extends Twig_Template
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
        $__internal_8f37b26dfbf015ed5b867b85860d401a5f997904cbbb81601736ff0e27b83e75 = $this->env->getExtension("native_profiler");
        $__internal_8f37b26dfbf015ed5b867b85860d401a5f997904cbbb81601736ff0e27b83e75->enter($__internal_8f37b26dfbf015ed5b867b85860d401a5f997904cbbb81601736ff0e27b83e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8f37b26dfbf015ed5b867b85860d401a5f997904cbbb81601736ff0e27b83e75->leave($__internal_8f37b26dfbf015ed5b867b85860d401a5f997904cbbb81601736ff0e27b83e75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e91d3e33033d1ba9641a4d38c9b724440073653010b38eb528ff5c9565fc931c = $this->env->getExtension("native_profiler");
        $__internal_e91d3e33033d1ba9641a4d38c9b724440073653010b38eb528ff5c9565fc931c->enter($__internal_e91d3e33033d1ba9641a4d38c9b724440073653010b38eb528ff5c9565fc931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e91d3e33033d1ba9641a4d38c9b724440073653010b38eb528ff5c9565fc931c->leave($__internal_e91d3e33033d1ba9641a4d38c9b724440073653010b38eb528ff5c9565fc931c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17db7973ab587fc49092c8a310c46c71e38fc12f83977d0900b5d6cc82dd2a94 = $this->env->getExtension("native_profiler");
        $__internal_17db7973ab587fc49092c8a310c46c71e38fc12f83977d0900b5d6cc82dd2a94->enter($__internal_17db7973ab587fc49092c8a310c46c71e38fc12f83977d0900b5d6cc82dd2a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17db7973ab587fc49092c8a310c46c71e38fc12f83977d0900b5d6cc82dd2a94->leave($__internal_17db7973ab587fc49092c8a310c46c71e38fc12f83977d0900b5d6cc82dd2a94_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e324f02d0f92c7777bec7c68d1cb9e63900a10775c42508bade6ed3163d9151e = $this->env->getExtension("native_profiler");
        $__internal_e324f02d0f92c7777bec7c68d1cb9e63900a10775c42508bade6ed3163d9151e->enter($__internal_e324f02d0f92c7777bec7c68d1cb9e63900a10775c42508bade6ed3163d9151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e324f02d0f92c7777bec7c68d1cb9e63900a10775c42508bade6ed3163d9151e->leave($__internal_e324f02d0f92c7777bec7c68d1cb9e63900a10775c42508bade6ed3163d9151e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02f4656e10c42f25f377767ab2e25a261fad273ab1d8d8b21288e75d888a59eb = $this->env->getExtension("native_profiler");
        $__internal_02f4656e10c42f25f377767ab2e25a261fad273ab1d8d8b21288e75d888a59eb->enter($__internal_02f4656e10c42f25f377767ab2e25a261fad273ab1d8d8b21288e75d888a59eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02f4656e10c42f25f377767ab2e25a261fad273ab1d8d8b21288e75d888a59eb->leave($__internal_02f4656e10c42f25f377767ab2e25a261fad273ab1d8d8b21288e75d888a59eb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
