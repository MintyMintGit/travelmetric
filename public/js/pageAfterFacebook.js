
$( document ).ready(function() {
    var name = $("#name").val();
    var email = $("#email").val();

    localStorage.setItem('name', name);
    localStorage.setItem('email', email);


    location.href = window.location.protocol + "//" + window.location.host + "/home/theEnd";
});