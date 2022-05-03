$('#login_form').on('submit', function (e) {
    e.preventDefault();
    var form = $(this).serialize()

    $.ajax({
        url: BASE_URL + 'auth/func_login',
        data: form,
        method: "POST",
        dataType: 'json',
        beforeSend: function () {
            $('#button_submit').prop("disabled", true);
            $('#button_submit').html('<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>');
        },
        success: function (data) {
            // console.log(data);
            $('.fadedin').remove();
            $('#button_submit').prop("disabled", false);
            $('#button_submit').html('<span class="indicator-label">Simpan</span>');
            if (data.status == true) {
                var icon = 'success';
            } else {
                var icon = 'warning';
            }
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function () {
                    if (data.redirect) {
                        location.href = data.redirect;
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $('#' + data.required[i][0]).append('<span class="text-danger fadedin">' + data.required[i][1] + '</span>');
                    }
                }
            }
        }
    });
});