# ChatAbly - Mini Chat Application

**ChatAbly** est une application de messagerie en temps réel qui permet aux utilisateurs de se connecter, de voir la liste des autres utilisateurs en ligne et d'envoyer des messages instantanés.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants :

- [PHP](https://www.php.net/downloads) version 8.4 ou supérieure.
- [Composer](https://getcomposer.org/) pour gérer les dépendances PHP.
- [Node.js](https://nodejs.org/en/) et [npm](https://www.npmjs.com/) pour les dépendances JavaScript.
- [MySQL](https://www.mysql.com/) pour la gestion de la base de données.

## Installation

### 1. Cloner le dépôt

Clonez ce projet dans votre répertoire local :

```bash
git clone https://github.com/votre-utilisateur/chatably.git
cd chatably
```

### 2. Installer les dépendances PHP

Exécutez la commande suivante pour installer les dépendances PHP via Composer :

```bash
composer install
```

### 3. Configurer l'environnement

Copiez le fichier `.env.example` en `.env` :

```bash
cp .env.example .env
```
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Audin1pro';

Ouvrez le fichier `.env` et configurez votre connexion à la base de données MySQL :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chatably
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Générer la clé d'application

Générez la clé d'application Laravel :

```bash
php artisan key:generate
```

### 5. Migrer la base de données

Exécutez les migrations pour créer les tables nécessaires dans votre base de données :

```bash
php artisan migrate
```

### 6. Installer les dépendances JavaScript

Installez les dépendances JavaScript via npm :

```bash
npm install
```

### 7. Compiler les assets front-end

Compilez les fichiers JavaScript et CSS avec Vite :

```bash
npm run dev
```

### 8. Démarrer l'application

Démarrez le serveur local Laravel :

```bash
php artisan serve
```

### 9. Accéder à l'application

Une fois le serveur démarré, ouvrez votre navigateur et accédez à [http://127.0.0.1:8000](http://127.0.0.1:8000) pour voir l'application en action.

## Fonctionnalités

- **Inscription et connexion** : Les utilisateurs peuvent créer un compte et se connecter.
- **Liste des utilisateurs** : Après la connexion, les utilisateurs peuvent voir tous les autres utilisateurs connectés.
- **Messagerie instantanée** : Les utilisateurs peuvent envoyer des messages à d'autres utilisateurs en temps réel.

## Dépendances

### PHP

- `php` (version 8.4 ou supérieure)
- `guzzlehttp/guzzle`
- `laravel/breeze` (pour l'authentification)

### JavaScript

- `@tailwindcss/forms` pour les styles de formulaire.
- `alpinejs` pour des interactions JavaScript légères.
- `vite` pour la compilation des assets front-end.

## Contributions

Si vous souhaitez contribuer à ce projet, veuillez soumettre un pull request. Assurez-vous d'avoir testé vos modifications et ajouté des commentaires si nécessaire.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
