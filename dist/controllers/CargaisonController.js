"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.CargaisonController = void 0;
const CargaisonService_1 = require("../services/CargaisonService");
class CargaisonController {
    constructor() {
        this.service = new CargaisonService_1.CargaisonService();
    }
    createCargaison(data) {
        try {
            const cargaison = this.service.create(data);
            return { success: true, cargaison };
        }
        catch (error) {
            return { success: false, message: error.message };
        }
    }
}
exports.CargaisonController = CargaisonController;
new GestionnaireControlleur("/public/data/cargaison.json");
