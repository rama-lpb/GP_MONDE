import { Personne } from "./Personne";

export class Gestionnaire extends Personne {

    private login: string ;
    private password: string ;

    constructor (login: string , password: string , id: number , nom: string , prenom: string , tel: string , adresse: string , email: string){
      super(id ,nom , prenom , tel  , adresse , email)
      this.login = login ;
      this.prenom = prenom ;
    }
}