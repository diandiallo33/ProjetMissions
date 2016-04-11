<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f30cb107ab364f5ef49769ca3263fa122ba0179852d7efdfc568f0c2bbbcccd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principale.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principale.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0edbfb4c418cdac36da75e778179a3ae748121cbd7479ff854aca8f1e8a63caa = $this->env->getExtension("native_profiler");
        $__internal_0edbfb4c418cdac36da75e778179a3ae748121cbd7479ff854aca8f1e8a63caa->enter($__internal_0edbfb4c418cdac36da75e778179a3ae748121cbd7479ff854aca8f1e8a63caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0edbfb4c418cdac36da75e778179a3ae748121cbd7479ff854aca8f1e8a63caa->leave($__internal_0edbfb4c418cdac36da75e778179a3ae748121cbd7479ff854aca8f1e8a63caa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7482e45c2cf564a4297309e3045ff19f3127e3faf5b9d2c85c011930b4908ce6 = $this->env->getExtension("native_profiler");
        $__internal_7482e45c2cf564a4297309e3045ff19f3127e3faf5b9d2c85c011930b4908ce6->enter($__internal_7482e45c2cf564a4297309e3045ff19f3127e3faf5b9d2c85c011930b4908ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "   <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
        ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
   </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

 ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_7482e45c2cf564a4297309e3045ff19f3127e3faf5b9d2c85c011930b4908ce6->leave($__internal_7482e45c2cf564a4297309e3045ff19f3127e3faf5b9d2c85c011930b4908ce6_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_371f1dda078013a5a0292c4693131c4997121bdec5b52ce8fbaf68ca01a3aae7 = $this->env->getExtension("native_profiler");
        $__internal_371f1dda078013a5a0292c4693131c4997121bdec5b52ce8fbaf68ca01a3aae7->enter($__internal_371f1dda078013a5a0292c4693131c4997121bdec5b52ce8fbaf68ca01a3aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_371f1dda078013a5a0292c4693131c4997121bdec5b52ce8fbaf68ca01a3aae7->leave($__internal_371f1dda078013a5a0292c4693131c4997121bdec5b52ce8fbaf68ca01a3aae7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 13,  74 => 15,  72 => 13,  68 => 11,  55 => 7,  50 => 6,  45 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::principale.html.twig" %}*/
/*             */
/* {%block body %}*/
/* {% for type, messages in app.session.flashbag.all() %}*/
/*    {% for message in messages %}*/
/*    <div class="flash-{{ type }}">*/
/*         {{ message }}*/
/*    </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* */
/*  {% block fos_user_content %}*/
/*  {% endblock fos_user_content %}*/
/* */
/* {% endblock body %}*/
/*    */
