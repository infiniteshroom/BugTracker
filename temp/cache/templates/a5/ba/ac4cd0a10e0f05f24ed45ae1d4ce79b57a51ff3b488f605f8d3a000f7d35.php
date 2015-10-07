<?php

/* ticket/view.html */
class __TwigTemplate_a5baac4cd0a10e0f05f24ed45ae1d4ce79b57a51ff3b488f605f8d3a000f7d35 extends Twig_Template
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
        echo "Bug Tracker - Tickets";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

";
        // line 9
        $context["user"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "User"), "method"), "results", array(), "method"), 0, array(), "array");
        // line 10
        echo "
   <div class=\"row row-offcanvas row-offcanvas-right\">

    <div class=\"col-xs-12 col-sm-9\" id='ticket' style='margin-bottom:600px;'>

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/\">Home</a></li>
      <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/ticket/\">Tickets</a></li>
      <li>1</li>
    </ol>


    <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
        echo "</h1>
    <h3><span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "getFormattedDate", array(), "method"), "html", null, true);
        echo "</span> By <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarLink", array(), "method"), "html", null, true);
        echo "\"><a href='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
        echo "/profile/view/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</a></h3>

    <div class='clearfix'></div>
    
    <div class='row' style='margin-top:20px;'>
      <div class=\"col-xs-6 col-sm-4\">
        <p>
          Type:
          ";
        // line 31
        if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "type_id") == 1)) {
            // line 32
            echo "            <span class=\"tag label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Type"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "type_id") == 2)) {
            // line 34
            echo "            <span class=\"tag label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Type"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 3)) {
            // line 36
            echo "            <span class=\"tag label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        }
        // line 38
        echo "        </p>

        <p>
            Version:
           <span class=\"tag label label-default\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Version"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
        echo "</span>
        </p>


      </div>

      <div class=\"col-xs-6 col-sm-4\">
        <p>
          Status:
          ";
        // line 51
        if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 1)) {
            // line 52
            echo "            <span class=\"tag label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 3)) {
            // line 54
            echo "            <span class=\"tag label label-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 4)) {
            // line 56
            echo "            <span class=\"tag label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 6)) {
            // line 58
            echo "            <span class=\"tag label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span>
          ";
        }
        // line 60
        echo "        </p>

        <p>
            Component:
            <span class=\"tag label label-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Component"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
        echo "</span>
        </p>
      </div>
    
    </div>

    <p style='margin-top:10px;margin-bottom:50px;'>";
        // line 70
        echo $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "contents");
        echo "</p>

    
    ";
        // line 73
        $context["comments"] = $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Comments"), "method");
        // line 74
        echo "    <h3>All Comments (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "count", array(), "method"), "html", null, true);
        echo ")</h3>

    ";
        // line 76
        if (($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "count", array(), "method") == 0)) {
            // line 77
            echo "      <p style='color:gray'>No comments on this ticket yet...</p>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "orderby", array(0 => "created_at", 1 => "desc"), "method"), "results", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 81
            echo "    
    ";
            // line 82
            $context["user"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "User"), "method"), "results", array(), "method"), 0, array(), "array");
            // line 83
            echo "      <div class='row' style='margin-top:20px;'>
        <div class='col-xs-2 col-sm-1'>
          <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarLink", array(), "method"), "html", null, true);
            echo "\" style='height:60px'/>
        </div>
        <div class='col-xs-12 col-sm-8'>
          <p><a href='";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/profile/view/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</a> <span style='color:#C4C4C4;font-size:12px;padding-left:10px;'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "getCreationDate", array(), "method"), "html", null, true);
            echo "</span></p>
          <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "contents"), "html", null, true);
            echo "</p>
          <p>
            <a href=''>Reply</a> 

        </p>

        </div>


      </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
</div>
    

  ";
        // line 105
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method") == false)) {
            // line 106
            echo "    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class=\"fa fa-refresh\"></i> Actions</a>
        <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/ticket/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
            echo "\" class=\"list-group-item\">Edit this ticket</a>
        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/ticket/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
            echo "\" class=\"list-group-item\">Delete this ticket</a>
      </div>
    </div><!--/span-->
  ";
        }
        // line 114
        echo "
  ";
        // line 115
        if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method")) {
            // line 116
            echo "    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class='fa fa-dashboard'></i> Meta</a>
        <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/login/\" class=\"list-group-item\">Login</a>
        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/signup/\" class=\"list-group-item\">Sign up</a>
      </div> 
  ";
        } else {
            // line 123
            echo "
    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class='fa fa-dashboard'></i> Meta</a>
        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/logout/\" class=\"list-group-item\">Logout [ ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method"), "username"), "html", null, true);
            echo " ]</a>
      </div> 

  ";
        }
        // line 131
        echo "
  </div><!--/row-->
";
    }

    public function getTemplateName()
    {
        return "ticket/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 131,  290 => 127,  284 => 123,  278 => 120,  274 => 119,  269 => 116,  267 => 115,  264 => 114,  255 => 110,  249 => 109,  244 => 106,  242 => 105,  236 => 101,  218 => 89,  208 => 88,  202 => 85,  198 => 83,  196 => 82,  193 => 81,  189 => 80,  186 => 79,  182 => 77,  180 => 76,  174 => 74,  172 => 73,  166 => 70,  157 => 64,  151 => 60,  145 => 58,  139 => 56,  133 => 54,  127 => 52,  125 => 51,  113 => 42,  107 => 38,  101 => 36,  95 => 34,  89 => 32,  87 => 31,  68 => 23,  64 => 22,  56 => 17,  52 => 16,  44 => 10,  42 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
