
//Barre de recherche

document.getElementById("searchForm").addEventListener("submit", function(event) {
  event.preventDefault();
  const departure = document.getElementById("departure").value;
  const destination = document.getElementById("destination").value;
  
  if (departure && destination) {
      alert(`Recherche d'itinéraire de ${departure} à ${destination}`);
      // Rediriger ou traiter les données de recherche ici
      // window.location.href = `search_results.html?departure=${departure}&destination=${destination}`;
  } else {
      alert("Veuillez entrer un lieu de départ et une destination.");
  }
});



