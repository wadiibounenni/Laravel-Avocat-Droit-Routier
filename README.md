# Documentation de site Avocat Droit Routier

## Description du projet
Le projet **Avocat Droit Routier** est un site web dynamique réalisé pour un avocat belge spécialisé en droit routier. Le site est développé en utilisant les frameworks Laravel pour le backend et Bootstrap pour le frontend. Il contient des fonctionnalités complètes pour la gestion de contenu et l'interaction avec les utilisateurs, offrant une interface utilisateur moderne et réactive.

## Pré-requis
Avant de commencer l'installation, assurez-vous d'avoir les éléments suivants installés sur votre système d'exploitation :
- **Composer**
- **Node.js**
- **Apache**
- **PHP 8.2 ou plus**
- **MySQL**

## Instructions d'installation

1. **Téléchargement et décompression**
   - Téléchargez le dossier **AVOCAT-DROIT-ROUTIER** et dézippez-le.

2. **Placement dans le répertoire de développement**
   - Placez le dossier dézippé **AVOCAT-DROIT-ROUTIER** dans le dossier `xampp/htdocs` si vous utilisez XAMPP comme environnement de développement.

3. **Importation de la base de données**
   - Créez une nouvelle base de données MySQL appelée `website`.
   - Importez le fichier `website.sql` situé dans `AVOCAT-DROIT-ROUTIER/website.sql` dans votre base de données. Cela peut être fait en utilisant phpMyAdmin ou tout autre outil de gestion de base de données.

4. **Migration de la base de données**
   - Ouvrez le terminal de votre éditeur de code (par exemple VS Code).
   - Accédez au dossier `xampp/htdocs/AVOCAT-DROIT-ROUTIER`.
   - Exécutez la commande suivante pour migrer la base de données :
     ```bash
     php artisan migrate
     ```

5. **Lancement du serveur local**
   - Toujours dans le terminal, exécutez la commande suivante pour lancer le serveur local :
     ```bash
     php artisan serve
     ```
   - Accédez au site web en ouvrant votre navigateur et en allant à l'adresse : `http://127.0.0.1:8000`.

6. **Accès au backend**
   - Pour accéder à l'interface d'administration, visitez l'adresse suivante : `http://127.0.0.1:8000/login`.
   - Utilisez les identifiants suivants pour vous connecter :
     - **Email :** `test123@gmail.com`
     - **Mot de Passe :** `123456789`

## Remarques supplémentaires
- Assurez-vous que tous les services nécessaires (Apache, MySQL) sont en cours d'exécution dans votre environnement XAMPP avant de lancer les commandes de migration et de serveur.
- Si vous rencontrez des problèmes de permission, vous pouvez avoir besoin d'ajuster les autorisations des fichiers et dossiers dans votre répertoire de projet.

## Développeur
Wadii Bounenni

---

Pour toute question ou assistance supplémentaire, n'hésitez pas à me contacter ou à consulter la documentation Laravel et Bootstrap pour des informations détaillées sur les frameworks utilisés.

**------English Translation------**

# Documentation for Avocat Droit Routier Website

## Project Description
The **Avocat Droit Routier** project is a dynamic website developed for a Belgian lawyer specializing in traffic law. The site is built using the Laravel framework for the backend and Bootstrap for the frontend. It features comprehensive content management and user interaction capabilities, offering a modern and responsive user interface.

## Prerequisites
Before starting the installation, make sure you have the following installed on your operating system:
- **Composer**
- **Node.js**
- **Apache**
- **PHP 8.2 or higher**
- **MySQL**

## Installation Instructions

1. **Download and Unzip**
   - Download the **AVOCAT-DROIT-ROUTIER** folder and unzip it.

2. **Placement in Development Directory**
   - Place the unzipped **AVOCAT-DROIT-ROUTIER** folder in the `xampp/htdocs` directory if you are using XAMPP as your development environment.

3. **Database Import**
   - Create a new MySQL database named `website`.
   - Import the `website.sql` file located in `AVOCAT-DROIT-ROUTIER/website.sql` into your database. This can be done using phpMyAdmin or any other database management tool.

4. **Database Migration**
   - Open your code editor's terminal (e.g., VS Code).
   - Navigate to the `xampp/htdocs/AVOCAT-DROIT-ROUTIER` directory.
   - Run the following command to migrate the database:
     ```bash
     php artisan migrate
     ```

5. **Launching the Local Server**
   - Still in the terminal, run the following command to start the local server:
     ```bash
     php artisan serve
     ```
   - Access the website by opening your browser and going to: `http://127.0.0.1:8000`.

6. **Accessing the Backend**
   - To access the admin interface, visit the following URL: `http://127.0.0.1:8000/login`.
   - Use the following credentials to log in:
     - **Email:** `test123@gmail.com`
     - **Password:** `123456789`

## Additional Notes
- Ensure that all required services (Apache, MySQL) are running in your XAMPP environment before executing migration and server commands.
- If you encounter permission issues, you may need to adjust file and folder permissions in your project directory.

## Developer
Wadii Bounenni

---

For any questions or additional assistance, feel free to contact me or refer to the Laravel and Bootstrap documentation for detailed information on the frameworks used.