const guardarBtn = document.querySelectorAll('#guardar')

document.addEventListener('DOMContentLoaded', () => {

    guardarBtn.forEach(guardar => {
        guardar.addEventListener('click', e => {
            e.preventDefault();
            const viaje = e.target.parentElement.parentElement.parentElement
            guardarFavorito(viaje)
        })
    })
})

const guardarFavorito = (viaje) => {

    const contenidoViaje = {
        imagen: viaje.querySelector('.imagen').src,
        nombre: viaje.querySelector('h3').textContent,
        boletos: viaje.querySelector('.boletos span').textContent,
        hora: viaje.querySelector('.hora span').textContent
    }

    localStorage.setItem('viaje', JSON.stringify(contenidoViaje))
}