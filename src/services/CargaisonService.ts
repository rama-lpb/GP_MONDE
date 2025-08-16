import { Cargaison } from "../entities/Cargaison";
import { CargaisonRepository } from "../repositories/CargaisonRepository";
import { EtatGlobal } from "../enums/EtatGlobal";
import { EtatAvancement } from "../enums/EtatAvancement";
import { TypeCargaison } from "../enums/TypeCargaison";

export class CargaisonService {
    private repo = new CargaisonRepository();

    create(data: {
        type: string;
        lieuDepart: string;
        lieuArrive: string;
        dateDepart: string;
        dateArrive: string;
        poidsMax: number;
        distance: number;
    }): Cargaison {
        const id = Date.now();
        const cargaison = new Cargaison(
            id,
            id,
            Number(data.poidsMax),
            [],
            0,
            data.lieuDepart,
            new Date(data.dateDepart),
            data.lieuArrive,
            new Date(data.dateArrive),
            EtatAvancement.EN_ATTENTE,
            EtatGlobal.OUVERT,
            data.type as TypeCargaison,
            "CG-" + id,
            Number(data.distance)
        );
        this.repo.add(cargaison);
        return cargaison;
    }
}