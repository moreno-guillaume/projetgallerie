let table = new DataTable("#matable");





function showTraduction(language) {
  const traductionContainer = document.getElementById("traduction-container");
  const formulaireTraduction = document.getElementById("formulaire-traduction");
  const titreSpan = document.querySelector(".titre span");
  const envoyerTrad = document.getElementById("envoyer-traduction");

  if (!traductionContainer.classList.contains("hidden")) {
    traductionContainer.classList.add("hidden");
  }

  switch (language) {
    case "en":
      titreSpan.textContent = "Translation";
      envoyerTrad.textContent = "Save translation";
      break;
    case "es":
      titreSpan.textContent = "traducción";
      envoyerTrad.textContent = "guardar traducción";
      break;
    case "all":
      titreSpan.textContent = "Übersetzung";
      envoyerTrad.textContent = "Übersetzung speichern";
      break;
  }

  let xhr = new XMLHttpRequest();
  // xhr.open("POST", "http://localhost/projetgallerie2/view/update.php", true);
    // xhr.open('POST', 'view/update.php' , true);
    // xhr.open('POST', 'controller/Update.php', true);
    xhr.open('POST', 'localhost/projetgallerie2/controller/Update.php', true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  const params = "language=" + encodeURIComponent(language);
  xhr.send(params);
  console.log(params);

  traductionContainer.classList.remove("hidden");
  // formulaireTraduction.setAttribute("data-lang", language);
  formulaireTraduction.setAttribute("id", language);
}











/* ========================================*/

function showTextForm(button) {
  let parentForm = button.parentNode;
  let paragraph = parentForm.querySelector("p");

  let textarea = document.createElement("textarea");
  textarea.textContent = paragraph.textContent;
  textarea.style.resize = "none";

  parentForm.replaceChild(textarea, paragraph);

  let cancelButton = document.createElement("button");
  cancelButton.setAttribute("id", "annuler");
  cancelButton.textContent = "Annuler";

  cancelButton.onclick = function() {
    backToNormal(parentForm, textarea, paragraph);
  };

  parentForm.appendChild(cancelButton);

  parentForm.appendChild(cancelButton);
}

/* ========================================*/

function showDateForm(button) {
    let parentForm = button.parentNode;
    let paragraph = parentForm.querySelector('p');

    let datePicker = document.createElement("input");
    datePicker.setAttribute("type", "date");

    parentForm.replaceChild(datePicker, paragraph);

    let cancelButton = document.createElement("button");
    cancelButton.setAttribute("id", "annuler");
    cancelButton.textContent = "Annuler";

    cancelButton.onclick = function() {
        backToNormal(parentForm, datePicker, paragraph);
    };

    parentForm.appendChild(cancelButton);
}

/* ========================================*/

function showFileForm(button) {
  let parentForm = button.parentNode;

  let fileInput = document.createElement("input");
  fileInput.setAttribute("type", "file");
  fileInput.style.display = "none";

  fileInput.addEventListener("change", function() {
      const selectedFile = fileInput.files[0];
      console.log("Fichier sélectionné :", selectedFile);
  });

  parentForm.appendChild(fileInput);

  let cancelButton = document.createElement("button");
  cancelButton.textContent = "Annuler";

  cancelButton.setAttribute("id", "annuler");

  cancelButton.onclick = function() {
      backToNormal(parentForm, fileInput, paragraph); 
  };

  parentForm.appendChild(cancelButton);

  fileInput.click();
}

function backToNormal(parentForm, e, paragraph) {
  parentForm.replaceChild(paragraph, e);
  parentForm.removeChild(parentform.getElementById("annuler"));
}