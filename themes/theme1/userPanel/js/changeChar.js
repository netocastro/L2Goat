$(document).ready(() => {
    $('#changeChars').change(() => {

        let charId = $('#changeChars').val();

        $('#charInfo1').html('');
        $('#tbody-itens-bag').html('');
        $('#charInfo2').html('');

        $.ajax({
            url: $('#form-change').attr('action'),
            type: 'post',
            dataType: 'json',
            data: 'charId=' + charId,
            beforeSend: function () {
                $("#loadChar").html(`<img src="cdn/assets/media/images/gifs/load.gif" width="60">`);
            },
            success: (dados) => {
                $("#loadChar").html('');
                tbody_itens_bag(dados);
            },
            error: (erro) => {
                $("#loadChar").html('');
                console.log(erro);
                console.log(erro.responseText);
            }
        });
    });

    function tbody_itens_bag(dados) {

        let itens = dados[0];
        let char_info = dados[1];
        let equipe = '';

        itens.forEach((valor, indice) => {
            if (valor.loc == 'PAPERDOLL') {
                equipe = '<h6 class="badge badge-success">Equipado</h6>';
            } else {
                equipe = '';
            }

            $('#tbody-itens-bag').append(`
                <tr>              
                    <td><img src="${imageItem}${valor.icon.replace("icon.","")}.png" width="30px"></td>
                    <td>${valor.item_name}</td>
                    <td>${equipe}</td>
                    <td>${valor.object_id}</td>
                    <td> +${valor.enchant_level}</td>
                    <td>${valor.count}</td>	
                </tr>
            `);
        });

        char_info.forEach((valor, indice) => {

            let nome;
            let nobles;
            let sexo;

            nome = nome_classe(valor.base_class);

            if (valor.nobless == 1) {
                nobles = 'Sim';
            }

            if (valor.nobless == 0) {
                nobles = 'Não';
            }

            if (valor.sex == 1) {
                sexo = 'Famale';
            }

            if (valor.sex == 0) {
                sexo = 'Male';
            }

            $('#charInfo1').append(`
                <tr>
                <td>Nome: </td>
                <td><strong>${valor.char_name}</strong></td>
                </tr>
                <tr>
                <td>Titulo: </td>
                <td><strong>${valor.title}</strong></td>
                </tr>
                <tr>
                <td>Classe Base: </td>
                <td><strong>${nome}</strong></td>
                </tr>
                <tr>
                <td>Level: </td>
                <td><strong>${valor.level}</strong></td>
                </tr>
                <tr>
                <td>Sub Classe1: </td>
                <td id="sub1"></td>
                </tr>
                <tr>
                <td>Sub Classe2: </td>
                <td id="sub2"></td>
                </tr>
                <tr>
                <td>Sub Classe3: </td>
                <td id="sub3"></td>
                </tr>
            `);

            $('#charInfo2').append(`
                <tr>
                <td>PvP: </td>
                <td><strong>${valor.pvpkills}</strong></td>
                </tr>
                <tr>
                <td>PK: </td>
                <td><strong>${valor.pkkills}</strong></td>
                </tr>
                <tr>
                <td>Sexo: </td>
                <td><strong>${sexo}</strong></td>
                </tr>
                <tr>
                <td>Karma: </td>
                <td><strong>${valor.karma}</strong></td>
                </tr>
                <tr>
                <td>Clan:</td>
                <td><strong>${valor.clanid} </strong></td>
                </tr>
                <tr>
                <td>Noble: </td>
                <td><strong>${nobles}</strong></td>
                </tr>
                <tr>
                <td>Hero:</td>
                <td><strong>Não</strong></td>
                </tr>
            `);

            buscar();
        });
    }

    function buscar() {
        $.ajax({
            url: buscarNomeSubclasse,
            type: 'post',
            dataType: 'json',
            data: 'charId=' + $('#changeChars').val(),
            success: (dados) => {
                sub_classes(dados);
            },
            error: (erro) => {
                console.log(erro);
                console.log(erro.responseText);
            }
        });
    }

    function nome_classe(base_class) {
        let nome;
        $.ajax({
            url: buscarNomeClasse,
            type: 'post',
            dataType: 'json',
            async: false,
            data: 'id_base_class=' + base_class,
            success: (dados) => {
                nome = dados;
            },
            error: (erro) => {
                // console.log(erro);              // esses erros aparecem embora estejam funcionando perfeitamente na requisicao de informações
                //console.log(erro.responseText);  // esse erro retorna vazio
            }
        });
        return nome;
    }

    function sub_classes(dados) {

        let sub1;
        let sub2;
        let sub3;

        sub1 = (nome_classe(dados[0])) ? nome_classe(dados[0]) : '-';
        sub2 = (nome_classe(dados[1])) ? nome_classe(dados[1]) : '-';
        sub3 = (nome_classe(dados[2])) ? nome_classe(dados[2]) : '-';

        $('#sub1').append(`<strong> ${sub1} </strong>`);
        $('#sub2').append(`<strong> ${sub2} </strong>`);
        $('#sub3').append(`<strong> ${sub3} </strong>`);

    }
});