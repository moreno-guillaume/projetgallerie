# Modifs 15/02



>[IMPORTANT]
>* Mise en commentaire du password_verify dans la fonction password_verification. Les mots de passe n'étant pas hachés dans la DB, on ne peut pas hacher les envois. A remettre en place plus tard.
  >.

### Creations
* **Création** d'un document session.php qui enregistrera les variables de session, facilitant leur appel dans differentes pages,
* **Creation** d'une page succes.php qui permettra d'afficher un message de validation d'une action engagée par un utilisateur selon le contexte( grace à une variable $messageSucces, par exemple),
 * **Implémentation** des classes connection et inscription pour faciliter la lecture du code et éviter les mélanges php / html,  


### Modifications
* **Separation** des balises metas dans un nouveau document metas.php?
* **Separation** du menu du document principal pour faciliter son appel ou son exclusion contextuelle,
* **Séparation** des formulaires de connexion et d'inscription de leurs pages respectives. Cette séparation facilitera la lecture du code en évitant le mélange php / html sur une même page,
*   **Redirection** de la page inscription vers la page index.php. Si l'utilisateur n'est pas connecté, le formulaire de connexion s'affiche, sans barre de navigation du site. Si l'utilisateur est connecté, ce formulaire ne s'affiche pas mais laisse place à une page d'accueil qui contient le menu,
*   **Modification** des conditions de connexion. En l'absence de nom d'utilisateur unique dans la db pour chaque collaborateur, le mail fera office de vérification. Cela évitera à deux personnes portant le même prénom ou le même nom de crééer des erreurs de connexion,

  
# Modifs 16/02
>[IMPORTANT]
>* Bonne pratique : pas de classe css en camelCase
>*  Réparation de la nav qui partait en vadrouille selon la taille d'écran. ( utilisation de flexbox )
> Ce qui permet entre autre de supprimer ou commenter le lien deconnexion sans casser la nav ( Je maintiens quand même que c'est une lourde erreur de ne pas le garder )
>* Mise en commentaire de toutes les lignes de code invalides ou créant des erreurs dans le CSS. Explications jointes. Correction des bugs relatifs à welcome.php, explications jointes.
>* Allègement du css de manière générale.
>.

## Creations
>[IMPORTANT]
>* Tous les boutons valider du site ayant le même style, création d'une classe .bouton-valider qui appeleront toujours les mêmes propriétés. Pour placer un bouton de validation à l'avenir il suffira de le faire avec un id après lui avoir donné la classe .bouton-valider.

  
## Modifications

* ### Nav
* La nav passe en flexbox. Pour que les liens gardent une distance equivalente peu importe la taille d'écran et éviter les disparitions sous le bottom : 0;
* Suppression de la div "item-container" qui entourait les /li
* Suppression des bricolages margin et padding dans la nav 
  
* ### Connexion
* Un seul et même formulaire pour la connexion et le reset-password, avec apparitions conditionnées en fonction de $nav
* Création d'une classe bouton-valider : Ce bouton est présent dans plusieurs pages. Les propriétés à modifier le seront avec des id si besoin.
  
* ### Welcome
* L'image est appelée depuis la feuille de style (meilleure pratique quand l'image n'est pas une information de premier ordre devant être lue par les moteur de recherche. Image style = css, image informative = html)
* 
  

# Modifs 17/02
>[IMPORTANT]
>* Restructuration complète du projet en modèle MVC. Les chemins ne sont pas encore tous corrigés mais quelques réécritures ont été faites
>Pour le moment la connexion et l'apparition des premiers formulaires connexion et reset se font sans accroche.
>.