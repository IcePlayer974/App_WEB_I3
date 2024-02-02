var nombreAleatoire = genererNombreAleatoire();
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('nombreAleatoire').innerText = "Vous êtes actuellement " + nombreAleatoire + " sur le site.";
});
function genererNombreAleatoire() {
        var nombre = Math.floor(Math.random() * (100 - 5 + 1)) + 5;
            return nombre;
}

document.getElementById('nom').addEventListener('input', function() {
    var validerBtn = document.getElementById('valider-btn');
    validerBtn.style.display = this.value.trim() !== "" ? 'block' : 'none';
  });
  
  document.addEventListener("DOMContentLoaded", function() {
    function scrollToSummary() {
      var resumeElement = document.getElementById('resume');
      if (resumeElement) {
        resumeElement.scrollIntoView({ behavior: 'smooth' });
      }
    }
  
    function afficherResumeAutomatique() {
      var nom = document.getElementById('nom').value;
      var quantiteInput = document.getElementById('quantite');
      var quantite = quantiteInput.value;
      var pass = document.getElementById('pass').value;
      var jours = document.querySelectorAll('input[name="jour[]"]:checked');
      var commentaire = document.getElementById('commentaire').value;
  
      if (nom === "") {
        return; // Ne pas afficher le résumé si le nom n'est pas saisi
      }
  
      // Vérifier que la quantité est dans la plage spécifiée
      var quantiteInt = parseInt(quantite);
      if (isNaN(quantiteInt) || quantiteInt < 1 || quantiteInt > 5) {
        alert("La quantité de places doit être un nombre entre 1 et 5.");
        quantiteInput.value = ""; // Réinitialiser la valeur du champ
        quantiteInput.focus(); // Mettre le focus sur le champ quantite
        return;
      }
  
      var resumeText = "<p>Nom: " + nom + "</p>";
      resumeText += "<p>Quantité de places: " + quantiteInt + "</p>";
      resumeText += "<p>Type de pass: " + pass + "</p>";
      resumeText += "<p>Jour(s) à réserver: " + Array.from(jours, jour => jour.value).join(", ") + "</p>";
      resumeText += "<p>Commentaire: " + (commentaire || "Aucun commentaire") + "</p>";
  
      document.getElementById('resume').innerHTML = resumeText;
      scrollToSummary();
    }
  
    var champsFormulaire = document.querySelectorAll('#reservation-form input, #reservation-form select, #reservation-form textarea');
  
    champsFormulaire.forEach(function(champ) {
      champ.addEventListener('input', afficherResumeAutomatique);
    });
  });
  

