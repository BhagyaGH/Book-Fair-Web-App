<?php

/* BookFairBookshopBundle:Login:main.html.twig */
class __TwigTemplate_5681fd8696d09c858e669cc6e177d4ce4e3133992bef2db08ec833cd81055b6a extends Twig_Template
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

        <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/images/icon.ico"), "html", null, true);
        echo "\">

        <title>Colombo International Book Fair 2014</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/cover.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/assets/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>

        <div class=\"site-wrapper\">

            <div class=\"site-wrapper-inner\">

                <div class=\"cover-container\">

                    <div class=\"masthead clearfix\">
                        <div class=\"inner\">
                            <h4 class=\"masthead-brand\">Colombo Intenational Book Fair 2014</h4>
                            <ul class=\"nav masthead-nav\">
                                <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("book_fair_login");
        echo "\">Login</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("book_fair_register_key");
        echo "\">Sign Up</a></li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("bookshop_about");
        echo "\">About</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"inner cover\">
                        <br><br>
                        <p class=\"lead\">
                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/images/icon.ico"), "html", null, true);
        echo "\">
                        </p>
                        <h1 class=\"cover-heading\">Bookshop Management System for Book Fair 2014.</h1>
                        <p class=\"lead\">Bookshop management can easily manage the books in the Colombo International Book Fair and notify their customers through the Android Application. This helps the bookshops to attract more and more customers to their stall and earn more.</p>
                    </div>

                    <div class=\"mastfoot\">
                        <div class=\"inner\">
                            <br>
                            <p>Developed By, Bhagya Gayathri Hettige.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"../../dist/js/bootstrap.min.js\"></script>
        <script src=\"../../assets/js/docs.min.js\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BookFairBookshopBundle:Login:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 51,  81 => 43,  77 => 42,  73 => 41,  49 => 20,  42 => 16,  36 => 13,  28 => 8,  19 => 1,);
    }
}
