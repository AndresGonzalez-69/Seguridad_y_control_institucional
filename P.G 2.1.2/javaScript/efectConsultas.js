
 const btnind =document.getElementById('btnind');
 const btngrup = document.getElementById('btngrup')
 const Inicial = document.getElementById('Inicial');
 const indi = document.getElementById('indi');
 const atras = document.getElementById('atras');
 const grupal = document.getElementById('grupal');
 const btnAtrasGrupo =document.getElementById('btnAtrasGrupo');
 btnind.addEventListener('click',function(){
     Inicial.classList.add('post-inicial');
     indi.classList.remove('pre-indi');
     indi.classList.add('post-indi');
 })
 atras.addEventListener('click',function(){
     indi.classList.remove('post-indi');
     indi.classList.add('pre-indi');
     Inicial.classList.remove('post-inicial');
 })
 btngrup.addEventListener('click', function(){
     Inicial.classList.add('post-inicial');
     grupal.classList.remove('pre-grupo');
     grupal.classList.add('grupal-selec')
 })
 btnAtrasGrupo.addEventListener('click',function(){
     grupal.classList.remove('grupal-selec');
     grupal.classList.add('pre-grupo');
     Inicial.classList.remove('post-inicial');
 })