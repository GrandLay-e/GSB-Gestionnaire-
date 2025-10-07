# Tasks - Application Web de GSB Frais

## 🔐 Authentification et Sécurité

### Cas d'utilisation : Se connecter
- [ ] Créer le formulaire de connexion
- [ ] Implémenter la validation des credentials (login: [login], mot de passe: [password])
- [ ] Gérer les sessions utilisateur
- [ ] Afficher l'identité du gestionnaire connecté
- [ ] Implémenter la déconnexion
- [ ] Gérer les erreurs de connexion

### Sécurité
- [ ] **Protection des URLs** - Empêcher l'accès direct aux pages sans connexion
- [ ] **Protection XSS** - Sécuriser toutes les saisies utilisateur
- [ ] **Requêtes préparées** - Utiliser uniquement des requêtes SQL préparées

## 👥 Gestion des Visiteurs Médicaux

### Cas d'utilisation : Supprimer un visiteur médical
- [ ] Créer la page de liste des visiteurs
- [ ] Implémenter la sélection d'un visiteur à supprimer
- [ ] Vérifier l'existence de fiches de frais associées
- [ ] Demander confirmation de suppression
- [ ] Gérer l'annulation de suppression
- [ ] Implémenter la suppression complète des données
- [ ] **Archivage** - Créer les fichiers d'archivage (PDF, texte ou tableur)

## 🏗️ Infrastructure

### Base de données
- [ ] Créer les tables (utilisateurs, visiteurs, fiches de frais)
- [ ] Implémenter les requêtes avec préparation
- [ ] Gérer les contraintes de clés étrangères

### Frontend
- [ ] Interface gestionnaire avec menu
- [ ] Messages d'information et d'erreur
- [ ] Responsive design

### Backend
- [ ] Structure MVC ou framework
- [ ] Gestion des sessions PHP
- [ ] Validation côté serveur
- [ ] Logs d'activité

## 📋 Fonctionnalités supplémentaires (à définir)
- [ ] Gestion des fiches de frais
- [ ] Création/modification des visiteurs
- [ ] Rapports et statistiques
