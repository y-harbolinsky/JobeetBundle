<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_faf21b0c9b27c412cb241a2d592f1e65fc529572b7865caf71b6985818e5717b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : null)));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 1,  212 => 74,  210 => 73,  185 => 59,  167 => 48,  137 => 37,  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 106,  262 => 105,  257 => 103,  248 => 100,  213 => 82,  211 => 81,  202 => 68,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  289 => 112,  270 => 4,  256 => 61,  250 => 60,  242 => 59,  228 => 88,  181 => 29,  165 => 47,  153 => 49,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  260 => 104,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 74,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  146 => 47,  20 => 11,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  271 => 108,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 83,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  301 => 117,  296 => 77,  281 => 110,  275 => 73,  237 => 64,  233 => 81,  218 => 43,  206 => 71,  195 => 54,  192 => 64,  180 => 56,  174 => 67,  172 => 51,  148 => 60,  110 => 41,  129 => 59,  126 => 55,  114 => 50,  96 => 90,  157 => 104,  152 => 38,  145 => 60,  120 => 36,  81 => 15,  34 => 15,  170 => 55,  160 => 44,  113 => 31,  104 => 40,  100 => 23,  84 => 16,  58 => 19,  52 => 20,  124 => 52,  97 => 47,  77 => 27,  70 => 23,  76 => 28,  53 => 23,  186 => 38,  161 => 6,  90 => 20,  37 => 19,  23 => 13,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 101,  239 => 97,  223 => 87,  207 => 80,  198 => 66,  191 => 73,  175 => 53,  155 => 38,  150 => 48,  139 => 59,  134 => 56,  127 => 54,  118 => 46,  83 => 36,  74 => 24,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 3,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 84,  177 => 54,  169 => 49,  140 => 97,  132 => 47,  128 => 47,  111 => 30,  107 => 52,  61 => 24,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 83,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 51,  143 => 59,  135 => 45,  131 => 55,  119 => 40,  108 => 28,  102 => 42,  71 => 29,  67 => 25,  63 => 22,  59 => 164,  47 => 43,  28 => 14,  94 => 35,  89 => 43,  85 => 32,  79 => 37,  75 => 34,  68 => 31,  56 => 23,  50 => 44,  87 => 87,  72 => 10,  55 => 79,  41 => 18,  201 => 56,  196 => 65,  183 => 37,  171 => 65,  166 => 63,  163 => 45,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  123 => 48,  121 => 51,  117 => 34,  115 => 33,  105 => 51,  101 => 25,  91 => 28,  69 => 9,  66 => 29,  62 => 82,  49 => 9,  43 => 21,  25 => 12,  21 => 11,  38 => 6,  24 => 13,  35 => 15,  31 => 14,  29 => 15,  26 => 13,  19 => 11,  98 => 24,  93 => 21,  88 => 33,  78 => 31,  46 => 19,  44 => 19,  40 => 20,  32 => 14,  27 => 8,  22 => 12,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 61,  187 => 60,  182 => 57,  176 => 13,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 62,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 45,  112 => 38,  109 => 53,  106 => 44,  103 => 50,  99 => 30,  95 => 22,  92 => 19,  86 => 17,  82 => 39,  80 => 84,  73 => 24,  64 => 28,  60 => 23,  57 => 80,  54 => 26,  51 => 22,  48 => 21,  45 => 28,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 9,);
    }
}