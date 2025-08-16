import { Personne } from "./Personne";

export class Gestionnaire extends Personne {
    constructor(
        id: number,
        nom: string,
        prenom: string,
        tel: string,
        adresse: string,
        email: string,
        public login: string,
        public password: string
    ) {
        super(id, nom, prenom, tel, adresse, email);
    }
}