const navbarNav = document.querySelector

('.navbar-nav')
// ketika menu d klik
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active')
};

//biar klo ngeklik di luar navbar, navbarnya ilang
const menu = document.querySelector('#menu');

document.addEventListener('click', function(e){
    if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});
