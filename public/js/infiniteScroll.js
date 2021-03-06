//INIT INFINITE SCROLL
var nbrAnnonceBDD = document.getElementById('first-loader').getAttribute('value');
if (nbrAnnonceBDD < 11) {
    var loader = document.getElementById('first-loader');
    loader.classList.add('d-none');
}

$(document).ready(function () {
    windowOnScroll();
});

function windowOnScroll() {
    $(window).on("scroll", function (e) {
        buttonScroll($(window).scrollTop());

        // console.log($(window).scrollTop());
        // console.log($(window).height());
        // console.log($(document).height());
        // if ($(window).scrollTop() == $(document).height() - $(window).height()) {
        if (($(window).scrollTop() + $(window).height() + 5) >= $(document).height()) {
            console.log('BAS PAGE');
            $(".ajax-loader").removeClass("d-none");
            lastId = $(".scroller-item:last").attr("id");
            getMoreData(lastId);
        }
    });
}

function buttonScroll(hauteur) {
    if (hauteur > 0) {
        $(".scrollup").removeClass("d-none");
    }
    if (hauteur <= 0) {
        $(".scrollup").addClass("d-none");
    }
}

function getMoreData(lastId) {
    $(window).off("scroll");
    var nbrAnnonceBDD = document.getElementById('first-loader').getAttribute('value');
    var nbrAnnonceHTML = document.getElementsByClassName('scroller-item').length;
    var formulaire = document.querySelectorAll(".formContent");
    // console.log('NBR annonce BDD = ' + nbrAnnonceBDD);
    // console.log('NBR annnonce HTML = ' + nbrAnnonceHTML);
    // console.log('Last id =' + lastId);
    if (formulaire.length == 0) {
        formContent = 0;
    } else {
        var formContent = []
        for (let i = 0; i < formulaire.length; i++) {
            formContent.push(formulaire[i].value)
        }
    }
    // console.log('AJAX FORM = ' + formContent);

    if (typeof i == 'undefined') {
        var i = 1;
    }
    if (nbrAnnonceBDD > nbrAnnonceHTML) {
        $('.ajax-loader').show();
        $.ajax({
            url: 'getLastArticle',
            type: "POST",
            data: {
                offset: nbrAnnonceHTML,
                formulaire: formContent
            },
            beforeSend: function () {
                $('.ajax-loader').show();
            },

            success: function (data) {
                setTimeout(function () {
                    $('.ajax-loader').hide();
                    $("#scroller-layout").append(data);
                    windowOnScroll();
                }, 1000);
            }
        });

    } else {
        // SI PLUS DE VARIABLE ON CACHE LE LOADER
        var Nbrloader = $('.ajax-loader').length;
        var lastLoader = $('.ajax-loader')[Nbrloader - 1];
        lastLoader.classList.add('d-none');
        // SI PLUS DE VARIABLE ON AFFICHE LE MESSAGE DE FIN D'ANNONCE
        var NbrFinAnnonce = $('.fin-annnonce').length;
        var noMoreLoad = $('.fin-annnonce')[NbrFinAnnonce - 1];
        noMoreLoad.classList.remove('d-none');
        // BOUTON REMONTER HAUT DE LA PAGE
        var scrollupLongueur = $('.scrollup').length;
        var scrollup = $('.scrollup')[[scrollupLongueur - 1]];

    }
}
$('.scrollup').click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 500);
    return false;
});