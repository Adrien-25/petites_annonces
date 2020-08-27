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
class __TwigTemplate_4d5fa35a2f2cb8afb365284caac8033f01e7796da82f65bdeb3f5f7544e74620 extends Template
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
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>
<body>
    <main>
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "    </main>
    <footer>
        ";
        // line 22
        $this->displayBlock('javascript', $context, $blocks);
        // line 26
        echo "    </footer> 
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <!--Faire savoir au navigateur que le site Web est optimisé pour les mobiles-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!--Importer la police d'icônes Google-->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Importer materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>
    
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

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <!--Lien JavaScript materialize-->
        <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "./base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  102 => 22,  98 => 19,  94 => 18,  82 => 13,  72 => 5,  68 => 4,  61 => 26,  59 => 22,  55 => 20,  53 => 18,  48 => 15,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./base.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\base.html.twig");
    }
}
