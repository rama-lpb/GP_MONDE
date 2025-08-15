"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.ClientRepository = void 0;
const BaseRepository_1 = require("./BaseRepository");
class ClientRepository extends BaseRepository_1.BaseRepository {
    constructor() {
        super(...arguments);
        this.fileName = "clients.json";
    }
}
exports.ClientRepository = ClientRepository;
