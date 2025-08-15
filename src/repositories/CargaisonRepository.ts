import { Cargaison } from "../entities/Cargaison";
import { BaseRepository } from "./BaseRepository";

export class CargaisonRepository extends BaseRepository<Cargaison> {
    protected fileName = "cargaisons.json";
}