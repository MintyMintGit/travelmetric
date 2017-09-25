$(function ()
{
    $("#f_elem_city").autocomplete({
        source: function (request, response) {
            $.getJSON(
                "http://gd.geobytes.com/AutoCompleteCity?callback=?&q="+request.term,
                function (data) {
                    response(data);
                }
            );
        },
        minLength: 3,
        select: function (event, ui) {
            var selectedObj = ui.item;
            $("#f_elem_city").val(selectedObj.value);
            getcitydetails(selectedObj.value);
            return false;
        },
        open: function () {
            $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
        },
        close: function () {
            $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
        },
        appendTo: '#someWidth'
    });
    $("#f_elem_city").autocomplete("option", "delay", 100);
    function getcitydetails(item){
        localStorage.setItem('knowsAlready', item);
        location.href = window.location.protocol + "//" + window.location.host + "/Auth";
    }
});