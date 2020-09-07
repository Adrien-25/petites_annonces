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
        echo "<div id=\"scroller-layout\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listes_annonces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 6
            echo "  <div class=\"container text-light mb-2 scroller-item\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_id", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
    <div class=\"border border-dark bg-dark p-1 d-flex justify-content-between\">
      <div class=\"\">
        <h2 class=\"\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_titre", [], "any", false, false, false, 9), "html", null, true);
            echo "</h2>
        <p class=\"text-danger ml-2 font-weight-bold\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_prix", [], "any", false, false, false, 10), "html", null, true);
            echo " €</p>
        <p class=\"ml-2 font-weight-bold\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "categorie_id", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        <p class=\"ml-2 font-weight-bold\">Le ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_date_ecriture", [], "any", false, false, false, 12), "j m Y"), "html", null, true);
            echo "</p>
        <div>
          <a href=\"\" class=\"btn bg-danger\">Détails</a>
          <a href=\"\" class=\"btn bg-danger\">Télécharger PDF</a>
          <a href=\"\" class=\"btn bg-danger\">Modifier</a>
          <a href=\"\" class=\"btn bg-danger\">Supprimer</a>
        </div>
      </div>
      <img class=\"fit-picture mw-500 mh-500\" src=\"../public/assets/medias/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_url", [], "any", false, false, false, 20), "html", null, true);
            echo "\"
        alt=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_image_nom", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
    </div>

  </div>
  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div id=\"first-loader\" class=\"ajax-loader text-center m-2\" value=";
        echo twig_escape_filter($this->env, ($context["Nbr_annonces"] ?? null), "html", null, true);
        echo ">
    <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
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
        return array (  111 => 27,  99 => 21,  95 => 20,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  65 => 6,  61 => 5,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}
{% block title %}listes des annonces{% endblock title %}
{% block add %}
<div id=\"scroller-layout\">
  {% for annonce in listes_annonces %}
  <div class=\"container text-light mb-2 scroller-item\" id=\"{{annonce.ann_id}}\">
    <div class=\"border border-dark bg-dark p-1 d-flex justify-content-between\">
      <div class=\"\">
        <h2 class=\"\">{{annonce.ann_titre}}</h2>
        <p class=\"text-danger ml-2 font-weight-bold\">{{annonce.ann_prix}} €</p>
        <p class=\"ml-2 font-weight-bold\">{{annonce.categorie_id}}</p>
        <p class=\"ml-2 font-weight-bold\">Le {{annonce.ann_date_ecriture|date('j m Y')}}</p>
        <div>
          <a href=\"\" class=\"btn bg-danger\">Détails</a>
          <a href=\"\" class=\"btn bg-danger\">Télécharger PDF</a>
          <a href=\"\" class=\"btn bg-danger\">Modifier</a>
          <a href=\"\" class=\"btn bg-danger\">Supprimer</a>
        </div>
      </div>
      <img class=\"fit-picture mw-500 mh-500\" src=\"../public/assets/medias/{{annonce.ann_image_url}}\"
        alt=\"{{annonce.ann_image_nom}}\">
    </div>

  </div>
  
  {% endfor %}
<div id=\"first-loader\" class=\"ajax-loader text-center m-2\" value={{Nbr_annonces}}>
    <img src=\"https://media2.giphy.com/media/sSgvbe1m3n93G/giphy.gif\">
  </div>
</div>
{% endblock add %}", "pages/index.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\index.html.twig");
    }
}
