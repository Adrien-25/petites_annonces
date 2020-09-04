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
        <!--Barre de navigation-->
        <nav class=\"navbar navbar-dark bg-dark justify-content-between mb-5\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">LamaShop</a>
                <div class=\"d-flex\">
                    <!-- Formulaire de recherche -->
                    <form class=\"form-inline mr-4\">
                        <select class=\"custom-select rounded-0 bg-danger text-light border-0 font-weight-bold\"
                            id=\"SearchForm\">
                            <option selected>Catégories</option>
                            <option value=\"Immobilier\">Immobilier</option>
                        </select>
                        <input class=\"form-control rounded-0 border-0\" type=\"search\" placeholder=\"Une petite envie ?\"
                            aria-label=\"Search\">
                        <button class=\"btn rounded-0 rounded-right d-flex bg-danger\" type=\"submit\"><i
                                class=\"material-icons text-light\">search</i></button>
                    </form>
                    <!-- Lien vers page poster -->
                    <a href=\"poster\" class=\"btn btn-danger d-flex p-2\" type=\"button\">
                        <span class=\"d-flex mr-2\">
                            <i class=\"material-icons\">add_circle_outline</i>
                        </span>
                        <span class=\"font-weight-bold\">Poster une annonce</span>
                    </a>
                </div>
            </div>
        </nav>
        ";
        // line 53
        $this->displayBlock('add', $context, $blocks);
        // line 56
        echo "    </main>
    <footer>
    </footer>
    ";
        // line 59
        $this->displayBlock('javascript', $context, $blocks);
        // line 71
        echo "
</body>

</html>";
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
    <!--Lien page de style-->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    <!--Lien CDN CSS Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
        integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
    ";
        // line 17
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <!--Titre-->
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

    // line 53
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "
        ";
    }

    // line 59
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <!--Js-->
    <script src=\"../public/js/app.js\"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\">
    </script>

    ";
    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  140 => 59,  135 => 54,  131 => 53,  119 => 20,  114 => 17,  102 => 6,  98 => 5,  91 => 71,  89 => 59,  84 => 56,  82 => 53,  49 => 22,  47 => 5,  41 => 1,);
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
    <!--Lien page de style-->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    <!--Lien CDN CSS Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
        integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
    {# CDN jQuery #}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <!--Titre-->
    <title>{% block title %}Base Twig{% endblock title %} </title>
    {% endblock head %}
</head>

<body>
    <main>
        <!--Barre de navigation-->
        <nav class=\"navbar navbar-dark bg-dark justify-content-between mb-5\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">LamaShop</a>
                <div class=\"d-flex\">
                    <!-- Formulaire de recherche -->
                    <form class=\"form-inline mr-4\">
                        <select class=\"custom-select rounded-0 bg-danger text-light border-0 font-weight-bold\"
                            id=\"SearchForm\">
                            <option selected>Catégories</option>
                            <option value=\"Immobilier\">Immobilier</option>
                        </select>
                        <input class=\"form-control rounded-0 border-0\" type=\"search\" placeholder=\"Une petite envie ?\"
                            aria-label=\"Search\">
                        <button class=\"btn rounded-0 rounded-right d-flex bg-danger\" type=\"submit\"><i
                                class=\"material-icons text-light\">search</i></button>
                    </form>
                    <!-- Lien vers page poster -->
                    <a href=\"poster\" class=\"btn btn-danger d-flex p-2\" type=\"button\">
                        <span class=\"d-flex mr-2\">
                            <i class=\"material-icons\">add_circle_outline</i>
                        </span>
                        <span class=\"font-weight-bold\">Poster une annonce</span>
                    </a>
                </div>
            </div>
        </nav>
        {% block add %}

        {% endblock add %}
    </main>
    <footer>
    </footer>
    {% block javascript %}
    <!--Js-->
    <script src=\"../public/js/app.js\"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"
        integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"
        integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\">
    </script>

    {% endblock javascript %}

</body>

</html>", "./base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
