const titulo = document.querySelector('.title-writer');
typeWriter(titulo);
function typeWriter(elemento){
	const textoArray = elemento.innerHTML.split('');
	elemento.innerHTML = '';
	textoArray.forEach((Letra,i) => {
		setTimeout(function(){
			elemento.innerHTML += Letra;
		},300 * i)
	});
}

