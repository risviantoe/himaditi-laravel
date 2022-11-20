/////////////////
// COUNTDOWN
////////////////

(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;


    let tanggal = "Sep 18, 2021 23:59:00",
        countDown = new Date(tanggal).getTime(),
        x = setInterval(function () {

            let now = new Date().getTime(),
                distance = countDown - now;

            let countdown = document.getElementById("countdown"),
                content = document.getElementById("content");

            countdown.classList.add("d-none");
            content.classList.add("d-none");

            document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {

                // countdown.classList.remove("d-none");
                content.classList.remove("d-none");

                clearInterval(x);
            } else {

                countdown.classList.remove("d-none")
            }
            //seconds
        }, 0)
}());

/////////////////
// POST
////////////////

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$('#form-pendaftaran').on('submit', function(e) {
    e.preventDefault();
    // sendDataPost();

    let url = '/submit-pendaftaran';
    let dataForm = new FormData();
    let allInput = $('.form-pendaftaran');
    let curriculumVitae = $('#cv')[0].files[0];
    let suratPernyataan = $('#sp')[0].files[0];

    $.each(allInput, function (i, val) {
        dataForm.append(val['name'], val['value']);
    });

    dataForm.append('cv', curriculumVitae);
    dataForm.append('sp', suratPernyataan);

    $('.error-message').removeClass('d-block');
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
                $('.loading').removeClass('d-block');
                $('.sent-message').addClass('d-block');
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                $(".list-error-msg").remove();
                $('.loading').removeClass('d-block');
                $('.sent-message').removeClass('d-block');
                printErrorMsg(data.error);
            }
            $("#loading").hide();
            console.log(data);
        }
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.error-message').addClass('d-block');
            $(".error-message").append('<li class="list-group-item border-0 list-error-msg"><i class="bi bi-exclamation-lg"></i> ' + value + '</li>');
        });
    }

});

