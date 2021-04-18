$(document).ready(function () {

    console.log("home.js is loaded");

    let i = 0;
    images = Array(
        "assets/img/jumbo-img-one.png",
        "assets/img/jumbo-img-two.png",
        "assets/img/jumbo-img-three.png"
    );

    function diaporama() {
        console.log("Hello my friend");

        $(".jumbotron img").fadeOut(3000, function () {
            console.log("inside fadeOut");
            $(".jumbotron").attr("src", images[i]);
            console.log(images[i]);
            $(".jumbotron img").fadeIn(10000, function () {
                diaporama();
                i++;
                if (i === images.length) {
                    i = 0;
                } else {}
            });
        });
    }


    function diapo() {
        console.log("inside diapo()");

        url = Array(
            "assets/img/jumbo-img-one.png",
            "assets/img/jumbo-img-two.png",
            "assets/img/jumbo-img-three.png"
        );

        setTimeout(() => {
            $(".jumbotron").fadeOut(3000, function () {
                console.log("inside fadeout");
                console.log($(".jumbotron").css("background-image", "url(" + url[i] + ")"));
                $(this).fadeIn(3000, function () {
                    console.log("Inside fadein();");
                    diapo();
                    i++;
                    if (i === url.length) {
                        i = 0;
                    } else {}
                });
            });
        }, 10000);
    }

    function toggleCards() {
        console.log("Inside toggleCards");
        let cards = document.getElementById("cards");
        cards.style.visibility = "visible";
    }

    document.getElementById("espBtn").addEventListener("click", function () {
        console.log("it worked my friend");
        toggleCards();
    });

    console.log("Launching diapo()");
    //diaporama();
    diapo();

});