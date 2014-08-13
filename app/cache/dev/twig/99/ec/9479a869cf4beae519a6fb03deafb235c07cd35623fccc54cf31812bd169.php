<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_99ec9479a869cf4beae519a6fb03deafb235c07cd35623fccc54cf31812bd169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'featuredcontent' => array($this, 'block_featuredcontent'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_featuredcontent($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"substrate\">
\t\t\t\t<img src=\"http://projetofinal.dev/wp-content/themes/academy/images/bgs/site_bg.jpg\" class=\"fullwidth\" alt=\"\" />\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h1 class=\"nomargin\">Login</h1>
\t\t\t\t</div>
\t\t\t\t<!-- /page title -->\t\t\t\t
\t\t\t\t\t\t</div>

";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
\t<div class=\"twelvecol column\">
\t\t<div class=\"twelvecol column\">
\t\t\t<h3>Digite seu login e senha</h3>
\t\t\t\t
\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t    ";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t<p class=\"alert-text\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t    <div class=\"inputLabel\">
\t\t\t    \t<input type=\"text\" id=\"username\" placeholder=\"digite seu email\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t</div>
\t\t 
\t\t\t    <div class=\"inputLabel\">
\t\t\t    \t<input type=\"password\" placeholder=\"digite sua senha\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"space\">                      
\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"link-generico\">Esqueci minha senha</a><br/>
\t\t\t\t</div>

\t\t\t    <input type=\"hidden\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

\t\t\t    <input class=\"ButtonRegister\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Entrar\">
\t\t\t</form>

\t\t</div>\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  79 => 34,  75 => 32,  69 => 29,  66 => 28,  64 => 27,  59 => 25,  55 => 24,  48 => 19,  45 => 18,  32 => 7,  29 => 6,);
    }
}
