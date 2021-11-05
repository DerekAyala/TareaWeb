document.addEventListener('DOMContentLoaded', function(){
  crearGaleria();
});
function crearGaleria() {
  const galeria = document.querySelector('.galeria-imagenes');
  for(let i = 1; i <= 23; i++ ) {
      const imagen = document.createElement('picture');
      imagen.innerHTML = `
          <img loading="lazy" width="200" height="300" src="images/fotos/imagengaleria_${i}.jpg" alt="imagen galeria">
      `;
      imagen.onclick = function() {
          mostrarImagen(i);
      }

      galeria.appendChild(imagen);
  }
} 
function mostrarImagen(id) {
  const imagen = document.createElement('picture');
  imagen.innerHTML = `
      <img loading="lazy" width="400" height="600" src="images/fotos/imagengaleria_${id}.jpg" alt="imagen galeria">
  `;
  // Crea el Overlay con la imagen
  const overlay = document.createElement('DIV');
  overlay.appendChild(imagen);
  overlay.classList.add('overlay');
  overlay.onclick = function() {
      const body = document.querySelector('body');
      body.classList.remove('fijar-body');
      overlay.remove();
  }

  // Boton para cerrar el Modal
  const cerrarModal = document.createElement('P');
  cerrarModal.textContent = 'X';
  cerrarModal.classList.add('btn-cerrar');
  cerrarModal.onclick = function() {
      const body = document.querySelector('body');
      body.classList.remove('fijar-body');
      overlay.remove();
  }
  overlay.appendChild(cerrarModal);

  // Añadirlo al HTML
  const body = document.querySelector('body');
  body.appendChild(overlay);
  body.classList.add('fijar-body');
}