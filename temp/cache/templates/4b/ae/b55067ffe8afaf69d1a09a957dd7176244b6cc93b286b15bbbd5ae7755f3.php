<?php

/* account/signup.html */
class __TwigTemplate_4baeb55067ffe8afaf69d1a09a957dd7176244b6cc93b286b15bbbd5ae7755f3 extends Twig_Template
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
        echo "Bug Tracker - Signup";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
<div class=\"col-md-4 col-md-offset-4\">
\t<div class=\"panel panel-default\">
\t  \t<div class=\"panel-heading\">
\t    \t<h3 class=\"panel-title\">Please fill out details to signup</h3>
\t \t</div>
\t  \t<div class=\"panel-body\">
\t  \t\t";
        // line 13
        if (((($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "name", array(), "array", true, true) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "username", array(), "array", true, true)) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "array", true, true)) && (!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "taken", array(), "array", true, true)))) {
            // line 14
            echo "\t\t\t\t<p><i class='fa fa-warning'></i> Please complete all required details</p>
\t\t\t";
        } elseif (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "array", true, true) && (!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "taken", array(), "array", true, true)))) {
            // line 16
            echo "\t\t\t\t<p><i class='fa fa-warning'></i> Please enter a valid email address.</p>
\t\t\t";
        } elseif ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "taken", array(), "array", true, true)) {
            // line 18
            echo "\t\t\t\t<p><i class='fa fa-warning'></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "taken", array(), "array"), "html", null, true);
            echo "</p>
\t  \t\t";
        }
        // line 20
        echo "
\t    \t<form accept-charset=\"UTF-8\" role=\"form\" action='";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/account/signup' method='post'>
            <fieldset>

\t    \t  \t";
        // line 24
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "name", array(), "array", true, true)) {
            // line 25
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 27
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 29
        echo "
\t    \t\t\t";
        // line 30
        if (array_key_exists("name", $context)) {
            // line 31
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Full name...\" name=\"name\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" autocomplete='off'>
\t    \t\t\t";
        } else {
            // line 33
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Full name...\" name=\"name\" type=\"text\" value=\"\" autocomplete='off'>
\t    \t\t    ";
        }
        // line 35
        echo "\t    \t\t</div>


\t    \t\t";
        // line 38
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "username", array(), "array", true, true)) {
            // line 39
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 41
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 43
        echo "
\t    \t\t\t";
        // line 44
        if (array_key_exists("username", $context)) {
            // line 45
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Username...\" name=\"username\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\" autocomplete='off'>
\t    \t\t\t";
        } else {
            // line 47
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Username...\" name=\"username\" type=\"text\" value=\"\" autocomplete='off'>
\t    \t\t    ";
        }
        // line 49
        echo "
\t    \t\t</div>

\t    \t\t";
        // line 52
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "array", true, true)) {
            // line 53
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 55
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 57
        echo "
\t    \t\t\t";
        // line 58
        if (array_key_exists("password", $context)) {
            // line 59
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Password...\" name=\"password\" type=\"password\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
            echo "\" autocomplete='off'>
\t    \t\t\t";
        } else {
            // line 61
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Password...\" name=\"password\" type=\"password\" value=\"\" autocomplete='off'>
\t    \t\t    ";
        }
        // line 63
        echo "
\t    \t\t</div>


\t    \t\t";
        // line 67
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "array", true, true)) {
            // line 68
            echo "\t    \t\t<div class=\"form-group has-error\">
\t    \t\t";
        } else {
            // line 70
            echo "\t\t\t\t<div class=\"form-group\">
\t    \t\t";
        }
        // line 72
        echo "
\t    \t\t\t";
        // line 73
        if (array_key_exists("email", $context)) {
            // line 74
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Email address...\" name=\"email\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" autocomplete='off'>
\t    \t\t\t";
        } else {
            // line 76
            echo "\t    \t\t    <input class=\"form-control\" placeholder=\"Email address...\" name=\"email\" type=\"text\" value=\"\" autocomplete='off'>
\t    \t\t    ";
        }
        // line 78
        echo "
\t    \t\t</div>   \t\t

\t    \t    <div>
\t    \t\t<input class=\"btn btn-lg btn-danger btn-block\" type=\"submit\" value=\"Sign up\">
\t    \t</fieldset>
\t      \t</form>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "account/signup.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  184 => 76,  178 => 74,  176 => 73,  173 => 72,  169 => 70,  165 => 68,  163 => 67,  157 => 63,  153 => 61,  147 => 59,  145 => 58,  142 => 57,  138 => 55,  134 => 53,  132 => 52,  127 => 49,  123 => 47,  117 => 45,  115 => 44,  112 => 43,  108 => 41,  104 => 39,  102 => 38,  97 => 35,  93 => 33,  87 => 31,  85 => 30,  82 => 29,  78 => 27,  74 => 25,  72 => 24,  66 => 21,  63 => 20,  57 => 18,  53 => 16,  49 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
