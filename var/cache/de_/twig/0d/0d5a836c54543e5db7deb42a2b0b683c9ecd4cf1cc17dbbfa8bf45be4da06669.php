<?php

/* base.html.twig */
class __TwigTemplate_f14ac83dee4da43c04ac862b9922c08c88b864b0edcdf9cf40099199630a079b extends Twig_Template
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
        $__internal_964252236cf95b2c56b2890b4184b99a516feeb994d2184aaf587670e524b314 = $this->env->getExtension("native_profiler");
        $__internal_964252236cf95b2c56b2890b4184b99a516feeb994d2184aaf587670e524b314->enter($__internal_964252236cf95b2c56b2890b4184b99a516feeb994d2184aaf587670e524b314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_964252236cf95b2c56b2890b4184b99a516feeb994d2184aaf587670e524b314->leave($__internal_964252236cf95b2c56b2890b4184b99a516feeb994d2184aaf587670e524b314_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20e8cbeea79697eaddb7d40f3c00c0094d082b5999df6b9fdfbdde7ae3d8d863 = $this->env->getExtension("native_profiler");
        $__internal_20e8cbeea79697eaddb7d40f3c00c0094d082b5999df6b9fdfbdde7ae3d8d863->enter($__internal_20e8cbeea79697eaddb7d40f3c00c0094d082b5999df6b9fdfbdde7ae3d8d863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_20e8cbeea79697eaddb7d40f3c00c0094d082b5999df6b9fdfbdde7ae3d8d863->leave($__internal_20e8cbeea79697eaddb7d40f3c00c0094d082b5999df6b9fdfbdde7ae3d8d863_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd1fcbd8be58e731578f8b49a704702aa3b1097f4e4d05bc68a250eb16ad622f = $this->env->getExtension("native_profiler");
        $__internal_bd1fcbd8be58e731578f8b49a704702aa3b1097f4e4d05bc68a250eb16ad622f->enter($__internal_bd1fcbd8be58e731578f8b49a704702aa3b1097f4e4d05bc68a250eb16ad622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd1fcbd8be58e731578f8b49a704702aa3b1097f4e4d05bc68a250eb16ad622f->leave($__internal_bd1fcbd8be58e731578f8b49a704702aa3b1097f4e4d05bc68a250eb16ad622f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eacbe6605a4101811ef6c6c3e8cf22f58a34d5df3a7e3a291a247654d151537 = $this->env->getExtension("native_profiler");
        $__internal_9eacbe6605a4101811ef6c6c3e8cf22f58a34d5df3a7e3a291a247654d151537->enter($__internal_9eacbe6605a4101811ef6c6c3e8cf22f58a34d5df3a7e3a291a247654d151537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9eacbe6605a4101811ef6c6c3e8cf22f58a34d5df3a7e3a291a247654d151537->leave($__internal_9eacbe6605a4101811ef6c6c3e8cf22f58a34d5df3a7e3a291a247654d151537_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f29453120f13914718abeda05c32deabe711ba705f8a22b035dcaf6eba69f30 = $this->env->getExtension("native_profiler");
        $__internal_7f29453120f13914718abeda05c32deabe711ba705f8a22b035dcaf6eba69f30->enter($__internal_7f29453120f13914718abeda05c32deabe711ba705f8a22b035dcaf6eba69f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f29453120f13914718abeda05c32deabe711ba705f8a22b035dcaf6eba69f30->leave($__internal_7f29453120f13914718abeda05c32deabe711ba705f8a22b035dcaf6eba69f30_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
