<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projet de Blog

## Introduction
Ce projet est une application web de blog créée avec Laravel, qui permet aux utilisateurs de consulter des articles publiés. L'application utilise une architecture robuste MVC et propose une interface simple et intuitive pour une gestion efficace des articles. Le blog est conçu pour afficher du contenu d'article.

---

## Fonctionnalités

### Interface Utilisateur :
- Consulter les articles publiés.
- Design responsive et convivial pour une navigation fluide.

### Architecture Technique :
- Utilisation du modèle MVC (Modèle-Vue-Contrôleur).
- Système d'authentification pour protéger les actions administratives.

---

## Aperçu
Voici quelques captures d'écran de l'interface de l'application :

### Page d'Accueil
![Page d'Accueil](./screenshots/home_page.png)

### Liste des Articles
![Liste des Articles](./screenshots/article_list.png)

---

## Démarrer le Projet

### Prérequis
Assurez-vous que vous avez les éléments suivants installés sur votre machine :
- PHP >= 8.1
- Composer
- MySQL ou toute autre base de données relationnelle
- Serveur web (Apache, Nginx, etc.)
- Node.js et npm (optionnel pour les assets frontend)

### Installation

1. **Cloner le Répertoire** :
   ```bash
   git clone https://github.com/ThiernodioData/BlogLaravel.git
   cd blogstatique
   ```

2. **Installer les Dépendances** :
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Lancer le Serveur** :
   ```bash
   php artisan serve
   ```
   Accédez à l'application à `http://127.0.0.1:8000`.

---

## Déploiement

1. **Configurer le Serveur de Production** :
   Assurez-vous que votre serveur de production dispose des prérequis (PHP, Composer, MySQL, etc.).

---

## Technologies Utilisées
- **Backend** : Laravel (PHP)
- **Frontend** : Blade templates, HTML, CSS, JavaScript
- **Base de Données** : null
- **Contrôle de Version** : Git

---

## Contribution
Les contributions sont les bienvenues ! Forkez le répertoire et soumettez une pull request avec vos modifications. Assurez-vous que votre code respecte les standards du projet.

---

## Auteur
https://github.com/ThiernodioData/

---


