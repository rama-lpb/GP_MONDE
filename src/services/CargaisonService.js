"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.CargaisonService = void 0;
var Cargaison_1 = require("../entities/Cargaison");
var CargaisonRepository_1 = require("../repositories/CargaisonRepository");
var EtatGlobal_1 = require("../enums/EtatGlobal");
var EtatAvancement_1 = require("../enums/EtatAvancement");
var CargaisonService = /** @class */ (function () {
    function CargaisonService() {
        this.repo = new CargaisonRepository_1.CargaisonRepository();
    }
    CargaisonService.prototype.create = function (data) {
        var id = Date.now();
        var cargaison = new Cargaison_1.Cargaison(id, id, Number(data.poidsMax), [], 0, data.lieuDepart, new Date(data.dateDepart), data.lieuArrive, new Date(data.dateArrive), EtatAvancement_1.EtatAvancement.EN_ATTENTE, EtatGlobal_1.EtatGlobal.OUVERT, data.type, "CG-" + id, Number(data.distance));
        this.repo.add(cargaison);
        return cargaison;
    };
    return CargaisonService;
}());
exports.CargaisonService = CargaisonService;
