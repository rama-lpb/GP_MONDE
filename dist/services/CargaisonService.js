"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.CargaisonService = void 0;
const Cargaison_1 = require("../entities/Cargaison");
const CargaisonRepository_1 = require("../repositories/CargaisonRepository");
const EtatGlobal_1 = require("../enums/EtatGlobal");
const EtatAvancement_1 = require("../enums/EtatAvancement");
class CargaisonService {
    constructor() {
        this.repo = new CargaisonRepository_1.CargaisonRepository();
    }
    create(data) {
        const id = Date.now();
        const cargaison = new Cargaison_1.Cargaison(id, id, Number(data.poidsMax), [], 0, data.lieuDepart, new Date(data.dateDepart), data.lieuArrive, new Date(data.dateArrive), EtatAvancement_1.EtatAvancement.EN_ATTENTE, EtatGlobal_1.EtatGlobal.OUVERT, data.type, "CG-" + id, Number(data.distance));
        this.repo.add(cargaison);
        return cargaison;
    }
}
exports.CargaisonService = CargaisonService;
