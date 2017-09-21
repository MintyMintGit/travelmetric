$(document).ready(function () {
    $("#saveNewForm").on('click', function (event) {

        $("#js-register-with-email").validate({
            wrapper: "li",
            errorPlacement: function(label, elem) {
                if(elem.parents('li').find('label.error').length < 1) {
                    elem.parents('li').append(label);
                }
            }
        });
        var response = grecaptcha.getResponse();
        if (response.length == 0)
            event.preventDefault();
        else {
            $("#js-register-with-email input").each(function(indx, element){
                if(element.name == "gender" && element.checked == false) {
                    return;
                }
                localStorage.setItem(element.name , element.value);
            });
            location.href = window.location.protocol + "//" + window.location.host + "/home/theEnd";
        }
    });

});
var onloadCallback = function () {
    grecaptcha.render('html_element', {
        'sitekey': '6LdBYjEUAAAAAF3ogQUhST5TM6xHeIdKKeydY1tZ'
    });
};