const circle = document.querySelector('.meu-circulo');
let r = 30;

circle.addEventListener('click', () => {
	r += 10;
	circle.style.r = r;
})