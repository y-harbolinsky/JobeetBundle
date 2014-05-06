<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_c747a30bb72e92f4b69a608396c35b85711001133b35ee05ad9305c0e5ef8c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  41 => 20,  38 => 18,  33 => 16,  23 => 3,  19 => 1,  40 => 13,  24 => 12,  21 => 11,  51 => 21,  37 => 17,  123 => 50,  120 => 49,  113 => 47,  106 => 45,  100 => 43,  98 => 42,  95 => 41,  91 => 40,  88 => 39,  81 => 35,  77 => 33,  75 => 32,  72 => 31,  68 => 30,  63 => 28,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 20,  36 => 18,  34 => 12,  31 => 15,  28 => 14,);
    }
}
