<?php

/* UtilisateursBundle:Default:directeurRH.html.twig */
class __TwigTemplate_fbdcf31963254a042fd92cfc0e77c7478a70b7f272642048dec48c9bfed514b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:directeurRH.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4399695ddf85fd5700489dca3a46405216c56579ee89668a722d6e161508b710 = $this->env->getExtension("native_profiler");
        $__internal_4399695ddf85fd5700489dca3a46405216c56579ee89668a722d6e161508b710->enter($__internal_4399695ddf85fd5700489dca3a46405216c56579ee89668a722d6e161508b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4399695ddf85fd5700489dca3a46405216c56579ee89668a722d6e161508b710->leave($__internal_4399695ddf85fd5700489dca3a46405216c56579ee89668a722d6e161508b710_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4727d282fb0668a56e4f3515258df2f3a25b5fb9c6a290e4c8c20daaa3b98500 = $this->env->getExtension("native_profiler");
        $__internal_4727d282fb0668a56e4f3515258df2f3a25b5fb9c6a290e4c8c20daaa3b98500->enter($__internal_4727d282fb0668a56e4f3515258df2f3a25b5fb9c6a290e4c8c20daaa3b98500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Directeur RH </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>
   
    <div id=\"divProfile\">

        ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "

    </div>

";
        
        $__internal_4727d282fb0668a56e4f3515258df2f3a25b5fb9c6a290e4c8c20daaa3b98500->leave($__internal_4727d282fb0668a56e4f3515258df2f3a25b5fb9c6a290e4c8c20daaa3b98500_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:directeurRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Directeur RH </h2>*/
/*     <a href="#" id="profile"> My Profile</a>*/
/*    */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/* */
/*     </div>*/
/* */
/* {%endblock  body %}*/
/* */
