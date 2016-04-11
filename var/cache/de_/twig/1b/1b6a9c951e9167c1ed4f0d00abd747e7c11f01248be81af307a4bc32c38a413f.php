<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3a99b245b6fca9c3febcbf4475d451f00fceb74e56d246eeed32e260723e95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_819d0f4c63a2ba77960d094fac093c48cfc03502350112a445ba7d1a0bc6a3a0 = $this->env->getExtension("native_profiler");
        $__internal_819d0f4c63a2ba77960d094fac093c48cfc03502350112a445ba7d1a0bc6a3a0->enter($__internal_819d0f4c63a2ba77960d094fac093c48cfc03502350112a445ba7d1a0bc6a3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_819d0f4c63a2ba77960d094fac093c48cfc03502350112a445ba7d1a0bc6a3a0->leave($__internal_819d0f4c63a2ba77960d094fac093c48cfc03502350112a445ba7d1a0bc6a3a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_729f4fbf6b44ea86c50029aa962cfedea7c94064d06b31c2270983cd23b51a92 = $this->env->getExtension("native_profiler");
        $__internal_729f4fbf6b44ea86c50029aa962cfedea7c94064d06b31c2270983cd23b51a92->enter($__internal_729f4fbf6b44ea86c50029aa962cfedea7c94064d06b31c2270983cd23b51a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_729f4fbf6b44ea86c50029aa962cfedea7c94064d06b31c2270983cd23b51a92->leave($__internal_729f4fbf6b44ea86c50029aa962cfedea7c94064d06b31c2270983cd23b51a92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
