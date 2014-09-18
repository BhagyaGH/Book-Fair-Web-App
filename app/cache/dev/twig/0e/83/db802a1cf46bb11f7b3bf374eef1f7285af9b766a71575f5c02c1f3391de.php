<?php

/* BookFairBookshopBundle:Register:enterKey.html.twig */
class __TwigTemplate_0e83db802a1cf46bb11f7b3bf374eef1f7285af9b766a71575f5c02c1f3391de extends Twig_Template
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

        <title>Enter Validation Key</title>

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
        echo $this->env->getExtension('routing')->getPath("book_fair_register_key_check");
        echo "\" method=\"POST\">
                Please enter your validation key <input type=\"text\" name=\"vkey\" class=\"form-control\" placeholder=\"Validation Key\" required autofocus>
                <br>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>
            </form>

        </div>
                
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BookFairBookshopBundle:Register:enterKey.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }
}
