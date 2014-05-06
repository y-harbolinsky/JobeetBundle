<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_eaa65909511f0664c6e96cd311dad6035b449a070835b0a8c160d89e6e67954d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 31
            echo "            <table class=\"table table-bordered\">
                ";
            // line 32
            if ((isset($context["name"]) ? $context["name"] : null)) {
                // line 33
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 39
            echo "
                ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 41
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 42
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 43
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), (isset($context["object"]) ? $context["object"] : null));
                    echo "
                        ";
                }
                // line 45
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 50
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  315 => 79,  302 => 73,  299 => 72,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  271 => 59,  234 => 48,  231 => 47,  216 => 42,  12 => 34,  65 => 29,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 121,  334 => 120,  329 => 119,  327 => 118,  323 => 116,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  301 => 80,  296 => 77,  281 => 75,  275 => 73,  237 => 64,  233 => 62,  218 => 43,  206 => 58,  195 => 54,  192 => 53,  180 => 36,  174 => 47,  172 => 46,  148 => 35,  110 => 144,  129 => 49,  126 => 25,  114 => 44,  96 => 37,  157 => 29,  152 => 63,  145 => 56,  120 => 49,  81 => 35,  34 => 16,  170 => 57,  160 => 59,  113 => 47,  104 => 42,  100 => 43,  84 => 28,  58 => 22,  52 => 11,  124 => 49,  97 => 69,  77 => 33,  70 => 23,  76 => 35,  53 => 16,  186 => 38,  161 => 6,  90 => 57,  37 => 24,  23 => 11,  280 => 114,  272 => 109,  263 => 55,  255 => 71,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 55,  191 => 73,  175 => 33,  155 => 38,  150 => 27,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 22,  74 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 105,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 74,  268 => 58,  264 => 84,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 84,  177 => 48,  169 => 11,  140 => 53,  132 => 51,  128 => 152,  111 => 30,  107 => 143,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  246 => 51,  243 => 88,  240 => 50,  238 => 85,  235 => 93,  230 => 91,  227 => 46,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 57,  179 => 14,  159 => 39,  143 => 26,  135 => 69,  131 => 153,  119 => 22,  108 => 42,  102 => 79,  71 => 17,  67 => 22,  63 => 28,  59 => 26,  47 => 14,  28 => 14,  94 => 16,  89 => 17,  85 => 35,  79 => 30,  75 => 32,  68 => 30,  56 => 25,  50 => 23,  87 => 29,  72 => 31,  55 => 12,  41 => 6,  201 => 56,  196 => 90,  183 => 37,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 36,  142 => 59,  138 => 54,  136 => 155,  123 => 50,  121 => 39,  117 => 45,  115 => 43,  105 => 106,  101 => 37,  91 => 40,  69 => 16,  66 => 15,  62 => 14,  49 => 17,  43 => 7,  25 => 3,  21 => 11,  38 => 5,  24 => 1,  35 => 6,  31 => 15,  29 => 15,  26 => 14,  19 => 11,  98 => 42,  93 => 58,  88 => 39,  78 => 26,  46 => 8,  44 => 21,  40 => 20,  32 => 16,  27 => 12,  22 => 12,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 44,  164 => 59,  162 => 40,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 154,  130 => 41,  125 => 61,  122 => 23,  116 => 147,  112 => 109,  109 => 108,  106 => 45,  103 => 64,  99 => 23,  95 => 41,  92 => 32,  86 => 22,  82 => 31,  80 => 21,  73 => 24,  64 => 24,  60 => 16,  57 => 18,  54 => 12,  51 => 16,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 2,);
    }
}
