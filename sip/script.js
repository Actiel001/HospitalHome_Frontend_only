particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#4CAF50"
        },
        "shape": {                                                                              //iki partikel js styles js 
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#4CAF50"
            },
        },
        "opacity": {
            "value": 0.5,
            "random": false
        },
        "size": {
            "value": 3,
            "random": true
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#4CAF50",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false
        }
    },
    "interactivity": {
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            }
        }
    },
    "retina_detect": true
});

//console.log('Hello World!');


let slider = document.querySelector('.slider');
let slides = document.querySelector('.slides');
let slide = document.querySelectorAll('.slide');
let totalSlides = slide.length;
let slideWidth = slide[0].clientWidth;

// klonning loop 
let firstClone = slides.innerHTML;
slides.innerHTML += firstClone;  // copy slide e

let currentIndex = 0;

// geser kanan
function moveRight() {
    currentIndex++;
    slides.style.transition = 'transform 0.5s ease-in-out';
    slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;

    if (currentIndex === totalSlides) {
        setTimeout(() => {
            slides.style.transition = 'none';
            currentIndex = 0;
            slides.style.transform = `translateX(0px)`;
        }, 500); // transisi
    }
}

// geser kiri
function moveLeft() {
    if (currentIndex === 0) {
        slides.style.transition = 'none';
        currentIndex = totalSlides;
        slides.style.transform = `translateX(${-slideWidth * totalSlides}px)`;
        setTimeout(() => {
            slides.style.transition = 'transform 0.5s ease-in-out';
            currentIndex--;
            slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
        }, 0);
    } else {
        currentIndex--;
        slides.style.transition = 'transform 0.5s ease-in-out';
        slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
    }
}

// auto
setInterval(moveRight, 3000);


