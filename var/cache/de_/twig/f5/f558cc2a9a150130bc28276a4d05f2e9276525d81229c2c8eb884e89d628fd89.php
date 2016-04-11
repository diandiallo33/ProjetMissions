<?php

/* ::principale.html.twig */
class __TwigTemplate_4899637bba710ab1027002458fd36a45fc11684118cb145cfe2bd00dd64c0448 extends Twig_Template
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
        $__internal_c2103c90943e8fb0613d025f793567876485d76e1c85142a1b4073e0aa6e6fe5 = $this->env->getExtension("native_profiler");
        $__internal_c2103c90943e8fb0613d025f793567876485d76e1c85142a1b4073e0aa6e6fe5->enter($__internal_c2103c90943e8fb0613d025f793567876485d76e1c85142a1b4073e0aa6e6fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

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
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_c2103c90943e8fb0613d025f793567876485d76e1c85142a1b4073e0aa6e6fe5->leave($__internal_c2103c90943e8fb0613d025f793567876485d76e1c85142a1b4073e0aa6e6fe5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34eac563d3513cb1b4637d3e121b109eefd43b5620f7383c1c7d86b2d6ed236f = $this->env->getExtension("native_profiler");
        $__internal_34eac563d3513cb1b4637d3e121b109eefd43b5620f7383c1c7d86b2d6ed236f->enter($__internal_34eac563d3513cb1b4637d3e121b109eefd43b5620f7383c1c7d86b2d6ed236f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34eac563d3513cb1b4637d3e121b109eefd43b5620f7383c1c7d86b2d6ed236f->leave($__internal_34eac563d3513cb1b4637d3e121b109eefd43b5620f7383c1c7d86b2d6ed236f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2eb5a582418321de411f25f9b852251720f7d3e28e2d3ed93f16d0791941401d = $this->env->getExtension("native_profiler");
        $__internal_2eb5a582418321de411f25f9b852251720f7d3e28e2d3ed93f16d0791941401d->enter($__internal_2eb5a582418321de411f25f9b852251720f7d3e28e2d3ed93f16d0791941401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2eb5a582418321de411f25f9b852251720f7d3e28e2d3ed93f16d0791941401d->leave($__internal_2eb5a582418321de411f25f9b852251720f7d3e28e2d3ed93f16d0791941401d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ccd48901773ca3dc66e8605cbd3847a9cf42fc65d145111c6264e60e6606ea7 = $this->env->getExtension("native_profiler");
        $__internal_8ccd48901773ca3dc66e8605cbd3847a9cf42fc65d145111c6264e60e6606ea7->enter($__internal_8ccd48901773ca3dc66e8605cbd3847a9cf42fc65d145111c6264e60e6606ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ccd48901773ca3dc66e8605cbd3847a9cf42fc65d145111c6264e60e6606ea7->leave($__internal_8ccd48901773ca3dc66e8605cbd3847a9cf42fc65d145111c6264e60e6606ea7_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_570d8f5fcd86dfff15072c5cce0550c655813cb6e32aa30bd55af24c0ba52f28 = $this->env->getExtension("native_profiler");
        $__internal_570d8f5fcd86dfff15072c5cce0550c655813cb6e32aa30bd55af24c0ba52f28->enter($__internal_570d8f5fcd86dfff15072c5cce0550c655813cb6e32aa30bd55af24c0ba52f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "                                                                                                                                                                                                                                                                                                                                                           
        ";
        
        $__internal_570d8f5fcd86dfff15072c5cce0550c655813cb6e32aa30bd55af24c0ba52f28->leave($__internal_570d8f5fcd86dfff15072c5cce0550c655813cb6e32aa30bd55af24c0ba52f28_prof);

    }

    public function getTemplateName()
    {
        return "::principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 13,  95 => 12,  84 => 11,  74 => 7,  68 => 6,  56 => 5,  47 => 15,  44 => 12,  42 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block javascripts %}*/
/*                                                                                                                                                                                                                                                                                                                                                            */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
