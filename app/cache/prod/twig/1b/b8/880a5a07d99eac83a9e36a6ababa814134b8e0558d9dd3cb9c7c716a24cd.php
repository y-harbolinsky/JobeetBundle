<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_1bb8880a5a07d99eac83a9e36a6ababa814134b8e0558d9dd3cb9c7c716a24cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 134,  338 => 130,  319 => 124,  277 => 109,  265 => 106,  262 => 105,  257 => 103,  248 => 100,  213 => 82,  211 => 81,  202 => 77,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  289 => 112,  270 => 67,  256 => 61,  250 => 60,  242 => 59,  228 => 88,  181 => 29,  165 => 64,  153 => 49,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  260 => 104,  244 => 65,  225 => 87,  205 => 38,  200 => 55,  197 => 74,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  146 => 47,  20 => 11,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  271 => 108,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 26,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  329 => 96,  327 => 126,  323 => 125,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  301 => 117,  296 => 77,  281 => 110,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 67,  172 => 22,  148 => 60,  110 => 41,  129 => 59,  126 => 55,  114 => 50,  96 => 90,  157 => 104,  152 => 38,  145 => 60,  120 => 47,  81 => 26,  34 => 15,  170 => 55,  160 => 59,  113 => 44,  104 => 40,  100 => 41,  84 => 40,  58 => 19,  52 => 23,  124 => 52,  97 => 47,  77 => 36,  70 => 23,  76 => 28,  53 => 23,  186 => 38,  161 => 6,  90 => 27,  37 => 18,  23 => 13,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 101,  239 => 97,  223 => 87,  207 => 80,  198 => 35,  191 => 73,  175 => 43,  155 => 38,  150 => 48,  139 => 59,  134 => 56,  127 => 54,  118 => 46,  83 => 36,  74 => 34,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 141,  362 => 178,  360 => 126,  355 => 124,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 107,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 84,  177 => 48,  169 => 66,  140 => 97,  132 => 47,  128 => 47,  111 => 40,  107 => 52,  61 => 24,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 77,  219 => 84,  217 => 75,  208 => 68,  204 => 78,  179 => 72,  159 => 51,  143 => 59,  135 => 45,  131 => 55,  119 => 40,  108 => 42,  102 => 42,  71 => 29,  67 => 19,  63 => 22,  59 => 164,  47 => 16,  28 => 14,  94 => 35,  89 => 43,  85 => 32,  79 => 37,  75 => 34,  68 => 31,  56 => 25,  50 => 22,  87 => 87,  72 => 33,  55 => 24,  41 => 13,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 188,  158 => 62,  156 => 66,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  123 => 48,  121 => 51,  117 => 57,  115 => 45,  105 => 51,  101 => 49,  91 => 44,  69 => 31,  66 => 29,  62 => 27,  49 => 9,  43 => 21,  25 => 12,  21 => 11,  38 => 6,  24 => 13,  35 => 22,  31 => 14,  29 => 15,  26 => 14,  19 => 11,  98 => 37,  93 => 45,  88 => 33,  78 => 31,  46 => 19,  44 => 18,  40 => 19,  32 => 16,  27 => 13,  22 => 12,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 71,  187 => 72,  182 => 69,  176 => 13,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 103,  149 => 62,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 45,  112 => 38,  109 => 53,  106 => 44,  103 => 50,  99 => 30,  95 => 20,  92 => 19,  86 => 41,  82 => 39,  80 => 84,  73 => 24,  64 => 28,  60 => 26,  57 => 25,  54 => 26,  51 => 21,  48 => 22,  45 => 20,  42 => 7,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
