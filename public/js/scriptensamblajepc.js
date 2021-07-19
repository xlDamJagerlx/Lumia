/*seleccionamos los bloques y los h4 del acordion*/
const bloque  = document.querySelectorAll('.bloque')
const h4      = document.querySelectorAll('.h4')

//Cuando se da click a las etiquetas h4
h4.forEach( ( cadaH4 , i )=>{

    h4[i].addEventListener('click', ()=>{
        /*Quitamos las clase activo los bloques*/
        bloque.forEach((cadaBloque, i) =>{
            bloque[i].classList.remove('activo')
        })
        /*Añadir la clase activo a los bloque en la posicion de h4*/
        bloque[i].classList.add('activo')
    })

})

