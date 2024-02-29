let table = new DataTable("#matable");


    function showTraduction(language) {
        const traductionContainer = document.getElementById("traduction-container");
        const formulaireTraduction = document.getElementById("formulaire-traduction");
        const titreSpan = document.querySelector('.titre span');
        const envoyerTrad = document.getElementById('envoyer-traduction');
        
        if(!traductionContainer.classList.contains('hidden')){
        traductionContainer.classList.add('hidden');
        traductionContainer.classList.remove('hidden');
        }

    
        switch (language) {
            case 'en':
                titreSpan.textContent = 'Translation';
                envoyerTrad.textContent = 'Save translation';
                break;
            case 'es':
                titreSpan.textContent = 'traducción';
                envoyerTrad.textContent = 'guardar traducción';
                break;
            case 'all':
                titreSpan.textContent = 'Übersetzung';
                envoyerTrad.textContent = 'Übersetzung speichern';
                break;
        }
    
        traductionContainer.classList.remove('hidden');
        
        formulaireTraduction.setAttribute("data-lang", language);
    }