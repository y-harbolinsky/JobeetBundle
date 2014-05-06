<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_44035757918447bffa1ee60730cb2469dbe61f60fa770e8dbc3adf3c836231f0 extends Twig_Template
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
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  126 => 48,  114 => 44,  96 => 37,  157 => 58,  152 => 63,  145 => 56,  120 => 46,  81 => 33,  34 => 16,  170 => 57,  160 => 59,  113 => 46,  104 => 42,  100 => 33,  84 => 34,  58 => 25,  52 => 23,  124 => 49,  97 => 27,  77 => 13,  70 => 29,  76 => 27,  53 => 24,  186 => 62,  161 => 6,  90 => 36,  37 => 18,  23 => 11,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 52,  150 => 58,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 15,  74 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 53,  132 => 51,  128 => 49,  111 => 30,  107 => 35,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 42,  102 => 35,  71 => 17,  67 => 30,  63 => 28,  59 => 13,  47 => 18,  28 => 14,  94 => 16,  89 => 17,  85 => 31,  79 => 28,  75 => 31,  68 => 19,  56 => 25,  50 => 23,  87 => 35,  72 => 30,  55 => 24,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 39,  117 => 45,  115 => 43,  105 => 26,  101 => 39,  91 => 39,  69 => 31,  66 => 28,  62 => 18,  49 => 6,  43 => 8,  25 => 3,  21 => 11,  38 => 7,  24 => 12,  35 => 6,  31 => 15,  29 => 15,  26 => 12,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 32,  46 => 9,  44 => 21,  40 => 13,  32 => 5,  27 => 12,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 51,  130 => 41,  125 => 61,  122 => 43,  116 => 47,  112 => 33,  109 => 45,  106 => 33,  103 => 32,  99 => 23,  95 => 19,  92 => 25,  86 => 22,  82 => 21,  80 => 14,  73 => 18,  64 => 27,  60 => 16,  57 => 26,  54 => 12,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 17,  33 => 13,  30 => 3,);
    }
}
