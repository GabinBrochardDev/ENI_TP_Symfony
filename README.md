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

![IMG M03_TP01](/tp_app/docs/M03_TP01.jpg "Titre de l'image")

## M04_TP01 : ()