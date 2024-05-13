const titles = [
	"The Penthouse: War in Life",
	"icerde",
	"The Godfather",
	"The Dark Knight",
	"Tehran"
  ];
  
  titles.forEach(title => {
	fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=${encodeURIComponent(title)}`, {
	  "method": "GET",
	  "headers": {
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
		const movie = `
		  <div class="frame-parent">
			<div class="rectangle-parent">
			  <div class="frame-child"></div>
			  <img class="poster-icon" alt="" src="${poster}" />
			</div>
			<div class="stranger-things-wrapper">
			  <b class="stranger-things">${name}</b>
			</div>
		  </div>
		`;
		document.querySelector('.movies').innerHTML += movie;
	  } else {
		console.log(`No result found for: ${title}`);
	  }
	})
	.catch(err => {
	  console.error(err);
	});
  });
  