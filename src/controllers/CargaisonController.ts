import { CargaisonService } from "../services/CargaisonService";

export class CargaisonController {
    private service = new CargaisonService();

    createCargaison(data: {
        type: string;
        lieuDepart: string;
        lieuArrive: string;
        dateDepart: string;
        dateArrive: string;
        poidsMax: number;
        distance: number;
    }) {
        try {
            const cargaison = this.service.create(data);
            return { success: true, cargaison };
        } catch (error: any) {
            return { success: false, message: error.message };
        }
    }
}
new GestionnaireControlleur("/public/data/cargaison.json");