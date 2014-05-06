<?php

/* EnsJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_8a0504f7c86b6684c99864d13c5d8b09fd79c0f7231d3a182e9d169c12cba100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated"))) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">Publish</a></li>
        ";
        }
        // line 8
        echo "        <li>
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) {return false;}\">Delete</button>
            </form>
        </li>
        ";
        // line 14
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated")) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token"))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 23
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  52 => 15,  124 => 40,  97 => 27,  77 => 19,  70 => 23,  76 => 13,  53 => 7,  186 => 62,  161 => 6,  90 => 49,  37 => 5,  23 => 1,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 58,  150 => 56,  139 => 51,  134 => 49,  127 => 45,  118 => 42,  83 => 23,  74 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  111 => 38,  107 => 37,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 17,  67 => 16,  63 => 15,  59 => 13,  47 => 9,  28 => 3,  94 => 26,  89 => 20,  85 => 25,  79 => 18,  75 => 22,  68 => 19,  56 => 12,  50 => 14,  87 => 27,  72 => 16,  55 => 15,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 44,  121 => 59,  117 => 44,  115 => 43,  105 => 29,  101 => 28,  91 => 27,  69 => 18,  66 => 17,  62 => 18,  49 => 6,  43 => 10,  25 => 3,  21 => 2,  38 => 7,  24 => 4,  35 => 6,  31 => 6,  29 => 3,  26 => 5,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 23,  46 => 9,  44 => 4,  40 => 15,  32 => 5,  27 => 3,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 61,  122 => 43,  116 => 35,  112 => 33,  109 => 55,  106 => 33,  103 => 32,  99 => 31,  95 => 30,  92 => 25,  86 => 22,  82 => 21,  80 => 22,  73 => 18,  64 => 15,  60 => 16,  57 => 12,  54 => 22,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
