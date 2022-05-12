$(document).ready(function () {
    $('.swith-on-off').on('change', function () {
        var id = $(this).data('id');
        if (document.getElementById('onoff-' + id).checked) {
            var change = 'Y';
        } else {
            var change = 'N';
        }

        $.ajax({
            url: BASE_URL + 'function/activasi_sekolah',
            data: { id: id, change: change },
            cache: false,
            dataType: 'json',
            method: 'post',
            success: function (data) {
                // console.log(data);
                if (data == true) {
                    if (change == 'Y') {
                        $('#load-' + id).html('<p class="alert-success rounded">AKTIF</p>');
                    } else {
                        $('#load-' + id).html('<p class="alert-danger rounded">NONAKTIF</p>');
                    }
                } else {

                }
            }
        });
    });
})