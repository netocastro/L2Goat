$(document).ready(() => {
      $(document).ready(() => {

            $('#recoverPasswordForm').on('submit', function (e) {

                  e.preventDefault();
                  let _this = $(this);

                  $.ajax({
                        url: _this.attr('action'),
                        type: _this.attr('method'),
                        dataType: _this.attr('data-type'),
                        data: _this.serialize(),
                        beforeSend: function () {
                              _this.find('.load').html(`<img src="cdn/assets/media/images/gifs/load.gif" width="60">`).addClass('text-center');
                        },
                        success: (dados) => {
                              console.log('oi')
                              console.log(dados)
                              validateFields(dados, _this);
                        },
                        error: (erro) => {
                              console.log(erro);
                              console.log(erro.responseText);
                        }
                  }).always(function () {
                        _this.find('.load').html("");
                  });
            });

      });

      /*function recoverPassword(dados) {

            $('#messageRecoverPassword').html('');
            $(`input[name=email]`).removeClass('is-invalid');

            if(dados == 'emptyField'){
                $(`input[name=email]`).addClass('is-invalid');
                $('#messageRecoverPassword').html('Empty field').addClass('text-danger h6 my-2').hide().fadeIn();
            }

            if(dados == 'invalidEmail'){
                $(`input[name=email]`).addClass('is-invalid');
                $('#messageRecoverPassword').html('invalid E-mail').addClass('text-danger h6 my-2').hide().fadeIn();
            }
            
            if(dados == 'Não foi possível instanciar a função mail.'){
                $('#messageRecoverPassword').html('Could not instantiate the mail function').addClass('text-danger').addClass('mt-5').hide().fadeIn(500);
            }

            if (dados == 'success') {
                $('#loadRecover').addClass('bg-success text-light text-center rounded mt-2');
                $('#loadRecover').html(`
                <h6 class="bg-success p-2 mt-3 rounded">New password sent to your email!</h6>
                `).hide().fadeIn(700);
                $('input').val('');
            }
      }*/
});