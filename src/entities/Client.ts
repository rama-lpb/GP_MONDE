import { Personne } from "./Personne";

export class Client extends Personne {

    constructor (id: number , nom: string , prenom: string ,tel: string , adresse: string , email: string){
        super(id, nom , prenom , tel , adresse , email)
    }
}