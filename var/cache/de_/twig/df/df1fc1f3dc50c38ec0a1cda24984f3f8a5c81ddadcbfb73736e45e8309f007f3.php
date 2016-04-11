<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_334e68a487d79ac2b54ac1444fc7486f7977237602caff8c484b41cca66b9ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_65e423808b9bf77f03c6c73f73f303bc3fb2e5920d1496d44db2473254ca6b96 = $this->env->getExtension("native_profiler");
        $__internal_65e423808b9bf77f03c6c73f73f303bc3fb2e5920d1496d44db2473254ca6b96->enter($__internal_65e423808b9bf77f03c6c73f73f303bc3fb2e5920d1496d44db2473254ca6b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e423808b9bf77f03c6c73f73f303bc3fb2e5920d1496d44db2473254ca6b96->leave($__internal_65e423808b9bf77f03c6c73f73f303bc3fb2e5920d1496d44db2473254ca6b96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b130cca66fef4cf998eda200a220e41f9596c1a12d0b6452a7644b77bd50e6a = $this->env->getExtension("native_profiler");
        $__internal_0b130cca66fef4cf998eda200a220e41f9596c1a12d0b6452a7644b77bd50e6a->enter($__internal_0b130cca66fef4cf998eda200a220e41f9596c1a12d0b6452a7644b77bd50e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0b130cca66fef4cf998eda200a220e41f9596c1a12d0b6452a7644b77bd50e6a->leave($__internal_0b130cca66fef4cf998eda200a220e41f9596c1a12d0b6452a7644b77bd50e6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
