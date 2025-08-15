"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.GestionnaireService = void 0;
const GestionnaireRepository_1 = require("../repositories/GestionnaireRepository");
class GestionnaireService {
    constructor() {
        this.repo = new GestionnaireRepository_1.GestionnaireRepository();
    }
    getLogin(login, motDePasse) {
        const gestionnaires = this.repo.findAll();
        console.log(gestionnaires);
        const found = gestionnaires.find(g => g.login === login && g.motDePasse === motDePasse);
        return found || null;
    }
}
exports.GestionnaireService = GestionnaireService;
