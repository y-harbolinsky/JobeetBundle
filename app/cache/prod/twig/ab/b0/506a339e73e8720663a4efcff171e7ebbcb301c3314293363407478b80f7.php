<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_abb0506a339e73e8720663a4efcff171e7ebbcb301c3314293363407478b80f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
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
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'widget', array("attr" => array("class" => "title")));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  160 => 54,  113 => 37,  104 => 18,  100 => 33,  84 => 26,  58 => 22,  52 => 15,  124 => 40,  97 => 27,  77 => 24,  70 => 21,  76 => 27,  53 => 20,  186 => 62,  161 => 6,  90 => 29,  37 => 5,  23 => 1,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 52,  150 => 56,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 23,  74 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 45,  132 => 51,  128 => 49,  111 => 38,  107 => 35,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 17,  67 => 16,  63 => 15,  59 => 13,  47 => 18,  28 => 3,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  75 => 23,  68 => 19,  56 => 21,  50 => 19,  87 => 27,  72 => 16,  55 => 15,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  123 => 44,  121 => 39,  117 => 44,  115 => 43,  105 => 29,  101 => 28,  91 => 27,  69 => 24,  66 => 17,  62 => 18,  49 => 6,  43 => 8,  25 => 3,  21 => 2,  38 => 7,  24 => 11,  35 => 6,  31 => 6,  29 => 3,  26 => 14,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 23,  46 => 9,  44 => 17,  40 => 7,  32 => 5,  27 => 12,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 35,  112 => 33,  109 => 19,  106 => 33,  103 => 32,  99 => 17,  95 => 30,  92 => 25,  86 => 22,  82 => 21,  80 => 25,  73 => 18,  64 => 18,  60 => 16,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 3,);
    }
}
