var exit = document.getElementById('cross');
var menu = document.getElementById('menu');
const elt = document.getElementById('ham');    // On récupère l'élément sur lequel on veut détecter le clic
elt.addEventListener('click', function () {          // On écoute l'événement click
menu.style.display ='block';  
elt.style.display ='none';     
exit.style.display='block';        
});
exit.addEventListener('click', function(){
    menu.style.display='none';
    elt.style.display='block';
    exit.style.display='none';
});