"use strict";
class GestionnaireControlleur {
    constructor(jsonPath) {
        this.gestionnaires = [];
        this.loadGestionnaires(jsonPath);
    }
    loadGestionnaires(jsonPath) {
        fetch(jsonPath)
            .then(response => response.json())
            .then(data => {
            this.gestionnaires = data;
            this.initForm();
        })
            .catch(() => {
            const messageDiv = document.getElementById("message");
            if (messageDiv) {
                messageDiv.textContent = "Erreur de chargement des gestionnaires.";
                messageDiv.style.color = "red";
            }
        });
    }
    initForm() {
        const form = document.getElementById("loginForm");
        const messageDiv = document.getElementById("message");
        form === null || form === void 0 ? void 0 : form.addEventListener("submit", (e) => {
            e.preventDefault();
            const login = document.getElementById("login").value.trim();
            const password = document.getElementById("password").value.trim();
            const gestionnaire = this.gestionnaires.find(g => g.login === login && g.password === password);
            if (gestionnaire) {
                messageDiv.textContent = "Connexion réussie, bienvenue " + gestionnaire.prenom + " " + gestionnaire.nom;
                messageDiv.style.color = "green";
                setTimeout(() => {
                    window.location.href = "/dashboard";
                }, 1200);
            }
            else {
                messageDiv.textContent = "Identifiants invalides";
                messageDiv.style.color = "red";
            }
        });
    }
}
new GestionnaireControlleur("/public/data/gestionnaires.json");
