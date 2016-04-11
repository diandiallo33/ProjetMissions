<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c08e9c930f145fb1ab4fc9c154d4adbdb9ab5d2bfc4d5c76273ee73af2e38191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_722a48fab1d6194ee8ad42c964e3c54be4ab0e7645dd84d1feece34787716ec9 = $this->env->getExtension("native_profiler");
        $__internal_722a48fab1d6194ee8ad42c964e3c54be4ab0e7645dd84d1feece34787716ec9->enter($__internal_722a48fab1d6194ee8ad42c964e3c54be4ab0e7645dd84d1feece34787716ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_722a48fab1d6194ee8ad42c964e3c54be4ab0e7645dd84d1feece34787716ec9->leave($__internal_722a48fab1d6194ee8ad42c964e3c54be4ab0e7645dd84d1feece34787716ec9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c093e7b36bcf1b1fa5d3dc12736d6608995ced149e39b07982b5a302cbceb6e = $this->env->getExtension("native_profiler");
        $__internal_2c093e7b36bcf1b1fa5d3dc12736d6608995ced149e39b07982b5a302cbceb6e->enter($__internal_2c093e7b36bcf1b1fa5d3dc12736d6608995ced149e39b07982b5a302cbceb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c093e7b36bcf1b1fa5d3dc12736d6608995ced149e39b07982b5a302cbceb6e->leave($__internal_2c093e7b36bcf1b1fa5d3dc12736d6608995ced149e39b07982b5a302cbceb6e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a038e3edd88b57ac1b8a4f67f739f8e67c46265d92fe73bc1cea8e4b737a75f = $this->env->getExtension("native_profiler");
        $__internal_2a038e3edd88b57ac1b8a4f67f739f8e67c46265d92fe73bc1cea8e4b737a75f->enter($__internal_2a038e3edd88b57ac1b8a4f67f739f8e67c46265d92fe73bc1cea8e4b737a75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2a038e3edd88b57ac1b8a4f67f739f8e67c46265d92fe73bc1cea8e4b737a75f->leave($__internal_2a038e3edd88b57ac1b8a4f67f739f8e67c46265d92fe73bc1cea8e4b737a75f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
