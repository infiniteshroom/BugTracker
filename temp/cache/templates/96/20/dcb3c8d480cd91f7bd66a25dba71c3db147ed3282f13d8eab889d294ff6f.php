<?php

/* layouts/index.html */
class __TwigTemplate_9620dcb3c8d480cd91f7bd66a25dba71c3db147ed3282f13d8eab889d294ff6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">
    <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">


    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "css", array(0 => "default/css/bootstrap.css"), "method"), "html", null, true);
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "css", array(0 => "default/css/main.css"), "method"), "html", null, true);
        echo "

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 28
        $this->displayBlock('styles', $context, $blocks);
        // line 29
        echo "

  </head>

  <body>

    ";
        // line 35
        if (array_key_exists("switch_nonav", $context)) {
            // line 36
            echo "
    ";
        } else {
            // line 38
            echo "    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\"><i class='fa fa-bug'></i> Bug Tracker</a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            ";
            // line 51
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "Controller", array(), "method") == "Ticket")) {
                // line 52
                echo "            <li class='active'><a href=\"#\">Tickets</a></li>
            ";
            } else {
                // line 54
                echo "             <li><a href=\"/\">Tickets</a></li>
            ";
            }
            // line 56
            echo "
            <!--<li><a href=\"#\">Wiki</a></li>
            <li><a href=\"#\">Settings</a></li>-->
          </ul>

          ";
            // line 61
            if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method")) {
                // line 62
                echo "
          <ul class=\"nav navbar-nav pull-right\">
          <li><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
                echo "/account/signup/\">Sign Up</a></li>
          <li class=\"divider-vertical\"></li>
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Sign In <strong class=\"caret\"></strong></a>
            <div class=\"dropdown-menu login-form\">
              
              <form action=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
                echo "/account/login\" method=\"post\" accept-charset=\"UTF-8\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class='fa fa-user'></i></span>
                    <input id=\"user_username\" placeholder='Username...' class=\"form-control\" type=\"text\" name=\"username\" />
                  </div>

                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class='fa fa-lock'></i></span>
                    <input id=\"user_password\" placeholder='Password...' class=\"form-control\" type=\"password\" name=\"password\" />

                  </div>


                  <input id=\"user_remember_me\" type=\"checkbox\" name=\"remember\" value=\"1\" />
                  <label class=\"string optional\" for=\"user_remember_me\"> Remember me</label>
                 
                  <input class=\"btn btn-default btn-block\" type=\"submit\" value=\"Sign In\" />
            </form>
            </div>
          </li>
        </ul>

        ";
            } else {
                // line 93
                echo "
          <ul class=\"nav navbar-nav pull-right\">
         <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img id='avatar' src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method"), "getAvatarLink", array(), "method"), "html", null, true);
                echo "\">Welcome, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method"), "username"), "html", null, true);
                echo "<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/profile/view/";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method"), "username"), "html", null, true);
                echo "\"><i class='fa fa-user'></i> My Profile</a></li>
            <li><a href=\"/account/settings/\"><i class='fa fa-cog'></i> Account Settings</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"/account/logout/\"><i class='fa fa-unlock'></i> Logout</a></li>
          </ul>
        </li>
      </ul>


        ";
            }
            // line 108
            echo "

        </div>
      </div>
    </div>

    ";
        }
        // line 115
        echo "
    <div class=\"container\">

      
    ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "
    <!--  <footer>
        <p>&copy; Company 2014</p>
      </footer>-->

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
    <script src=\"offcanvas.js\"></script>
    ";
        // line 135
        $this->displayBlock('scripts', $context, $blocks);
        // line 136
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Asset"]) ? $context["Asset"] : null), "js", array(0 => "default/js/app.js"), "method"), "html", null, true);
        echo "
  </body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 28
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 119
    public function block_content($context, array $blocks = array())
    {
    }

    // line 135
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 135,  229 => 119,  224 => 28,  219 => 13,  211 => 136,  209 => 135,  192 => 120,  190 => 119,  184 => 115,  175 => 108,  162 => 98,  155 => 96,  150 => 93,  124 => 70,  115 => 64,  111 => 62,  109 => 61,  102 => 56,  98 => 54,  94 => 52,  92 => 51,  77 => 38,  73 => 36,  71 => 35,  63 => 29,  61 => 28,  47 => 17,  43 => 16,  37 => 13,  23 => 1,);
    }
}
