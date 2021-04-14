$(document).ready(function () {
    console.log("home.js is loaded");

    function diapo() {
        let diapoArray = ['../img/jumbo-img-one.png',
        '../img/jumbo-img-two.png',
        '../img/jumbo-img-three.png'];
        let jumbo = document.getElementById('jumbo');
        console.log("Before timeout");
        setTimeout(() => {
            console.log("Inside timeout...");
            for(let i = 0; i < diapoArray.length; i++) {
                console.log(diapoArray[i]);
                let styleDiapo = jumbo.style.backgroundImage = "url('" + diapoArray[i] + "');";
                console.log(styleDiapo);
            }
        }, 5000);
    }

    function toggleCards() {
        console.log("Inside toggleCards");
        let cards = document.getElementById('cards'); 
        cards.style.visibility = "visible";
    }

    document.getElementById("espBtn").addEventListener("click", function () {
        console.log("it worked my friend");
        toggleCards();
    });
    
    console.log("Launching diapo()");
    diapo();
});
