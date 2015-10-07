<?php

/* account/settings.html */
class __TwigTemplate_1c027e51497c5a49e85d0a017e600916da13a61e521837a8ea8da454d8c200fd extends Twig_Template
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
        echo "Bugtracker - Account Settings";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        $context["user"] = $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method");
        // line 8
        echo "\t<div class='row'>

\t\t<div class='col-xs-4 col-sm-2'>
\t\t\t<a href=\"#\" class=\"thumbnail\">
\t\t\t\t<img id='avatar-image' style='width:150px;height:150px;' src='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarLink", array(), "method"), "html", null, true);
        echo "' />
\t\t\t</a>

\t\t\t<button class='btn btn-default' style='width:97%;' id='change-avatar'>
\t\t\t\t<i class='fa fa-picture-o'></i> Change avatar
\t\t\t</button>
\t\t</div>

\t\t<div class='col-xs-12 col-sm-8'>
\t\t<h1><span class='colorize'>Account</span> Settings</h1>
\t\t<h3 style='color:gray;margin-top:-10px;'>
\t\t\tManage your account/profile settings.
\t\t</h3>


\t\t";
        // line 27
        if (array_key_exists("errors", $context)) {
            // line 28
            echo "\t\t<h4><span class='colorize'><i class='fa fa-warning'></i> Please complete all required details</h4>
\t\t";
        }
        // line 30
        echo "
\t\t";
        // line 31
        if (array_key_exists("success", $context)) {
            // line 32
            echo "\t\t<h4><span class='success'><i class='fa fa-smile-o'></i> Account settings updated successfully</h4>
\t\t";
        }
        // line 34
        echo "
\t\t<p><form class=\"form-horizontal\" enctype='multipart/form-data' role=\"form\" method='post' action='";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/account/settings/'>
\t\t<input type='file' class='upload' name='avatar' id='avatar-upload' />

\t\t\t";
        // line 38
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "firstname", array(), "array")) {
            // line 39
            echo "    \t\t<div class=\"form-group has-error\">
    \t\t";
        } else {
            // line 41
            echo "\t\t\t<div class=\"form-group\">
    \t\t";
        }
        // line 43
        echo "
\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">First Name</label>
\t\t    <div class=\"col-sm-10\">
\t\t      ";
        // line 46
        if ((!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "firstname", array(), "array", true, true))) {
            // line 47
            echo "\t\t      <input type=\"text\" class=\"form-control\" name='firstname' placeholder=\"\" value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
            echo "'>
\t\t\t  ";
        } else {
            // line 49
            echo "\t\t\t  <input type=\"text\" class=\"form-control\" name='firstname' placeholder=\"\" value=''>
\t\t\t  ";
        }
        // line 51
        echo "\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Middle Name</label>
\t\t    <div class=\"col-sm-10\">
\t\t      ";
        // line 56
        if ((!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "middlename", array(), "array", true, true))) {
            // line 57
            echo "\t\t      <input type=\"text\" class=\"form-control\" name='middlename' placeholder=\"\" value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "middle_name"), "html", null, true);
            echo "'>
\t\t\t  ";
        } else {
            // line 59
            echo "\t\t\t  <input type=\"text\" class=\"form-control\" name='middlename' placeholder=\"\" value=''>
\t\t\t  ";
        }
        // line 61
        echo "\t\t    </div>
\t\t  </div>

\t\t\t";
        // line 64
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "lastname", array(), "array")) {
            // line 65
            echo "    \t\t<div class=\"form-group has-error\">
    \t\t";
        } else {
            // line 67
            echo "\t\t\t<div class=\"form-group\">
    \t\t";
        }
        // line 69
        echo "\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Last Name</label>
\t\t    <div class=\"col-sm-10\">
\t\t      ";
        // line 71
        if ((!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "lastname", array(), "array", true, true))) {
            // line 72
            echo "\t\t      <input type=\"text\" class=\"form-control\" name='lastname' placeholder=\"\" value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
            echo "'>
\t\t\t  ";
        } else {
            // line 74
            echo "\t\t\t  <input type=\"text\" class=\"form-control\" name='lastname' placeholder=\"\" value=''>
\t\t\t  ";
        }
        // line 76
        echo "\t\t    </div>
\t\t  </div>

\t\t \t";
        // line 79
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "array")) {
            // line 80
            echo "    \t\t<div class=\"form-group has-error\">
    \t\t";
        } else {
            // line 82
            echo "\t\t\t<div class=\"form-group\">
    \t\t";
        }
        // line 84
        echo "
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Email</label>
\t\t    <div class=\"col-sm-10\">

\t\t      ";
        // line 88
        if ((!$this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "array", true, true))) {
            // line 89
            echo "\t\t      <input type=\"text\" class=\"form-control\" name='email' placeholder=\"\" value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
            echo "'>
\t\t\t  ";
        } else {
            // line 91
            echo "\t\t\t  <input type=\"text\" class=\"form-control\" name='email' placeholder=\"\" value=''>
\t\t\t  ";
        }
        // line 93
        echo "\t\t    </div>
\t\t  </div>

\t\t <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Website</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='website' placeholder=\"\" value='";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website"), "html", null, true);
        echo "'>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Facebook</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='twitter' placeholder=\"\" value='";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook"), "html", null, true);
        echo "'>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Twitter</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='twitter' placeholder=\"\" value='";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter"), "html", null, true);
        echo "'>
\t\t    </div>
\t\t  </div>

\t\t  \t<div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">About me</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <textarea rows='8' class='form-control' name='about'>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "bio"), "html", null, true);
        echo "</textarea>
\t\t    </div>
\t\t  </div>


\t\t  <p><button class='btn btn-danger' style='padding-top:10px;padding-bottom:10px;'><i class='fa fa-save'></i> Update</button></p>
\t\t  </form></p>

\t\t  <h1><span class='colorize'>Change</span> Password</h1>

\t\t  <p><form class=\"form-horizontal\" role=\"form\">
\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Current password</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='oldpassword' placeholder=\"\" value=''>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">New Password</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='newpassword' placeholder=\"\" value=''>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"form-group\">
\t\t    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Confirm new password</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <input type=\"text\" class=\"form-control\" name='confirmnewpassword' placeholder=\"\" value=''>
\t\t    </div>
\t\t  </div>
\t\t  </form>

\t\t  <br />

\t\t  <p><button class='btn btn-danger' style='padding-top:10px;padding-bottom:10px;'><i class='fa fa-save'></i> Update</button></p>

\t\t</div>



\t<div class='clearfix'></div>
";
    }

    public function getTemplateName()
    {
        return "account/settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 120,  229 => 113,  219 => 106,  209 => 99,  201 => 93,  197 => 91,  191 => 89,  189 => 88,  183 => 84,  179 => 82,  175 => 80,  173 => 79,  168 => 76,  164 => 74,  158 => 72,  156 => 71,  152 => 69,  148 => 67,  144 => 65,  142 => 64,  137 => 61,  133 => 59,  127 => 57,  125 => 56,  118 => 51,  114 => 49,  108 => 47,  106 => 46,  101 => 43,  97 => 41,  93 => 39,  91 => 38,  85 => 35,  82 => 34,  78 => 32,  76 => 31,  73 => 30,  69 => 28,  67 => 27,  49 => 12,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
