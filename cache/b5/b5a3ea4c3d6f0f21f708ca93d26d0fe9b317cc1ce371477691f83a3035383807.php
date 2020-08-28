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

/* base.html.twig */
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
        // line 16
        echo "</head>

<body>
    <main>
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "    </main>
    <footer>
        ";
        // line 41
        $this->displayBlock('javascript', $context, $blocks);
        // line 45
        echo "    </footer>
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
    <!--Importer materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../public/sass/materialize.scss\" media=\"screen,projection\" />

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Base Twig";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <form>
                    <div class=\"input-field\">
                        <input id=\"search\" type=\"search\" required>
                        <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                        <i class=\"material-icons\">close</i>
                    </div>
                </form>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    <li><a href=\"sass.html\">Sass</a></li>
                    <li><a href=\"badges.html\">Components</a></li>
                    <li><a href=\"collapsible.html\">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        ";
    }

    // line 41
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "        <!--Lien JavaScript materialize-->
        <script type=\"text/javascript\" src=\"../../public/js/materialize.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  121 => 41,  100 => 21,  96 => 20,  84 => 14,  74 => 6,  70 => 5,  63 => 45,  61 => 41,  57 => 39,  55 => 20,  49 => 16,  47 => 5,  41 => 1,);
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
    <!--Importer materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../public/sass/materialize.scss\" media=\"screen,projection\" />

    <title>{% block title %}Base Twig{% endblock title %} </title>
    {% endblock head %}
</head>

<body>
    <main>
        {% block content %}
        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <form>
                    <div class=\"input-field\">
                        <input id=\"search\" type=\"search\" required>
                        <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                        <i class=\"material-icons\">close</i>
                    </div>
                </form>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    <li><a href=\"sass.html\">Sass</a></li>
                    <li><a href=\"badges.html\">Components</a></li>
                    <li><a href=\"collapsible.html\">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        {% endblock content %}
    </main>
    <footer>
        {% block javascript %}
        <!--Lien JavaScript materialize-->
        <script type=\"text/javascript\" src=\"../../public/js/materialize.min.js\"></script>
        {% endblock javascript %}
    </footer>
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
