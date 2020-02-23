jQuery(function () {

    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 200) { // Quand on est à 200pixels du haut de page,
                $('#scrollUp').css('right', '20px'); // Replace à 20pixels de la droite l'image
            } else {
                $('#scrollUp').removeAttr('style'); // Enlève les attributs CSS affectés par javascript
            }
        });
    });

    // $(function () {
    //     $('.crossJs1').mouseover(function () {
    //         $('.crossJs1').css('border', '2px solid red');
    //     });
    //     $('.crossJs1').mouseout(function () {
    //         $('.crossJs1').css('border', 'none');
    //     });
    // });

});