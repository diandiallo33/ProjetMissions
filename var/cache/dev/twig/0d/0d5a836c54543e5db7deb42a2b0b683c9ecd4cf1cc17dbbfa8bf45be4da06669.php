<?php

/* base.html.twig */
class __TwigTemplate_f14ac83dee4da43c04ac862b9922c08c88b864b0edcdf9cf40099199630a079b extends Twig_Template
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
        $__internal_d8a7fb5151ba8e7336946af595ddc9025b1fb0f7b78174348715bbd588d44f66 = $this->env->getExtension("native_profiler");
        $__internal_d8a7fb5151ba8e7336946af595ddc9025b1fb0f7b78174348715bbd588d44f66->enter($__internal_d8a7fb5151ba8e7336946af595ddc9025b1fb0f7b78174348715bbd588d44f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d8a7fb5151ba8e7336946af595ddc9025b1fb0f7b78174348715bbd588d44f66->leave($__internal_d8a7fb5151ba8e7336946af595ddc9025b1fb0f7b78174348715bbd588d44f66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0d324efd5dcfd645bd84d315681002bdee674bdd64305b209c7179351cd97f1 = $this->env->getExtension("native_profiler");
        $__internal_f0d324efd5dcfd645bd84d315681002bdee674bdd64305b209c7179351cd97f1->enter($__internal_f0d324efd5dcfd645bd84d315681002bdee674bdd64305b209c7179351cd97f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0d324efd5dcfd645bd84d315681002bdee674bdd64305b209c7179351cd97f1->leave($__internal_f0d324efd5dcfd645bd84d315681002bdee674bdd64305b209c7179351cd97f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e01c58e2eb427cb8982f86271e27b6c20d9f9add29edafadbd8fe635fb54bc5 = $this->env->getExtension("native_profiler");
        $__internal_3e01c58e2eb427cb8982f86271e27b6c20d9f9add29edafadbd8fe635fb54bc5->enter($__internal_3e01c58e2eb427cb8982f86271e27b6c20d9f9add29edafadbd8fe635fb54bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e01c58e2eb427cb8982f86271e27b6c20d9f9add29edafadbd8fe635fb54bc5->leave($__internal_3e01c58e2eb427cb8982f86271e27b6c20d9f9add29edafadbd8fe635fb54bc5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6598e206a92a0cd32d57e05597bb914c4b496c014c52169bcc82655904ae329 = $this->env->getExtension("native_profiler");
        $__internal_f6598e206a92a0cd32d57e05597bb914c4b496c014c52169bcc82655904ae329->enter($__internal_f6598e206a92a0cd32d57e05597bb914c4b496c014c52169bcc82655904ae329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6598e206a92a0cd32d57e05597bb914c4b496c014c52169bcc82655904ae329->leave($__internal_f6598e206a92a0cd32d57e05597bb914c4b496c014c52169bcc82655904ae329_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23cb082155907045cd7e27d726013a3761dd9618c8733c101295dfda878d34b9 = $this->env->getExtension("native_profiler");
        $__internal_23cb082155907045cd7e27d726013a3761dd9618c8733c101295dfda878d34b9->enter($__internal_23cb082155907045cd7e27d726013a3761dd9618c8733c101295dfda878d34b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23cb082155907045cd7e27d726013a3761dd9618c8733c101295dfda878d34b9->leave($__internal_23cb082155907045cd7e27d726013a3761dd9618c8733c101295dfda878d34b9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
