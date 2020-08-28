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
class __TwigTemplate_29b4963d18e6a3a4f5fb1717513bcf07dbf1d0357f4dd9f2e3582df24a6b950c extends Template
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
        // line 15
        echo "</head>

<body>
    <main>
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "    </main>
    <footer>
        ";
        // line 40
        $this->displayBlock('javascript', $context, $blocks);
        // line 44
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

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Base Twig";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
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

    // line 40
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        <!--Lien JavaScript materialize-->
        <script type=\"text/javascript\" src=\"../../public/js/materialize.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  120 => 40,  99 => 20,  95 => 19,  83 => 13,  74 => 6,  70 => 5,  63 => 44,  61 => 40,  57 => 38,  55 => 19,  49 => 15,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
