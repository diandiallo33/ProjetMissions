<?php

/* UtilisateursBundle:Default:index.html.twig */
class __TwigTemplate_e26be331145e3eea04455a60033579c9c84a324c83456c13fe6dbc476a533ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1553333209befc6ec6ef1170f294a610d3ae19accb9a7380930bf8be323bc3ce = $this->env->getExtension("native_profiler");
        $__internal_1553333209befc6ec6ef1170f294a610d3ae19accb9a7380930bf8be323bc3ce->enter($__internal_1553333209befc6ec6ef1170f294a610d3ae19accb9a7380930bf8be323bc3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:index.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UtilisateursBundle:Default:afterLogin"));
        echo "

Hello World!
";
        
        $__internal_1553333209befc6ec6ef1170f294a610d3ae19accb9a7380930bf8be323bc3ce->leave($__internal_1553333209befc6ec6ef1170f294a610d3ae19accb9a7380930bf8be323bc3ce_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('UtilisateursBundle:Default:afterLogin'))}}*/
/* */
/* Hello World!*/
/* */
