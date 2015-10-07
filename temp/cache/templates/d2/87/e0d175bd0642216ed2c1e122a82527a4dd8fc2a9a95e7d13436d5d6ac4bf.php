<?php

/* profile/error.html */
class __TwigTemplate_d287e0d175bd0642216ed2c1e122a82527a4dd8fc2a9a95e7d13436d5d6ac4bf extends Twig_Template
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
        echo "Bugtracker - User not found";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div>
\t\t<h1>Profile not found</h1>
\t\t<h3>
\t\t\tSorry this user cannot be found
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
        return "profile/error.html";
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
