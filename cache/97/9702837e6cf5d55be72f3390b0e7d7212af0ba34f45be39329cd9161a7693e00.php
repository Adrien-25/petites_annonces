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

/* pages/index.html.twig */
class __TwigTemplate_e672e720880aa46cda09dac894d4a8ff6dc6957d1ccf1599d33ad2e771686a79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'add' => [$this, 'block_add'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./base.html.twig", "pages/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "listes des annonces";
    }

    // line 3
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"mt-5 px-4 flex-wrap d-flex justify-content-around\" id=\"scroller-layout\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listes_annonces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 6
            echo "  <div
    class=\"scroller-item d-flex justify-content-between text-dark border border-dark flex-xl-row flex-column-reverse bg-light p-2 mb-5 col-lg-5 col-sm-5 col-10\"
    id=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
    <div class=\"annonce-text d-flex justify-content-between flex-column text-center text-xl-left\">
      <h2>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_titre", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
      <p class=\"text-danger ml-2 prix\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_prix", [], "any", false, false, false, 11), "html", null, true);
            echo " €</p>
      <div>
        <p class=\"ml-2 mb-0 font-italic\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
        <p class=\"ml-2 font-weight-bold\">Le ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_date_ecriture", [], "any", false, false, false, 14), "j m Y"), "html", null, true);
            echo "</p>
      </div>
      <div class=\"d-flex justify-content-center btn-annonce\">
        <a href=\"annonce/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"btn bg-danger text-light d-flex justify-content-center\">
          <i class=\"material-icons mr-2\">pageview</i>
          <span>Détails</span>
        </a>
        <a href=\"telecharger/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
          <i class=\"material-icons mr-2\">picture_as_pdf</i>
          <span>Télécharger</span>
        </a>
        ";
            // line 27
            echo "      </div>
    </div>
    ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 29)) {
                // line 30
                echo "    ";
                $context["image"] = twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 30);
                // line 31
                echo "    ";
            } else {
                // line 32
                echo "    ";
                $context["image"] = (twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 32) . ".jpg");
                // line 33
                echo "    ";
            }
            // line 34
            echo "    <div
      class=\"d-flex align-items-center justify-content-xl-end justify-content-lg-center justify-content-md-end justify-content-center p-0 ml-2\">
      <img class=\"fit-picture mw-500 mh-500 img-fluid\" src=\"../public/assets/media/";
            // line 36
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\"
        alt=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_nom", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
    </div>

  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  <div id=\"first-loader\" class=\"ajax-loader text-center col-12 mb-5\" value=";
        echo twig_escape_filter($this->env, ($context["Nbr_annonces"] ?? null), "html", null, true);
        echo ">
    <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
  </div>
  <div id=\"fin-annonce\" class=\"fin-annnonce text-center d-none col-12 m-3 display-4 font-weight-bold\">
    Fin des annonces
  </div>
</div>
<a class=\"scrollup btn bg-danger\"><i class=\"material-icons text-light display-5 \">arrow_upward</i></a>
";
    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "
<div class=\"bg-dark p-4 text-light d-flex justify-content-between\">
  <div>
    &copy;
    <script>
      document.write(new Date().getFullYear());
    </script>
    <span>Lama Shop</span>
  </div>
  <div class=\"\">
    <a href=\"https://github.com/fouad-git\" class=\"text-danger\" target=\"_blank\">Fouad Lyafousi</a>
    <span class=\"fs-20\"> • </span>
    <a href=\"https://github.com/fouad-git\" class=\"text-danger\" target=\"_blank\">Adrien Schmidt</a>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  160 => 52,  146 => 43,  134 => 37,  130 => 36,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  112 => 29,  108 => 27,  101 => 21,  94 => 17,  88 => 14,  84 => 13,  79 => 11,  75 => 10,  70 => 8,  66 => 6,  62 => 5,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}
{% block title %}listes des annonces{% endblock title %}
{% block add %}
<div class=\"mt-5 px-4 flex-wrap d-flex justify-content-around\" id=\"scroller-layout\">
  {% for annonce in listes_annonces %}
  <div
    class=\"scroller-item d-flex justify-content-between text-dark border border-dark flex-xl-row flex-column-reverse bg-light p-2 mb-5 col-lg-5 col-sm-5 col-10\"
    id=\"{{annonce.ann_id}}\">
    <div class=\"annonce-text d-flex justify-content-between flex-column text-center text-xl-left\">
      <h2>{{annonce.ann_titre}}</h2>
      <p class=\"text-danger ml-2 prix\">{{annonce.ann_prix}} €</p>
      <div>
        <p class=\"ml-2 mb-0 font-italic\">{{annonce.cat_libelle}}</p>
        <p class=\"ml-2 font-weight-bold\">Le {{annonce.ann_date_ecriture|date('j m Y')}}</p>
      </div>
      <div class=\"d-flex justify-content-center btn-annonce\">
        <a href=\"annonce/{{annonce.ann_id}}\" class=\"btn bg-danger text-light d-flex justify-content-center\">
          <i class=\"material-icons mr-2\">pageview</i>
          <span>Détails</span>
        </a>
        <a href=\"telecharger/{{annonce.ann_id}}\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
          <i class=\"material-icons mr-2\">picture_as_pdf</i>
          <span>Télécharger</span>
        </a>
        {# <a href=\"modifier.php?{{annonce.ann_id}}\" class=\"btn bg-danger\">Modifier</a>
          <a href=\"supprimer.php?{{annonce.ann_id}}\" class=\"btn bg-danger\">Supprimer</a> #}
      </div>
    </div>
    {% if annonce.ann_image_url %}
    {% set image = annonce.ann_image_url %}
    {% else %}
    {% set image = annonce.cat_libelle ~ '.jpg'  %}
    {% endif %}
    <div
      class=\"d-flex align-items-center justify-content-xl-end justify-content-lg-center justify-content-md-end justify-content-center p-0 ml-2\">
      <img class=\"fit-picture mw-500 mh-500 img-fluid\" src=\"../public/assets/media/{{image}}\"
        alt=\"{{annonce.ann_image_nom}}\">
    </div>

  </div>

  {% endfor %}
  <div id=\"first-loader\" class=\"ajax-loader text-center col-12 mb-5\" value={{Nbr_annonces}}>
    <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
  </div>
  <div id=\"fin-annonce\" class=\"fin-annnonce text-center d-none col-12 m-3 display-4 font-weight-bold\">
    Fin des annonces
  </div>
</div>
<a class=\"scrollup btn bg-danger\"><i class=\"material-icons text-light display-5 \">arrow_upward</i></a>
{% endblock add %}
{% block footer %}

<div class=\"bg-dark p-4 text-light d-flex justify-content-between\">
  <div>
    &copy;
    <script>
      document.write(new Date().getFullYear());
    </script>
    <span>Lama Shop</span>
  </div>
  <div class=\"\">
    <a href=\"https://github.com/fouad-git\" class=\"text-danger\" target=\"_blank\">Fouad Lyafousi</a>
    <span class=\"fs-20\"> • </span>
    <a href=\"https://github.com/fouad-git\" class=\"text-danger\" target=\"_blank\">Adrien Schmidt</a>
  </div>

</div>
{% endblock footer %}", "pages/index.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\index.html.twig");
    }
}
