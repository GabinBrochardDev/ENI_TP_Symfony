# ENI - TP Bucket-List en Symfony (08/2024)
>**Sujet du TP :**  
Vous démarrez un nouveau projet de site web : un site permettant à ses utilisateurs de créer
une liste de toutes les choses qu ils souhaitent au moins une fois dans leur vie , comme par
exemple voir la Grande Muraille de Chine, boire du C hampagne dans une l imousine ou
sauter en parachute. Ce type de liste se nomme une « bucket list » en anglais.

>**Techno utilisé :**  
Serveur Apache2  
Base de données MySQL  
PHP 7.2.5+  
Le framework Symfony 5

## M01_TP01 : Introduction (19/08/2024)
- Installation de l'environnement de travail
    - IDE (VS Code)
    - Serveur web local (Wamp)
    - Git
    - Plugins VS Code : Codium, PHP Intelephense, PHP IntelliSense, Twig Language 2
- Création du projet
- Installation des modules complémentaire : apache-pack

## M02_TP01 : Introduction (19/08/2024)
>**Objectif :** Création de la page d'accueil  

1. Créez un contrôleur nommé ``MainController`` qui sera responsable de l'affichage des
pages de base de votre application.
2. Dans ce contrôleur, créez une méthode nommée ``home()``, avec sa route au dessus.   
La méthode doit être déclenchée lorsqu'on navigue vers l'URL "/".
3. Créez un fichier Twig, qui sera affiché par cette méthode.  
Ajoutez y simplement quelques mots, pour vous assurer que votre code fonctionne bien.  Déclenchez l'affichage du fichier Twig depuis le contrôleur, et ouvrez votre nouvelle page d'accueil dans le navigateur !

## M03_TP01 : Twig (20/08/2024)
>**Objectif :** Création de la structure HTML/CSS du site

>Toutes les pages du site auront globalement la même structure (en-tête, menu de navigation, pied de page, etc…). Ainsi vous décidez de créer (ou modifier s’il existe déjà) un fichier "base.html.twig" qui contiendra cette structure. Toutes les pages hériteront de ce fichier.

1. Inclure dans la structure les éléments suivants :
    - Un fichier .css avec Bootstrap
    - Le logo (fichier fourni) et le nom du site dans l’en-tête
    - La mention "©Bucket-List" dans le pied de page, suivie de l’année en cours
    - Un menu de navigation contenant un lien menant vers l’accueil
    - Le favicon (fichier fourni)

![IMG M03_TP01](/docs/M03_TP01.jpg "Titre de l'image")

## M04_TP01 : Routes et contrôleurs (20/08/2024)
>**Objectif :** Créer les différentes pages de du site (sans contenu), et de les relier entre elles.

- Créer une nouvelle page "About us". Cette page est gérée dans le MainController
et n'affiche que du lorem ipsum pour l'instant.
- Créer un nouveau contrôleur : Wish Controller. Ce contrôleur sera responsable de
gérer ce qui a trait aux idées de choses à faire une fois dans sa vie (wish = souhait).
- Dans Wish Controller, créer 2 pages : u ne page "list" qui affichera la liste des choses à
faire, et une page "detail", qui affichera les détails sur une idée de chose à faire.
- Dans votre menu de navigation, ajouter un lien vers la page "About us" et un autre
vers la liste des idées.

>**Note 1 :**
il n'est pas encore possible de faire un lien vers la page de détail d'une idée, puisque
nous n'affichons pas encore la liste ! Mais nous aurons besoin d'inclure l'identifiant de l'idée
dans l'URL de cette page détail.

>**Note 2 :**
les trois nouvelles pages d oivent chacune avoir leur méthode de contrôleur et leur
fichier Twig.

## M04_TP02 : Routes et contrôleurs (20/08/2024)
>**Objectif :** L'objectif est d'afficher les informations sur l'équipe du site Bucket
List dans la page About Us (créée au module 04).

Les informations sur les auteurs du site sont stockées dans le fichier team.json
et doivent le rester. Vous devez donc lire/récupérer les données depuis ce fichier, en PHP, avant de les afficher dans votre fichier Twig.

Pour chacun des 3 auteurs du site, vous disposez de leurs noms de famille, prénom, date de
naissance, URL de l'image de profil, de quoi il est le créateur et d’une description.

Quelques étapes détaillées pour vous aider :
- 1. Vous devez télécharger et stocker le fichier team.json où vous voulez dans votre
répertoire de projet. Le plus simple est de le stocker dans un répertoire data à la racine
du projet . On ne le stockera pas dans « public » car on ne souhaite pas qu’il soit
disponible depuis l’extérieur.
- 2. Dans votre contrôleur, dans la méthode aboutUs()aboutUs(), avant d'appeler la
fonction render(), récupérez le contenu du fichier json dans une variable. Des fonctions PHP de base existent pour ça !

>**Bonus :**
>- La date de naissance doit s'afficher au format jj mm aaaa
>- Dans Twig, afficher un emoji ❤ à côté du nom de Fabien (sans modifier le fichier json !)


## M05_TP01 : données et Doctrine (21/08/2024)
>**Objectif :**  
Créer l'entité qui représente une idée et affiché les enregistrements sur une page. 

1. Créer l'entité qui représente une idée et affiché les enregistrements sur une page. Cette entité (nommée Wish) doit avoir les propriétés suivantes :
    - title (l'idée en tant que telle, 250 caractères Requis.)
    - description (texte suivi décrivant l'idée plus en détail)
    - author (pseudo de l'auteur . 50 caractères max. Requis.)
    - isPublished (valeur booléenne indiquant si l'idée est actuellement visible sur le site)
    - dateCreated (date et heure de création de l'idée)

2. Configurez votre connexion à la base de données, créez la et mettez la à jour
3. Directement d ans PHPMyAdmin, ajoutez 3 ou 4 idées, pour tester.
4. Sur la page de liste d'idées, affichez le titre de toutes les idées publiées, de la plus récente à la plus ancienne. En cliquant sur une idée, l'utilisateur doit être mené à la page de détail de celle ci. Dans Twig, vous aurez besoin des 2 arguments de la fonction path() pour générer ces liens.


## M05_TP02 : données et Doctrine (Fixtures et Faker) (21/08/2024)
Pour éviter de créer manuellement des données dans la base avec PHPMyAdmin, on va utiliser
une fixture pour ajouter quelques idées. Vous pourrez utiliser également un faker si vous le
souhaiter.