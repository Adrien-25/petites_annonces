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
                        <h1 class=\"mb-5\">Poster une annonce</h1>
                  </center>
                  <form action=\"poster\" method=\"POST\" class=\"needs-validation\" enctype=\"multipart/form-data\" novalidate>
                        <div class=\"d-flex mx-auto flex-column col-sm-12 col-md-12 col-lg-12 mb-3 p-0\">
                                    <label for=\"titre\">Titre</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-control\" required>
                              </div>
                        <div class=\"form-row\">
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6 \">
                                    <label for=\"Nom\">Nom</label>
                                    <input type=\"text\" name=\"nom\" class=\"form-control\" required>
                              </div>

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Prenom \">Prenom</label>
                                    <input type=\"text\" name=\"prenom\" class=\"form-control\" required>
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Email\">Email</label>
                                    <input type=\"email\" name=\"email\" class=\"form-control\" required>
                              </div>
                              <div class=\"form-group  col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Telephone\">Téléphone</label>
                                    <input type=\"text\" name=\"telephone\" class=\"form-control\" required>
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Prix\">Prix (€)</label>
                                    <input type=\"text\" name=\"prix\" class=\"form-control\" required>
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
                        <div class=\"dropzone needsclick text-center\" id=\"upload-pic\" name=\"nom_image\" action=\"poster\">
                              <div id=\"icon-delete\" class=\"text-danger d-none\">
                                    <i class=\"material-icons\">clear</i>
                              </div>
                              <div class=\"dz-message needsclick\">
                                    <i class=\"material-icons display-3 text-danger\">cloud_download</i>
                                    Déposer votre image ou cliquer dans la zone
                              </div>
                        </div>
                        <div class=\"row\">
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12 mt-3\">
                                    <label for=\"Description\">Description de votre annonce</label>
                                    <textarea name=\"description\" class=\"form-control rounded-0\" id=\"desc\" cols=\"30\"
                                          rows=\"3\" required></textarea>
                              </div>
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <button type=\"submit\" value=\"ajouter\"
                                          class=\"btn bg-danger btn-primary btn-lg btn-block border-0\">Envoyer</button>
                              </div>
                              
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
                        <h1 class=\"mb-5\">Poster une annonce</h1>
                  </center>
                  <form action=\"poster\" method=\"POST\" class=\"needs-validation\" enctype=\"multipart/form-data\" novalidate>
                        <div class=\"d-flex mx-auto flex-column col-sm-12 col-md-12 col-lg-12 mb-3 p-0\">
                                    <label for=\"titre\">Titre</label>
                                    <input type=\"text\" name=\"titre\" class=\"form-control\" required>
                              </div>
                        <div class=\"form-row\">
                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6 \">
                                    <label for=\"Nom\">Nom</label>
                                    <input type=\"text\" name=\"nom\" class=\"form-control\" required>
                              </div>

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Prenom \">Prenom</label>
                                    <input type=\"text\" name=\"prenom\" class=\"form-control\" required>
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Email\">Email</label>
                                    <input type=\"email\" name=\"email\" class=\"form-control\" required>
                              </div>
                              <div class=\"form-group  col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Telephone\">Téléphone</label>
                                    <input type=\"text\" name=\"telephone\" class=\"form-control\" required>
                              </div>

                        </div>

                        <div class=\"form-row\">

                              <div class=\"form-group col-sm-12 col-md-6 col-lg-6\">
                                    <label for=\"Prix\">Prix (€)</label>
                                    <input type=\"text\" name=\"prix\" class=\"form-control\" required>
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
                        <div class=\"dropzone needsclick text-center\" id=\"upload-pic\" name=\"nom_image\" action=\"poster\">
                              <div id=\"icon-delete\" class=\"text-danger d-none\">
                                    <i class=\"material-icons\">clear</i>
                              </div>
                              <div class=\"dz-message needsclick\">
                                    <i class=\"material-icons display-3 text-danger\">cloud_download</i>
                                    Déposer votre image ou cliquer dans la zone
                              </div>
                        </div>
                        <div class=\"row\">
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12 mt-3\">
                                    <label for=\"Description\">Description de votre annonce</label>
                                    <textarea name=\"description\" class=\"form-control rounded-0\" id=\"desc\" cols=\"30\"
                                          rows=\"3\" required></textarea>
                              </div>
                              <div class=\"form-group col-sm-12 col-md-12 col-lg-12\">
                                    <button type=\"submit\" value=\"ajouter\"
                                          class=\"btn bg-danger btn-primary btn-lg btn-block border-0\">Envoyer</button>
                              </div>
                              
                  </form>
            </div>
      </div>
                                    
</div>

{% endblock add %}", "pages/poster.html.twig", "C:\\wamp64\\www\\petites-annonces\\application\\template\\pages\\poster.html.twig");
    }
}
