<?php

/* ticket/edit.html */
class __TwigTemplate_60fee6b87076396448c01a2c197f74dc693ef23f93ef53d7079b9c71206af18b extends Twig_Template
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
        echo "Bugtracker - Edit ticket - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo " ";
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
\t<h1><span class='colorize'>Edit</span> ticket - \"<span class='colorize'>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo "</span>\"</h1>

\t<h3 style='color:gray;margin-top:-10px;'>Fill in the details - to edit the bug ticket.</h3>

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
        echo "/ticket/edit/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
        echo "' method='post'>
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
        echo "\t\t\t<input type='text' class='form-control ticket-create' name='title' value='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo "' placeholder='Bug title.....'/>

\t\t\t<textarea class=\"editor\" name=\"content\" placeholder='Enter a description..'>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "contents"), "html", null, true);
        echo "</textarea>
\t\t</div>

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
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 51
            echo "
\t\t\t\t";
            // line 52
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "version_id") == $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "id"))) {
                // line 53
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 57
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='component' data-style=\"btn-default\">
\t\t\t\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) ? $context["components"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 63
            echo "\t\t\t\t
\t\t\t\t";
            // line 64
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "component_id") == $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "id"))) {
                // line 65
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='assign' data-style=\"btn-default\">

\t\t\t\t";
        // line 75
        if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "assign_id") == (-1))) {
            // line 76
            echo "\t\t\t\t<option selected value=''>Not assigned</option>
\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t<option value=''>Not assigned</option>
\t\t\t\t";
        }
        // line 80
        echo "
\t\t\t\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            echo "
\t\t\t\t";
            // line 83
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "assign_id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))) {
                // line 84
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 102
            echo "
\t\t\t\t";
            // line 103
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "type_id") == $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"))) {
                // line 104
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 108
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='status' data-style=\"btn-default\">
\t\t\t\t";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 114
            echo "
\t\t\t\t";
            // line 115
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"))) {
                // line 116
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 118
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t\t</select>

\t\t\t<select class=\"selectpicker\" name='priority' data-style=\"btn-default\">
\t\t\t\t";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priorities"]) ? $context["priorities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 126
            echo "
\t\t\t\t";
            // line 127
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "priority_id") == $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "id"))) {
                // line 128
                echo "\t\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priority"]) ? $context["priority"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 132
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t</select>
\t\t</div>
\t</div>

\t<div style='margin-top:30px'>
\t<button class='btn btn-danger'>Save</button>
\t<button class='btn btn-default'>Reset</button>
\t</div>
\t</form>

\t<div class='clearfix'></div>
";
    }

    public function getTemplateName()
    {
        return "ticket/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 134,  363 => 132,  355 => 130,  347 => 128,  345 => 127,  342 => 126,  338 => 125,  333 => 122,  326 => 120,  318 => 118,  310 => 116,  308 => 115,  305 => 114,  301 => 113,  296 => 110,  289 => 108,  281 => 106,  273 => 104,  271 => 103,  268 => 102,  264 => 101,  251 => 90,  244 => 88,  236 => 86,  228 => 84,  226 => 83,  223 => 82,  219 => 81,  216 => 80,  212 => 78,  208 => 76,  206 => 75,  200 => 71,  193 => 69,  185 => 67,  177 => 65,  175 => 64,  172 => 63,  168 => 62,  163 => 59,  156 => 57,  148 => 55,  140 => 53,  138 => 52,  135 => 51,  131 => 50,  112 => 34,  106 => 32,  102 => 30,  98 => 28,  96 => 27,  89 => 25,  86 => 24,  82 => 22,  80 => 21,  73 => 17,  70 => 16,  67 => 15,  61 => 12,  56 => 11,  53 => 10,  47 => 7,  42 => 6,  39 => 5,  31 => 3,);
    }
}
