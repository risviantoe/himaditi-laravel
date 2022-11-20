// const { remove } = require("lodash");

$('#aspirasi').on('submit', function(e) {
    e.preventDefault();
	sendDataAspirasi();
});

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function sendDataAspirasi() {
    let link = "/submit-aspirasi";
	let dataForm = new FormData();
	let allInput = $('.form-aspirasi');
	$.each(allInput, function(i, val) {
    dataForm.append(val['name'], val['value']);
		}
	);
    $('.error-message').removeClass('d-block');
    $('.loading').addClass('d-block');
	$.ajax(link, {
        type: 'POST',
		data: dataForm,
		contentType: false,
		processData: false,
		dataType: 'json',
		success: function(data, status, xhr) {
			if($.isEmptyObject(data.error)){
                let data_str = JSON.parse(JSON.stringify(data));
                console.log(data_str.success);
                $('.loading').removeClass('d-block');
                $('.sent-message').addClass('d-block');
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }else{
                $(".list-error-msg").remove();
                $('.loading').removeClass('d-block');
                $('.sent-message').removeClass('d-block');
                printErrorMsg(data.error);
            }

		}
	});


    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.error-message').addClass('d-block');
            $(".error-message").append('<li class="list-group-item border-0 list-error-msg"><i class="bi bi-exclamation-lg"></i> ' + value + '</li>');
        });
    }

}
