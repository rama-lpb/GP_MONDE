"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Client = void 0;
const Personne_1 = require("./Personne");
class Client extends Personne_1.Personne {
    constructor(id, nom, prenom, tel, adresse, email, destinataire) {
        super(id, nom, prenom, tel, adresse, email);
        this.colis = [];
        this.destinataire = destinataire;
    }
}
exports.Client = Client;
