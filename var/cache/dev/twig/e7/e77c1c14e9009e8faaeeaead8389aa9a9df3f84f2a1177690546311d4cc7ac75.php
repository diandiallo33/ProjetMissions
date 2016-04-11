<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d5dfd9658698a4340f4f6b1d38f2674f5ff295049330483374c78aec6721507c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d3cb56524fbd697bb544698907d753d1d3ae9cfb3f56857c7341f68944685e5e = $this->env->getExtension("native_profiler");
        $__internal_d3cb56524fbd697bb544698907d753d1d3ae9cfb3f56857c7341f68944685e5e->enter($__internal_d3cb56524fbd697bb544698907d753d1d3ae9cfb3f56857c7341f68944685e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3cb56524fbd697bb544698907d753d1d3ae9cfb3f56857c7341f68944685e5e->leave($__internal_d3cb56524fbd697bb544698907d753d1d3ae9cfb3f56857c7341f68944685e5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7947f96b56aa74a6f4529443567939b5877c9ebc54c85f39266264fdb92bf4d = $this->env->getExtension("native_profiler");
        $__internal_a7947f96b56aa74a6f4529443567939b5877c9ebc54c85f39266264fdb92bf4d->enter($__internal_a7947f96b56aa74a6f4529443567939b5877c9ebc54c85f39266264fdb92bf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a7947f96b56aa74a6f4529443567939b5877c9ebc54c85f39266264fdb92bf4d->leave($__internal_a7947f96b56aa74a6f4529443567939b5877c9ebc54c85f39266264fdb92bf4d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8101b7d114d95ab1742583e3e2503312540d4ad9896f90d6902c2958ab26367f = $this->env->getExtension("native_profiler");
        $__internal_8101b7d114d95ab1742583e3e2503312540d4ad9896f90d6902c2958ab26367f->enter($__internal_8101b7d114d95ab1742583e3e2503312540d4ad9896f90d6902c2958ab26367f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8101b7d114d95ab1742583e3e2503312540d4ad9896f90d6902c2958ab26367f->leave($__internal_8101b7d114d95ab1742583e3e2503312540d4ad9896f90d6902c2958ab26367f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70e50794c49de9f0433134f30f1a35857ef15da983b7c6d12da6f74c4b767c9d = $this->env->getExtension("native_profiler");
        $__internal_70e50794c49de9f0433134f30f1a35857ef15da983b7c6d12da6f74c4b767c9d->enter($__internal_70e50794c49de9f0433134f30f1a35857ef15da983b7c6d12da6f74c4b767c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70e50794c49de9f0433134f30f1a35857ef15da983b7c6d12da6f74c4b767c9d->leave($__internal_70e50794c49de9f0433134f30f1a35857ef15da983b7c6d12da6f74c4b767c9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
