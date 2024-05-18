document.addEventListener('DOMContentLoaded', () => {
	const allTitles = [
		"The Queen's Gambit", "icerde", "The Godfather", "The Dark Knight", "Tehran",
		"Inception", "Breaking Bad", "The Matrix", "Forrest Gump", "Pulp Fiction",
		"The Shawshank Redemption", "The Avengers", "Stranger Things",
		"Game of Thrones", "Friends", "Interstellar", "Fight Club", "Sherlock", "Narcos",
		"Black Mirror", "Westworld", "The Mandalorian", "Parasite", "Joker", "Chernobyl"
	];

	const getRandomTitles = (titles, count) => {
		const shuffled = titles.sort(() => 0.5 - Math.random());
		return shuffled.slice(0, count);
	};

	const titles = getRandomTitles(allTitles, 11);

	titles.forEach(title => {
		fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=${encodeURIComponent(title)}`, {
			method: "GET",
			headers: {
				"x-rapidapi-host": "imdb8.p.rapidapi.com",
				"x-rapidapi-key": "f3752edd98msh5fc9e1177b438bep157507jsn02c638c422a9"
			}
		})
		.then(response => response.json())
		.then(data => {
			const item = data.d[0];
			if (item) {
				const name = item.l;
				const poster = item.i && item.i.imageUrl ? item.i.imageUrl : 'No poster available';
				const movie = `<div class="movie"><h2>${name}</h2><img src="${poster}" alt="${name} poster"></div>`;
				document.querySelector('.movies').innerHTML += movie;
			} else {
				console.log(`No result found for: ${title}`);
			}
		})
		.catch(err => {
			console.error(err);
		});
	});
});

  