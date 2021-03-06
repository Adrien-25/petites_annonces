# Projet de site web d’annonces commerciales
<br/>

## Équipe

Front : [Fouad LYOUSFI](https://github.com/fouad-git)
<br/>
Back : [Adrien SCHMIDT](https://github.com/Adrien-25)

## Instruction 
### Le site doit permettre de :
* Poster une annonce
* Lister les annonces
* Modifier une annonce
* Supprimer une annonce

### Cycle pour poster une annonce :
Sur la page listant les annonces afficher un lien permettant de publier une annonce
Lorsque la personne arrive sur le formulaire permettant de poster une annonce elle devra saisir:
* Titre de l'annonce
* Adresse mail
* Nom
* Prénom
* Téléphone
* Catégorie : Immobilier, Auto-moto, Emploi, Animaux, Services, Vacances, Affaires pro, Autres
* Prix
* Image de mise en avant de l'annonce (optionnel)
* Description de l'annonce
* Captcha
Lorsque la personne poste son annonce, elle reçois un mail dans lequel il y a un lien demandant de confirmer la publication de l'annonce.
Dans ce même courriel, il doit y avoir un lien permettant de modifier l'annonce.
Une fois confirmé alors l'annonce est publié sur la page d'annonce et l'utilisateur reçoit un courriel lui permettant de supprimer l'annonce.
Lorsque l'annonce est mise en ligne il ne doit plus être possible de la modifier avec le lien du premier courriel.

### Cycle pour lister les annonces
Au chargement de la page d'accueil on voit les dix premières annonces. Lorsque l'ascenceur est en bas de la liste, on affiche les dix annonces suivantes.
Pour les annonces n'ayant pas d'image afficher une image par défaut.
Sous l'annonce ont propose de télécharger l'annonce en PDF


### Optionnel :
* Infinite Scroll pour l'affichage des annonces
* Faire un beau courriel avec la librairie MJML
* Tâche cron qui supprime les annonces qui sont en attente de publication à n+2 jours de la date de création.
* Tâche cron qui supprime les annonces qui sont publiés à n+15 jours de la date de création.
* Envoyer un mail à la personne lors de la suppression de son annonces.


### Technologie utilisées : 
* Composer
* PHP POO
* TWIG pour le rendu frontend
* SASS (optionnel)
* GIT
* JS
* HTML
* CSS
* Librairie PHP pour les PDF
* Altorouteur pour le routeur

### Les formulaires sont validés avec JavaScript
### Pas de pattern MVC, on reste en programmation objet POO simple
### Crypter les accès de validation et modification



