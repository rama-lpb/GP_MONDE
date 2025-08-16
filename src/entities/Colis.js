"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Colis = void 0;
var Colis = /** @class */ (function () {
    function Colis(id, client, poids, codeColis, styleProduit, typeProduit, etat) {
        this.id = id;
        this.client = client;
        this.poids = poids;
        this.codeColis = codeColis;
        this.styleProduit = styleProduit;
        this.typeProduit = typeProduit;
        this.etat = etat;
    }
    return Colis;
}());
exports.Colis = Colis;
