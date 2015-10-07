<?php

/* ticket/error.html */
class __TwigTemplate_6f4c9418b5d81cbc1a0662806eff044a7e47348fb43f6c5c458f6ad189ae26a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layouts/index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bugtracker - Ticket not found";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div>
\t\t<h1>Ticket not found</h1>
\t\t<h3>
\t\t\tSorry this ticket cannot be found or has been removed.
\t\t</h3>

\t\t<p> Return to <a href='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/'>main page</a></p>
\t</div>

\t<div class='clearfix'></div>
";
    }

    public function getTemplateName()
    {
        return "ticket/error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}
