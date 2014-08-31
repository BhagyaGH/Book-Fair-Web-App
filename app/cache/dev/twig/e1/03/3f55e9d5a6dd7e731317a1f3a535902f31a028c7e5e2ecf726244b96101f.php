<?php

/* BookFairBookshopBundle:Login:login.html.twig */
class __TwigTemplate_e1033f55e9d5a6dd7e731317a1f3a535902f31a028c7e5e2ecf726244b96101f extends Twig_Template
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
        
        <link rel=\"icon\" href=\"../../favicon.ico\">

        <title>Login</title>

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bookfairbookshop/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>

    </head>

    <body>

        <div class=\"container\">

            <form class=\"form-signin\" role=\"form\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("book_fair_login_validation");
        echo "\" method=\"POST\">
                <h2 class=\"form-signin-heading\">Sign in</h2>

                <input type=\"radio\" name=\"acc_type\" value=\"admin\" required>Administrator<br>
                <input type=\"radio\" name=\"acc_type\" value=\"bookshop\" required>Bookshop Management<br><br>

                Username <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                Password <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required>

                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>

                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
            </form>

            <form class=\"form-signin\" role=\"form\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("book_fair_register_key");
        echo "\" method=\"POST\">
                <br><br>
                Not a member? Register with your validation key.
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>
            </form>

        </div> 
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BookFairBookshopBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  55 => 23,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
