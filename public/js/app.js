//Infinite Scroll
if( typeof(offset) == 'undefined' ){
    var offset = 10;
}
$(window).on("scroll", function() {
    //page height
    var scrollHeight = $(document).height();
    //scroll position
    var scrollPos = $(window).height();
    var scrollTop = $(window).scrollTop()+1000;
    // fire if the scroll position is 300 pixels above the bottom of the page
    console.log ('Hauteur'+scrollHeight);
    console.log ('Position'+scrollPos);
    console.log ('Top'+scrollTop);

    if (scrollPos - scrollTop <= 0){
        var urlcourante = document.location.href; 
        document.location.href=urlcourante+'/'+offset;
    }
});

// window.addEventListener('load',function(){
//     console.log('Bonjour');
//     var xhttp = new XMLHttpRequest();
//     xhttp.open("GET", "ajax_info.txt", true);
//     xhttp.send();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("demo").innerHTML = this.responseText;

//         }
//     }
// });