<?php

/* ticket/index.html */
class __TwigTemplate_a23d115cfa1def16b27eb835f864e60a72f1ca8c6cd37a9b7a44fcf591808cef extends Twig_Template
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
        echo "Bug Tracker - Tickets";
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
      <h1><span class='colorize'>All</span> Tickets</h1>
      ";
        // line 14
        $this->env->loadTemplate("partials/bugs.html")->display($context);
        // line 15
        echo "    </div><!--/span-->
  </div><!--/row-->
";
    }

    public function getTemplateName()
    {
        return "ticket/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 14,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
