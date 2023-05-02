const selectBuscador = document.querySelector('#seleccionar-pais')
const contenedorPais = document.querySelector('#paisBuscar')
let viajesBD;
document.addEventListener('DOMContentLoaded', async () => {
    IniciarBuscador()
    viajesBD = await fetchViajes()
})

const IniciarBuscador = () => {

    selectBuscador.addEventListener('change', Buscador)
}

const fetchViajes = async () => {

    const url = 'http://localhost:3000/api/viajes'
    const respuesta = await fetch(url)
    const resultado = await respuesta.json()

    return resultado
}


const Buscador = async (e) => {

    viajesBD.forEach(viajeBD => {
        const { nombre } = viajeBD

        if (nombre === e.target.value) {
            mostrarPais(viajeBD)
        }
    })
}

const mostrarPais = (pais) => {
    limpiarHTML()
    const { nombre, boletos, precio, id, fecha, hora } = pais

    const paisDiv = document.createElement('DIV');
    paisDiv.innerHTML = `
    
    <h2 class="text-white text-center fs-1 mt-5 text-uppercase">${nombre}</h2>
                        <img src="build/img/${nombre}.jpg" alt="imagen viaje" class="img-fluid imagen ">
                        <div class="d-flex justify-content-between mt-3">
                            <p class="text-white fs-4 fw-bold">Boletos Disponibles: <span class="text-primary fw-bold">${boletos}</span></p>
                            <p class="text-white fs-4 fw-bold">Horas de vuelo: <span class="text-primary fw-bold">19</span></p>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <p class="text-white fs-4 fw-bold">Fecha de Salida: <span class="text-primary fw-bold">${fecha}</span></p>
                            <p class="text-white fs-4 fw-bold">Hora de Salida: <span class="text-primary fw-bold">${hora}</span></p>
                        </div>
                        <div class="d-flex justify-content-center ">
                        <a href="/visitar?id=${id}" class="btn btn-primary btn-lg text-uppercase fw-bold py-3 fs-2 w-100">Visitar</a>
                        </div>    
    
    
    `

    contenedorPais.appendChild(paisDiv)
}

const limpiarHTML = () => {

    while (contenedorPais.firstChild) {
        contenedorPais.removeChild(contenedorPais.firstChild)
    }
}
