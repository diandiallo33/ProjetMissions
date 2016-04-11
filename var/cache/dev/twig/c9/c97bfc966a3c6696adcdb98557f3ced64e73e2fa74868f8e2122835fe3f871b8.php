<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d11ee81f66545188e4569848d388d966b39ca8353d9637ba1f3b4bb9d8d59cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa1f9c27a62e0549b52804a219fdcab2269807ec37d952b09d6a9daf25c1d93 = $this->env->getExtension("native_profiler");
        $__internal_9aa1f9c27a62e0549b52804a219fdcab2269807ec37d952b09d6a9daf25c1d93->enter($__internal_9aa1f9c27a62e0549b52804a219fdcab2269807ec37d952b09d6a9daf25c1d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa1f9c27a62e0549b52804a219fdcab2269807ec37d952b09d6a9daf25c1d93->leave($__internal_9aa1f9c27a62e0549b52804a219fdcab2269807ec37d952b09d6a9daf25c1d93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f8a8e836e7dcc505d95040c56e9f1d6ea41c64cca3bc419dadf052ad1ddb7bb = $this->env->getExtension("native_profiler");
        $__internal_6f8a8e836e7dcc505d95040c56e9f1d6ea41c64cca3bc419dadf052ad1ddb7bb->enter($__internal_6f8a8e836e7dcc505d95040c56e9f1d6ea41c64cca3bc419dadf052ad1ddb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f8a8e836e7dcc505d95040c56e9f1d6ea41c64cca3bc419dadf052ad1ddb7bb->leave($__internal_6f8a8e836e7dcc505d95040c56e9f1d6ea41c64cca3bc419dadf052ad1ddb7bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18b577b9783fbfb963cffd46b1b7662114f4d24670a49db44f5188e7f1773d43 = $this->env->getExtension("native_profiler");
        $__internal_18b577b9783fbfb963cffd46b1b7662114f4d24670a49db44f5188e7f1773d43->enter($__internal_18b577b9783fbfb963cffd46b1b7662114f4d24670a49db44f5188e7f1773d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18b577b9783fbfb963cffd46b1b7662114f4d24670a49db44f5188e7f1773d43->leave($__internal_18b577b9783fbfb963cffd46b1b7662114f4d24670a49db44f5188e7f1773d43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecd11c7070d0827f345d34278ca1807e30c6a344b8fd26db3ab27860c2545b81 = $this->env->getExtension("native_profiler");
        $__internal_ecd11c7070d0827f345d34278ca1807e30c6a344b8fd26db3ab27860c2545b81->enter($__internal_ecd11c7070d0827f345d34278ca1807e30c6a344b8fd26db3ab27860c2545b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ecd11c7070d0827f345d34278ca1807e30c6a344b8fd26db3ab27860c2545b81->leave($__internal_ecd11c7070d0827f345d34278ca1807e30c6a344b8fd26db3ab27860c2545b81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
