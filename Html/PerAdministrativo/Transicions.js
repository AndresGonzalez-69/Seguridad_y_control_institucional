
/*-------------------ForSecretaria---------------------------*/

const inicio =document.getElementById('inicio');
const ClikPerAdminis =document.getElementById('ClikPerAdminis');
const pAdministrativo =document.getElementById('pAdministrativo');

ClikPerAdminis.addEventListener('click',function(){
    inicio.classList.add('post-inicio');
    pAdministrativo.classList.remove('pre-Administrativo');
    pAdministrativo.classList.add('post-Administrativo');
})



const btnAtrasSecreta =document.getElementById('btnAtrasAdministrativo');

btnAtrasSecreta.addEventListener('click',function(){
    pAdministrativo.classList.remove('post-Administrativo');
    pAdministrativo.classList.add('pre-Administrativo');
    inicio.classList.remove('post-inicio');
})
/*--------------FORorientacion----------------------------------*/
const Academico =document.getElementById('Academico');
const ClicPerAcadem =document.getElementById('ClicPerAcadem');

ClicPerAcadem.addEventListener('click',function(){
    inicio.classList.add('post-inicio');
    Academico.classList.remove('pre-Academico');
    Academico.classList.add('post-Academico');
})

const btnAtrasAcademico=document.getElementById('btnAtrasAcademico');

btnAtrasAcademico.addEventListener('click',function(){
    Academico.classList.remove('post-Academico');
    Academico.classList.add('pre-Academico');
    inicio.classList.remove('post-inicio');
})
