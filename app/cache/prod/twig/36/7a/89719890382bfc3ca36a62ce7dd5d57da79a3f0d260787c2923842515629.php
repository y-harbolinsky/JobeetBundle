<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_367a89719890382bfc3ca36a62ce7dd5d57da79a3f0d260787c2923842515629 extends Twig_Template
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
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : null) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo " %
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 59,  206 => 58,  195 => 54,  192 => 53,  180 => 49,  174 => 47,  172 => 46,  148 => 35,  110 => 144,  129 => 49,  126 => 48,  114 => 44,  96 => 37,  157 => 58,  152 => 63,  145 => 56,  120 => 46,  81 => 33,  34 => 16,  170 => 57,  160 => 59,  113 => 46,  104 => 42,  100 => 70,  84 => 34,  58 => 22,  52 => 23,  124 => 49,  97 => 69,  77 => 33,  70 => 29,  76 => 29,  53 => 24,  186 => 51,  161 => 6,  90 => 36,  37 => 19,  23 => 11,  280 => 114,  272 => 109,  263 => 106,  255 => 71,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 66,  155 => 38,  150 => 58,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 15,  74 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 112,  365 => 111,  362 => 110,  360 => 122,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 85,  312 => 84,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 108,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 84,  177 => 48,  169 => 11,  140 => 53,  132 => 51,  128 => 152,  111 => 30,  107 => 143,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 66,  243 => 88,  240 => 65,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 60,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 14,  159 => 39,  143 => 26,  135 => 69,  131 => 153,  119 => 148,  108 => 42,  102 => 79,  71 => 31,  67 => 30,  63 => 28,  59 => 27,  47 => 17,  28 => 14,  94 => 16,  89 => 17,  85 => 31,  79 => 30,  75 => 31,  68 => 19,  56 => 26,  50 => 23,  87 => 32,  72 => 30,  55 => 24,  41 => 8,  201 => 56,  196 => 90,  183 => 50,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 36,  142 => 59,  138 => 54,  136 => 155,  123 => 47,  121 => 39,  117 => 45,  115 => 43,  105 => 80,  101 => 39,  91 => 39,  69 => 26,  66 => 28,  62 => 28,  49 => 6,  43 => 8,  25 => 3,  21 => 11,  38 => 7,  24 => 14,  35 => 6,  31 => 15,  29 => 15,  26 => 14,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 32,  46 => 9,  44 => 21,  40 => 20,  32 => 16,  27 => 12,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 154,  130 => 41,  125 => 61,  122 => 149,  116 => 147,  112 => 145,  109 => 45,  106 => 33,  103 => 32,  99 => 23,  95 => 35,  92 => 34,  86 => 22,  82 => 31,  80 => 14,  73 => 18,  64 => 24,  60 => 16,  57 => 26,  54 => 12,  51 => 14,  48 => 22,  45 => 21,  42 => 15,  39 => 14,  36 => 17,  33 => 13,  30 => 3,);
    }
}
