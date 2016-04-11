<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_61ca626095fe7c06a8f8177d816f41de408d07e3d87fc6469bd01c0c19b3f3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8e2f3d2203161cf2348b287f7276acd10035119b3aa25626f9660d8b70ff5a3 = $this->env->getExtension("native_profiler");
        $__internal_e8e2f3d2203161cf2348b287f7276acd10035119b3aa25626f9660d8b70ff5a3->enter($__internal_e8e2f3d2203161cf2348b287f7276acd10035119b3aa25626f9660d8b70ff5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e8e2f3d2203161cf2348b287f7276acd10035119b3aa25626f9660d8b70ff5a3->leave($__internal_e8e2f3d2203161cf2348b287f7276acd10035119b3aa25626f9660d8b70ff5a3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_061db1759014fb81684d9d3fdab91cf29b14642c66a52e006c171c59af4d6371 = $this->env->getExtension("native_profiler");
        $__internal_061db1759014fb81684d9d3fdab91cf29b14642c66a52e006c171c59af4d6371->enter($__internal_061db1759014fb81684d9d3fdab91cf29b14642c66a52e006c171c59af4d6371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_061db1759014fb81684d9d3fdab91cf29b14642c66a52e006c171c59af4d6371->leave($__internal_061db1759014fb81684d9d3fdab91cf29b14642c66a52e006c171c59af4d6371_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_99d137b4ac792188a4dc6bdfd81e32f5b6d72fa2fe9b03add0c42a27db5951f3 = $this->env->getExtension("native_profiler");
        $__internal_99d137b4ac792188a4dc6bdfd81e32f5b6d72fa2fe9b03add0c42a27db5951f3->enter($__internal_99d137b4ac792188a4dc6bdfd81e32f5b6d72fa2fe9b03add0c42a27db5951f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_99d137b4ac792188a4dc6bdfd81e32f5b6d72fa2fe9b03add0c42a27db5951f3->leave($__internal_99d137b4ac792188a4dc6bdfd81e32f5b6d72fa2fe9b03add0c42a27db5951f3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_af9ddd3de0a2463b4ba0265482c94a98532d159e6a8a9ac016a67b14870c1b72 = $this->env->getExtension("native_profiler");
        $__internal_af9ddd3de0a2463b4ba0265482c94a98532d159e6a8a9ac016a67b14870c1b72->enter($__internal_af9ddd3de0a2463b4ba0265482c94a98532d159e6a8a9ac016a67b14870c1b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_af9ddd3de0a2463b4ba0265482c94a98532d159e6a8a9ac016a67b14870c1b72->leave($__internal_af9ddd3de0a2463b4ba0265482c94a98532d159e6a8a9ac016a67b14870c1b72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
