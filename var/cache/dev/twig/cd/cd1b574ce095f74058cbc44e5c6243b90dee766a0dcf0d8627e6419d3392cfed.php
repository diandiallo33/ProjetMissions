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
        $__internal_5240e41895cfafdb466de948dfb133d16a8bfb3d7cce69d9137cd0bf49e4dc48 = $this->env->getExtension("native_profiler");
        $__internal_5240e41895cfafdb466de948dfb133d16a8bfb3d7cce69d9137cd0bf49e4dc48->enter($__internal_5240e41895cfafdb466de948dfb133d16a8bfb3d7cce69d9137cd0bf49e4dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5240e41895cfafdb466de948dfb133d16a8bfb3d7cce69d9137cd0bf49e4dc48->leave($__internal_5240e41895cfafdb466de948dfb133d16a8bfb3d7cce69d9137cd0bf49e4dc48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff0ecb2fa4d4e18000bb98c04281a3c8586bd0851d72e472582d932d2d347c89 = $this->env->getExtension("native_profiler");
        $__internal_ff0ecb2fa4d4e18000bb98c04281a3c8586bd0851d72e472582d932d2d347c89->enter($__internal_ff0ecb2fa4d4e18000bb98c04281a3c8586bd0851d72e472582d932d2d347c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff0ecb2fa4d4e18000bb98c04281a3c8586bd0851d72e472582d932d2d347c89->leave($__internal_ff0ecb2fa4d4e18000bb98c04281a3c8586bd0851d72e472582d932d2d347c89_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a9eb13d26b6f6c0556d8f60bc5f3f975b42cc3e3c5e0acf9667f0884106d2b3 = $this->env->getExtension("native_profiler");
        $__internal_2a9eb13d26b6f6c0556d8f60bc5f3f975b42cc3e3c5e0acf9667f0884106d2b3->enter($__internal_2a9eb13d26b6f6c0556d8f60bc5f3f975b42cc3e3c5e0acf9667f0884106d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_2a9eb13d26b6f6c0556d8f60bc5f3f975b42cc3e3c5e0acf9667f0884106d2b3->leave($__internal_2a9eb13d26b6f6c0556d8f60bc5f3f975b42cc3e3c5e0acf9667f0884106d2b3_prof);

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
