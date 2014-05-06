<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_22897658756c85d396dc06c7784f87bb4713df478fc8426fb8076bd88edc79b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : null), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "</td>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") . (isset($context["permission"]) ? $context["permission"] : null)), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  152 => 63,  145 => 56,  120 => 48,  81 => 34,  34 => 16,  170 => 57,  160 => 59,  113 => 46,  104 => 42,  100 => 33,  84 => 26,  58 => 22,  52 => 15,  124 => 49,  97 => 27,  77 => 24,  70 => 29,  76 => 27,  53 => 24,  186 => 62,  161 => 6,  90 => 29,  37 => 5,  23 => 1,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 52,  150 => 58,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 23,  74 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 53,  132 => 51,  128 => 49,  111 => 38,  107 => 35,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 17,  67 => 28,  63 => 27,  59 => 13,  47 => 18,  28 => 14,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  75 => 31,  68 => 19,  56 => 25,  50 => 23,  87 => 38,  72 => 30,  55 => 15,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 60,  158 => 5,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  123 => 44,  121 => 39,  117 => 44,  115 => 43,  105 => 29,  101 => 28,  91 => 39,  69 => 24,  66 => 17,  62 => 18,  49 => 6,  43 => 8,  25 => 3,  21 => 2,  38 => 7,  24 => 11,  35 => 6,  31 => 15,  29 => 3,  26 => 14,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 23,  46 => 9,  44 => 17,  40 => 7,  32 => 5,  27 => 12,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 51,  130 => 41,  125 => 61,  122 => 43,  116 => 47,  112 => 33,  109 => 45,  106 => 33,  103 => 32,  99 => 17,  95 => 40,  92 => 25,  86 => 22,  82 => 21,  80 => 25,  73 => 18,  64 => 18,  60 => 16,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 13,  30 => 3,);
    }
}
