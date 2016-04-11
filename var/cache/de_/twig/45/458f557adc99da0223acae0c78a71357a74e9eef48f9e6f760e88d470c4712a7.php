<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0c6b04f605633779a19cab74c55002d99f0ba8d619e58c22e492775c67ed7932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_946dcde3fda5460bd7ff784a9b316fdc325d8a4647f4d0bf20cede13172bbe4f = $this->env->getExtension("native_profiler");
        $__internal_946dcde3fda5460bd7ff784a9b316fdc325d8a4647f4d0bf20cede13172bbe4f->enter($__internal_946dcde3fda5460bd7ff784a9b316fdc325d8a4647f4d0bf20cede13172bbe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946dcde3fda5460bd7ff784a9b316fdc325d8a4647f4d0bf20cede13172bbe4f->leave($__internal_946dcde3fda5460bd7ff784a9b316fdc325d8a4647f4d0bf20cede13172bbe4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6d65b628c807ee4f4409bbe98d95ab2a4f79adbe651e0442f47edd578b32182 = $this->env->getExtension("native_profiler");
        $__internal_f6d65b628c807ee4f4409bbe98d95ab2a4f79adbe651e0442f47edd578b32182->enter($__internal_f6d65b628c807ee4f4409bbe98d95ab2a4f79adbe651e0442f47edd578b32182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6d65b628c807ee4f4409bbe98d95ab2a4f79adbe651e0442f47edd578b32182->leave($__internal_f6d65b628c807ee4f4409bbe98d95ab2a4f79adbe651e0442f47edd578b32182_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6e5b906ee49a2d885095fcc927ccff2839ab0462f44937001d1a085ef529d23 = $this->env->getExtension("native_profiler");
        $__internal_d6e5b906ee49a2d885095fcc927ccff2839ab0462f44937001d1a085ef529d23->enter($__internal_d6e5b906ee49a2d885095fcc927ccff2839ab0462f44937001d1a085ef529d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6e5b906ee49a2d885095fcc927ccff2839ab0462f44937001d1a085ef529d23->leave($__internal_d6e5b906ee49a2d885095fcc927ccff2839ab0462f44937001d1a085ef529d23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2de950336cd1c5dd438904942eb19c4edc283f8c7d3ce5115160d9034558e1 = $this->env->getExtension("native_profiler");
        $__internal_7e2de950336cd1c5dd438904942eb19c4edc283f8c7d3ce5115160d9034558e1->enter($__internal_7e2de950336cd1c5dd438904942eb19c4edc283f8c7d3ce5115160d9034558e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7e2de950336cd1c5dd438904942eb19c4edc283f8c7d3ce5115160d9034558e1->leave($__internal_7e2de950336cd1c5dd438904942eb19c4edc283f8c7d3ce5115160d9034558e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
