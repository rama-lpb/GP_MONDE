class GestionnaireControlleur {
    private gestionnaires: Array<{ login: string; password: string; nom: string; prenom: string }> = [];

    constructor(jsonPath: string) {
        this.loadGestionnaires(jsonPath);
    }

    private loadGestionnaires(jsonPath: string) {
        fetch(jsonPath)
            .then(response => response.json())
            .then(data => {
                this.gestionnaires = data;
                this.initForm();
            })
            .catch(() => {
                const messageDiv = document.getElementById("message") as HTMLDivElement;
                if (messageDiv) {
                    messageDiv.textContent = "Erreur de chargement des gestionnaires.";
                    messageDiv.style.color = "red";
                }
            });
    }

    private initForm() {
        const form = document.getElementById("loginForm") as HTMLFormElement;
        const messageDiv = document.getElementById("message") as HTMLDivElement;

        form?.addEventListener("submit", (e) => {
            e.preventDefault();
            const login = (document.getElementById("login") as HTMLInputElement).value.trim();
            const password = (document.getElementById("password") as HTMLInputElement).value.trim();

            const gestionnaire = this.gestionnaires.find(
                g => g.login === login && g.password === password
            );

            if (gestionnaire) {
                messageDiv.textContent = "Connexion réussie, bienvenue " + gestionnaire.prenom + " " + gestionnaire.nom;
                messageDiv.style.color = "green";
                setTimeout(() => {
                    window.location.href = "/dashboard";
                }, 1200);
            } else {
                messageDiv.textContent = "Identifiants invalides";
                messageDiv.style.color = "red";
            }
        });
    }
}

new GestionnaireControlleur("/public/data/gestionnaires.json");