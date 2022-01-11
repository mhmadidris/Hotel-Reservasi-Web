/* start navbar */
window.addEventListener("scroll", function() {
    var nav = document.querySelector("nav");
    var navText = document.getElementById("nav-text").getElementsByTagName("A");
    
    for(var i = 0, text = navText.length; i < text; i++) {
        navText[i].classList.toggle("nav-text", window.scrollY > 5);
    }
    nav.classList.toggle("nav-sticky", window.scrollY > 5);
});
/* end navbar */

/* Start popup */

var openmodal = document.querySelectorAll('.modal-popup')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event) {
        event.preventDefault()
        toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};


function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}
/* End popup */