<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_3a35995a5bfd3094ba8d4ad679caddec9b4695e75daf732d0d839e1e94b9ce54 extends Twig_Template
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
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  41 => 20,  38 => 18,  33 => 16,  23 => 3,  19 => 1,  40 => 13,  24 => 12,  21 => 11,  51 => 21,  37 => 17,  123 => 50,  120 => 49,  113 => 47,  106 => 45,  100 => 43,  98 => 42,  95 => 41,  91 => 40,  88 => 39,  81 => 35,  77 => 33,  75 => 32,  72 => 31,  68 => 30,  63 => 28,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 18,  36 => 17,  34 => 12,  31 => 15,  28 => 14,);
    }
}
