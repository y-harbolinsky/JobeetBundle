<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_014632e5efe61b61b6f3199c604df9d4f9b8087ae51be008f5fc66dcea1f85c6 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  22 => 12,  43 => 21,  41 => 20,  38 => 18,  33 => 16,  23 => 3,  19 => 11,  40 => 13,  24 => 13,  21 => 11,  51 => 21,  37 => 17,  123 => 50,  120 => 49,  113 => 47,  106 => 45,  100 => 43,  98 => 42,  95 => 41,  91 => 40,  88 => 39,  81 => 35,  77 => 33,  75 => 32,  72 => 31,  68 => 30,  63 => 28,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 20,  36 => 18,  34 => 12,  31 => 15,  28 => 14,);
    }
}
