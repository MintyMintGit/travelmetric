$(document).ready(function () {
    localStorage.clear();
    $(".footerLink").on('click', function (event) {
        var currentTarget = $(event.currentTarget);
        localStorage.setItem('footerLink', currentTarget.text().trim());
    });
});
