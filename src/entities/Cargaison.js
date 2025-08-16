"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Cargaison = void 0;
var Cargaison = /** @class */ (function () {
    function Cargaison(id, numero, poidsMax, colis, montantTotal, lieuDepart, dateDepart, lieuArrive, dateArrive, etatAvancement, etatGlobal, typeCargaison, codeCargaison, distance) {
        this.id = id;
        this.numero = numero;
        this.poidsMax = poidsMax;
        this.colis = colis;
        this.montantTotal = montantTotal;
        this.lieuDepart = lieuDepart;
        this.dateDepart = dateDepart;
        this.lieuArrive = lieuArrive;
        this.dateArrive = dateArrive;
        this.etatAvancement = etatAvancement;
        this.etatGlobal = etatGlobal;
        this.typeCargaison = typeCargaison;
        this.codeCargaison = codeCargaison;
        this.distance = distance;
    }
    return Cargaison;
}());
exports.Cargaison = Cargaison;
