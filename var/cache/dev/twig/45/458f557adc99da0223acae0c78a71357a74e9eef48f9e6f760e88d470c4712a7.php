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
        $__internal_a54a80863bbeeb4e677d50a9914c3a58e660f42555f61e34ac118234a5144e47 = $this->env->getExtension("native_profiler");
        $__internal_a54a80863bbeeb4e677d50a9914c3a58e660f42555f61e34ac118234a5144e47->enter($__internal_a54a80863bbeeb4e677d50a9914c3a58e660f42555f61e34ac118234a5144e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54a80863bbeeb4e677d50a9914c3a58e660f42555f61e34ac118234a5144e47->leave($__internal_a54a80863bbeeb4e677d50a9914c3a58e660f42555f61e34ac118234a5144e47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07fb1116bffbd02e0c5799f103f9810c211999057991c8e35bb5a5d8dbdfb753 = $this->env->getExtension("native_profiler");
        $__internal_07fb1116bffbd02e0c5799f103f9810c211999057991c8e35bb5a5d8dbdfb753->enter($__internal_07fb1116bffbd02e0c5799f103f9810c211999057991c8e35bb5a5d8dbdfb753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07fb1116bffbd02e0c5799f103f9810c211999057991c8e35bb5a5d8dbdfb753->leave($__internal_07fb1116bffbd02e0c5799f103f9810c211999057991c8e35bb5a5d8dbdfb753_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b6bee7c6d766269bbf1aaaa29877b9a39b56e72c51942bdbd1d288b839bb2a1 = $this->env->getExtension("native_profiler");
        $__internal_0b6bee7c6d766269bbf1aaaa29877b9a39b56e72c51942bdbd1d288b839bb2a1->enter($__internal_0b6bee7c6d766269bbf1aaaa29877b9a39b56e72c51942bdbd1d288b839bb2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b6bee7c6d766269bbf1aaaa29877b9a39b56e72c51942bdbd1d288b839bb2a1->leave($__internal_0b6bee7c6d766269bbf1aaaa29877b9a39b56e72c51942bdbd1d288b839bb2a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebe9251908a6802073eea1ad2892086152cba73ae768356c940a5cc98ce4daba = $this->env->getExtension("native_profiler");
        $__internal_ebe9251908a6802073eea1ad2892086152cba73ae768356c940a5cc98ce4daba->enter($__internal_ebe9251908a6802073eea1ad2892086152cba73ae768356c940a5cc98ce4daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ebe9251908a6802073eea1ad2892086152cba73ae768356c940a5cc98ce4daba->leave($__internal_ebe9251908a6802073eea1ad2892086152cba73ae768356c940a5cc98ce4daba_prof);

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
