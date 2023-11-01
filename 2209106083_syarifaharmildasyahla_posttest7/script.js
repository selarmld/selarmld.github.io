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

//buat dark mode
const toggle = document.getElementById('light');
const nav = document.querySelector('nav');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-sun')){
        body.style.transition = '2s';
        body.style.background = '#d9d4e7';
        body.style.color = '#0e172c';
        body.style.fontSize = '';
        body.style.fontFamily = '';
    }else{
        body.style.transition = '2s';
        body.style.background = '#55423d';
        body.style.color = '#fffffe';
        // Manipulasi DOM 1: Mengubah ukuran teks pada dark mode
        body.style.fontSize = '16px';

        // Manipulasi DOM 2: Mengubah font family pada dark mode
        body.style.fontFamily = 'DM Serif Display', serif;
    }
})

// pop up box
alert('web ini punya sela')