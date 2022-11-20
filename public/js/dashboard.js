$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$('#form-admin').on('submit', function (e) {
    e.preventDefault();

    let url = '/admin/dashboard/anggota/tambah';
    let dataForm = new FormData();
    let allInput = $('.form-admin');

    $.each(allInput, function (i, val) {
        dataForm.append(val['name'], val['value']);
    });

    $('.alert-danger').removeClass('d-block');
    $('.text-btn').addClass('d-none');
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
                    location.reload()
                }, 1000);
            } else {
                $(".list-error-msg").remove();
                $('.loading').removeClass('d-block');
                $('.text-btn').removeClass('d-none');
                $('.alert-success').removeClass('d-block');
                let data_str = JSON.parse(JSON.stringify(data.error));
                printErrorMsg(data_str);

            }
        }
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.alert-danger').addClass('d-block');
            $('.alert-danger').append('<li class="list-group-item border-0 list-error-msg"><i class="bi bi-exclamation"></i>' + value + '</li>');
        });
    }

});
