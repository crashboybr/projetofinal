<?php

/* ::menu.html.twig */
class __TwigTemplate_40c3012e39733752ed11baeb58b886ae4bc541ae3346eaa193a5aa99249cc117 extends Twig_Template
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
        echo "<div class=\"header-options right clearfix\">                 
    <div class=\"login-options right\">
                                            
        <div class=\"button-wrap left tooltip login-button\">
            <a href=\"#\" class=\"button dark\"><span class=\"button-icon login\"></span>Logar</a>
            <div class=\"tooltip-wrap\">
                <div class=\"tooltip-text\">
                    <form action=\"http://projetofinal.dev/wp-admin/admin-ajax.php\" class=\"ajax-form popup-form\" method=\"POST\">
                        <div class=\"message\"></div>
                        <div class=\"field-wrap\">
                            <input type=\"text\" name=\"user_login\" value=\"Username\" />
                        </div>
                        <div class=\"field-wrap\">
                            <input type=\"password\" name=\"user_password\" value=\"Password\" />
                        </div>
                        <div class=\"button-wrap left nomargin\">
                            <a href=\"#\" class=\"button submit-button\">Logar</a>
                        </div>                                          
                                                                    <div class=\"button-wrap switch-button left\">
                            <a href=\"#\" class=\"button dark\" title=\"Password Recovery\">
                                <span class=\"button-icon help\"></span>
                            </a>
                        </div>
                        <input type=\"hidden\" name=\"user_action\" value=\"login_user\" />
                        <input type=\"hidden\" name=\"user_redirect\" value=\"\" />
                        <input type=\"hidden\" name=\"nonce\" class=\"nonce\" value=\"aa993b5493\" />
                        <input type=\"hidden\" name=\"action\" class=\"action\" value=\"themex_update_user\" />
                    </form>
                </div>
            </div>
            <div class=\"tooltip-wrap password-form\">
                <div class=\"tooltip-text\">
                    <form action=\"http://projetofinal.dev/wp-admin/admin-ajax.php\" class=\"ajax-form popup-form\" method=\"POST\">
                        <div class=\"message\"></div>
                        <div class=\"field-wrap\">
                            <input type=\"text\" name=\"user_email\" value=\"Email\" />
                        </div>
                        <div class=\"button-wrap left nomargin\">
                            <a href=\"#\" class=\"button submit-button\">Reset Password</a>
                        </div>
                        <input type=\"hidden\" name=\"user_action\" value=\"reset_password\" />
                        <input type=\"hidden\" name=\"nonce\" class=\"nonce\" value=\"aa993b5493\" />
                        <input type=\"hidden\" name=\"action\" class=\"action\" value=\"themex_update_user\" />
                    </form>
                </div>
            </div>
        </div>
        <div class=\"button-wrap left\">
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"button\">
                <span class=\"button-icon register\"></span>Register                              
            </a>
        </div>
    </div>
    <!-- /login options -->                                     
    <div class=\"search-form right\">
        <form role=\"search\" method=\"GET\" action=\"http://projetofinal.dev/\">
            <input type=\"text\" value=\"\" name=\"s\" />
        </form>                     
    </div>                       
    <!-- /search form -->
</div>
<!-- /header options -->
                    <div class=\"mobile-search-form\">
                        <form role=\"search\" method=\"GET\" action=\"http://projetofinal.dev/\">
                            <input type=\"text\" value=\"\" name=\"s\" />
                        </form>                 
                    </div>
                    <!-- /mobile search form -->
                    <nav class=\"header-navigation right\">
                        <div class=\"menu\"><ul id=\"menu-main-menu\" class=\"menu\"><li id=\"menu-item-2146\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2129 current_page_item menu-item-2146\"><a href=\"http://projetofinal.dev/\">Home</a></li>
<li id=\"menu-item-2138\" class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-2138\"><a href=\"http://projetofinal.dev/?course_category=all\">Aulas</a></li>
<li id=\"menu-item-2131\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2131\"><a href=\"http://projetofinal.dev/?page_id=2112\">Planos</a></li>
<li id=\"menu-item-2133\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2133\"><a href=\"http://projetofinal.dev/?cat=2\">Notícias</a></li>
<li id=\"menu-item-2130\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2130\"><a href=\"http://projetofinal.dev/?page_id=183\">Sobre</a></li>
<li id=\"menu-item-2154\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2154\"><a href=\"http://projetofinal.dev/?page_id=601\">Ajuda</a></li>
</ul></div>                     
                        <div class=\"select-menu\">
                            <span></span>
                            <select><option value=\"http://projetofinal.dev/\">Home</option><option value=\"http://projetofinal.dev/?course_category=all\">Aulas</option><option value=\"http://projetofinal.dev/?page_id=2112\">Planos</option><option value=\"http://projetofinal.dev/?cat=2\">Notícias</option><option value=\"http://projetofinal.dev/?page_id=183\">Sobre</option><option value=\"http://projetofinal.dev/?page_id=601\">Ajuda</option></select>                           
                        </div>
                        <!--/ select menu-->
                    </nav>
                    <!-- /navigation -->   ";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 49,  19 => 1,);
    }
}
