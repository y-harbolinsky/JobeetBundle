<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_27e54f633ff7663db8ae58601b1d9f4b56cab391455cb92475121ae8577b96bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

    <div class=\"row-fluid\">
        ";
        // line 21
        $context["has_center"] = false;
        // line 22
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 23
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                // line 24
                echo "                ";
                $context["has_center"] = true;
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div class=\"";
        // line 28
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 30
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "left")) {
                // line 31
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>

        ";
        // line 36
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            // line 37
            echo "            <div class=\"span4\">
                ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 39
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                    // line 40
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                    echo "
                    ";
                }
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "
        <div class=\"";
        // line 46
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "right")) {
                // line 49
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>

    ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 115,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  270 => 67,  256 => 61,  250 => 60,  242 => 59,  228 => 52,  181 => 29,  165 => 52,  153 => 49,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  260 => 63,  244 => 65,  225 => 58,  205 => 38,  200 => 55,  197 => 54,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  146 => 47,  20 => 1,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  271 => 76,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 26,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 104,  323 => 92,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 22,  148 => 35,  110 => 41,  129 => 56,  126 => 55,  114 => 50,  96 => 90,  157 => 104,  152 => 38,  145 => 60,  120 => 47,  81 => 15,  34 => 15,  170 => 55,  160 => 59,  113 => 42,  104 => 40,  100 => 41,  84 => 29,  58 => 23,  52 => 112,  124 => 52,  97 => 33,  77 => 34,  70 => 23,  76 => 28,  53 => 22,  186 => 38,  161 => 6,  90 => 18,  37 => 11,  23 => 12,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 67,  239 => 94,  223 => 87,  207 => 80,  198 => 35,  191 => 73,  175 => 43,  155 => 38,  150 => 48,  139 => 59,  134 => 42,  127 => 40,  118 => 46,  83 => 36,  74 => 56,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 84,  177 => 48,  169 => 69,  140 => 97,  132 => 47,  128 => 47,  111 => 43,  107 => 36,  61 => 24,  273 => 96,  269 => 75,  254 => 92,  246 => 51,  243 => 88,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 51,  143 => 98,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 32,  67 => 26,  63 => 29,  59 => 164,  47 => 16,  28 => 14,  94 => 39,  89 => 37,  85 => 86,  79 => 35,  75 => 34,  68 => 31,  56 => 25,  50 => 25,  87 => 87,  72 => 198,  55 => 20,  41 => 13,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 188,  158 => 5,  156 => 66,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 44,  101 => 40,  91 => 31,  69 => 28,  66 => 30,  62 => 25,  49 => 17,  43 => 21,  25 => 13,  21 => 11,  38 => 18,  24 => 13,  35 => 17,  31 => 16,  29 => 15,  26 => 14,  19 => 11,  98 => 39,  93 => 89,  88 => 30,  78 => 31,  46 => 19,  44 => 21,  40 => 19,  32 => 5,  27 => 14,  22 => 12,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 72,  182 => 70,  176 => 13,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 103,  149 => 62,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 39,  112 => 38,  109 => 37,  106 => 44,  103 => 34,  99 => 91,  95 => 20,  92 => 19,  86 => 37,  82 => 36,  80 => 84,  73 => 27,  64 => 25,  60 => 22,  57 => 27,  54 => 26,  51 => 21,  48 => 22,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
