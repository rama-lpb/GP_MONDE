"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Gestionnaire = void 0;
const Personne_1 = require("./Personne");
class Gestionnaire extends Personne_1.Personne {
    constructor(id, nom, prenom, tel, adresse, email, login, motDePasse) {
        super(id, nom, prenom, tel, adresse, email);
        this.login = login;
        this.motDePasse = motDePasse;
    }
}
exports.Gestionnaire = Gestionnaire;
