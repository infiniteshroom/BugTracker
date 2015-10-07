<?php

/* filter/status.html */
class __TwigTemplate_eeaaad67d29617aee158e1073a97ba75dee2c3ab2aebbb7345cbd4254bf6e9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layouts/index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Bug Tracker - Filter - Status - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "name"), "html", null, true);
    }

    // line 5
    public function block_scripts($context, array $blocks = array())
    {
        // line 6
        echo "<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.13.3/jquery.tablesorter.min.js\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "   <div class=\"row row-offcanvas row-offcanvas-right\">

    <div class=\"col-xs-12 col-sm-9\" style='margin-bottom:600px;'>
      <h1><span class='colorize'>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "name"), "html", null, true);
        echo "</span> Tickets</h1>

      ";
        // line 15
        if (($this->getAttribute((isset($context["bugs"]) ? $context["bugs"] : null), "count", array(), "method") > 0)) {
            // line 16
            echo "      ";
            $this->env->loadTemplate("partials/bugs.html")->display($context);
            // line 17
            echo "      ";
        } else {
            // line 18
            echo "      ";
            $this->env->loadTemplate("partials/nobugs.html")->display($context);
            // line 19
            echo "      ";
        }
        // line 20
        echo "    </div><!--/span-->
  </div><!--/row-->
";
    }

    public function getTemplateName()
    {
        return "filter/status.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  30 => 3,);
    }
}
