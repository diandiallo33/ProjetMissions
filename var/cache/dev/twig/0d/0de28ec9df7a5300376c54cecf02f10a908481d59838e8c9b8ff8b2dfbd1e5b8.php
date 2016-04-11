<?php

/* @GMProjet/Depense/liste.html.twig */
class __TwigTemplate_d93dba28fb91a04f3ee9b694cd81f2f340db5bd959566fe93c17697ab3ef05a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f9e5a6f17d869569ae9d3b032acaa98bfd0f0ce660fbe14c67f167fe2caa787 = $this->env->getExtension("native_profiler");
        $__internal_5f9e5a6f17d869569ae9d3b032acaa98bfd0f0ce660fbe14c67f167fe2caa787->enter($__internal_5f9e5a6f17d869569ae9d3b032acaa98bfd0f0ce660fbe14c67f167fe2caa787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GMProjet/Depense/liste.html.twig"));

        // line 2
        echo "<p>Voici la liste de tous les frais!</p>
    <section>
        <table border=\"2\" width=\"40%\">
            <tr><th>ID</th><th>Désignation</th><th>Montant</th><th>Pièce</th><th>Date</th><th>info Complémentaire</th><th>Validite</th></tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Frais"]) ? $context["Frais"] : $this->getContext($context, "Frais")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 7
            echo "            <tr>
                <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "designation", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "montant", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "piece", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "infoCom", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </table> 
    </section> 
";
        
        $__internal_5f9e5a6f17d869569ae9d3b032acaa98bfd0f0ce660fbe14c67f167fe2caa787->leave($__internal_5f9e5a6f17d869569ae9d3b032acaa98bfd0f0ce660fbe14c67f167fe2caa787_prof);

    }

    public function getTemplateName()
    {
        return "@GMProjet/Depense/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <p>Voici la liste de tous les frais!</p>*/
/*     <section>*/
/*         <table border="2" width="40%">*/
/*             <tr><th>ID</th><th>Désignation</th><th>Montant</th><th>Pièce</th><th>Date</th><th>info Complémentaire</th><th>Validite</th></tr>*/
/*         {% for f in Frais %}*/
/*             <tr>*/
/*                 <td> {{f.id}}</td>*/
/*                 <td> {{f.designation}}</td>*/
/*                 <td> {{f.montant}}</td>*/
/*                 <td> {{f.piece}}</td>*/
/*                 <td> {{f.date | date('d-m-y')}}</td>*/
/*                 <td> {{f.infoCom}}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
