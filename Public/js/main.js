$(document).ready(function(){
    scrollHeader();
    animationScroll();
    animaPhoto();
    animaPhotoL()
    menuActive();
    activeMenu();
    
    /*=============== SMOOTH SCROLL ===============*/
	// Add smooth scrolling to all links
	$("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
    
            // Store hash
            var hash = this.hash;
    
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
        } // End if
    });

});

function scrollBtn(){

}

function scrollHeader(){
    const header = document.getElementById("menu_dark");
    if(this.scrollY >= 20){
        header.classList.add('scroll-header');
    } else{
        header.classList.remove('scroll-header');
    }
}
window.addEventListener('scroll', scrollHeader);


/* FADE IN */
function animaPhoto(){
    const obeserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });

    const hiddenElements =  document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => obeserver.observe(el));
}

// Script to hide/show menu
function activeMenu(){
    var button = document.querySelector('#menu-button');
    var menu = document.querySelector('#submenu');
    button.addEventListener('click', function (event) {
            if (menu.style.display === "" || menu.style.display === "none") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }
        );
}

/* FADE LEFT */
function animaPhotoL(){
    const obeserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('showL');
            } else {
                entry.target.classList.remove('showL');
            }
        });
    });

    const hiddenElements =  document.querySelectorAll('.hiddenL');
    hiddenElements.forEach((el) => obeserver.observe(el));
}


function animationScroll(){
    const sr = ScrollReveal({
        distance: '60px',
        duration: 2500,
        delay: 400,
        // reset: true
    });
    sr.reveal(`.home__photo1__fade`,{distance: '60px'})
    sr.reveal(`.home__photo1`,{delay: 100})
    sr.reveal(`.home__photo2`,{delay: 200})
    sr.reveal(`.home__photo3`,{delay: 300})
    sr.reveal(`.home__photo4`,{delay: 400})
    sr.reveal(`.home__photo5`,{delay: 500})
    sr.reveal(`.home__photo6`,{delay: 600})
    sr.reveal(`.home__photo7`,{delay: 700})
    sr.reveal(`.home__photo8`,{delay: 800})
    sr.reveal(`.home__photo9`,{delay: 900})
    sr.reveal(`.home__photo10`,{delay: 1000})
    sr.reveal(`.home__photo11`,{delay: 1100})
    sr.reveal(`.home__photo12`,{delay: 1200})
    sr.reveal(`.home__photo13`,{delay: 1300})
    sr.reveal(`.home__photo14`,{delay: 1400})
    sr.reveal(`.home__photo15`,{delay: 1500})
    sr.reveal(`.home__photo16`,{delay: 1600})
    sr.reveal(`.home__photo17`,{delay: 1700})


    sr.reveal(`.home__left1`,{origin: 'left', delay: 100})
    sr.reveal(`.home__left2`,{origin: 'left', delay: 200})
    sr.reveal(`.home__left3`,{origin: 'left', delay: 300})
    sr.reveal(`.home__left4`,{origin: 'left', delay: 400})
    sr.reveal(`.home__left5`,{origin: 'left', delay: 500})

    sr.reveal(`.home__right0`,{origin: 'right'})
    sr.reveal(`.home__right1`,{origin: 'right', delay: 100})
    sr.reveal(`.home__right2`,{origin: 'right', delay: 200})
    sr.reveal(`.home__right3`,{origin: 'right', delay: 300})
    sr.reveal(`.home__right4`,{origin: 'right', delay: 400})
    sr.reveal(`.home__right5`,{origin: 'right', delay: 500})
}


function menuActive(){
    const header = document.getElementById("menu_dark");
    if(document.URL.includes('quienes-somos.php') || document.URL.includes('en/about-us.php') ){
        $('.navbar-nav > li').removeClass('active');    
        $('.navbar-nav > li:nth-child(2)').addClass("active");
        header.classList.add('white-color');
    }
    if(document.URL.includes('servicios.php') || document.URL.includes('fianzas.php') || document.URL.includes('seguros-individuales.php') || document.URL.includes('services.php') || document.URL.includes('bonds.php') || document.URL.includes('individual-insurance.php')){
        $('.navbar-nav > li').removeClass('active');
        $('.navbar-nav > li:nth-child(3)').addClass("active");
        header.classList.add('white-color');
    }
    if(document.URL.includes('preguntas-frecuentes.php') || document.URL.includes('faqs.php')){
        $('.navbar-nav > li').removeClass('active');
        header.classList.add('white-color');
    }
    if(document.URL.includes('contacto.php') || document.URL.includes('contact.php')){
        $('.navbar-nav > li').removeClass('active');
        $('.navbar-nav > li:nth-child(5)').addClass("active");
        header.classList.add('white-color');
    }
    if(document.URL.includes('seguros-individuales.html')){
        header.classList.add('white-color');
    }
}