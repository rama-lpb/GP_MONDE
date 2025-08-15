import { Personne } from "./Personne";
import { Colis } from "./Colis";

export class Client extends Personne {
    public colis: Colis[] = [];
    public destinataire: string;

    constructor(
        id: number,
        nom: string,
        prenom: string,
        tel: string,
        adresse: string,
        email: string,
        destinataire: string
    ) {
        super(id, nom, prenom, tel, adresse, email);
        this.destinataire = destinataire;
    }
}