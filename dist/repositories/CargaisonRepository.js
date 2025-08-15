"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.CargaisonRepository = void 0;
const BaseRepository_1 = require("./BaseRepository");
class CargaisonRepository extends BaseRepository_1.BaseRepository {
    constructor() {
        super(...arguments);
        this.fileName = "cargaisons.json";
    }
}
exports.CargaisonRepository = CargaisonRepository;
