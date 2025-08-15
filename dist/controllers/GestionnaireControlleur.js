"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const GestionnaireService_1 = require("../services/GestionnaireService");
// Récupère les arguments passés en ligne de commande
const login = process.argv[2];
const motDePasse = process.argv[3];
const service = new GestionnaireService_1.GestionnaireService();
const gestionnaire = service.getLogin(login, motDePasse);
if (gestionnaire) {
    console.log("Connexion réussie :", gestionnaire.nom);
}
else {
    console.log("Identifiants invalides");
}
