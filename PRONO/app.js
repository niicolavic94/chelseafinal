// Importation des modules Firebase via CDN
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js";
import { getDatabase, ref, onValue, set } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-database.js";

// Configuration de Firebase
const firebaseConfig = {
  apiKey: "AIzaSyCsWNTt9qZQZ1KINRP0ZNQG-sgV00wQoi8",
  authDomain: "pronostics-3d137.firebaseapp.com",
  databaseURL: "https://pronostics-3d137-default-rtdb.firebaseio.com",
  projectId: "pronostics-3d137",
  storageBucket: "pronostics-3d137.firebasestorage.app",
  messagingSenderId: "223723500693",
  appId: "1:223723500693:web:b4150cfb8cd086f266979c",
  measurementId: "G-GNT96ZZFLM"
};

// Initialisation de l'application Firebase
const app = initializeApp(firebaseConfig);
const database = getDatabase(app);

// Référence au nœud "MATCHS"
const matchesRef = ref(database, 'MATCHS');

// Chargement des matchs
function loadMatches() {
    onValue(matchesRef, (snapshot) => {
        const matches = snapshot.val();
        const selectMatch = document.getElementById('match');
        if (matches) {
            selectMatch.innerHTML = '<option value="">Sélectionnez un match</option>';
            Object.keys(matches).forEach(key => {
                const match = matches[key];
                const option = document.createElement('option');
                option.value = key;
                option.textContent = match;
                selectMatch.appendChild(option);
            });
        } else {
            console.log("Aucun match trouvé.");
        }
    });
}

// Soumettre le pronostic
document.getElementById('submit').addEventListener('click', () => {
    const username = document.getElementById('username').value;
    const selectedMatch = document.getElementById('match').value;
    const scoreA = document.getElementById('scoreA').value;
    const scoreB = document.getElementById('scoreB').value;

    if (username && selectedMatch && scoreA !== '' && scoreB !== '') {
        const predictionsRef = ref(database, `pronostics/${username}_${selectedMatch}`);
        set(predictionsRef, {
            username: username,
            match: selectedMatch,
            scoreA: scoreA,
            scoreB: scoreB
        }).then(() => {
            alert("Pronostic enregistré avec succès !");
            displayPronostics();
        }).catch((error) => {
            console.error("Erreur lors de l'enregistrement du pronostic: ", error);
        });
    } else {
        alert("Veuillez remplir tous les champs !");
    }
});

// Affichage des pronostics
function displayPronostics() {
    const pronosticsRef = ref(database, 'pronostics');
    onValue(pronosticsRef, (snapshot) => {
        const pronostics = snapshot.val();
        const tbody = document.getElementById('ranking-body');
        tbody.innerHTML = '';
        if (pronostics) {
            Object.keys(pronostics).forEach(key => {
                const pronostic = pronostics[key];
                const tr = document.createElement('tr');
                const fields = ['username', 'match', 'scoreA', 'scoreB'];
                fields.forEach(field => {
                    const td = document.createElement('td');
                    td.innerText = pronostic[field] !== undefined ? pronostic[field] : "";
                    tr.appendChild(td);
                });
                tbody.appendChild(tr);
            });
        }
    });
}

// Charger les matchs au démarrage
loadMatches();

// Afficher les pronostics au démarrage
displayPronostics();
