var menu = document.querySelector('nav ul');
var menuBar = document.querySelector('nav .menu-icon');
var iconMenu = document.querySelector('nav .menu-icon img');

menuBar.addEventListener('click',function(){
   
    if (iconMenu.getAttribute("src") == 'imagens/menuicon.png'){
        iconMenu.setAttribute("src", "imagens/closeicon.png");
    }else{
        iconMenu.setAttribute("src", "imagens/menuicon.png")
    }
    menu.classList.toggle('active')
});









//  menu.classList.toggle('active')