// Selecteer elementen
const startLevelButtons = document.querySelectorAll('.level');
const locationsDiv = document.getElementById('locaties');
const resultUl = document.getElementById('route-info');

// Controleer of de data beschikbaar is
console.log(data);

// Helperfunctie: Markeer de geselecteerde knop
function setActiveButton(selectedButton, buttonGroup) {
    buttonGroup.forEach(btn => btn.classList.remove('selected'));
    selectedButton.classList.add('selected');
}

// Helperfunctie: Genereer locatieknoppen
function generateLocationButtons(level) {
    // Reset locaties en resultaat
    locationsDiv.innerHTML = '<h6>Op welke locatie ga je school volgen?</h6>';
    const buttonGroup = document.createElement('div');
    buttonGroup.classList.add('button-group');
    locationsDiv.appendChild(buttonGroup);

    const locationButtons = Object.keys(data[level]).map(location => {
        const button = document.createElement('button');
        button.className = 'location';
        button.textContent = location;
        button.dataset.location = location;
        button.dataset.level = level;
        buttonGroup.appendChild(button);

        // Voeg click-event toe
        button.addEventListener('click', () => {
            setActiveButton(button, locationButtons);
            updateResult(level, location);
        });

        return button;
    });
}

// Helperfunctie: Update het resultaat
function updateResult(level, location) {
    // Reset resultaat
    resultUl.innerHTML = '';

    // Voeg geselecteerde locatie toe
    resultUl.appendChild(createListItem(`Locatie: ${location}`));

    // Voeg leerroute toe
    const years = data[level][location][0].years;
    years.forEach(year => resultUl.appendChild(createListItem(year.title)));
}

// Helperfunctie: Maak een lijstitem
function createListItem(text) {
    const li = document.createElement('li');
    li.textContent = text;
    return li;
}

// Event listener: Startniveau knoppen
startLevelButtons.forEach(button => {
    button.addEventListener('click', () => {
        const level = button.dataset.level;
        setActiveButton(button, startLevelButtons);
        generateLocationButtons(level);
    });
});