
$( document ).ready(function() {
    var name = $("#name").val();
    var email = $("#email").val();

    localStorage.setItem('name', name);
    localStorage.setItem('email', email);
    var localArray = [];
    for (var i = 0; i < localStorage.length; i++){
        console.log(localStorage.key(i));
    }

    location.href = window.location.protocol + "//" + window.location.host + "/home/theEnd";
});