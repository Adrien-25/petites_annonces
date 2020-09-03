<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./base.html.twig */
class __TwigTemplate_9b5c2da669e66b2b8f1c27c0b08d4f6f2e81edcf918ef5eb6c4d4e5f52c05d69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'add' => [$this, 'block_add'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>

<body>
    <main>
        <!--Navbar-->
        
            

                        <nav class=\"navbar navbar-dark bg-dark justify-content-between\">
                            
                                <a class=\"navbar-brand\" href=\"#\">LamaShop</a>
                                <div class=\"d-flex\">
                                    <!-- Formulaire de recherche -->
                                    <form class=\"form-inline mr-4\">
                                        <select class=\"custom-select rounded-0 bg-danger text-light border-0 font-weight-bold\" id=\"SearchForm\">
                                            <option selected>Catégories</option>
                                            <option value=\"Immobilier\">Immobilier</option>
                                        </select>
                                        <input class=\"form-control rounded-0 border-0\" type=\"search\" placeholder=\"Une petite envie ?\" aria-label=\"Search\">
                                        <button class=\"btn rounded-0 rounded-right d-flex bg-danger\" type=\"submit\"><i class=\"material-icons text-light\">search</i></button>
                                    </form>
                                    <!-- Lien vers page poster -->
                                    <a href=\"#\" class=\"btn btn-danger d-flex p-2\" type=\"button\">
                                        <span class=\"d-flex mr-2\">
                                            <i class=\"material-icons\">add_circle_outline</i>
                                        </span>
                                        <span class=\"font-weight-bold\">Poster une annonce</span>
                                    </a>
                                
                            </div>
                        </nav>
                   

               
           
        
";
        // line 58
        $this->displayBlock('add', $context, $blocks);
        // line 61
        echo "    </main>
    <footer>

    </footer>
    ";
        // line 65
        $this->displayBlock('javascript', $context, $blocks);
        // line 79
        echo "</body>

</html>
<!-- Formulaire de recherche 
                <form class=\"form-inline\">
                    <div class=\"my-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                        </div>
                    </form>
                    -->";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <meta charset=\"UTF-8\">
    <!--Faire savoir au navigateur que le site Web est optimisé pour les mobiles-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!--Importer la police d'icônes Google-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <link href=\"css/style.css\" rel=\"stylesheet\">
    <!--Lien CDN Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\">
    </script>

    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Base Twig";
    }

    // line 58
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    
";
    }

    // line 65
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "    <!--Lien JavaScript Bootstrap-->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\">
    </script>
    <!--fontawesome-->
    <script src=\"https://kit.fontawesome.com/7fbb9a7a75.js\" crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  151 => 65,  146 => 59,  142 => 58,  130 => 20,  114 => 6,  110 => 5,  97 => 79,  95 => 65,  89 => 61,  87 => 58,  49 => 22,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    {% block head %}
    <meta charset=\"UTF-8\">
    <!--Faire savoir au navigateur que le site Web est optimisé pour les mobiles-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!--Importer la police d'icônes Google-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

    <link href=\"css/style.css\" rel=\"stylesheet\">
    <!--Lien CDN Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\">
    </script>

    <title>{% block title %}Base Twig{% endblock title %} </title>
    {% endblock head %}
</head>

<body>
    <main>
        <!--Navbar-->
        
            

                        <nav class=\"navbar navbar-dark bg-dark justify-content-between\">
                            
                                <a class=\"navbar-brand\" href=\"#\">LamaShop</a>
                                <div class=\"d-flex\">
                                    <!-- Formulaire de recherche -->
                                    <form class=\"form-inline mr-4\">
                                        <select class=\"custom-select rounded-0 bg-danger text-light border-0 font-weight-bold\" id=\"SearchForm\">
                                            <option selected>Catégories</option>
                                            <option value=\"Immobilier\">Immobilier</option>
                                        </select>
                                        <input class=\"form-control rounded-0 border-0\" type=\"search\" placeholder=\"Une petite envie ?\" aria-label=\"Search\">
                                        <button class=\"btn rounded-0 rounded-right d-flex bg-danger\" type=\"submit\"><i class=\"material-icons text-light\">search</i></button>
                                    </form>
                                    <!-- Lien vers page poster -->
                                    <a href=\"#\" class=\"btn btn-danger d-flex p-2\" type=\"button\">
                                        <span class=\"d-flex mr-2\">
                                            <i class=\"material-icons\">add_circle_outline</i>
                                        </span>
                                        <span class=\"font-weight-bold\">Poster une annonce</span>
                                    </a>
                                
                            </div>
                        </nav>
                   

               
           
        
{% block add %}
    
{% endblock add %}
    </main>
    <footer>

    </footer>
    {% block javascript %}
    <!--Lien JavaScript Bootstrap-->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\">
    </script>
    <!--fontawesome-->
    <script src=\"https://kit.fontawesome.com/7fbb9a7a75.js\" crossorigin=\"anonymous\"></script>
    {% endblock javascript %}
</body>

</html>
<!-- Formulaire de recherche 
                <form class=\"form-inline\">
                    <div class=\"my-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                        </div>
                    </form>
                    -->", "./base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
