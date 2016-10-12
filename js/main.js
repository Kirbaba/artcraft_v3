jQuery(document).ready(function($) {
	 imageSize();
    $(document).on('click', '.js-send-form', function () {
        var email = $('.js-form-email').val();

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

    $(document).on('click', '.js-send-order-form', function () {
        var name = $('.js-order-name').val();
        var phone = $('.js-order-phone').val();
        var email = $('.js-order-email').val();
        var msg = $('.js-order-msg').val();

        if (validateEmail(email) ) {
            $.ajax({
                url: myajax.url,
                type: "POST",
                data: "action=orderform&email=" + email + "&name=" + name + "&phone=" + phone + "&msg=" + msg,
                success: function (data) {
                    $('.modal').hide();
                }
            });
        } else {
            alert('Введите правильный email!');
            $('.js-order-email').val('');
        }
    });
});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}