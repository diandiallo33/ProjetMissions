<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_01abc54c45c1f81bb3e93e2df9e0a80f579cb44c1f2660ce3da3c5f1bd43e128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9e4a943d6b3f11f9af1edc305d0b8dbd37cb6f0938518a401b454ab4fc8b52ca = $this->env->getExtension("native_profiler");
        $__internal_9e4a943d6b3f11f9af1edc305d0b8dbd37cb6f0938518a401b454ab4fc8b52ca->enter($__internal_9e4a943d6b3f11f9af1edc305d0b8dbd37cb6f0938518a401b454ab4fc8b52ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4a943d6b3f11f9af1edc305d0b8dbd37cb6f0938518a401b454ab4fc8b52ca->leave($__internal_9e4a943d6b3f11f9af1edc305d0b8dbd37cb6f0938518a401b454ab4fc8b52ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9a55aaae147be02d92ea8ce904f0e2ab92d25a9230a3acd8745900bd745ee8d = $this->env->getExtension("native_profiler");
        $__internal_c9a55aaae147be02d92ea8ce904f0e2ab92d25a9230a3acd8745900bd745ee8d->enter($__internal_c9a55aaae147be02d92ea8ce904f0e2ab92d25a9230a3acd8745900bd745ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9a55aaae147be02d92ea8ce904f0e2ab92d25a9230a3acd8745900bd745ee8d->leave($__internal_c9a55aaae147be02d92ea8ce904f0e2ab92d25a9230a3acd8745900bd745ee8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_145a4d0943ce0579c98f03a5f0eaf901629fbd291185d6229420a158ae24e66d = $this->env->getExtension("native_profiler");
        $__internal_145a4d0943ce0579c98f03a5f0eaf901629fbd291185d6229420a158ae24e66d->enter($__internal_145a4d0943ce0579c98f03a5f0eaf901629fbd291185d6229420a158ae24e66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_145a4d0943ce0579c98f03a5f0eaf901629fbd291185d6229420a158ae24e66d->leave($__internal_145a4d0943ce0579c98f03a5f0eaf901629fbd291185d6229420a158ae24e66d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5d5c11bedb200b602fa3c50c7cdb368353f7a7ed713d7e6c18461c6097ea9d = $this->env->getExtension("native_profiler");
        $__internal_ac5d5c11bedb200b602fa3c50c7cdb368353f7a7ed713d7e6c18461c6097ea9d->enter($__internal_ac5d5c11bedb200b602fa3c50c7cdb368353f7a7ed713d7e6c18461c6097ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac5d5c11bedb200b602fa3c50c7cdb368353f7a7ed713d7e6c18461c6097ea9d->leave($__internal_ac5d5c11bedb200b602fa3c50c7cdb368353f7a7ed713d7e6c18461c6097ea9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
