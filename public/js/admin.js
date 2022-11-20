$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$('#form-login').on('submit', function (e) {
    e.preventDefault();
    console.log('haish');

    let url = '/admin/auth';
    let dataForm = new FormData();
    let allInput = $('.form-login');

    $.each(allInput, function (i, val) {
        dataForm.append(val['name'], val['value']);
    });

    $('.alert-danger').removeClass('d-block');
    $('.text-login').addClass('d-none');
    $('.loading').addClass('d-block');

    $.ajax(url, {
        type: 'POST',
        data: dataForm,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (data, status, xhr) {
            if ($.isEmptyObject(data.error)) {
                let data_str = JSON.parse(JSON.stringify(data));
                $('.alert-success').addClass('d-block');
                setTimeout(() => {
                    window.location = "/admin/dashboard";
                }, 2000);
            } else {
                $(".list-error-msg").remove();
                $('.loading').removeClass('d-block');
                $('.text-login').removeClass('d-none');
                $('.alert-success').removeClass('d-block');
                let data_str = JSON.parse(JSON.stringify(data.error));
                printErrorMsg(data_str);

            }
        }
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.alert-danger').addClass('d-block');
            $('.alert-danger').append('<li class="list-group-item border-0 list-error-msg">'+ value +'</li>');
        });
    }

});
