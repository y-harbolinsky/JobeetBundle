<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_62c3941812d1eda5ecd4bf5f4ac9c30f3b3b710c75017a4adca94b01b9ee6499 extends Twig_Template
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
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : null)), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 158,  507 => 157,  504 => 156,  483 => 129,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  448 => 140,  443 => 138,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 113,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 77,  266 => 74,  260 => 70,  244 => 65,  225 => 58,  205 => 56,  200 => 55,  197 => 54,  194 => 53,  188 => 49,  184 => 47,  178 => 45,  146 => 34,  20 => 11,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 104,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 26,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 146,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 118,  323 => 92,  320 => 115,  317 => 86,  307 => 82,  304 => 86,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 46,  148 => 35,  110 => 41,  129 => 56,  126 => 45,  114 => 50,  96 => 40,  157 => 64,  152 => 38,  145 => 59,  120 => 49,  81 => 15,  34 => 18,  170 => 57,  160 => 59,  113 => 42,  104 => 40,  100 => 41,  84 => 16,  58 => 22,  52 => 112,  124 => 52,  97 => 41,  77 => 34,  70 => 23,  76 => 13,  53 => 24,  186 => 38,  161 => 6,  90 => 18,  37 => 53,  23 => 12,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 67,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 43,  155 => 38,  150 => 27,  139 => 57,  134 => 42,  127 => 40,  118 => 28,  83 => 36,  74 => 33,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 136,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 114,  368 => 112,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 84,  177 => 48,  169 => 69,  140 => 53,  132 => 47,  128 => 47,  111 => 41,  107 => 24,  61 => 27,  273 => 96,  269 => 75,  254 => 92,  246 => 51,  243 => 88,  240 => 64,  238 => 85,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 48,  131 => 48,  119 => 44,  108 => 45,  102 => 42,  71 => 29,  67 => 31,  63 => 29,  59 => 164,  47 => 21,  28 => 14,  94 => 39,  89 => 37,  85 => 35,  79 => 14,  75 => 33,  68 => 30,  56 => 25,  50 => 23,  87 => 17,  72 => 198,  55 => 25,  41 => 20,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 68,  158 => 5,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 155,  123 => 30,  121 => 51,  117 => 50,  115 => 27,  105 => 44,  101 => 22,  91 => 38,  69 => 32,  66 => 30,  62 => 25,  49 => 111,  43 => 21,  25 => 13,  21 => 11,  38 => 7,  24 => 3,  35 => 17,  31 => 16,  29 => 15,  26 => 14,  19 => 1,  98 => 38,  93 => 39,  88 => 36,  78 => 31,  46 => 22,  44 => 21,  40 => 19,  32 => 5,  27 => 14,  22 => 2,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 41,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 108,  106 => 44,  103 => 38,  99 => 42,  95 => 20,  92 => 19,  86 => 37,  82 => 33,  80 => 35,  73 => 32,  64 => 183,  60 => 24,  57 => 23,  54 => 153,  51 => 24,  48 => 22,  45 => 21,  42 => 61,  39 => 60,  36 => 19,  33 => 16,  30 => 15,);
    }
}
