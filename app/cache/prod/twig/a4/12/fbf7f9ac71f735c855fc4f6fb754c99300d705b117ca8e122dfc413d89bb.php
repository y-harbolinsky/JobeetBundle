<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_a412fbf7f9ac71f735c855fc4f6fb754c99300d705b117ca8e122dfc413d89bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : null)), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null)), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\">

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 29,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 46,  148 => 35,  110 => 45,  129 => 56,  126 => 55,  114 => 50,  96 => 40,  157 => 29,  152 => 63,  145 => 53,  120 => 49,  81 => 36,  34 => 16,  170 => 57,  160 => 59,  113 => 48,  104 => 43,  100 => 43,  84 => 36,  58 => 22,  52 => 24,  124 => 49,  97 => 69,  77 => 30,  70 => 23,  76 => 33,  53 => 24,  186 => 38,  161 => 6,  90 => 38,  37 => 21,  23 => 12,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 33,  155 => 38,  150 => 27,  139 => 51,  134 => 42,  127 => 40,  118 => 49,  83 => 32,  74 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 84,  177 => 48,  169 => 11,  140 => 53,  132 => 44,  128 => 47,  111 => 41,  107 => 46,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 93,  230 => 91,  227 => 46,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 14,  159 => 39,  143 => 26,  135 => 69,  131 => 48,  119 => 44,  108 => 42,  102 => 39,  71 => 32,  67 => 31,  63 => 28,  59 => 29,  47 => 25,  28 => 14,  94 => 40,  89 => 34,  85 => 36,  79 => 34,  75 => 32,  68 => 30,  56 => 25,  50 => 23,  87 => 38,  72 => 31,  55 => 21,  41 => 19,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 36,  142 => 59,  138 => 54,  136 => 155,  123 => 52,  121 => 51,  117 => 49,  115 => 47,  105 => 45,  101 => 42,  91 => 40,  69 => 30,  66 => 17,  62 => 28,  49 => 23,  43 => 26,  25 => 13,  21 => 11,  38 => 18,  24 => 13,  35 => 17,  31 => 15,  29 => 15,  26 => 14,  19 => 11,  98 => 38,  93 => 39,  88 => 37,  78 => 36,  46 => 19,  44 => 21,  40 => 19,  32 => 16,  27 => 14,  22 => 12,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 49,  130 => 41,  125 => 46,  122 => 45,  116 => 43,  112 => 109,  109 => 108,  106 => 45,  103 => 38,  99 => 41,  95 => 37,  92 => 28,  86 => 25,  82 => 35,  80 => 25,  73 => 32,  64 => 24,  60 => 16,  57 => 15,  54 => 22,  51 => 14,  48 => 22,  45 => 21,  42 => 18,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
