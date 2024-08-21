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

![IMG M03_TP01](;/docs/M03_TP01.jpg "Titre de l'image")

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


## M05_TP01 :  (21/08/2024)
