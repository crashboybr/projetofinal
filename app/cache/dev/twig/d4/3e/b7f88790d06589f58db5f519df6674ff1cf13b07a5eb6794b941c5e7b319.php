<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d43eb7f88790d06589f58db5f519df6674ff1cf13b07a5eb6794b941c5e7b319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("iListFrontendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "iListFrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"content-left\">
\t<h3>Digite seu email e receberá uma nova senha por email</h3>

\t";
        // line 8
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
        // line 9
        echo "                       
</div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
