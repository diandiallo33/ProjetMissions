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
        $__internal_6be450ed16edcb975e1f6bda31dc1173cc0c3a88d2e6df16840e6b4019870c31 = $this->env->getExtension("native_profiler");
        $__internal_6be450ed16edcb975e1f6bda31dc1173cc0c3a88d2e6df16840e6b4019870c31->enter($__internal_6be450ed16edcb975e1f6bda31dc1173cc0c3a88d2e6df16840e6b4019870c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6be450ed16edcb975e1f6bda31dc1173cc0c3a88d2e6df16840e6b4019870c31->leave($__internal_6be450ed16edcb975e1f6bda31dc1173cc0c3a88d2e6df16840e6b4019870c31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9cc536c4d499a6cdf1f4e41618890fab3611e609bcf72aca995aff256394041 = $this->env->getExtension("native_profiler");
        $__internal_e9cc536c4d499a6cdf1f4e41618890fab3611e609bcf72aca995aff256394041->enter($__internal_e9cc536c4d499a6cdf1f4e41618890fab3611e609bcf72aca995aff256394041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9cc536c4d499a6cdf1f4e41618890fab3611e609bcf72aca995aff256394041->leave($__internal_e9cc536c4d499a6cdf1f4e41618890fab3611e609bcf72aca995aff256394041_prof);

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
