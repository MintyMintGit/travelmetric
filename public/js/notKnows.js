$( document ).ready(function() {
    $('input[name="daterange"]').daterangepicker();


    $("#anketa input").on('change', function (event) {
        var currentItem = $(event.currentTarget);
        localStorage.setItem(currentItem.attr('name'), currentItem.val());
    })
});
