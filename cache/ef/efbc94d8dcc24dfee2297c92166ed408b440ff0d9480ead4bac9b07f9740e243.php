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

/* pages/ajouterAnnonce.html.twig */
class __TwigTemplate_9ed79cc481fba5c74523cb1ea3d827408418917349f49aa99a56950369bc9bcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listes_annonces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 2
            echo "  <div class=\"container text-light mb-2 scroller-item\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
    <div class=\"border border-dark bg-dark p-3 d-flex justify-content-between\">
      <div class=\"annonce-info d-flex justify-content-between mx-3\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_titre", [], "any", false, false, false, 5), "html", null, true);
            echo "</h2>
        <p class=\"text-light ml-2 prix\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_prix", [], "any", false, false, false, 6), "html", null, true);
            echo " €</p>
        <p class=\"ml-2 font-weight-bold\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
        <p class=\"ml-2 font-weight-bold\">Le ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_date_ecriture", [], "any", false, false, false, 8), "j m Y"), "html", null, true);
            echo "</p>
        <div class=\"d-flex\">
          <a href=\"/detail\" class=\"btn bg-danger text-light d-flex justify-content-center\">
            <i class=\"material-icons\">pageview</i>
            <span>Détails</span>
          </a>
          <a href=\"\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
            <i class=\"material-icons\">picture_as_pdf</i>
            <span>Télécharger</span>
          </a>
          ";
            // line 20
            echo "        </div>
      </div>
      ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 22)) {
                // line 23
                echo "      ";
                $context["image"] = twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 23);
                // line 24
                echo "      ";
            } else {
                // line 25
                echo "      ";
                $context["image"] = twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 25);
                // line 26
                echo "      ";
            }
            // line 27
            echo "      <img class=\"fit-picture mw-500 mh-500\" src=\"../public/assets/medias/";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\"
        alt=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_nom", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
    </div>
  </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " <div class=\"ajax-loader text-center m-2\">
   <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
 </div>
 <div id=\"fin-annonce\" class=\"ajax-loader text-center d-none m-3\">
   Fin des annonces
 </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "pages/ajouterAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  97 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  74 => 20,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% for annonce in listes_annonces %}
  <div class=\"container text-light mb-2 scroller-item\" id=\"{{annonce.ann_id}}\">
    <div class=\"border border-dark bg-dark p-3 d-flex justify-content-between\">
      <div class=\"annonce-info d-flex justify-content-between mx-3\">
        <h2>{{annonce.ann_titre}}</h2>
        <p class=\"text-light ml-2 prix\">{{annonce.ann_prix}} €</p>
        <p class=\"ml-2 font-weight-bold\">{{annonce.cat_libelle}}</p>
        <p class=\"ml-2 font-weight-bold\">Le {{annonce.ann_date_ecriture|date('j m Y')}}</p>
        <div class=\"d-flex\">
          <a href=\"/detail\" class=\"btn bg-danger text-light d-flex justify-content-center\">
            <i class=\"material-icons\">pageview</i>
            <span>Détails</span>
          </a>
          <a href=\"\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
            <i class=\"material-icons\">picture_as_pdf</i>
            <span>Télécharger</span>
          </a>
          {# <a href=\"modifier.php?{{annonce.ann_id}}\" class=\"btn bg-danger\">Modifier</a>
          <a href=\"supprimer.php?{{annonce.ann_id}}\" class=\"btn bg-danger\">Supprimer</a> #}
        </div>
      </div>
      {% if annonce.ann_image_url %}
      {% set image = annonce.ann_image_url %}
      {% else %}
      {% set image = annonce.cat_libelle %}
      {% endif %}
      <img class=\"fit-picture mw-500 mh-500\" src=\"../public/assets/medias/{{image}}\"
        alt=\"{{annonce.ann_image_nom}}\">
    </div>
  </div>

 {% endfor %}
 <div class=\"ajax-loader text-center m-2\">
   <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
 </div>
 <div id=\"fin-annonce\" class=\"ajax-loader text-center d-none m-3\">
   Fin des annonces
 </div>
 </div>", "pages/ajouterAnnonce.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\ajouterAnnonce.html.twig");
    }
}
