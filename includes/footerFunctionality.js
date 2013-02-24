$('document').ready(function(){

    var previouslyClicked = "";
    var $infoDisplay = $('#infoDisplay');
    var $picButton = $('.picButton');

    $infoDisplay.hide();

    $picButton.click(function(){
        var value = $(this).attr('value');

        if(!$infoDisplay.is(":visible")){
            $infoDisplay.empty();
            $infoDisplay.append('<p>' + value  +  '</p>');
            $infoDisplay.slideDown('slow');
            previouslyClicked = $(this).attr("name");
        }else if(previouslyClicked == $(this).attr("name")){
            $infoDisplay.slideUp('slow');
            $infoDisplay.empty();
        }else {
            $infoDisplay.slideUp('slow');
            $infoDisplay.empty();
            $infoDisplay.append('<p>' + value + '</p>');
            $infoDisplay.slideDown('slow');
            previouslyClicked = $(this).attr("name");
        }
    });

});

function hideInfoDisplay(){

}

function showInfoDisplay(){

}
