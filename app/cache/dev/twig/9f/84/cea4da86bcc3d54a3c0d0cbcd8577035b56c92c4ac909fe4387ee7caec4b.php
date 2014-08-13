<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9f84cea4da86bcc3d54a3c0d0cbcd8577035b56c92c4ac909fe4387ee7caec4b extends Twig_Template
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
        // line 2
        echo "<script type=\"text/javascript\">

\$(document).ready(function () {



\t\$(\"#form\").validate({
\t\t\t

\t\t});

});

</script>
<form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" id=\"form\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"new_entity_factories_free_entity_factory\" novalidate>
    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    \t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo " 
 
\t    <div class=\"inputLabel\">
\t    \t
\t    \t
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "rounder", "placeholder" => "Nome Completo")));
        echo "
\t\t\t";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "errors")) > 0)) {
            // line 25
            echo "\t    \t\t<div class=\"alert\">
\t\t\t\t\t<p class=\"alert-text\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "errors"), 0, array(), "array"), "message"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t    \t";
        }
        // line 29
        echo "\t\t</div>

\t\t<div class=\"inputLabel\">\t
\t\t\t\t
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "rounder", "placeholder" => "Apelido")));
        echo "
\t\t\t";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), "vars"), "errors")) > 0)) {
            // line 35
            echo "\t    \t\t<div class=\"alert\">
\t\t\t\t\t<p class=\"alert-text\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), "vars"), "errors"), 0, array(), "array"), "message"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t    \t";
        }
        // line 39
        echo "\t\t</div>

\t\t<div class=\"inputLabel\">
\t\t\t
\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "rounder", "placeholder" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "label"))));
        echo "
\t\t\t";
        // line 44
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "errors")) > 0)) {
            // line 45
            echo "\t    \t\t<div class=\"alert\">
\t\t\t\t\t<p class=\"alert-text\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "errors"), 0, array(), "array"), "message"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t    \t";
        }
        // line 49
        echo "\t\t</div>

\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 52
            echo "\t\t    <div class=\"inputLabel\">
\t\t    \t
\t\t        ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "rounder", "placeholder" => $this->getAttribute($this->getAttribute((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), "vars"), "label"))));
            echo "
\t\t        ";
            // line 55
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), "vars"), "errors")) > 0)) {
                // line 56
                echo "\t    \t\t\t<div class=\"alert\">
\t\t\t\t\t\t<p class=\"alert-text\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), "vars"), "errors"), 0, array(), "array"), "message"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t    \t\t";
            }
            // line 60
            echo "\t\t        
\t\t        
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
\t\t
\t

\t    <div>
\t        <input class=\"ButtonRegister\" type=\"submit\" value=\"Cadastre-se. É grátis!\" />
\t    </div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  137 => 60,  131 => 57,  128 => 56,  126 => 55,  122 => 54,  118 => 52,  114 => 51,  110 => 49,  104 => 46,  101 => 45,  99 => 44,  95 => 43,  89 => 39,  83 => 36,  80 => 35,  78 => 34,  74 => 33,  68 => 29,  59 => 25,  57 => 24,  53 => 23,  45 => 18,  41 => 17,  35 => 16,  19 => 2,  94 => 47,  92 => 46,  73 => 30,  62 => 26,  58 => 20,  52 => 17,  49 => 16,  47 => 15,  42 => 13,  38 => 12,  31 => 7,  28 => 6,);
    }
}
