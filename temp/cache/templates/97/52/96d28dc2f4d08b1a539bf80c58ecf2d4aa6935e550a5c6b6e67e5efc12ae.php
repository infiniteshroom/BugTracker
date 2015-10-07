<?php

/* profile/view.html */
class __TwigTemplate_975296d28dc2f4d08b1a539bf80c58ecf2d4aa6935e550a5c6b6e67e5efc12ae extends Twig_Template
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
        echo "Bug Tracker - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "   <div class=\"row\">

    <div class=\"col-xs-1 col-sm-3\">
      <img src='";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarLink", array(), "method"), "html", null, true);
        echo "' style='width:150px;height:150px;' />
    </div>

    <div class='col-xs-5 col-sm-7'>
      <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "middle_name"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name"), "html", null, true);
        echo " / <span class='colorize'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</span></h1>
      <h4 style='margin-top:-10px;color:gray'>Member since: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRegisterDate", array(), "method"), "html", null, true);
        echo "</h4>

\t";
        // line 16
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email") != null)) {
            // line 17
            echo "      <a href='mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
            echo "' class='btn btn-default' style='font-size:23px;padding:10px 18px 10px 18px'><i class='fa fa-envelope'></i></a>
    ";
        }
        // line 19
        echo "

\t";
        // line 21
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter") != null)) {
            // line 22
            echo "       <a target='_blank' href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "twitter"), "html", null, true);
            echo "' class='btn btn-info' style='font-size:23px;padding:10px 18px 10px 18px'><i class='fa fa-twitter'></i></a>
   ";
        }
        // line 24
        echo "
\t";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website") != null)) {
            // line 26
            echo "       <a target='_blank' href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "website"), "html", null, true);
            echo "' class='btn btn-success' style='font-size:23px;padding:10px 18px 10px 18px'><i class='fa fa-link'></i></a>
    ";
        }
        // line 28
        echo "\t
\t";
        // line 29
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook") != null)) {
            // line 30
            echo "        <a target='_blank' href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "facebook"), "html", null, true);
            echo "' class='btn btn-success' style='font-size:23px;padding:10px 24px 10px 24px;background-color:#3b5998;
border-color:#3b5998'><i class='fa fa-facebook'></i></a>
\t";
        }
        // line 33
        echo "
    </div>
  </div><!--/row-->
\t\t
\t<div>
\t\t<h3>About me</h3>

\t\t";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "bio") != "")) {
            // line 41
            echo "\t\t<p style='text-align:justify;font-size: 18.75px;font-weight: 300;line-height: 1.25;color:#6f6f6f;width:75%'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "bio"), "html", null, true);
            echo "</p>
\t\t";
        } else {
            // line 43
            echo "\t\t<p style='text-align:justify;font-size: 18.75px;font-weight: 300;line-height: 1.25;color:#6f6f6f;width:75%'>This doesn't have a bio yet.....</p>
\t\t";
        }
        // line 45
        echo "\t</div>
      <div>
    \t";
        // line 47
        $context["comments"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Relation", array(0 => "Comments"), "method");
        // line 48
        echo "    \t<h3><span class='colorize'>All</span> Comments (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "count", array(), "method"), "html", null, true);
        echo ")</h3>

    \t";
        // line 50
        if (($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "count", array(), "method") > 0)) {
            echo "   
\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "orderby", array(0 => "comments.created_at", 1 => "desc"), "method"), "results", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 52
                echo "\t\t";
                $context["bug"] = $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "Relation", array(0 => "Bug"), "method"), "results", array(0 => "one"), "method");
                // line 53
                echo "    \t   <div class=\"comment\">
            <blockquote>
              <div class=\"row\">
                <div class=\"col-sm-9\">
                  <p>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "contents"), "html", null, true);
                echo "</p>
                  <small><a href='/ticket/view/";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "id"), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bug"]) ? $context["bug"] : null), "title"), "html", null, true);
                echo "</a> | ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "getCreationDate", array(), "method"), "html", null, true);
                echo "</small>
                </div>
              </div>
            </blockquote>
   \t\t </div>
   \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "   \t\t";
        } else {
            // line 65
            echo "   \t\t<p style='text-align:justify;font-size: 18.75px;font-weight: 300;line-height: 1.25;color:#6f6f6f;width:75%'>This user hasn't made any comments yet...</p>
   \t\t";
        }
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "profile/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 67,  182 => 65,  179 => 64,  163 => 58,  159 => 57,  153 => 53,  150 => 52,  146 => 51,  142 => 50,  136 => 48,  134 => 47,  130 => 45,  126 => 43,  120 => 41,  118 => 40,  109 => 33,  102 => 30,  100 => 29,  97 => 28,  91 => 26,  89 => 25,  86 => 24,  80 => 22,  78 => 21,  74 => 19,  68 => 17,  66 => 16,  61 => 14,  51 => 13,  44 => 9,  39 => 6,  36 => 5,  29 => 3,);
    }
}
