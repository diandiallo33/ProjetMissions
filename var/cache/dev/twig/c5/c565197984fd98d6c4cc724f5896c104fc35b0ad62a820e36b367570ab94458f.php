<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_668153851cbadce383b8d26e248a9da8771c472c5956cd2e36aa447e72f161c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_a06a3fee479668b79d33257210deaee4cccf673289de4faf08e3169d27585acf = $this->env->getExtension("native_profiler");
        $__internal_a06a3fee479668b79d33257210deaee4cccf673289de4faf08e3169d27585acf->enter($__internal_a06a3fee479668b79d33257210deaee4cccf673289de4faf08e3169d27585acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06a3fee479668b79d33257210deaee4cccf673289de4faf08e3169d27585acf->leave($__internal_a06a3fee479668b79d33257210deaee4cccf673289de4faf08e3169d27585acf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9b34645a7c3fc5d1e3bb4796f355c786f4d3482e847c121d6cea8fe6588e192 = $this->env->getExtension("native_profiler");
        $__internal_f9b34645a7c3fc5d1e3bb4796f355c786f4d3482e847c121d6cea8fe6588e192->enter($__internal_f9b34645a7c3fc5d1e3bb4796f355c786f4d3482e847c121d6cea8fe6588e192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f9b34645a7c3fc5d1e3bb4796f355c786f4d3482e847c121d6cea8fe6588e192->leave($__internal_f9b34645a7c3fc5d1e3bb4796f355c786f4d3482e847c121d6cea8fe6588e192_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc9c06be0bd0b248eaaad8790da49f8a78dbbdb6f2f3af23abc6338fd4681cb = $this->env->getExtension("native_profiler");
        $__internal_dcc9c06be0bd0b248eaaad8790da49f8a78dbbdb6f2f3af23abc6338fd4681cb->enter($__internal_dcc9c06be0bd0b248eaaad8790da49f8a78dbbdb6f2f3af23abc6338fd4681cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dcc9c06be0bd0b248eaaad8790da49f8a78dbbdb6f2f3af23abc6338fd4681cb->leave($__internal_dcc9c06be0bd0b248eaaad8790da49f8a78dbbdb6f2f3af23abc6338fd4681cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
