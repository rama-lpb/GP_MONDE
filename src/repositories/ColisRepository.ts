import { Colis } from "../entities/Colis";
import { BaseRepository } from "./BaseRepository";

export class ColisRepository extends BaseRepository<Colis> {
    protected fileName = "colis.json";
}

