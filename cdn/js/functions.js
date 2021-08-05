/** depois trocar o nome pra validate form */
function validateFields(data, dadosForm){

      $('#success').fadeOut().remove();

      $(dadosForm.find('input, select, textarea')).each(function(index) {
            $(`${$(this).prop('tagName')}[name=${$(this).attr('name')}]`).removeClass('is-invalid');
            $(`#error-${$(this).attr('name')}`).fadeOut().remove();
      });

      if(data.emptyFields){
            data.emptyFields.forEach(element => {	
                  $(`[name=${element}]`).addClass('is-invalid');
                  $(`[name=${element}]`).after(`<div id='error-${element}' class='text-danger'>Empty fileds</div>`);
                  $(`#error-${element}`).hide().fadeIn();
            });
      }

      if(data.validateFields){
            let fields = data.validateFields;
            for (const field in fields) {
                  $(`[name=${field}]`).addClass('is-invalid');
                  $(`[name=${field}]`).after(`<div id='error-${field}' class='text-danger'>${fields[field]}</div>`)
            }
      }

      if(data.success){
            dadosForm.find('button[type=submit]').after(`<h6 id="success" class="bg-success text-light p-2 mt-3 rounded text-center">${data.success}</h6>`).hide().fadeIn();
            $('.form-control').val('');
      }
}

/**
 * Função criada  pra corrigir o erro de css nos formularios sem precisar modificar a classe
 */
function validateFieldsLogin(data, dadosForm){

      $('#success').fadeOut().remove();

      $(dadosForm.find('input, select, textarea')).each(function(index) {
            $(`${$(this).prop('tagName')}[name=${$(this).attr('name')}]`).removeClass('is-invalid');
            $(`#error-${$(this).attr('name')}`).fadeOut().remove();
      });

      if(data.emptyFields){
            data.emptyFields.forEach(element => {	
                  $(`[name=${element}]`).addClass('is-invalid');
                  $(`[name=${element}]`).after(`<div id='error-${element}' class='l2-error'>Empty fileds</div>`);
                  $(`#error-${element}`).hide().fadeIn();
            });
      }

      if(data.validateFields){
            let fields = data.validateFields;
            for (const field in fields) {
                  $(`[name=${field}]`).addClass('is-invalid');
                  $(`[name=${field}]`).after(`<div id='error-${field}' class='l2-error'>${fields[field]}</div>`)
            }
      }

      if(data.success){
            dadosForm.find('button[type=submit]').after(`<h6 id="success" class="bg-success text-light p-2 mt-3 rounded text-center">${data.success}</h6>`).hide().fadeIn();
            $('.form-control').val('');
      }
}

