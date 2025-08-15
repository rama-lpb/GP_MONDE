import { Colis } from "./Colis";
import { EtatGlobal } from "../enums/EtatGlobal";
import { EtatAvancement } from "../enums/EtatAvancement";
import { TypeCargaison } from "../enums/TypeCargaison";

export class Cargaison {
    constructor(
        public id: number,
        public numero: number,
        public poidsMax: number,
        public colis: Colis[],
        public montantTotal: number,
        public lieuDepart: string,
        public dateDepart: Date,
        public lieuArrive: string,
        public dateArrive: Date,
        public etatAvancement: EtatAvancement,
        public etatGlobal: EtatGlobal,
        public typeCargaison: TypeCargaison,
        public codeCargaison: string,
        public distance: number
    ) {}
}