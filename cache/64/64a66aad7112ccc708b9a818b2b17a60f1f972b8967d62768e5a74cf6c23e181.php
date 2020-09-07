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

/* pages/poster.html.twig */
class __TwigTemplate_186d8ebccf4b5811422ec7497cd9badff9ff0404313d0ff3374542967906b5bf extends Template
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
        $this->parent = $this->loadTemplate("./base.html.twig", "pages/poster.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Poster une annonce";
    }

    // line 3
    public function block_add($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
      <div class=\"row\">
            <div class=\"col-12\">
                 

                  <center>
                        <h3>Formulaire de publication d'annonce</h3>
                  </center>
                  <form action=\"/poster\" method=\"POST\">
                        <div class=\"form-row\">
                             
                              
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"titre\">Titre</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-control\" id=\"titre\">
                              </div>
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"exampleInputPassword1 \">Prenom</label>
                                    <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"exampleInputPassword1\">
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6 \">
                                    <label for=\"exampleCheck1\">Nom</label>
                                    <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"exampleCheck1\">
                              </div>
                              <div class=\"form-group  col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"exampletel\">Téléphone</label>
                                    <input type=\"text\" name=\"telephone\" class=\"form-control\" id=\"exampletel\">
                              </div>

                        </div>

                        <div class=\"form-row\">
                              
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"example3\">Prix en euros</label>
                                    <input type=\"text\" name=\"prix\" class=\"form-control\" id=\"example3\">
                              </div>
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"example4\">Quelle catégorie fait partie votre annonce.</label>
                                    
                                    <select class=\"form-control\"  name=\"categorie\" >
                                          <option value=\"selected\">Faites votre choix</option>
                                          <option value =\"2\">Animalerie</option>
                                          <option value=\"3\">Emploi</option>
                                          <option value=\"4\">Auto/Moto</option>
                                         <option value=\"1\">Loisirs</option>
                                    </select>
                              </div>

                        </div>
                        <div class=\"row\">
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <label for=\"desc\">Veuillez saisir la description de votre annonce</label>
                                    <textarea name=\"description\" class=\"form-control rounded-0\" id=\"desc\" cols=\"30\" rows=\"10\"></textarea>
                              </div>
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <label for=\"exampleInputEmail1\">Email</label>
                                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                          aria-describedby=\"emailHelp\">
                                    </div>
                              </div>
                              <button type=\"submit\" value=\"ajouter\" class=\"btn btn-primary btn-lg btn-block\">Envoyer</button>
                  </form>
            </div>
      </div>
                                    
</div>

";
    }

    public function getTemplateName()
    {
        return "pages/poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}
{% block title %}Poster une annonce{% endblock title %}
{% block add %}
<div class=\"container\">
      <div class=\"row\">
            <div class=\"col-12\">
                 

                  <center>
                        <h3>Formulaire de publication d'annonce</h3>
                  </center>
                  <form action=\"/poster\" method=\"POST\">
                        <div class=\"form-row\">
                             
                              
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"titre\">Titre</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-control\" id=\"titre\">
                              </div>
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"exampleInputPassword1 \">Prenom</label>
                                    <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"exampleInputPassword1\">
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6 \">
                                    <label for=\"exampleCheck1\">Nom</label>
                                    <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"exampleCheck1\">
                              </div>
                              <div class=\"form-group  col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"exampletel\">Téléphone</label>
                                    <input type=\"text\" name=\"telephone\" class=\"form-control\" id=\"exampletel\">
                              </div>

                        </div>

                        <div class=\"form-row\">
                              
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"example3\">Prix en euros</label>
                                    <input type=\"text\" name=\"prix\" class=\"form-control\" id=\"example3\">
                              </div>
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"example4\">Quelle catégorie fait partie votre annonce.</label>
                                    
                                    <select class=\"form-control\"  name=\"categorie\" >
                                          <option value=\"selected\">Faites votre choix</option>
                                          <option value =\"2\">Animalerie</option>
                                          <option value=\"3\">Emploi</option>
                                          <option value=\"4\">Auto/Moto</option>
                                         <option value=\"1\">Loisirs</option>
                                    </select>
                              </div>

                        </div>
                        <div class=\"row\">
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <label for=\"desc\">Veuillez saisir la description de votre annonce</label>
                                    <textarea name=\"description\" class=\"form-control rounded-0\" id=\"desc\" cols=\"30\" rows=\"10\"></textarea>
                              </div>
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <label for=\"exampleInputEmail1\">Email</label>
                                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                          aria-describedby=\"emailHelp\">
                                    </div>
                              </div>
                              <button type=\"submit\" value=\"ajouter\" class=\"btn btn-primary btn-lg btn-block\">Envoyer</button>
                  </form>
            </div>
      </div>
                                    
</div>

{% endblock add %}", "pages/poster.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\poster.html.twig");
    }
}
