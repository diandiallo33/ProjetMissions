<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1fbca523a42d955962462c287a348439c873376612631709ba089ab6bb0fad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1f89d99b8ec139035cf3425f1996910002c9f0a05c087597e19727ef913c7003 = $this->env->getExtension("native_profiler");
        $__internal_1f89d99b8ec139035cf3425f1996910002c9f0a05c087597e19727ef913c7003->enter($__internal_1f89d99b8ec139035cf3425f1996910002c9f0a05c087597e19727ef913c7003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f89d99b8ec139035cf3425f1996910002c9f0a05c087597e19727ef913c7003->leave($__internal_1f89d99b8ec139035cf3425f1996910002c9f0a05c087597e19727ef913c7003_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_599949391e5335449627afd66555a30fa12af4d7bbbfb75411c68e9522388447 = $this->env->getExtension("native_profiler");
        $__internal_599949391e5335449627afd66555a30fa12af4d7bbbfb75411c68e9522388447->enter($__internal_599949391e5335449627afd66555a30fa12af4d7bbbfb75411c68e9522388447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_599949391e5335449627afd66555a30fa12af4d7bbbfb75411c68e9522388447->leave($__internal_599949391e5335449627afd66555a30fa12af4d7bbbfb75411c68e9522388447_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1660ec4e431fcbfc2d1d56d9905d0ce3be1d7c79e81879a28c294018ce86c5a7 = $this->env->getExtension("native_profiler");
        $__internal_1660ec4e431fcbfc2d1d56d9905d0ce3be1d7c79e81879a28c294018ce86c5a7->enter($__internal_1660ec4e431fcbfc2d1d56d9905d0ce3be1d7c79e81879a28c294018ce86c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1660ec4e431fcbfc2d1d56d9905d0ce3be1d7c79e81879a28c294018ce86c5a7->leave($__internal_1660ec4e431fcbfc2d1d56d9905d0ce3be1d7c79e81879a28c294018ce86c5a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df4dfc553594729b1c4c2739429416bd7f36b5a42b9f1ff1a7bd3bc2d4646340 = $this->env->getExtension("native_profiler");
        $__internal_df4dfc553594729b1c4c2739429416bd7f36b5a42b9f1ff1a7bd3bc2d4646340->enter($__internal_df4dfc553594729b1c4c2739429416bd7f36b5a42b9f1ff1a7bd3bc2d4646340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df4dfc553594729b1c4c2739429416bd7f36b5a42b9f1ff1a7bd3bc2d4646340->leave($__internal_df4dfc553594729b1c4c2739429416bd7f36b5a42b9f1ff1a7bd3bc2d4646340_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
