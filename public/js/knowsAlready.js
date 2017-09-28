$(function () {
    $("#f_elem_city").autocomplete({
        source: function (request, response) {
            $.getJSON(
                "http://gd.geobytes.com/AutoCompleteCity?callback=?&q=" + request.term,
                function (data) {
                    response(data);
                }
            );
        },
        minLength: 3,
        open: function () {
            $("#someWidth").css('padding-top', '25px');
            $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
        },
        close: function () {
            $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
        },
        appendTo: '#someWidth'
    });
    $("#f_elem_city").autocomplete("option", "delay", 100);
    $("#getcitydetails").on('click', function (event) {
        var value = $("#f_elem_city").val().trim();
        if(value) {
            localStorage.setItem('knowsAlready', value);
            location.href = window.location.protocol + "//" + window.location.host + "/Auth";
        }

    });
});