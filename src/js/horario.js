const formulario = document.querySelector('#formulario')
const hora = document.querySelector('#hora')
const dia = document.querySelector('#dia')
const precio = document.querySelector('#precio')
const precioMin = document.querySelector('#precioMin')
const precioMax = document.querySelector('#precioMax')
const contenedorHorario = document.querySelector('#contenedorHorario')
let viajesBD;
const horario = {
    fecha: '',
    hora: '',
    precio: '',
    min: '',
    max: ''
}


document.addEventListener('DOMContentLoaded', async e => {
    formulario.addEventListener('submit', buscarViaje)

    dia.addEventListener('change', e => {
        horario.fecha = e.target.value
    })
    hora.addEventListener('input', e => {
        horario.hora = e.target.value
    })
    precio.addEventListener('input', e => {
        horario.precio = e.target.value
    })
    precioMin.addEventListener('input', e => {
        horario.min = e.target.value
    })
    precioMax.addEventListener('input', e => {
        horario.max = e.target.value
    })
    viajesBD = await fetchViajes()


})

const buscarViaje = (e) => {
    e.preventDefault();

    // if (Object.values(horario).includes('')) {
    //     return mostrarAlerta()
    // }
    if (horario.hora === '' && horario.fecha === '' && horario.precio === '') {
        // return mostrarAlerta()
    }

    const resultado = viajesBD.filter(filtrarFecha).filter(filtrarHorario).filter(filtrarPrecio).filter(filtrarPrecioMinimo).filter(filtrarPrecioMaximo)
    if (resultado) {
        console.log(resultado)
        mostrarViaje(resultado)
    }

}
const fetchViajes = async () => {

    const url = 'http://localhost:3000/api/viajes'
    const respuesta = await fetch(url)
    const resultado = await respuesta.json()

    return resultado
}
const mostrarAlerta = () => {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Intenta poniendo una fecha u hora',
    })
}

const mostrarViaje = (viajes) => {
    limpiarHTML()
    viajes.forEach(viaje => {
        const { nombre, precio, hora, fecha, boletos, id } = viaje;

        const rowDiv = document.createElement('DIV')
        rowDiv.classList.add('row', 'align-items-center', 'mb-5', 'mt-5')

        rowDiv.innerHTML = `
        <div class="col-md-4">
        <img src="build/img/${nombre}.jpg" alt="imagen viaje" class="img-fluid imagen">
    </div>
    <div class="col-md-4">
        <h3 class="text-center fs-1 text-primary text-uppercase">${nombre}</h3>
        <p class="text-dark text-center">Hora de Salida: <span class="text-primary fw-bold">${hora}</span></p>
        <p class="text-dark text-center">Fecha de Salida: <span class="text-primary fw-bold">${fecha}</span></p>
        <p class="text-dark text-center">Boletos Disponibles: <span class="text-primary fw-bold">${boletos}</span></p>
        <p class="text-dark text-center">Precio: <span class="text-primary fw-bold">${precio}</span></p>
    
    </div>
    
    <div class="col-md-4">
        <a href="/visitar?id=${id}" class="btn btn-primary btn-lg text-uppercase fs-3">Visitar <i class="bi bi-alarm-fill"></i></a>
    
    </div>
        
        
        `

        contenedorHorario.appendChild(rowDiv)

    })


}

const limpiarHTML = () => {

    while (contenedorHorario.firstChild) {
        contenedorHorario.removeChild(contenedorHorario.firstChild)
    }
}

const errorViaje = () => {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No Hay ningun viaje!, busca otros fechas u horas',
    })
}

const filtrarFecha = (viaje) => {
    const { fecha } = horario
    if (fecha) {
        return fecha === viaje.fecha
    }
    return viaje
}
const filtrarHorario = (viaje) => {
    const { hora } = horario
    if (hora) {
        return hora === viaje.hora.substring(0, 5)
    }
    return viaje
}

const filtrarPrecio = (viaje) => {
    const { precio } = horario
    if (precio) {
        return precio === viaje.precio
    }
    return viaje
}

const filtrarPrecioMinimo = (viaje) => {
    const { min } = horario
    if (min) {
        return Number(min) <= Number(viaje.precio)
    }
    return viaje
}
const filtrarPrecioMaximo = (viaje) => {
    const { max } = horario
    if (max) {
        return Number(max) >= Number(viaje.precio)
    }
    return viaje
}