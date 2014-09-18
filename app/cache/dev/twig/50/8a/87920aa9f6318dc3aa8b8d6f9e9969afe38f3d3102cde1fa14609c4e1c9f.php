<?php

/* BookFairBookshopBundle:Admin:bookshopshow.html.twig */
class __TwigTemplate_508a87920aa9f6318dc3aa8b8d6f9e9969afe38f3d3102cde1fa14609c4e1c9f extends Twig_Template
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

        <title>Admin</title>

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
                    <a class=\"navbar-brand\" href=\"#\">Administration Panel</a>
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
                    <form class=\"navbar-form navbar-right\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                    </form>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2 sidebar\">
                    <ul class=\"nav nav-sidebar\">
                        <li class=\"active\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin_books");
        echo "\">Books</a></li>
                        <li class=\"active\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_bookshops");
        echo "\">Bookshops</a></li>
                        <li class=\"active\"><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_validation");
        echo "\">Validation Keys</a></li>

                    </ul>

                </div>
                <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                    <h2 class=\"sub-header\">Bookshop Details</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <tbody>
                                <tr>
                                    <td>Bookshop Name</td>
                                    <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bookshop"]) ? $context["bookshop"] : $this->getContext($context, "bookshop")), "bookshopName"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Stall No</td>
                                    <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bookshop"]) ? $context["bookshop"] : $this->getContext($context, "bookshop")), "stallNo"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bookshop"]) ? $context["bookshop"] : $this->getContext($context, "bookshop")), "address"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Contact No</td>
                                    <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bookshop"]) ? $context["bookshop"] : $this->getContext($context, "bookshop")), "phone"), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <strong>Available Books:</strong>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <tbody>
                                ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 94
            echo "                                    <tr>
                                        ";
            // line 95
            $context["disPrice"] = (($this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "price") * (100 - $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "discount"))) / 100);
            // line 96
            echo "                                            <td><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "title"), "html", null, true);
            echo "</strong>
                                                <br>
                                                Discounted Price: ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["disPrice"]) ? $context["disPrice"] : $this->getContext($context, "disPrice")), "html", null, true);
            echo "</td>
                                            <td>
                                            <form class=\"form-signin\" role=\"form\" action=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("admin_book_show", array("bookshop_id" => 0));
            echo "\" method=\"POST\">
                                                <input type=\"hidden\" name=\"book_id\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "book_id"), "html", null, true);
            echo "\" class=\"form-control\">
                                                <button type=\"submit\">Details</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                            </tbody>
                        </table>
                    </div>

                    <br>           
                    <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_books");
        echo "\">Go Back</a>
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
        return "BookFairBookshopBundle:Admin:bookshopshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 112,  191 => 107,  179 => 101,  175 => 100,  170 => 98,  164 => 96,  162 => 95,  159 => 94,  155 => 93,  142 => 83,  135 => 79,  128 => 75,  121 => 71,  106 => 59,  102 => 58,  98 => 57,  82 => 44,  78 => 43,  56 => 24,  50 => 21,  43 => 17,  37 => 14,  29 => 9,  19 => 1,);
    }
}
