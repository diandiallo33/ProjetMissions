<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4b4743f312a08f5e4e69dfda84ee98a06eed9cc1869c80717ef7056eceef0c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principale.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_a05731ee6b19c475ce479c24576ec650862563b437aa80cf927ba3b154726b58 = $this->env->getExtension("native_profiler");
        $__internal_a05731ee6b19c475ce479c24576ec650862563b437aa80cf927ba3b154726b58->enter($__internal_a05731ee6b19c475ce479c24576ec650862563b437aa80cf927ba3b154726b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05731ee6b19c475ce479c24576ec650862563b437aa80cf927ba3b154726b58->leave($__internal_a05731ee6b19c475ce479c24576ec650862563b437aa80cf927ba3b154726b58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_527226270953e60173bb41f78dc4fa2c2f7e7e60b928252faed67b0dc9040b3c = $this->env->getExtension("native_profiler");
        $__internal_527226270953e60173bb41f78dc4fa2c2f7e7e60b928252faed67b0dc9040b3c->enter($__internal_527226270953e60173bb41f78dc4fa2c2f7e7e60b928252faed67b0dc9040b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_527226270953e60173bb41f78dc4fa2c2f7e7e60b928252faed67b0dc9040b3c->leave($__internal_527226270953e60173bb41f78dc4fa2c2f7e7e60b928252faed67b0dc9040b3c_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c07a4242b762972746e15745097248a597168052a15a2029c2011079100038b = $this->env->getExtension("native_profiler");
        $__internal_4c07a4242b762972746e15745097248a597168052a15a2029c2011079100038b->enter($__internal_4c07a4242b762972746e15745097248a597168052a15a2029c2011079100038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_4c07a4242b762972746e15745097248a597168052a15a2029c2011079100038b->leave($__internal_4c07a4242b762972746e15745097248a597168052a15a2029c2011079100038b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
