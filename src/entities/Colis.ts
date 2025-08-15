import { EtatColis } from "../enums/EtatColis";
import { TypeColis } from "../enums/TypeColis";
import { Client } from "./Client";

export class Colis {
    constructor(
        public id: number,
        public client: Client,
        public poids: number,
        public codeColis: string,
        public styleProduit: string,
        public typeProduit: TypeColis,
        public etat: EtatColis
    ) {}
}
