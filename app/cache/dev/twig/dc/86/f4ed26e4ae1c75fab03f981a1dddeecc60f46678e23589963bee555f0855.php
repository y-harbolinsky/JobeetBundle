<?php

/* EnsJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_dc86f4ed26e4ae1c75fab03f981a1dddeecc60f46678e23589963bee555f0855 extends Twig_Template
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
        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath")), "html", null, true);
        echo "\"></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:JobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,  40 => 13,  24 => 12,  21 => 11,  51 => 21,  37 => 17,  123 => 50,  120 => 49,  113 => 47,  106 => 45,  100 => 43,  98 => 42,  95 => 41,  91 => 40,  88 => 39,  81 => 35,  77 => 33,  75 => 32,  72 => 31,  68 => 30,  63 => 28,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 18,  36 => 17,  34 => 12,  31 => 15,  28 => 13,);
    }
}
