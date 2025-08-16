import { GestionnaireRepository } from "../repositories/GestionnaireRepository";
import { Gestionnaire } from "../entities/Gestionnaire";

export class GestionnaireService {
    private repo = new GestionnaireRepository();

    getLogin(login: string, password: string): Gestionnaire | null {
        const gestionnaires = this.repo.findAll();
        console.log(gestionnaires);
        const found = gestionnaires.find(
            g => g.login === login && g.password === password
        );
        return found || null;
    }
}