<?php

/* account/login.html */
class __TwigTemplate_aa6273aabec54b2d5a3559146038942ccb8c255e21cf5b0e646edc8ac232ed5d extends Twig_Template
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
        echo "Bug Tracker - Login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
<div class=\"col-md-4 col-md-offset-4\">
\t<div class=\"panel panel-default\">
\t  \t<div class=\"panel-heading\">
\t    \t<h3 class=\"panel-title\">Please sign in</h3>
\t \t</div>
\t  \t<div class=\"panel-body\">
\t  \t\t";
        // line 13
        if (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "username", array(), "array", true, true) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "array", true, true))) {
            // line 14
            echo "\t\t\t\t<p><i class='fa fa-warning'></i> Please complete all required details</p>
\t\t\t";
        } elseif ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "login", array(), "array", true, true)) {
            // line 16
            echo "\t\t\t\t<p><i class='fa fa-warning'></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "login", array(), "array"), "html", null, true);
            echo "</p>
\t  \t\t";
        }
        // line 18
        echo "
\t    \t<form accept-charset=\"UTF-8\" role=\"form\" action='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/account/login' method='post'>
            <fieldset>
\t    \t  \t
\t    \t  \t";
        // line 22
        if (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "username", array(), "array", true, true) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "login", array(), "array", true, true))) {
            // line 23
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 25
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 27
        echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Username\" name=\"username\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "Form", array(0 => "username"), "method"), "html", null, true);
        echo "\" autocomplete='off'>
\t    \t\t</div>

\t    \t\t";
        // line 30
        if (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "array", true, true) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "login", array(), "array", true, true))) {
            // line 31
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 33
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 35
        echo "\t    \t\t\t<input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "Form", array(0 => "password"), "method"), "html", null, true);
        echo "\" autocomplete='off'>
\t    \t\t</div>
\t    \t\t<div class=\"checkbox\">
\t    \t    \t<label>
\t    \t    \t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t    \t    \t</label>

\t    \t    \t<span class='pull-right'><a href=''>Forgot my password</a></span>
\t    \t    </div>

\t    \t    <div>
\t    \t\t<input class=\"btn btn-lg btn-danger btn-block\" type=\"submit\" value=\"Login\">
\t    \t\t<a href='";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/account/signup/' class=\"btn btn-lg btn-default btn-block\">Sign Up</a>
\t    \t</fieldset>
\t      \t</form>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "account/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  95 => 35,  91 => 33,  87 => 31,  85 => 30,  78 => 27,  74 => 25,  70 => 23,  68 => 22,  62 => 19,  59 => 18,  53 => 16,  49 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
