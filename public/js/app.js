//INIT INFINITE SCROLL
console.log('Start inf scroll');


$(document).ready(function () {
    windowOnScroll();
});

function windowOnScroll() {
    $(window).on("scroll", function (e) {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            lastId = $(".scroller-item:last").attr("id");
            getMoreData(lastId);
        }
    });
}

function getMoreData(lastId) {
    $(window).off("scroll");
    var nbrAnnonceBDD = document.getElementById('first-loader').getAttribute('value');
    var nbrAnnonceHTML = document.getElementsByClassName('scroller-item').length;
    if (nbrAnnonceBDD>nbrAnnonceHTML){

        $('.ajax-loader').show();
        $.ajax({
            url: 'index.php?offset=' + lastId,
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
    } else {
        var lastLoader = document.getElementsByClassName('ajax-loader')[1];
        lastLoader.classList.add('d-none');
        var noMoreLoad = document.getElementById('fin-annonce');
        noMoreLoad.classList.remove('d-none');
    }

}
// if (this.readyState == 4 && this.status == 200) {
//     console.log(this.responseText);
//     // function (data) {
//     //     setTimeout(function () {
//     //         $('.ajax-loader').hide();
//     //         $("#scroller-layout").append(data);
//     //         windowOnScroll();
//     //     }, 1000);
//     // }
// };
// xhttp.open("GET", "accueil?offset=" + lastId, true);
// xhttp.send();