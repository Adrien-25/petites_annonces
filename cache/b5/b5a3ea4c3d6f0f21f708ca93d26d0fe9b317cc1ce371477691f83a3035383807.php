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
            'content' => [$this, 'block_content'],
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
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-1\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Dropdown
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </nav>
";
        // line 84
        $this->displayBlock('add', $context, $blocks);
        // line 87
        echo "    </main>
    <footer>

    </footer>
    ";
        // line 91
        $this->displayBlock('javascript', $context, $blocks);
        // line 105
        echo "</body>

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

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        <div class=\"header\">
            <a href=\"\" class=\"icon\" onclick=\"Burger()\">
                <i class=\"material-icons\">menu</i>
            </a>
            <a href=\"#default\" class=\"logo\">LamaShop</a>
            <div>
                <form action=\"\">
                    <div>
                        <select id=\"categorie\" name=\"categorie\" form=\"carform\">
                            <option value=\"0\">Toutes nos catégories</option>
                        </select>
                    </div>
                    <div>
                        <input type=\"text\" id=\"fname\" name=\"fname\">
                    </div>
                </form>

            </div>
        </div>
        ";
    }

    // line 84
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    
";
    }

    // line 91
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
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
        return array (  185 => 92,  181 => 91,  176 => 85,  172 => 84,  149 => 27,  145 => 26,  133 => 20,  117 => 6,  113 => 5,  107 => 105,  105 => 91,  99 => 87,  97 => 84,  58 => 47,  56 => 26,  50 => 22,  48 => 5,  42 => 1,);
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
        {% block content %}
        <div class=\"header\">
            <a href=\"\" class=\"icon\" onclick=\"Burger()\">
                <i class=\"material-icons\">menu</i>
            </a>
            <a href=\"#default\" class=\"logo\">LamaShop</a>
            <div>
                <form action=\"\">
                    <div>
                        <select id=\"categorie\" name=\"categorie\" form=\"carform\">
                            <option value=\"0\">Toutes nos catégories</option>
                        </select>
                    </div>
                    <div>
                        <input type=\"text\" id=\"fname\" name=\"fname\">
                    </div>
                </form>

            </div>
        </div>
        {% endblock content %}
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-1\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Dropdown
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
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

</html>", "./base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
