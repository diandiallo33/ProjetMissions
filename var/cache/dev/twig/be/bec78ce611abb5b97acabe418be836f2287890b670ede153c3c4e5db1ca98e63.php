<?php

/* @GMProjet/Depense/ajout.html.twig */
class __TwigTemplate_d89f3de3f41b7e9b38da7c0f8d1364aebe4c65ff32777ec8ec6f78cb028247b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@GMProjet/Depense/ajout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a82ff3f056cf0b112bf83d8644b3091aab537f3c68e174211ed15f32bf44f5b = $this->env->getExtension("native_profiler");
        $__internal_1a82ff3f056cf0b112bf83d8644b3091aab537f3c68e174211ed15f32bf44f5b->enter($__internal_1a82ff3f056cf0b112bf83d8644b3091aab537f3c68e174211ed15f32bf44f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GMProjet/Depense/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a82ff3f056cf0b112bf83d8644b3091aab537f3c68e174211ed15f32bf44f5b->leave($__internal_1a82ff3f056cf0b112bf83d8644b3091aab537f3c68e174211ed15f32bf44f5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c3f3108b38098849461bd88d3178271f3638de5a335da3328e5c582c3b1ee91 = $this->env->getExtension("native_profiler");
        $__internal_3c3f3108b38098849461bd88d3178271f3638de5a335da3328e5c582c3b1ee91->enter($__internal_3c3f3108b38098849461bd88d3178271f3638de5a335da3328e5c582c3b1ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Welcome!
";
        
        $__internal_3c3f3108b38098849461bd88d3178271f3638de5a335da3328e5c582c3b1ee91->leave($__internal_3c3f3108b38098849461bd88d3178271f3638de5a335da3328e5c582c3b1ee91_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e145b5517f1b2a1503d4b8e4bc658fdfaa5832ea6621420f06e5443cdfab72 = $this->env->getExtension("native_profiler");
        $__internal_97e145b5517f1b2a1503d4b8e4bc658fdfaa5832ea6621420f06e5443cdfab72->enter($__internal_97e145b5517f1b2a1503d4b8e4bc658fdfaa5832ea6621420f06e5443cdfab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        Formulaire!
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
            <table>
                <tr>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'label');
        echo "</td>
                    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'widget');
        echo "</td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'errors');
        echo "</td>
                </tr>}
                <tr>
                    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "montant", array()), 'label');
        echo "</td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "montant", array()), 'widget');
        echo "</td>
                    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "montant", array()), 'errors');
        echo "</td>
                </tr>}
                <tr>
                    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "piece", array()), 'label');
        echo "</td>
                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "piece", array()), 'widget');
        echo "</td>
                    <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "piece", array()), 'errors');
        echo "</td>
                </tr>}
                <tr>
                    <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'label');
        echo "</td>
                    <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget');
        echo "</td>
                    <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'errors');
        echo "</td>
                </tr>}
                <tr>
                    <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "infoCom", array()), 'label');
        echo "</td>
                    <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "infoCom", array()), 'widget');
        echo "</td>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "infoCom", array()), 'errors');
        echo "</td>
                </tr>}
            </table>
        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
        <br>
        <br>
        <br>
        <br>

    ";
        
        $__internal_97e145b5517f1b2a1503d4b8e4bc658fdfaa5832ea6621420f06e5443cdfab72->leave($__internal_97e145b5517f1b2a1503d4b8e4bc658fdfaa5832ea6621420f06e5443cdfab72_prof);

    }

    public function getTemplateName()
    {
        return "@GMProjet/Depense/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  128 => 33,  124 => 32,  120 => 31,  114 => 28,  110 => 27,  106 => 26,  100 => 23,  96 => 22,  92 => 21,  86 => 18,  82 => 17,  78 => 16,  72 => 13,  68 => 12,  64 => 11,  58 => 8,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "base.html.twig" %}*/
/* {% block title %}*/
/* Welcome!*/
/* {% endblock %}*/
/* {% block body %}*/
/*         Formulaire!*/
/*         {{form_start(f)}}*/
/*             <table>*/
/*                 <tr>*/
/*                     <td>{{form_label(f.designation)}}</td>*/
/*                     <td>{{form_widget(f.designation)}}</td>*/
/*                     <td>{{form_errors(f.designation)}}</td>*/
/*                 </tr>}*/
/*                 <tr>*/
/*                     <td>{{form_label(f.montant)}}</td>*/
/*                     <td>{{form_widget(f.montant)}}</td>*/
/*                     <td>{{form_errors(f.montant)}}</td>*/
/*                 </tr>}*/
/*                 <tr>*/
/*                     <td>{{form_label(f.piece)}}</td>*/
/*                     <td>{{form_widget(f.piece)}}</td>*/
/*                     <td>{{form_errors(f.piece)}}</td>*/
/*                 </tr>}*/
/*                 <tr>*/
/*                     <td>{{form_label(f.date)}}</td>*/
/*                     <td>{{form_widget(f.date)}}</td>*/
/*                     <td>{{form_errors(f.date)}}</td>*/
/*                 </tr>}*/
/*                 <tr>*/
/*                     <td>{{form_label(f.infoCom)}}</td>*/
/*                     <td>{{form_widget(f.infoCom)}}</td>*/
/*                     <td>{{form_errors(f.infoCom)}}</td>*/
/*                 </tr>}*/
/*             </table>*/
/*         {{form_end(f)}}*/
/*         <br>*/
/*         <br>*/
/*         <br>*/
/*         <br>*/
/* */
/*     {% endblock %}*/
/*     */
