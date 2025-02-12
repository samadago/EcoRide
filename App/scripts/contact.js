
function validateForm() {
    let titre = document.getElementById("titre").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();

    let titreRegex = /^[a-zA-Z0-9\s]{3,50}$/;
    if (!titreRegex.test(titre)) {
        alert("Le titre doit contenir entre 3 et 50 caractères (lettres et chiffres uniquement).");
        return false;
    }

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
        alert("Veuillez entrer un email valide.");
        return false;
    }

    if (message.length < 10) {
        alert("Le message doit contenir au moins 10 caractères.");
        return false;
    }

    return true;
}

