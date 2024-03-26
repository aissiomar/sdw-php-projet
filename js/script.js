
const urlParams = new URLSearchParams(window.location.search);
const searchQuery = urlParams.get('search');


fetch(`https://overfast-api.tekrop.fr/heroes?search=${searchQuery}`)
    .then(response => response.json())
    .then(data => {
        const heroesContainer = document.querySelector('.heroes-container');

        
        data.forEach(hero => {
            const heroDiv = document.createElement('div');
            heroDiv.classList.add('hero');

            const img = document.createElement('img');
            img.src = hero.portrait;
            img.alt = hero.name;
            heroDiv.appendChild(img);

            const detailsDiv = document.createElement('div');
            detailsDiv.classList.add('hero-details');

            const nameHeading = document.createElement('h2');
            nameHeading.textContent = hero.name;
            detailsDiv.appendChild(nameHeading);

            const roleParagraph = document.createElement('p');
            roleParagraph.textContent = `Role: ${hero.role}`;
            detailsDiv.appendChild(roleParagraph);

            heroDiv.appendChild(detailsDiv);

            heroesContainer.appendChild(heroDiv);
        });
    })
    .catch(error => console.error('Error fetching heroes:', error));
