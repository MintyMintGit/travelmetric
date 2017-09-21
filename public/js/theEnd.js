$(document).ready(function () {

    var arrayLocalStorage = [];

    var storage = window.localStorage;
    for (var key in storage) {
        var jobName = storage[key];
        console.log("key=" + key + " " + "value=" + jobName);
        var newObj = {
            name: key,
            value: jobName
        }
        arrayLocalStorage.push(newObj);
    }

    var newObj = {
        name: $("#get_csrf_token_name").val(),
        value: $("#get_csrf_hash").val()
    }
    arrayLocalStorage.push(newObj);

    var link = $("#storeCSV").val();
    $.ajax({
        url: link,
        type: "POST",
        data: arrayLocalStorage,
        dataType: 'json'
    });
});