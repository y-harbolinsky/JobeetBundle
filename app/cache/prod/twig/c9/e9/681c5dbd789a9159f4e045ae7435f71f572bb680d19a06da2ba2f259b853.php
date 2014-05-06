<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_c9e9681c5dbd789a9159f4e045ae7435f71f572bb680d19a06da2ba2f259b853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
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

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "
    <table class=\"table table-condensed sonata-ba-list\">

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 20
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : null))) {
                    // line 21
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                    // line 22
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            if ((isset($context["display"]) ? $context["display"] : null)) {
                // line 25
                echo "                <tr>
                    <td colspan=\"3\" style=\"background: none repeat scroll 0 0 #F7F7F7;\"><strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                echo "</strong></td>
                </tr>

                ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                    ";
                    if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">
                                ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                        // line 37
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                        ";
                            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "subClasses"))) {
                                // line 39
                                echo "                                            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                            </a>
                                        ";
                            } else {
                                // line 44
                                echo "                                            <a class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                    <li>
                                                        <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : null))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : null), "html", null, true);
                                    echo "</a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                            </ul>
                                        ";
                            }
                            // line 57
                            echo "                                    ";
                        }
                        // line 58
                        echo "                                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                        <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                    ";
                        }
                        // line 64
                        echo "                                </div>
                            </td>
                        </tr>
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 158,  507 => 157,  504 => 156,  483 => 129,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  448 => 140,  443 => 138,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 113,  358 => 106,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 77,  266 => 74,  260 => 70,  244 => 65,  225 => 58,  205 => 56,  200 => 55,  197 => 54,  194 => 53,  188 => 49,  184 => 47,  178 => 45,  146 => 34,  20 => 11,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 104,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 26,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 146,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 96,  327 => 118,  323 => 92,  320 => 115,  317 => 86,  307 => 82,  304 => 86,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 46,  148 => 35,  110 => 46,  129 => 56,  126 => 55,  114 => 50,  96 => 40,  157 => 64,  152 => 38,  145 => 59,  120 => 49,  81 => 15,  34 => 18,  170 => 57,  160 => 59,  113 => 48,  104 => 23,  100 => 41,  84 => 16,  58 => 22,  52 => 112,  124 => 52,  97 => 41,  77 => 34,  70 => 23,  76 => 13,  53 => 24,  186 => 38,  161 => 6,  90 => 18,  37 => 53,  23 => 12,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 67,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 43,  155 => 38,  150 => 27,  139 => 57,  134 => 42,  127 => 40,  118 => 28,  83 => 36,  74 => 33,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 136,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 114,  368 => 112,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 89,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 84,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 47,  111 => 41,  107 => 24,  61 => 27,  273 => 96,  269 => 75,  254 => 92,  246 => 51,  243 => 88,  240 => 64,  238 => 85,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 55,  131 => 48,  119 => 44,  108 => 45,  102 => 42,  71 => 29,  67 => 184,  63 => 29,  59 => 164,  47 => 21,  28 => 14,  94 => 39,  89 => 37,  85 => 36,  79 => 14,  75 => 30,  68 => 30,  56 => 25,  50 => 22,  87 => 17,  72 => 198,  55 => 21,  41 => 20,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 68,  158 => 5,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 155,  123 => 30,  121 => 51,  117 => 50,  115 => 27,  105 => 44,  101 => 22,  91 => 38,  69 => 197,  66 => 30,  62 => 25,  49 => 111,  43 => 21,  25 => 13,  21 => 11,  38 => 19,  24 => 13,  35 => 17,  31 => 16,  29 => 15,  26 => 14,  19 => 2,  98 => 21,  93 => 39,  88 => 38,  78 => 31,  46 => 22,  44 => 73,  40 => 19,  32 => 13,  27 => 14,  22 => 7,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 49,  130 => 41,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 108,  106 => 44,  103 => 38,  99 => 42,  95 => 20,  92 => 19,  86 => 37,  82 => 33,  80 => 35,  73 => 32,  64 => 183,  60 => 24,  57 => 23,  54 => 153,  51 => 24,  48 => 22,  45 => 21,  42 => 61,  39 => 60,  36 => 17,  33 => 16,  30 => 15,);
    }
}
