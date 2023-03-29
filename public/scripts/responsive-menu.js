const humberger = document.querySelector('#humberger');
const closeMenu = document.querySelector('.close');
var menuItems = document.querySelector('.menu-items');

humberger.addEventListener('click', function(e){
	e.preventDefault();

	menuItems.style.transform = 'translateY(0%)';
})

closeMenu.addEventListener('click', function(e){
	e.preventDefault();
	

	menuItems.style.transform = 'translateY(-100%)';
})


window.onresize = function(){
	if(window.innerWidth > 1024){
		menuItems.style.transform = 'translateY(0%)';
	}else{
		menuItems.style.transform = 'translateY(-100%)';
	}
}