<?php

/* EnsJobeetBundle:Category:show.html.twig */
class __TwigTemplate_a7a900e45fe8c00f501c1a7a685171c503a1510b709665de931f91d510bf3378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed
            </a>
        </div>
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 21
        echo twig_include($this->env, $context, "EnsJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs")));
        echo "

    ";
        // line 23
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 24
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "                ";
                if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
                ";
                }
                // line 39
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 50
        echo "
    <div class=\"pagination_desc\">
        <strong>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : null), "html", null, true);
        echo "</strong> jobs in this category

        ";
        // line 54
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 55
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
        ";
        }
        // line 57
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  160 => 54,  113 => 37,  104 => 34,  100 => 33,  84 => 26,  58 => 17,  52 => 15,  124 => 40,  97 => 27,  77 => 24,  70 => 21,  76 => 13,  53 => 7,  186 => 62,  161 => 6,  90 => 29,  37 => 5,  23 => 1,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 52,  150 => 56,  139 => 51,  134 => 42,  127 => 40,  118 => 42,  83 => 23,  74 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 45,  132 => 51,  128 => 49,  111 => 38,  107 => 35,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 17,  67 => 16,  63 => 15,  59 => 13,  47 => 9,  28 => 3,  94 => 30,  89 => 20,  85 => 25,  79 => 18,  75 => 23,  68 => 19,  56 => 12,  50 => 14,  87 => 27,  72 => 16,  55 => 15,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  123 => 44,  121 => 39,  117 => 44,  115 => 43,  105 => 29,  101 => 28,  91 => 27,  69 => 18,  66 => 17,  62 => 18,  49 => 6,  43 => 8,  25 => 3,  21 => 2,  38 => 7,  24 => 4,  35 => 6,  31 => 6,  29 => 3,  26 => 5,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 23,  46 => 9,  44 => 4,  40 => 7,  32 => 5,  27 => 3,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 35,  112 => 33,  109 => 55,  106 => 33,  103 => 32,  99 => 31,  95 => 30,  92 => 25,  86 => 22,  82 => 21,  80 => 25,  73 => 18,  64 => 18,  60 => 16,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
