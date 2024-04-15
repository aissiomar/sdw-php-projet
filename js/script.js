document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const searchQuery = urlParams.get('search');

    fetch(`https://overfast-api.tekrop.fr/heroes?search=${searchQuery}`)
        .then(response => response.json())
        .then(data => {
            const heroesContainer = document.getElementById('heroesContainer');
            heroesContainer.innerHTML = ''; 

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

    const sortAlphaButton = document.getElementById('sortAlphaButton');
    const sortRoleButton = document.getElementById('sortRoleButton');

    sortAlphaButton.addEventListener('click', function () {
        const heroes = Array.from(document.querySelectorAll('.hero'));
        heroes.sort((a, b) => a.querySelector('h2').textContent.localeCompare(b.querySelector('h2').textContent));
        const heroesContainer = document.getElementById('heroesContainer');
        heroesContainer.innerHTML = ''; 
        heroes.forEach(hero => heroesContainer.appendChild(hero));
    });

    sortRoleButton.addEventListener('click', function () {
        const heroes = Array.from(document.querySelectorAll('.hero'));
        heroes.sort((a, b) => a.querySelector('p').textContent.localeCompare(b.querySelector('p').textContent));
        const heroesContainer = document.getElementById('heroesContainer');
        heroesContainer.innerHTML = '';
        heroes.forEach(hero => heroesContainer.appendChild(hero));
    });
});
