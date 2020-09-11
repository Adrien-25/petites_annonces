//INIT INFINITE SCROLL

$(document).ready(function () {

    windowOnScroll();
});

function windowOnScroll() {
    $(window).on("scroll", function (e) {
        console.log($(window).scrollTop());
        console.log($(window).height());
        console.log($(document).height());
        // if ($(window).scrollTop() == $(document).height() - $(window).height()) {
        if (($(window).scrollTop() + $(window).height() +5) >= $(document).height())  {
            console.log('BAS PAGE');
            lastId = $(".scroller-item:last").attr("id");
            getMoreData(lastId);
        }
    });
}

function getMoreData(lastId) {
    $(window).off("scroll");
    var nbrAnnonceBDD = document.getElementById('first-loader').getAttribute('value');
    var nbrAnnonceHTML = document.getElementsByClassName('scroller-item').length;
    if (nbrAnnonceBDD > nbrAnnonceHTML) {
        console.log(lastId);
        $('.ajax-loader').show();
        $.ajax({
            url: 'getLastArticle/' + lastId,
            type: "get",
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
        console.log('ANNONCE A CHARGER')
    } else {
        var lastLoader = document.getElementsByClassName('ajax-loader')[1];
        console.log(lastLoader);
        lastLoader.classList.add('d-none');
        var noMoreLoad = document.getElementById('fin-annonce');
        noMoreLoad.classList.remove('d-none');
    }

}