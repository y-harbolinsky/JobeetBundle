<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_acf97f7658899210e649ab1913e85b852b2605536d84fb2739d7d86e00ce671d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 29,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 46,  148 => 35,  110 => 45,  129 => 56,  126 => 55,  114 => 50,  96 => 40,  157 => 29,  152 => 63,  145 => 53,  120 => 49,  81 => 36,  34 => 17,  170 => 57,  160 => 59,  113 => 46,  104 => 43,  100 => 43,  84 => 28,  58 => 22,  52 => 24,  124 => 49,  97 => 69,  77 => 30,  70 => 23,  76 => 33,  53 => 24,  186 => 38,  161 => 6,  90 => 38,  37 => 18,  23 => 12,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 33,  155 => 38,  150 => 27,  139 => 51,  134 => 42,  127 => 40,  118 => 49,  83 => 32,  74 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 84,  177 => 48,  169 => 11,  140 => 53,  132 => 57,  128 => 47,  111 => 30,  107 => 44,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 93,  230 => 91,  227 => 46,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 14,  159 => 39,  143 => 26,  135 => 69,  131 => 48,  119 => 44,  108 => 42,  102 => 79,  71 => 31,  67 => 22,  63 => 16,  59 => 27,  47 => 22,  28 => 14,  94 => 16,  89 => 34,  85 => 36,  79 => 34,  75 => 32,  68 => 30,  56 => 25,  50 => 21,  87 => 38,  72 => 19,  55 => 21,  41 => 19,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 36,  142 => 59,  138 => 54,  136 => 155,  123 => 50,  121 => 51,  117 => 45,  115 => 47,  105 => 106,  101 => 42,  91 => 40,  69 => 33,  66 => 17,  62 => 28,  49 => 23,  43 => 20,  25 => 13,  21 => 11,  38 => 14,  24 => 13,  35 => 6,  31 => 15,  29 => 15,  26 => 14,  19 => 11,  98 => 36,  93 => 39,  88 => 37,  78 => 21,  46 => 19,  44 => 19,  40 => 19,  32 => 15,  27 => 12,  22 => 12,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 49,  130 => 41,  125 => 46,  122 => 45,  116 => 43,  112 => 109,  109 => 108,  106 => 45,  103 => 38,  99 => 41,  95 => 41,  92 => 28,  86 => 25,  82 => 35,  80 => 31,  73 => 32,  64 => 24,  60 => 19,  57 => 14,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 2,);
    }
}
