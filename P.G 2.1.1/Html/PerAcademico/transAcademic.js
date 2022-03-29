
/*-------------------ForDocente---------------------------*/
const inicio =document.getElementById('inicio');
const ClikDocentes =document.getElementById('ClikDocentes');
const Docentes =document.getElementById('Docentes');

ClikDocentes.addEventListener('click',function(){
    inicio.classList.add('post-inicio');
    Docentes.classList.remove('pre-Docente');
    Docentes.classList.add('post-Docente');
})


const btnAtrasDocente =document.getElementById('btnAtrasDocente');

btnAtrasDocente.addEventListener('click',function(){
    Docentes.classList.remove('post-Docente');
    Docentes.classList.add('pre-Docente');
    inicio.classList.remove('post-inicio');
})
