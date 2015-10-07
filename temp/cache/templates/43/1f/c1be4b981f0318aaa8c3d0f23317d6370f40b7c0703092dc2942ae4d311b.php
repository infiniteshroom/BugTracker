<?php

/* partials/sidebar.html */
class __TwigTemplate_431fc1be4b981f0318aaa8c3d0f23317d6370f40b7c0703092dc2942ae4d311b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class=\"fa fa-filter\"></i> Filter</a>
        <a href=\"/\" class=\"list-group-item\">All Tickets</a>
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status_types"]) ? $context["status_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/filter/status/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "id"), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "name"), "html", null, true);
            echo " Tickets</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "      </div>
    </div><!--/span-->

    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class=\"fa fa-refresh\"></i> Recent Bugs</a>
        <a href=\"#\" class=\"list-group-item\">This is a bug</a>
        <a href=\"#\" class=\"list-group-item\">Graphics error</a>
      </div>
    </div><!--/span-->

  ";
        // line 20
        if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method")) {
            // line 21
            echo "    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class='fa fa-dashboard'></i> Meta</a>
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/login/\" class=\"list-group-item\">Login</a>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/signup/\" class=\"list-group-item\">Sign up</a>
      </div> 
  ";
        } else {
            // line 28
            echo "
    <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">
      <div class=\"list-group archives\">
        <a href=\"#\" class=\"list-group-item active\"><i class='fa fa-dashboard'></i> Meta</a>
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/account/logout/\" class=\"list-group-item\">Logout [ ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "User", array(), "method"), "username"), "html", null, true);
            echo " ]</a>
      </div> 

  ";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  58 => 21,  56 => 20,  26 => 6,  187 => 76,  183 => 74,  177 => 72,  148 => 51,  140 => 48,  134 => 47,  131 => 46,  129 => 45,  120 => 43,  116 => 42,  105 => 37,  99 => 35,  93 => 33,  87 => 31,  85 => 30,  80 => 28,  76 => 27,  72 => 26,  67 => 25,  59 => 23,  51 => 20,  48 => 19,  46 => 18,  42 => 17,  33 => 12,  31 => 11,  19 => 1,  234 => 135,  229 => 119,  224 => 28,  219 => 13,  211 => 136,  209 => 135,  192 => 120,  190 => 119,  184 => 115,  175 => 71,  162 => 98,  155 => 53,  150 => 93,  124 => 70,  115 => 64,  111 => 39,  109 => 61,  102 => 56,  98 => 54,  94 => 52,  92 => 51,  77 => 38,  73 => 28,  71 => 35,  63 => 24,  61 => 28,  43 => 9,  37 => 14,  23 => 1,  55 => 22,  53 => 14,  47 => 17,  44 => 9,  39 => 6,  36 => 5,  30 => 7,);
    }
}
