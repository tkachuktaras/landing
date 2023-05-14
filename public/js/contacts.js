const cards = document.querySelectorAll('.address-card');
const svgs = document.querySelectorAll('.address-card-svgs-rect');
var delayInMilliseconds = 500;

i = 0;
cards.forEach((element) => {
    setTimeout(function() {
        element.classList.add("active");
        svgs[i].classList.add("active");
        svgs[i++].classList.add("active");
    }, delayInMilliseconds);

    delayInMilliseconds += 300;
});

