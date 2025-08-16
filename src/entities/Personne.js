"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Personne = void 0;
var Personne = /** @class */ (function () {
    function Personne(id, nom, prenom, tel, adresse, email) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.tel = tel;
        this.adresse = adresse;
        this.email = email;
    }
    return Personne;
}());
exports.Personne = Personne;
/* export abstract class Personne {
    public id: number;
    protected nom: string;
    protected prenom: string;
    protected tel: string;
    protected adresse: string;
    protected email: string;

    constructor(id: number, nom: string, prenom: string, tel: string, adresse: string, email: string) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.tel = tel;
        this.adresse = adresse;
        this.email = email;
    }

    getId (): number{
     return this.id
    }
    setId (id: number): void{
        this.id = id ;
    }
    getNom (): string{
        return this.nom ;
    }
    setNom (nom: string): void {
        this.nom = nom ;
    }
      getPrenom (): string{
        return this.prenom ;
    }
    setPrenom (prenom: string): void {
        this.prenom = prenom
    }
    getTel (): string{
         return this.tel ;
    }
    setTel (tel: string): void{
        this.tel = tel
    }
    getAdresse (): string{
        return this.adresse ;
    }
    setAdresse (adresse: string): void {
        this.adresse = adresse;
    }
    getemail (): string {
        return this.email ;
    }
    setEmail (email: string) : void {
        this.email = email
    }
} */ 
