$(document).ready(function () {

    $('body').on('click', '.btn-add-customers', function (e) {
        e.preventDefault();
        var $this = $(this),
            url = $this.attr('route'),
            token = $('meta[name="csrf-token"]').attr('content'),
            form = $('.customers-form'),
            name = $('.name-text').val(),
            email = $('.email-text').val(),
            phone = $('.phone-text').val(),
            message = $('.message-text').val();
        console.log(name, email, phone, message);
        $.ajax({
            url: url,
            data: {
                _token: token,
                name: name,
                email: email,
                phone: phone,
                message: message,
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                $('.name-text').val('');
                $('.email-text').val('');
                $('.phone-text').val('');
                $('.message-text').val('');
                $('.success-added').removeClass('d-none');
            },
            error: function () {
            }
        });
    });

    $('body').on('click', '.portfolio-link', function (e) {
        let url  = $(this).closest('.portfolio-item').attr('route')
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function () {
            },
            success: function (data) {
                $('.project-modal-body').html(data)
            },
            error: function () {
            }
        });

    });

});
