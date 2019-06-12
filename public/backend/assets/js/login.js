$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form[name="formLogin"]').submit(function (event) {
        event.preventDefault();

        const form = $(this);
        const action = form.attr('action');
        const email = form.find('input[name="email"]').val();
        const password = form.find('input[name="password"]').val();
        const form_button = form.find('button');

        $.ajax({
            url: action,
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            beforeSend: function () {
                form_button.prop('disabled', true).html(`
                    <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
                    <span>Aguarde...</span>
                `);
            },
            success: function (response) {
                form_button.prop('disabled', false).html('Login');
                if (response.message) {
                    toastr[response.type](response.message);
                }

                if (response.redirect) {
                    window.location.href = response.redirect;
                }
            }
        });

    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

});