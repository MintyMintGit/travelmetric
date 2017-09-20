$( document ).ready(function() {
    $( "#companions" ).slider({
        range: "max",
        min: 1,
        max: 4,
        value: 1,
        slide: function( event, ui ) {
            $( "#companionsValue" ).val( ui.value );
        }
    });

    $( "#snow" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            $( "#snowValue" ).val( ui.value );
        }
    });

    $( "#history" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            $( "#historyValue" ).val( ui.value );
        }
    });

    $( "#beaches" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            $( "#beachesValue" ).val( ui.value );
        }
    });

    $( "#budget" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            $( "#budgetValue" ).val( ui.value );
        }
    });
    $("#submit").on('click', function (event) {
       $('.questionnaire input').each(function(indx, element) {
           localStorage.setItem(element.id, element.id);
       });
        location.href = window.location.protocol + "//" + window.location.host + "/auth";
    });
});
