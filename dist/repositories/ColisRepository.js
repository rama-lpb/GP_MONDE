"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.ColisRepository = void 0;
const BaseRepository_1 = require("./BaseRepository");
class ColisRepository extends BaseRepository_1.BaseRepository {
    constructor() {
        super(...arguments);
        this.fileName = "colis.json";
    }
}
exports.ColisRepository = ColisRepository;
