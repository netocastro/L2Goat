$(document).ready(() => {

    $('#form-login').on('submit', function(e) {
        e.preventDefault();
        let _this = $(this);

        $.ajax({
            url: _this.attr('action'),
            type: _this.attr('method'),
            dataType: _this.attr('data-type'),
            data: _this.serialize(),
            beforeSend: function() {
                _this.find('.load').html(`<img src="cdn/assets/media/images/gifs/load.gif" width="60">`).addClass('text-center');
            },
            success: (dados) => {
                console.log(dados)
                validateFieldsLogin(dados, _this);

                if (dados == 'success') {
                    window.location.href = painelAdmin;
                }
            },
            error: (erro) => {
                console.log(erro);
                console.log(erro.responseText);
            },

        }).always(function () {
            _this.find('.load').html("");
        });
    });

});