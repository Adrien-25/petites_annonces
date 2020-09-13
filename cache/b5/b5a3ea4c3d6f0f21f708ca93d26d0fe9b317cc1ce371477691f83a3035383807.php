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
            'reCaptcha' => [$this, 'block_reCaptcha'],
            'title' => [$this, 'block_title'],
            'add' => [$this, 'block_add'],
            'footer' => [$this, 'block_footer'],
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
        // line 29
        echo "</head>

<body>
    <main>
        <!--Barre de navigation-->
        <nav class=\"navbar navbar-dark bg-dark\">
            <div class=\"row col-12 justify-content-between\">
                <a class=\"navbar-brand\" href=\"accueil\">LamaShop</a>

                <!-- Formulaire de recherche -->
                <form class=\"search-bar form-inline justify-content-center mr-4\">
                    <select class=\"custom-select bg-danger text-light border-0 font-weight-bold cursor-pointer\"
                        id=\"SearchForm\">
                        <option selected>Catégories</option>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["catégorie"]) {
            // line 44
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catégorie"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catégorie"], "cat_libelle", [], "any", false, false, false, 44), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catégorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </select>
                    </select>
                    <input class=\"form-control rounded-0 border-0 col-lg-8\" type=\"search\"
                        placeholder=\"Une petite envie ?\" aria-label=\"Search\">
                    <button class=\"btn d-flex jusify-content-center bg-danger\" type=\"submit\"><i
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
        </nav>
        ";
        // line 63
        $this->displayBlock('add', $context, $blocks);
        // line 66
        echo "    </main>
    ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 87
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
    <link href=\"dropzone-5.7.0\\dist\\basic.css\" rel=\"stylesheet\">
    <link href=\"dropzone-5.7.0\\dist\\dropzone.css\" rel=\"stylesheet\">

    <!--Lien CDN CSS Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
        integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
    ";
        // line 20
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <!--Lien dropzone-->
    <script src=\"dropzone-5.7.0\\dist\\dropzone.js\"></script>
    <!-- Re Captcha -->
    ";
        // line 24
        $this->displayBlock('reCaptcha', $context, $blocks);
        // line 25
        echo "
    <!--Titre-->
    <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    ";
    }

    // line 24
    public function block_reCaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Base Twig";
    }

    // line 63
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "
        ";
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    
    ";
    }

    // line 70
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    <!--Js-->
    <script src=\"../public/js/infiniteScroll.js\"></script>
    <script src=\"../public/js/dragAndDrop.js\"></script>
    <script src=\"../public/js/formValidation.js\"></script>
    <script src=\"../public/js/reCaptcha.js\"></script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\" async defer>
    </script>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 71,  186 => 70,  181 => 68,  177 => 67,  172 => 64,  168 => 63,  161 => 27,  155 => 24,  149 => 27,  145 => 25,  143 => 24,  137 => 20,  122 => 6,  118 => 5,  111 => 87,  108 => 70,  106 => 67,  103 => 66,  101 => 63,  82 => 46,  71 => 44,  67 => 43,  51 => 29,  49 => 5,  43 => 1,);
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
    <link href=\"dropzone-5.7.0\\dist\\basic.css\" rel=\"stylesheet\">
    <link href=\"dropzone-5.7.0\\dist\\dropzone.css\" rel=\"stylesheet\">

    <!--Lien CDN CSS Bootstrap-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
        integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
    {# CDN jQuery #}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <!--Lien dropzone-->
    <script src=\"dropzone-5.7.0\\dist\\dropzone.js\"></script>
    <!-- Re Captcha -->
    {% block reCaptcha %}{% endblock reCaptcha %}

    <!--Titre-->
    <title>{% block title %}Base Twig{% endblock title %} </title>
    {% endblock head %}
</head>

<body>
    <main>
        <!--Barre de navigation-->
        <nav class=\"navbar navbar-dark bg-dark\">
            <div class=\"row col-12 justify-content-between\">
                <a class=\"navbar-brand\" href=\"accueil\">LamaShop</a>

                <!-- Formulaire de recherche -->
                <form class=\"search-bar form-inline justify-content-center mr-4\">
                    <select class=\"custom-select bg-danger text-light border-0 font-weight-bold cursor-pointer\"
                        id=\"SearchForm\">
                        <option selected>Catégories</option>
                            {% for catégorie in categories %}
                            <option value=\"{{catégorie.id}}\">{{catégorie.cat_libelle}}</option>
                            {% endfor %}
                        </select>
                    </select>
                    <input class=\"form-control rounded-0 border-0 col-lg-8\" type=\"search\"
                        placeholder=\"Une petite envie ?\" aria-label=\"Search\">
                    <button class=\"btn d-flex jusify-content-center bg-danger\" type=\"submit\"><i
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
        </nav>
        {% block add %}

        {% endblock add %}
    </main>
    {% block footer %}
    
    {% endblock footer %}
    {% block javascript %}
    <!--Js-->
    <script src=\"../public/js/infiniteScroll.js\"></script>
    <script src=\"../public/js/dragAndDrop.js\"></script>
    <script src=\"../public/js/formValidation.js\"></script>
    <script src=\"../public/js/reCaptcha.js\"></script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\" async defer>
    </script>
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
