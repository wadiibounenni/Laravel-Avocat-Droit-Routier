Documentation de site Avocat Droit Routier 

Ce projet est un projet de site web dynamique appelé Avocat Droit Routier réalisé pour un avocat belge en utilisant les frameworks Laravel et Bootstrap. Il contient Front-end et Back-end.

Pré-requis :
Vous devez avoir Composer, Node.js, Apache, PHP 8.2 ou plus, et MySQL installés sur votre système d'exploitation.

Instructions d'installation :

Dézippez le dossier AVOCAT-DROIT-ROUTIER.
Placez le dossier dézippé AVOCAT-DROIT-ROUTIER dans le dossier xampp/htdocs si vous utilisez XAMPP comme environnement de développement.
Importez le fichier website.sql (AVOCAT-DROIT-ROUTIER/website.sql) dans votre base de données MySQL appelée "website" après l'avoir créée (en utilisant par exemple phpMyAdmin de XAMPP ou autre).
Exécutez cette commande dans le terminal de votre éditeur de code (par exemple VS Code) après avoir accédé au dossier xampp/htdocs/AVOCAT-DROIT-ROUTIER : php artisan migrate pour se connecter à la base de données.
Exécutez cette commande dans le terminal de votre éditeur de code (par exemple VS Code) : php artisan serve pour accéder au localhost 127.0.0.1:8000.
Pour accéder au backend, visitez 127.0.0.1:8000/login et entrez ces identifiants : Email : "test123@gmail.com" et Mot de Passe : "123456789".