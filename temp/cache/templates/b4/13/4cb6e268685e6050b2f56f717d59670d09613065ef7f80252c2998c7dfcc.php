<?php

/* partials/nobugs.html */
class __TwigTemplate_b4134cb6e268685e6050b2f56f717d59670d09613065ef7f80252c2998c7dfcc extends Twig_Template
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
        echo "\t<div style='height:600px;'>
\t\t<h3>
\t\t\tSorry no bug tickets found...
\t\t</h3>

\t\t<p> Return to <a href='";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/'>main page</a></p>
\t</div>
\t</div>

\t";
        // line 10
        $this->env->loadTemplate("partials/sidebar.html")->display($context);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/nobugs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
