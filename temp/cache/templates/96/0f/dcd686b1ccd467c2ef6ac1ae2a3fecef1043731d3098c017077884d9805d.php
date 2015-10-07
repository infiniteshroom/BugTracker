<?php

/* ticket/delete.html */
class __TwigTemplate_960fdcd686b1ccd467c2ef6ac1ae2a3fecef1043731d3098c017077884d9805d extends Twig_Template
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
        echo "Bugtracker - Delete ticket - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div>
\t\t<h1>Delete Bug ticket - \" <span class='colorize'>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo "</span>\"</h1>
\t\t<h3 style='color:gray;margin-top:-10px'>
\t\t\tDeleting this bug ticket - will delete all information associated with this ticket. 
\t\t</h3>
\t\t
\t\t<p></p>
\t\t<div>
\t\t\t<form action ='";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/ticket/delete/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
        echo "' method='post'>
\t\t\t<button class='btn btn-danger'>Delete</button>
\t\t\t<a href='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/ticket/view/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
        echo "' class='btn btn-default'>Keep</a>
\t\t\t</form>
\t\t</div>

\t</div>

\t<div class='clearfix'></div>
";
    }

    public function getTemplateName()
    {
        return "ticket/delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  53 => 14,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
