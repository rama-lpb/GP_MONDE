"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.GestionnaireRepository = void 0;
const BaseRepository_1 = require("./BaseRepository");
class GestionnaireRepository extends BaseRepository_1.BaseRepository {
    constructor() {
        super(...arguments);
        this.fileName = "gestionnaires.json";
    }
}
exports.GestionnaireRepository = GestionnaireRepository;
