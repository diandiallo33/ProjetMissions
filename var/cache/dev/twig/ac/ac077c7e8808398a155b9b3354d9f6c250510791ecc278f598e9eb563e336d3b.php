<?php

/* principale.html.twig */
class __TwigTemplate_37e4a4d5db5e49e72c0369a16a988ff756cb39fea75e183a3bbdb391479e5d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d68c92a0dc8282424493dc28fed2ab93c1595af2761f85a47ea43709fac6b310 = $this->env->getExtension("native_profiler");
        $__internal_d68c92a0dc8282424493dc28fed2ab93c1595af2761f85a47ea43709fac6b310->enter($__internal_d68c92a0dc8282424493dc28fed2ab93c1595af2761f85a47ea43709fac6b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principale.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_d68c92a0dc8282424493dc28fed2ab93c1595af2761f85a47ea43709fac6b310->leave($__internal_d68c92a0dc8282424493dc28fed2ab93c1595af2761f85a47ea43709fac6b310_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8cce479e62cae54e857bd4a5214fb9af03077605dde4b8896a13c797ef27441 = $this->env->getExtension("native_profiler");
        $__internal_d8cce479e62cae54e857bd4a5214fb9af03077605dde4b8896a13c797ef27441->enter($__internal_d8cce479e62cae54e857bd4a5214fb9af03077605dde4b8896a13c797ef27441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d8cce479e62cae54e857bd4a5214fb9af03077605dde4b8896a13c797ef27441->leave($__internal_d8cce479e62cae54e857bd4a5214fb9af03077605dde4b8896a13c797ef27441_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca095854c04102e33cda627513620e0c704ef0e905e35b5711786247988f83dc = $this->env->getExtension("native_profiler");
        $__internal_ca095854c04102e33cda627513620e0c704ef0e905e35b5711786247988f83dc->enter($__internal_ca095854c04102e33cda627513620e0c704ef0e905e35b5711786247988f83dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ca095854c04102e33cda627513620e0c704ef0e905e35b5711786247988f83dc->leave($__internal_ca095854c04102e33cda627513620e0c704ef0e905e35b5711786247988f83dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b29b43ea659ad0be6ff9e7b59c6dd45ec11b401a18e4354e2bf051c7fa569f3 = $this->env->getExtension("native_profiler");
        $__internal_6b29b43ea659ad0be6ff9e7b59c6dd45ec11b401a18e4354e2bf051c7fa569f3->enter($__internal_6b29b43ea659ad0be6ff9e7b59c6dd45ec11b401a18e4354e2bf051c7fa569f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b29b43ea659ad0be6ff9e7b59c6dd45ec11b401a18e4354e2bf051c7fa569f3->leave($__internal_6b29b43ea659ad0be6ff9e7b59c6dd45ec11b401a18e4354e2bf051c7fa569f3_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0540bc915445bbf4ebd5f25e67d6229892c110b525cd4aec978c43cd2ec41b76 = $this->env->getExtension("native_profiler");
        $__internal_0540bc915445bbf4ebd5f25e67d6229892c110b525cd4aec978c43cd2ec41b76->enter($__internal_0540bc915445bbf4ebd5f25e67d6229892c110b525cd4aec978c43cd2ec41b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0540bc915445bbf4ebd5f25e67d6229892c110b525cd4aec978c43cd2ec41b76->leave($__internal_0540bc915445bbf4ebd5f25e67d6229892c110b525cd4aec978c43cd2ec41b76_prof);

    }

    public function getTemplateName()
    {
        return "principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  84 => 11,  74 => 7,  68 => 6,  56 => 5,  47 => 13,  44 => 12,  42 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
