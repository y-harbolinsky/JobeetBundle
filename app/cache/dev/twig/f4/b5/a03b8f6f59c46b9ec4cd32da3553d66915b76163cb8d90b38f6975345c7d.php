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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
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
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul class=\"error_list\">
                ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'label');
        echo "</th>
            <td>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label');
        echo "</th>
            <td>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company"), 'label');
        echo "</th>
            <td>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company"), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "</th>
            <td>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'label');
        echo "</th>
            <td>
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'label');
        echo "</th>
            <td>
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'errors');
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'label');
        echo "</th>
            <td>
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</th>
            <td>
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply"), 'label');
        echo "</th>
            <td>
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply"), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public"), 'label');
        echo "</th>
            <td>
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public"), 'errors');
        echo "
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public"), 'widget');
        echo "
                <br /> Whether the job can also be published on affiliate websites or not.
            </td>
        </tr>
        <tr>
            <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</th>
            <td>
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
            </td>
        </tr>
        </tbody>
    </table>
    ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        return array (  280 => 114,  272 => 109,  268 => 108,  263 => 106,  255 => 101,  251 => 100,  246 => 98,  239 => 94,  235 => 93,  230 => 91,  223 => 87,  219 => 86,  214 => 84,  207 => 80,  203 => 79,  198 => 77,  191 => 73,  187 => 72,  182 => 70,  175 => 66,  171 => 65,  166 => 63,  159 => 59,  155 => 58,  150 => 56,  143 => 52,  139 => 51,  134 => 49,  127 => 45,  123 => 44,  118 => 42,  111 => 38,  107 => 37,  102 => 35,  86 => 24,  83 => 23,  80 => 22,  74 => 19,  69 => 18,  66 => 17,  61 => 14,  57 => 12,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
