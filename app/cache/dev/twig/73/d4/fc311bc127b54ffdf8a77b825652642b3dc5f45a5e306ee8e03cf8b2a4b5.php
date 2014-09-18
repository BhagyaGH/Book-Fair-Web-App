<?php

/* BookFairBookshopBundle:Admin:index.html.twig */
class __TwigTemplate_73d4fc311bc127b54ffdf8a77b825652642b3dc5f45a5e306ee8e03cf8b2a4b5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/images/icon.ico"), "html", null, true);
        echo "\">

        <title>Administrator</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/account.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>

    </head>

    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Administrator Panel</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("bookshop_about", array("bookshop_id" => 0));
        echo "\">About</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2 sidebar\">
                    <ul class=\"nav nav-sidebar\">
                        <li class=\"active\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("admin_books");
        echo "\">Books</a></li>
                        <li class=\"active\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_bookshops");
        echo "\">Bookshops</a></li>
                        <li class=\"active\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_validation");
        echo "\">Validation Keys</a></li>
                        
                    </ul>

                </div>
                <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                    <h2 class=\"sub-header\">Manage the Application</h2>
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/images/icon.ico"), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"../../dist/js/bootstrap.min.js\"></script>
        <script src=\"../../assets/js/docs.min.js\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BookFairBookshopBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 63,  103 => 56,  99 => 55,  95 => 54,  82 => 44,  78 => 43,  56 => 24,  50 => 21,  43 => 17,  37 => 14,  29 => 9,  19 => 1,);
    }
}
