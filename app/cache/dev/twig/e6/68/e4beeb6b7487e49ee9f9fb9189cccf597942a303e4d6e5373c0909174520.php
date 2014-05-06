<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_e668e4beeb6b7487e49ee9f9fb9189cccf597942a303e4d6e5373c0909174520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 25
        echo "
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ens_jobeet_homepage");
        echo "\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"job_history\">
        Resent viewed jobs:
        <ul>
            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 59
            echo "                <li>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company_slug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location_slug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position_slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </ul>
    </div>

    <div id=\"content\">
        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 68
            echo "            <div class=\"flash_notice\">
                ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "            <div class=\"flash_error\">
                ";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
        <div class=\"content\">
            ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            Jobeet - Your best job board
        ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 81,  215 => 80,  211 => 14,  208 => 13,  201 => 11,  198 => 10,  193 => 6,  190 => 5,  172 => 90,  167 => 88,  159 => 82,  157 => 80,  153 => 78,  144 => 75,  141 => 74,  137 => 73,  134 => 72,  125 => 69,  122 => 68,  118 => 67,  112 => 63,  99 => 60,  96 => 59,  92 => 58,  68 => 37,  58 => 30,  54 => 29,  48 => 25,  40 => 15,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,);
    }
}
