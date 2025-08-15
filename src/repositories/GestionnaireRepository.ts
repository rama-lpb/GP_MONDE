import { Gestionnaire } from "../entities/Gestionnaire";
import { BaseRepository } from "./BaseRepository";

export class GestionnaireRepository extends BaseRepository<Gestionnaire> {
    protected fileName = "gestionnaires.json";
}
