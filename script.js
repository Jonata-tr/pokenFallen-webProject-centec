

const navs = document.querySelectorAll('.nav-link')

navs.forEach(nav => {
	nav.addEventListener("click", () => {
		
		let drop = nav.children[1];
		drop.classList.toggle('hidden')		
	})
})


const acordionButtons = document.querySelectorAll(".accordion-item button");


acordionButtons.forEach(button => {
	button.addEventListener('click', () => {
		const isExpanded = button.getAttribute('aria-expanded') === 'true';      button.setAttribute('aria-expanded', !isExpanded);
	})
})