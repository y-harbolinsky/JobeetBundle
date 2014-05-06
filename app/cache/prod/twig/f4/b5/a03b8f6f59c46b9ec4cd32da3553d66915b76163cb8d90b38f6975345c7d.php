<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_f4b5a03b8f6f59c46b9ec4cd32da3553d66915b76163cb8d90b38f6975345c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 8
            echo "            <ul class=\"error_list\">
                ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<h1>Job creation</h1>
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ens_job_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    <table id=\"job_form\">
        <tfoot>
        <tr>
            <td colspan=\"2\">
                <input type=\"submit\" value=\"Preview your job\" />
            </td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'label');
        echo "</th>
            <td>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'label');
        echo "</th>
            <td>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'label');
        echo "</th>
            <td>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'label');
        echo "</th>
            <td>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'label');
        echo "</th>
            <td>
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'label');
        echo "</th>
            <td>
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'errors');
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'label');
        echo "</th>
            <td>
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'label');
        echo "</th>
            <td>
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'errors');
        echo "
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'label');
        echo "</th>
            <td>
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "how_to_apply"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'label');
        echo "</th>
            <td>
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'errors');
        echo "
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_public"), 'widget');
        echo "
                <br /> Whether the job can also be published on affiliate websites or not.
            </td>
        </tr>
        <tr>
            <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
        echo "</th>
            <td>
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "
            </td>
        </tr>
        </tbody>
    </table>
    ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  186 => 62,  161 => 6,  90 => 49,  37 => 5,  23 => 1,  280 => 114,  272 => 109,  263 => 106,  255 => 101,  251 => 100,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  155 => 58,  150 => 56,  139 => 51,  134 => 49,  127 => 45,  118 => 42,  83 => 23,  74 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 108,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  111 => 38,  107 => 37,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  246 => 98,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 52,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 22,  68 => 19,  56 => 9,  50 => 21,  87 => 27,  72 => 16,  55 => 15,  41 => 8,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 44,  121 => 59,  117 => 44,  115 => 43,  105 => 54,  101 => 32,  91 => 27,  69 => 18,  66 => 17,  62 => 23,  49 => 10,  43 => 8,  25 => 3,  21 => 2,  38 => 7,  24 => 2,  35 => 6,  31 => 8,  29 => 3,  26 => 6,  19 => 1,  98 => 31,  93 => 50,  88 => 6,  78 => 23,  46 => 9,  44 => 9,  40 => 15,  32 => 5,  27 => 3,  22 => 2,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 33,  103 => 32,  99 => 31,  95 => 30,  92 => 21,  86 => 24,  82 => 22,  80 => 22,  73 => 21,  64 => 29,  60 => 16,  57 => 12,  54 => 22,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
