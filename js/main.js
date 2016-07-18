jQuery(document).ready(function($) {
	 imageSize();
    $(document).on('click', '.js-send-form', function () {
        var email = $('.js-form-email').val();
        console.log(email);
        if (validateEmail(email)) {
            $.ajax({
                url: myajax.url,
                type: "POST",
                data: "action=mailform&email=" + email,
                success: function (data) {
                    $('.modal').hide();
                }
            });
        } else {
            alert('Введите правильный email!');
            $('.js-form-email').val('');
        }
    });
});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}