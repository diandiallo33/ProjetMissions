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
        $__internal_35edf2cd32dc3660305c10cc766f7e2f7ee4f1ec1bc1a47c7d6d21fe140cafe9 = $this->env->getExtension("native_profiler");
        $__internal_35edf2cd32dc3660305c10cc766f7e2f7ee4f1ec1bc1a47c7d6d21fe140cafe9->enter($__internal_35edf2cd32dc3660305c10cc766f7e2f7ee4f1ec1bc1a47c7d6d21fe140cafe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35edf2cd32dc3660305c10cc766f7e2f7ee4f1ec1bc1a47c7d6d21fe140cafe9->leave($__internal_35edf2cd32dc3660305c10cc766f7e2f7ee4f1ec1bc1a47c7d6d21fe140cafe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7424ed12dc3a3d815cba88427a3d935c7e29bfd395a5a2bd034d2a7cf87972d7 = $this->env->getExtension("native_profiler");
        $__internal_7424ed12dc3a3d815cba88427a3d935c7e29bfd395a5a2bd034d2a7cf87972d7->enter($__internal_7424ed12dc3a3d815cba88427a3d935c7e29bfd395a5a2bd034d2a7cf87972d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7424ed12dc3a3d815cba88427a3d935c7e29bfd395a5a2bd034d2a7cf87972d7->leave($__internal_7424ed12dc3a3d815cba88427a3d935c7e29bfd395a5a2bd034d2a7cf87972d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53f736acf1d557320a2c9478e44aaf17f3ab46aa1cc8e6293d12cbfad1fd5fcc = $this->env->getExtension("native_profiler");
        $__internal_53f736acf1d557320a2c9478e44aaf17f3ab46aa1cc8e6293d12cbfad1fd5fcc->enter($__internal_53f736acf1d557320a2c9478e44aaf17f3ab46aa1cc8e6293d12cbfad1fd5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53f736acf1d557320a2c9478e44aaf17f3ab46aa1cc8e6293d12cbfad1fd5fcc->leave($__internal_53f736acf1d557320a2c9478e44aaf17f3ab46aa1cc8e6293d12cbfad1fd5fcc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1bba6c219040a299250ad134bd6474ca00462fcfb2de1cd1e33e39c3efa780b = $this->env->getExtension("native_profiler");
        $__internal_b1bba6c219040a299250ad134bd6474ca00462fcfb2de1cd1e33e39c3efa780b->enter($__internal_b1bba6c219040a299250ad134bd6474ca00462fcfb2de1cd1e33e39c3efa780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1bba6c219040a299250ad134bd6474ca00462fcfb2de1cd1e33e39c3efa780b->leave($__internal_b1bba6c219040a299250ad134bd6474ca00462fcfb2de1cd1e33e39c3efa780b_prof);

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
