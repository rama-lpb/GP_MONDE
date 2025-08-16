"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Colis = void 0;
class Colis {
    constructor(id, client, poids, codeColis, styleProduit, typeProduit, etat) {
        this.id = id;
        this.client = client;
        this.poids = poids;
        this.codeColis = codeColis;
        this.styleProduit = styleProduit;
        this.typeProduit = typeProduit;
        this.etat = etat;
    }
}
exports.Colis = Colis;
