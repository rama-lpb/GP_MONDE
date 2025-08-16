"use strict";
const gestionnaires = [
    { login: "rama", password: "passer", nom: "Gueye", prenom: "Rama" },
    { login: "admin", password: "passer", nom: "Odc", prenom: "Admin" }
];
const form = document.getElementById("loginForm");
const messageDiv = document.getElementById("message");
form === null || form === void 0 ? void 0 : form.addEventListener("submit", function (e) {
    e.preventDefault();
    const login = document.getElementById("login").value.trim();
    const password = document.getElementById("password").value.trim();
    const gestionnaire = gestionnaires.find(g => g.login === login && g.password === password);
    if (gestionnaire) {
        console.log('great !!!!');
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
