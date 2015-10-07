<?php

/* partials/bugs.html */
class __TwigTemplate_4d67bd2d1c025729a44d0baa0e5674c264e4573c8657220fc304f78c488db676 extends Twig_Template
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
        echo "<table class=\"table table-hover tablesorter\" id='bug-table'>
    <thead>
      <th><a href='#'>Ticket #</a></th>
      <th><a href='#'>Name</a></th>
      <th><a href='#'>Description</a></th>
      <th><a href='#'>Version</a></th>
      <th><a href='#'>Component</a></th>
      <th><a href='#'>Status</a></th>
      <th><a href='#'>Assigned to</a></th>

      ";
        // line 11
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method") == false)) {
            // line 12
            echo "      <th></th>
      ";
        }
        // line 14
        echo "    </thead>

    <tbody>
       ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bugs"]) ? $context["bugs"] : null), "results", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["bug"]) {
            // line 18
            echo "       \t";
            // line 19
            echo "\t\t    ";
            $context["user"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "User"), "method"), "results", array(), "method"), 0, array(), "array");
            // line 20
            echo "
        <tr>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
            echo "</td>
          <td><a href='";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/ticket/view/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
            echo "</a>
            <p id='date'>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "getFormattedDate", array(), "method"), "html", null, true);
            echo "</p>
          </td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "getShortDescription", array(), "method"), "html", null, true);
            echo "..</td>
          <td><span class=\"pull-left tag label label-default\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Version"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span></td>
          <td><span class=\"pull-left tag label label-info\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Component"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
            echo "</span></td>
          <td>
          ";
            // line 30
            if (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 1)) {
                // line 31
                echo "            <span class=\"pull-left tag label label-info\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
                echo "</span>
          ";
            } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 3)) {
                // line 33
                echo "            <span class=\"pull-left tag label label-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
                echo "</span>
          ";
            } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 4)) {
                // line 35
                echo "            <span class=\"pull-left tag label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
                echo "</span>
          ";
            } elseif (($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "status_id") == 6)) {
                // line 37
                echo "            <span class=\"pull-left tag label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "Relation", array(0 => "Status"), "method"), "results", array(0 => "one"), "method"), "name"), "html", null, true);
                echo "</span>
          ";
            }
            // line 39
            echo "          </td>

          <td>
          <img src='";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarLink", array(), "method"), "html", null, true);
            echo "' id='avatar'></img>
          <a href='";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/profile/view/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "' class='pull-left'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</a>

          ";
            // line 45
            if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method") == false)) {
                // line 46
                echo "          <td class='bug-settings'>
          <a href='";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
                echo "/ticket/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
                echo "'><i class='fa fa-edit'></i></a>
          <a href='";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
                echo "/ticket/delete/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
                echo "'><i class=\"fa fa-times\"></i></a>
          </td>
          ";
            }
            // line 51
            echo "        </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </tbody>

    <tfooter>

    </tfooter>
  </table>

<!--
  <ul class=\"pagination\">
  <li><a href=\"#\">&laquo;</a></li>
  <li><a href=\"#\">1</a></li>
  <li><a href=\"#\">2</a></li>
  <li><a href=\"#\">3</a></li>
  <li><a href=\"#\">4</a></li>
  <li><a href=\"#\">5</a></li>
  <li><a href=\"#\">&raquo;</a></li>
</ul>-->

 ";
        // line 71
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "IsGuest", array(), "method") == false)) {
            // line 72
            echo "      <p><a href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "Path", array(0 => "web"), "method"), "html", null, true);
            echo "/ticket/create/' class='btn btn-default'><i class='fa fa-bug'></i> Create a ticket</a></p>
  ";
        }
        // line 74
        echo "
</div>
";
        // line 76
        $this->env->loadTemplate("partials/sidebar.html")->display($context);
    }

    public function getTemplateName()
    {
        return "partials/bugs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  183 => 74,  177 => 72,  148 => 51,  140 => 48,  134 => 47,  131 => 46,  129 => 45,  120 => 43,  116 => 42,  105 => 37,  99 => 35,  93 => 33,  87 => 31,  85 => 30,  80 => 28,  76 => 27,  72 => 26,  67 => 24,  59 => 23,  51 => 20,  48 => 19,  46 => 18,  42 => 17,  33 => 12,  31 => 11,  19 => 1,  234 => 135,  229 => 119,  224 => 28,  219 => 13,  211 => 136,  209 => 135,  192 => 120,  190 => 119,  184 => 115,  175 => 71,  162 => 98,  155 => 53,  150 => 93,  124 => 70,  115 => 64,  111 => 39,  109 => 61,  102 => 56,  98 => 54,  94 => 52,  92 => 51,  77 => 38,  73 => 36,  71 => 35,  63 => 29,  61 => 28,  43 => 16,  37 => 14,  23 => 1,  55 => 22,  53 => 14,  47 => 17,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
