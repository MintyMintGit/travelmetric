$( document ).ready(function() {
    $( "#companions" ).slider({
        range: "max",
        min: 1,
        max: 4,
        value: 1,
        slide: function( event, ui ) {
            var nameValues = $('.companionsValue p');
            $( "#companionsValue" ).val($(nameValues[ui.value-1]).text());
        },
        create: function (event, ui) {
            var nameValues = $('.companionsValue p');
            $( "#companionsValue" ).val($(nameValues[0]).text());
        }
    });

    $( "#snow" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            var nameValues = $('.snowValue p');
            $( "#snowValue" ).val($(nameValues[ui.value-1]).text());
        },
        create: function (event, ui) {
            var nameValues = $('.snowValue p');
            $( "#snowValue" ).val($(nameValues[0]).text());
        }
    });

    $( "#history" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            var nameValues = $('.historyValue p');
            $( "#historyValue" ).val($(nameValues[ui.value-1]).text());
        },
        create: function (event, ui) {
            var nameValues = $('.historyValue p');
            $( "#historyValue" ).val($(nameValues[0]).text());
        }
    });

    $( "#beaches" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            var nameValues = $('.beachesValue p');
            $( "#beachesValue" ).val($(nameValues[ui.value-1]).text());
        },
        create: function (event, ui) {
            var nameValues = $('.beachesValue p');
            $( "#beachesValue" ).val($(nameValues[0]).text());
        }
    });

    $( "#budget" ).slider({
        range: "max",
        min: 1,
        max: 3,
        value: 1,
        slide: function( event, ui ) {
            var nameValues = $('.budgetValue p');
            $( "#budgetValue" ).val($(nameValues[ui.value-1]).text());
        },
        create: function (event, ui) {
            var nameValues = $('.budgetValue p');
            $( "#budgetValue" ).val($(nameValues[0]).text());
        }
    });
    $("#submit").on('click', function (event) {
       $('.questionnaire input').each(function(indx, element) {
           localStorage.setItem(element.id, element.value);
       });
        location.href = window.location.protocol + "//" + window.location.host + "/auth";
    });
});
