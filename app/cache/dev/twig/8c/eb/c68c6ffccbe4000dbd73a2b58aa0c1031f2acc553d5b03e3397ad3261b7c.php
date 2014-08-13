<?php

/* ::base.html.twig */
class __TwigTemplate_8cebc68c6ffccbe4000dbd73a2b58aa0c1031f2acc553d5b03e3397ad3261b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'featuredcontent' => array($this, 'block_featuredcontent'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Aula com vc</title>
    
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"/academy/js/html5.js\"></script>
    <![endif]-->
    
    <meta name='robots' content='noindex,follow' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Aula com vc &raquo; Feed\" href=\"http://projetofinal.dev/?feed=rss2\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Aula com vc &raquo; Comments Feed\" href=\"http://projetofinal.dev/?feed=comments-rss2\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Aula com vc &raquo; Home Comments Feed\" href=\"http://projetofinal.dev/?feed=rss2&#038;page_id=2129\" />
<link rel='stylesheet' id='general-css'  href='/academy/style.css?ver=3.9' type='text/css' media='all' />
<script type='text/javascript' src='http://projetofinal.dev/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>
<script type='text/javascript' src='http://projetofinal.dev/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='/academy/js/jquery.hoverIntent.min.js?ver=3.9'></script>
<script type='text/javascript' src='/academy/js/jquery.placeholder.min.js?ver=3.9'></script>
<script type='text/javascript' src='/academy/js/jplayer/jquery.jplayer.min.js?ver=3.9'></script>
<script type='text/javascript' src='/academy/js/jquery.themexSlider.js?ver=3.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var options = {\"templateDirectory\":\"http:\\/\\/projetofinal.dev\\/wp-content\\/themes\\/academy\\/\"};
/* ]]> */
</script>
<script type='text/javascript' src='/academy/js/jquery.raty.min.js?ver=3.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var options = {\"templateDirectory\":\"http:\\/\\/projetofinal.dev\\/wp-content\\/themes\\/academy\\/\"};
/* ]]> */
</script>
<script type='text/javascript' src='/academy/js/general.js?ver=3.9'></script>
<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"http://projetofinal.dev/xmlrpc.php?rsd\" />
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"http://projetofinal.dev/wp-includes/wlwmanifest.xml\" /> 
<link rel='next' title='About' href='http://projetofinal.dev/?page_id=183' />
<meta name=\"generator\" content=\"WordPress 3.9\" />
<link rel='canonical' href='http://projetofinal.dev/' />
<link rel='shortlink' href='http://projetofinal.dev/' />
<link rel=\"shortcut icon\" href=\"/academy/framework/assets/images/favicon.ico\" /><style type=\"text/css\">.featured-content{}body, input, select, textarea{}h1,h2,h3,h4,h5,h6, .header-navigation div > ul > li > a{}input[type=\"submit\"], input[type=\"button\"], .button, .jp-play-bar, .jp-volume-bar-value, .free-course .course-price .price-text, .lessons-listing .lesson-attachments a, ul.styled-list.style-4 li:before, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover{}.free-course .course-price .corner{}.button.secondary, .quiz-listing .question-number, .lessons-listing .lesson-title .course-status, .course-price .price-text, .course-price .corner, .course-progress span, .questions-listing .question-replies, .course-price .corner-background, .user-links a:hover, .payment-listing .expanded .toggle-title:before, .styled-list.style-5 li:before, .faq-toggle .toggle-title:before, .lesson-toggle, ul.styled-list.style-1 li:before, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover{}a, a:hover, a:focus, ul.styled-list li > a:hover{}.button.dark, .jp-gui, .jp-controls a, .jp-video-play-icon, .header-wrap, .header-navigation ul ul, .select-menu, .search-form, .mobile-search-form, .login-button .tooltip-text, .footer-wrap, .site-footer:after, .site-header:after, .widget-title{}.jp-jplayer{}.widget-title{}::-moz-selection{}::selection{}</style><style type=\"text/css\">@font-face {
                        font-family: \"Crete Round\";
                        src: url(\"/academy/fonts/creteround-regular-webfont.eot\");
                        src: url(\"/academy/fonts/creteround-regular-webfont.eot?#iefix\") format(\"embedded-opentype\"),
                             url(\"/academy/fonts/creteround-regular-webfont.woff\") format(\"woff\"),
                             url(\"/academy/fonts/creteround-regular-webfont.ttf\") format(\"truetype\"),
                             url(\"/academy/fonts/creteround-regular-webfont.svg#crete_roundregular\") format(\"svg\");
                        font-weight: normal;
                        font-style: normal;
                    }</style><script type=\"text/javascript\">
            WebFontConfig = {google: { families: [ \"Open Sans:400,400italic,600\" ] } };
            (function() {
                var wf = document.createElement(\"script\");
                wf.src = (\"https:\" == document.location.protocol ? \"https\" : \"http\") + \"://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js\";
                wf.type = \"text/javascript\";
                wf.async = \"true\";
                var s = document.getElementsByTagName(\"script\")[0];
                s.parentNode.insertBefore(wf, s);
            })();
            </script>   <style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body class=\"home page page-id-2129 page-template-default\">

    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    <div class=\"site-wrap\">
        <div class=\"header-wrap\">
            <header class=\"site-header\">
                <div class=\"row\">
                    <div class=\"site-logo left\">
                        <a href=\"http://projetofinal.dev/\" rel=\"home\">
                            <img src=\"/academy/images/logo.png\" alt=\"Aula com vc\" />
                        </a>
                    </div>
                    <!-- /logo -->
                    ";
        // line 75
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 76
        echo "                </div>          
            </header>
            <!-- /header -->
        </div>
        <div class=\"featured-content\">
            ";
        // line 81
        $this->displayBlock('featuredcontent', $context, $blocks);
        // line 82
        echo "                    
        </div>
        <!-- /featured -->
        <div class=\"main-content\">
            ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "        </div>
            <!-- /content -->
        <div class=\"footer-wrap\">
            <footer class=\"site-footer\">
                <div class=\"row\">
                    <div class=\"copyright left\">
                        Academy Theme &copy; 2014                       
                    </div>
                    <nav class=\"footer-navigation right\">
                        <div class=\"menu-footer-menu-container\">
                            <ul id=\"menu-footer-menu\" class=\"menu\">
                                <li id=\"menu-item-2136\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2129 current_page_item menu-item-2136\"><a href=\"http://projetofinal.dev/\">Home</a></li>
                                <li id=\"menu-item-2151\" class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-2151\"><a href=\"http://projetofinal.dev/?course_category=all\">Aulas</a></li>
                                <li id=\"menu-item-2134\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2134\"><a href=\"http://projetofinal.dev/?cat=2\">Notícias</a></li>
                                <li id=\"menu-item-2149\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2149\"><a href=\"http://projetofinal.dev/?page_id=183\">Sobre</a></li>
                                <li id=\"menu-item-2139\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2139\"><a href=\"http://projetofinal.dev/?page_id=601\">Ajuda</a></li>
                            </ul>
                        </div>                     
                    </nav>
                    <!-- /navigation -->                
                </div>          
            </footer>               
        </div>
        <!-- /footer -->            
        </div>
        <!-- /site wrap -->
    <script type='text/javascript' src='http://projetofinal.dev/wp-includes/js/comment-reply.min.js?ver=3.9'></script>
    </body>
</html>";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 81
    public function block_featuredcontent($context, array $blocks = array())
    {
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 86,  157 => 81,  152 => 64,  120 => 87,  118 => 86,  112 => 82,  110 => 81,  103 => 76,  101 => 75,  89 => 65,  87 => 64,  22 => 1,);
    }
}
