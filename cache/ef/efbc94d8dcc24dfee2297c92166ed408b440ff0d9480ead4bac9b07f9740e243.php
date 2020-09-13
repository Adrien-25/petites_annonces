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
            echo " <div
   class=\"scroller-item d-flex justify-content-between text-dark border border-dark flex-xl-row flex-column-reverse bg-light p-2 mb-5 col-lg-5 col-sm-5 col-10\"
   id=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
   <div class=\"annonce-text d-flex justify-content-between flex-column text-center text-xl-left\">
     <h2>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_titre", [], "any", false, false, false, 6), "html", null, true);
            echo "</h2>
     <p class=\"text-danger ml-2 prix\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_prix", [], "any", false, false, false, 7), "html", null, true);
            echo " €</p>
     <p class=\"ml-2 font-italic\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
     <p class=\"ml-2 font-weight-bold\">Le ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_date_ecriture", [], "any", false, false, false, 9), "j m Y"), "html", null, true);
            echo "</p>
     <div class=\"d-flex justify-content-center btn-annonce\">
       <a href=\"annonce/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"btn bg-danger text-light d-flex justify-content-center\">
         <i class=\"material-icons mr-2\">pageview</i>
         <span>Détails</span>
       </a>
       <a href=\"\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
         <i class=\"material-icons mr-2\">picture_as_pdf</i>
         <span>Télécharger</span>
       </a>
       ";
            // line 21
            echo "     </div>
   </div>
   ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 23)) {
                // line 24
                echo "   ";
                $context["image"] = twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 24);
                // line 25
                echo "   ";
            } else {
                // line 26
                echo "   ";
                $context["image"] = twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 26);
                // line 27
                echo "   ";
            }
            // line 28
            echo "   <div
     class=\"d-flex align-items-center justify-content-xl-end justify-content-lg-center justify-content-md-end justify-content-center p-0 ml-2\">
     <img class=\"fit-picture mw-500 mh-500 img-fluid\" src=\"../public/assets/medias/";
            // line 30
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\"
       alt=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_nom", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
   </div>

 </div>


 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " <div class=\"ajax-loader text-center m-2 col-12\">
   <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
 </div>
 <div id=\"fin-annonce\" class=\"fin-annnonce text-center d-none col-12 m-3 display-4 font-weight-bold\">
   Fin des annonces
   ";
        // line 44
        echo "
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
        return array (  125 => 44,  118 => 38,  105 => 31,  101 => 30,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  83 => 23,  79 => 21,  68 => 11,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% for annonce in listes_annonces %}
 <div
   class=\"scroller-item d-flex justify-content-between text-dark border border-dark flex-xl-row flex-column-reverse bg-light p-2 mb-5 col-lg-5 col-sm-5 col-10\"
   id=\"{{annonce.ann_id}}\">
   <div class=\"annonce-text d-flex justify-content-between flex-column text-center text-xl-left\">
     <h2>{{annonce.ann_titre}}</h2>
     <p class=\"text-danger ml-2 prix\">{{annonce.ann_prix}} €</p>
     <p class=\"ml-2 font-italic\">{{annonce.cat_libelle}}</p>
     <p class=\"ml-2 font-weight-bold\">Le {{annonce.ann_date_ecriture|date('j m Y')}}</p>
     <div class=\"d-flex justify-content-center btn-annonce\">
       <a href=\"annonce/{{annonce.ann_id}}\" class=\"btn bg-danger text-light d-flex justify-content-center\">
         <i class=\"material-icons mr-2\">pageview</i>
         <span>Détails</span>
       </a>
       <a href=\"\" class=\"btn bg-danger text-light d-flex justify-content-center ml-3\">
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
   {% set image = annonce.cat_libelle %}
   {% endif %}
   <div
     class=\"d-flex align-items-center justify-content-xl-end justify-content-lg-center justify-content-md-end justify-content-center p-0 ml-2\">
     <img class=\"fit-picture mw-500 mh-500 img-fluid\" src=\"../public/assets/medias/{{image}}\"
       alt=\"{{annonce.ann_image_nom}}\">
   </div>

 </div>


 {% endfor %}
 <div class=\"ajax-loader text-center m-2 col-12\">
   <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
 </div>
 <div id=\"fin-annonce\" class=\"fin-annnonce text-center d-none col-12 m-3 display-4 font-weight-bold\">
   Fin des annonces
   {# <a class=\"scrollup btn bg-danger\"><i class=\"material-icons text-light display-5 \">arrow_upward</i></a> #}

 </div>
 </div>", "pages/ajouterAnnonce.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\ajouterAnnonce.html.twig");
    }
}
