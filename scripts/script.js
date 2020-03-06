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

    $(function(){
        $('.showTextSeineMaritime').hide(); //Visibility default hide
        $('.showTextEure').hide();
        $('.showTextCalvados').hide();
        $('.showTextOrne').hide();
        $('.showTextManche').hide();

        $('.showDetectSeineMaritime').mouseover(function(){ //Mouse over show
            $('.showTextSeineMaritime').show('slow');
        })
        $('.showDetectSeineMaritime').mouseout(function(){ //Mouse out hide
            $('.showTextSeineMaritime').hide();
        })
        $('.showDetectEure').mouseover(function(){
            $('.showTextEure').show('slow');
        })
        $('.showDetectEure').mouseout(function(){
            $('.showTextEure').hide();
        })
        $('.showDetectCalvados').mouseover(function(){
            $('.showTextCalvados').show('slow');
        })
        $('.showDetectCalvados').mouseout(function(){
            $('.showTextCalvados').hide();
        })
        $('.showDetectOrne').mouseover(function(){
            $('.showTextOrne').show('slow');
        })
        $('.showDetectOrne').mouseout(function(){
            $('.showTextOrne').hide();
        })
        $('.showDetectManche').mouseover(function(){
            $('.showTextManche').show('slow');
        })
        $('.showDetectManche').mouseout(function(){
            $('.showTextManche').hide();
        })
    })

    // $(function () {
    //     $('.crossJs1').mouseover(function () {
    //         $('.crossJs1').css('border', '2px solid red');
    //     });
    //     $('.crossJs1').mouseout(function () {
    //         $('.crossJs1').css('border', 'none');
    //     });
    // });

});