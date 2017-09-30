$(document).ready(function () {
    $("#saveNewForm").on('click', function (event) {
        $(".has-error").remove();
        $(".errors_financial").hide();
        event.preventDefault();

        var form = $("#js-register-with-email");
        var inputs = $("#js-register-with-email input");

        if($("#register_dob_month option:selected").attr('value') == 0) {
            $("#register-dob .errors_financial").show();
            $("#register_dob_month").addClass('error');
            $("#register_dob_month").on('change', function (event) {
                $(event.currentTarget).removeClass('error');
                isDateSet();
            });
        }

        inputs.each(function (indx, element) {
            if (element.value == "") {
                form.addClass('hasError');
                let parentElem = $(element.parentElement);
                if (!parentElem.hasClass('controls')) {
                    parentElem.append("<label for=\"register-password\" class=\"has-error\">This is required field</label>");
                    $(element).on('change', function (event) {
                        $(event.currentTarget).siblings('.has-error').remove();
                        form.removeClass('hasError');
                    });
                } else {
                    parentElem.parent().siblings(".errors_financial").show();
                    $(element).addClass('error');
                    form.addClass('hasError');
                    $(element).on('change', function (event) {
                        $(event.currentTarget).removeClass('error');
                        form.removeClass('hasError');
                        isDateSet();
                    });
                }
            } else if ($(element).attr('type') == 'radio') {
                if ($("#li-gender input:checked").length == 0) {
                    form.addClass('hasError');
                    $("#li-gender .errors_financial").show();
                    $("#li-gender input").on('click', function () {
                        form.removeClass('hasError');
                        $("#li-gender .errors_financial").hide();
                    });
                }
            }
        });


        if (form.hasClass('hasError')) {
            inputs.on('change', function () {
                form.removeClass('hasError');
            });
            return;
        }
        checkEmail();
        var response = grecaptcha.getResponse();
        if (response.length > 0) {
            $("#js-register-with-email input").each(function (indx, element) {
                if (element.name == "gender" && element.checked == false) {
                    return;
                }
                localStorage.setItem(element.name, element.value);
            });
            localStorage.setItem("register_dob_month", $("#register_dob_month option:selected").text());
            location.href = window.location.protocol + "//" + window.location.host + "/home/theEnd";
        }
    });
    function isDateSet() {
        if($("#register-dob .error").length == 0) {
            $("#li-dob .errors_financial").hide();
        } else {
            $("#li-dob .errors_financial").show();
        }
    }
    function checkEmail() {

        var email = document.getElementById('register_email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            $(email).parent().append("<label id='wrongEmail' for=\"register_email\" class=\"has-error\">Please provide a valid email address</label>");
            $(email).on('change', function () {
                $("#wrongEmail").remove();
            });
            return false;
        }
    };
});
