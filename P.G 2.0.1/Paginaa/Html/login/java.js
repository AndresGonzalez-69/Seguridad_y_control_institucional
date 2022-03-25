const inicio =document.getElementById('inicio');
const ClikEstudiante =document.getElementById('ClikEstudiante');
const Estudiante =document.getElementById('Estudiante');

ClikEstudiante.addEventListener('click',function(){
    inicio.classList.add('post-inicio');
    Estudiante.classList.remove('prEstudiante');
    Estudiante.classList.add('psEstudiante');
})


const btnAtrasEstudiante =document.getElementById('btnAtrasEstudiante');

btnAtrasEstudiante.addEventListener('click',function(){
    Estudiante.classList.remove('psEstudiante');
    Estudiante.classList.add('prEstudiante');
    inicio.classList.remove('post-inicio');
})
/*--------------------------------------------------------------*/
const ClicDocente =document.getElementById('ClicDocente');
const Docente =document.getElementById('Docente');

ClicDocente.addEventListener('click',function(){
    inicio.classList.add('post-inicio');
    Docente.classList.remove('prDocente');
    Docente.classList.add('psDocente');
})

const btnAtrasDocente =document.getElementById('btnAtrasDocente');

btnAtrasDocente.addEventListener('click', function(){
    Docente.classList.remove('psDocente');
    Docente.classList.add('prDocente');
    inicio.classList.remove('post-inicio');
})