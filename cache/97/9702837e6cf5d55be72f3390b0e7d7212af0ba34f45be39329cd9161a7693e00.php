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
        echo "<div class=\"container\">
  
      
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listes_annonces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 8
            echo "    <div class=\"col-sm-12 col-md-6 col-lg-4 card\" style=\"width: 28rem;\">
        <img class=\"card-img-top\" src=\"../.../../public/assets/medias/jouets.jpg\" alt=\"image catégorie produit \">
        <div class=\"card-body d-flex justify-content-between  \">
          <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_titre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
          <p class=\"card-text\"><span style=\"color: red;\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_prix", [], "any", false, false, false, 12), "html", null, true);
            echo " <i class=\"fas fa-euro-sign\"></i></span></p>
        </div>
        <ul class=\"list-group \">
          <li class=\"list-group-item\"> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "cat_libelle", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
          
          <li class=\"list-group-item\"><i class=\"fas fa-globe\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_description", [], "any", false, false, false, 17), "html", null, true);
            echo " </li>
         
          <li class=\"list-group-item\"><i class=\"fas fa-map-marker-alt\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "</li>
     
          <li class=\"list-group-item\">publié le ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "ann_date_ecriture", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</li>
          ";
            // line 23
            echo "          ";
            // line 24
            echo "          <li class=\"list-group-item\"><i class=\"fas fa-ticket-alt\"></i> <a href=\"media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "ticket_achat", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
              target=\"_blank\">Voir le ticket d'achat</a></li>
          <li class=\"list-group-item\"><i class=\"fas fa-clipboard-list\"></i> <a href=\"media/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produit"] ?? null), "manuel", [], "any", false, false, false, 26), "html", null, true);
            echo "\"
              target=\"_blank\">Voir le manuel d'utilisation</a></li>
        </ul>
        <div class=\"card-body d-flex justify-content-between align-items-center\">
          <a href=\"modifier.php?id=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"far   fa-edit\"></i></a>
          <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#supprimerProduit";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"><i
              class=\"far  fa-trash-alt\"></i></button>
            </div>
            <div class=\"modal fade\" role=\"dialog\" style=\"margin-top:250px;\" id=\"supprimerProduit";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" tabindex=\"-1\"
              data-backdrop=\"true\" aria-labelledby=\"exampleModalLabel\"  aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Etes-vous sûr!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> &times;</button>
                  </div>
                  <div class=\"modal-body text-center pagination-centered\">
                    <p>Voulez-vous vraiment supprimer cet enregistrement?</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" aria-label=\"Close\">Annuler</button>
                    <a href=\"supprimer.php?id=";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"btn btn-primary\">Supprimer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        

    
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
        return array (  157 => 56,  142 => 47,  126 => 34,  120 => 31,  116 => 30,  109 => 26,  103 => 24,  101 => 23,  97 => 21,  92 => 19,  87 => 17,  82 => 15,  76 => 12,  72 => 11,  67 => 8,  63 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}
{% block title %}listes des annonces{% endblock title %}
{% block add %}
<div class=\"container\">
  
      
    {% for annonce in listes_annonces %}
    <div class=\"col-sm-12 col-md-6 col-lg-4 card\" style=\"width: 28rem;\">
        <img class=\"card-img-top\" src=\"../.../../public/assets/medias/jouets.jpg\" alt=\"image catégorie produit \">
        <div class=\"card-body d-flex justify-content-between  \">
          <h5 class=\"card-title\">{{annonce.ann_titre}}</h5>
          <p class=\"card-text\"><span style=\"color: red;\">{{annonce.ann_prix}} <i class=\"fas fa-euro-sign\"></i></span></p>
        </div>
        <ul class=\"list-group \">
          <li class=\"list-group-item\"> {{annonce.cat_libelle}}</li>
          
          <li class=\"list-group-item\"><i class=\"fas fa-globe\"></i> {{annonce.ann_description}} </li>
         
          <li class=\"list-group-item\"><i class=\"fas fa-map-marker-alt\"></i> {{annonce.email}}</li>
     
          <li class=\"list-group-item\">publié le {{annonce.ann_date_ecriture|date(\"d/m/Y\")}}</li>
          {# <li class=\"list-group-item\">Fin de garantie le {{produit.date_fin_garantie|date(\"d/m/Y\")}}</li> #}
          {# <li class=\"list-group-item conseils\">Conseils : {{produit.conseil_entretien}}</li> #}
          <li class=\"list-group-item\"><i class=\"fas fa-ticket-alt\"></i> <a href=\"media/{{produit.ticket_achat}}\"
              target=\"_blank\">Voir le ticket d'achat</a></li>
          <li class=\"list-group-item\"><i class=\"fas fa-clipboard-list\"></i> <a href=\"media/{{produit.manuel}}\"
              target=\"_blank\">Voir le manuel d'utilisation</a></li>
        </ul>
        <div class=\"card-body d-flex justify-content-between align-items-center\">
          <a href=\"modifier.php?id={{annonce.id}}\" class=\"btn btn-info\"><i class=\"far   fa-edit\"></i></a>
          <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#supprimerProduit{{annonce.id}}\"><i
              class=\"far  fa-trash-alt\"></i></button>
            </div>
            <div class=\"modal fade\" role=\"dialog\" style=\"margin-top:250px;\" id=\"supprimerProduit{{annonce.id}}\" tabindex=\"-1\"
              data-backdrop=\"true\" aria-labelledby=\"exampleModalLabel\"  aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Etes-vous sûr!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> &times;</button>
                  </div>
                  <div class=\"modal-body text-center pagination-centered\">
                    <p>Voulez-vous vraiment supprimer cet enregistrement?</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" aria-label=\"Close\">Annuler</button>
                    <a href=\"supprimer.php?id={{annonce.id}}\" class=\"btn btn-primary\">Supprimer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
        
            {% endfor %}
        

    
</div>
{% endblock add %}", "pages/index.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\index.html.twig");
    }
}
