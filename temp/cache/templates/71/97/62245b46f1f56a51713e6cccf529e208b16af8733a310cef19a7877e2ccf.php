<?php

/* ticket/create.html */
class __TwigTemplate_719762245b46f1f56a51713e6cccf529e208b16af8733a310cef19a7877e2ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layouts/index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "Bugtracker - Create a ticket";
    }

    // line 5
    public function block_styles($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "css", array(0 => "default/css/summernote.css"), "method"), "html", null, true);
        echo "
\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "css", array(0 => "default/css/bootstrap-select.css"), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_scripts($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "js", array(0 => "default/js/summernote.js"), "method"), "html", null, true);
        echo "
\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "js", array(0 => "default/js/bootstrap-select.js"), "method"), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t
\t<h1><span class='colorize'>Create</span> a ticket</h1>

\t<h3 style='color:gray;margin-top:-10px;'>Fill in the details - to submit a new bug ticket.</h3>

\t";
        // line 21
        if (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "title", array(), "array", true, true) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "content", array(), "array", true, true))) {
            // line 22
            echo "\t<h4><span class='colorize'><i class='fa fa-warning'></i> Please complete all required details</h4>
\t";
        }
        // line 24
        echo "
\t<form action='";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/ticket/create/' method='post'>
\t<div style='width:90%'>
\t\t";
        // line 27
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "title", array(), "array", true, true)) {
            // line 28
            echo "\t\t<div class=\"form-group has-error\">
\t\t";
        } else {
            // line 30
            echo "\t\t<div class=\"form-group\">
\t\t";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        if (array_key_exists("title", $context)) {
            // line 34
            echo "\t\t\t<input type='text' class='form-control ticket-create' name='title' value='";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "' placeholder='Bug title.....'/>
\t\t\t";
        } else {
            // line 36
            echo "\t\t\t<input type='text' class='form-control ticket-create' name='title' placeholder='Bug title.....'/>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t";
        // line 39
        if (array_key_exists("content", $context)) {
            // line 40
            echo "\t\t\t<textarea class=\"editor\" name=\"content\" placeholder='Enter a description..'>";
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "</textarea>
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t<textarea class=\"editor\" name=\"content\" placeholder='Enter a description..'></textarea>
\t\t\t";
        }
        // line 44
        echo "\t\t</div>

\t</div>

\t<h2><span class='colorize'>Ticket</span> Details</h2>

\t<div class='row'>
\t\t<div class='col-xs-1 col-sm-2' style='line-height:2'>
\t\t\t<h3>Version:</h3>
\t\t\t<h3>Component:</h3>
\t\t\t<h3>Assigned to:</h3>
\t\t</div>

\t\t<div class='col-xs-2 col-sm-4'>
\t\t\t<select class=\"selectpicker\" name='version' data-style=\"btn-default\">
\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 60
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='component' data-style=\"btn-default\">
\t\t\t\t";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) ? $context["components"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 66
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='assign' data-style=\"btn-default\">
\t\t\t\t<option value=''>Not assigned</option>
\t\t\t\t";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 73
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</select>
\t\t</div>

\t\t<div class='col-xs-1 col-sm-2' style='line-height:2'>
\t\t\t<h3>Type:</h3>
\t\t\t<h3>Status:</h3>
\t\t\t<h3>Priority:</h3>
\t\t</div>

\t\t<div class='col-xs-1 col-sm-2'>
\t\t\t<select class=\"selectpicker\" name='type' data-style=\"btn-default\">
\t\t\t\t";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 87
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='status' data-style=\"btn-default\">
\t\t\t\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 93
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='priority' data-style=\"btn-default\">
\t\t\t\t";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priorities"]) ? $context["priorities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 99
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t</select>
\t\t</div>
\t</div>

\t<div style='margin-top:30px'>
\t<button class='btn btn-danger'>Create</button>
\t<button class='btn btn-default'>Reset</button>
\t</div>
\t</form>

\t<div class='clearfix'></div>
";
    }

    public function getTemplateName()
    {
        return "ticket/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 101,  259 => 99,  255 => 98,  250 => 95,  239 => 93,  235 => 92,  230 => 89,  219 => 87,  215 => 86,  202 => 75,  191 => 73,  187 => 72,  181 => 68,  170 => 66,  166 => 65,  161 => 62,  150 => 60,  146 => 59,  129 => 44,  125 => 42,  119 => 40,  117 => 39,  114 => 38,  110 => 36,  104 => 34,  102 => 33,  99 => 32,  95 => 30,  91 => 28,  89 => 27,  84 => 25,  81 => 24,  77 => 22,  75 => 21,  68 => 16,  65 => 15,  59 => 12,  54 => 11,  51 => 10,  45 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
