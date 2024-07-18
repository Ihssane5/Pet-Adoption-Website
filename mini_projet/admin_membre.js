document.addEventListener("DOMContentLoaded", function() {
    // Simuler la récupération des demandes depuis le serveur
    var demandes = [];
    
    // Afficher les demandes
    var demandesDiv = document.getElementById("demandes");
    demandes.forEach(function(demande) {
      var demandeDiv = document.createElement("div");
      demandeDiv.classList.add("demande");
      var animalInfo = demande.animal ? `<p><strong>Animal:</strong> ${demande.animal}</p>` : "";
      demandeDiv.innerHTML = `
        <p><strong>Type:</strong> ${demande.type}</p>
        <p><strong>Nom:</strong> ${demande.nom}</p>
        ${animalInfo}
        <button class="btn-toggle-info">View more</button>
        <div class="additional-info" style="display: none;">
          ${animalInfo}
        </div>
        <div class="buttons-container">
          <button class="btn-accept" onclick="accepterDemande(${demande.id})">Accept</button>
          <button class="btn-refuser" onclick="refuserDemande(${demande.id})">Refuse</button>
        </div>
      `;
      demandesDiv.appendChild(demandeDiv);
    });
  
    // Event delegation for "View more" button clicks
    demandesDiv.addEventListener("click", function(event) {
      if (event.target.classList.contains("btn-toggle-info")) {
        var button = event.target;
        var additionalInfo = button.nextElementSibling;
        if (additionalInfo.style.display === "none" || additionalInfo.style.display === "") {
          additionalInfo.style.display = "block";
          button.textContent = "View less";
        } else {
          additionalInfo.style.display = "none";
          button.textContent = "View more";
        }
      }
    });
  });
  
  // Fonctions pour accepter ou refuser une demande
  function accepterDemande(id) {
    // Envoyer une requête au serveur pour accepter la demande avec l'ID spécifié
    updateDemandState(id, 'accepted');
  }
  
  function refuserDemande(id) {
    // Envoyer une requête au serveur pour refuser la demande avec l'ID spécifié
    updateDemandState(id, 'refused');
  }
  
  function updateDemandState(id, state) {
    var formData = new FormData();
    formData.append('id', id);
    formData.append('state', state);
  
    fetch('update_demand_state_membre.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (response.ok) {
        console.log(`Demande ${state} avec l'ID: ${id}`);
        // Remove the demand element from the DOM
        var demandElement = document.getElementById(`demand-${id}`);
        if (demandElement) {
          demandElement.remove();
        }
        // Show success message
        var successMsg = document.createElement('div');
        successMsg.classList.add('success-message');
        successMsg.textContent = `Demand ${state} with ID ${id} successfully`;
        document.body.appendChild(successMsg);
        setTimeout(function() {
          successMsg.remove();
        }, 5000); // Remove message after 5 seconds
      } else {
        console.error('Error updating demand state');
      }
    })
    .catch(error => {
      console.error('Fetch error:', error);
    });
  }
  
  
  
  