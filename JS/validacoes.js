$(function () {
    $('#Login').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroEmail") {
                    var titulo = document.getElementById("user");
                    titulo.className = "input-field invalid";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "alert";
                    titulo.focus();
                }
                else {
                    var titulo = document.getElementById("user");
                    titulo.className = "input-field";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "d-none";
                }
                if (data == "ErroSenha") {
                    var titulo = document.getElementById("pass");
                    titulo.className = "input-field invalid";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "alert";
                    titulo.focus();
                }
                else {
                    var titulo = document.getElementById("pass");
                    titulo.className = "input-field";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "d-none alert";
                }
                if (data == "FalhaLogin") {
                    var titulo = document.getElementById("verLogin");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("verLogin");
                    titulo.className = "d-none alert";
                }
                if (data == "NãoAtivo") {
                    Swal.fire({
                        customClass: {
                            popup: 'alertCustom',
                            confirmButton: 'btnColor',
                            title: 'CustomColor',
                            content: 'CustomColor'
                        },
                        icon: 'error',
                        titleText: 'Inativo!',
                        text: 'Você esta Inativo!',
                        buttonsStyling: false

                    });
                }
                if (data == "SucessoCliente") {
                    window.location.href = "../"
                }
                if (data == "ReloadIMG") {
                    window.location.href = "../"
                }
                if (data == "SucessoADM") {

                    Swal.fire({
                        customClass: {
                            popup: 'alertCustom',
                            confirmButton: 'btnColor',
                            title: 'CustomColor',
                            content: 'CustomColor'
                        },
                        icon: 'success',
                        titleText: 'Sucesso!',
                        text: 'Você esta Logado como Administrador!',
                        showConfirmButton: false,
                        buttonsStyling: false

                    });
                    setTimeout(function(){window.location.href = "../"}, 2000);
                        
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function () {
    $('#Register').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroNome") {
                    Register();
                    var titulo = document.getElementById("Name");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadName");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("Name");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadName");
                    titulo.className = "alert d-none";
                }
                if (data == "ErroEmail") {
                    Register();
                    var titulo = document.getElementById("Mail");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadEmail");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("Mail");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadEmail");
                    titulo.className = "alert d-none";
                }
                if (data == "ErroSenhacad") {
                    Register();
                    var titulo = document.getElementById("CadPass");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("Cadsenha");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("CadPass");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("Cadsenha");
                    titulo.className = "alert d-none";
                }
                if (data == "ErroConfSenha") {
                    Register();
                    var titulo = document.querySelector('#CadCpPass');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector("#CadConfirm");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.querySelector('#CadPass');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#CadConfirm')
                    titulo.className = "alert d-none";
                }
                if (data == "SenhasDiferentes") {
                    Register();
                    var titulo = document.querySelector('#CadCpPass');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector("#CadConfirm2");
                    titulo.className = "alert";
                    // Campo 2
                    var titulo = document.querySelector("#CadPass");
                    titulo.className = "input-field invalid";
                }
                else {
                    var titulo = document.querySelector('#CadCpPass');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#CadConfirm2')
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector("#CadPass");
                    titulo.className = "input-field";
                }
                if (data == "ErroNick") {
                    var titulo = document.querySelector('#cadUsername');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#CadNick');
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.querySelector('#cadUsername');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#CadNick');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroCPf") {
                    var titulo = document.getElementById("cadCPF");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadCpf");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("cadCPF");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadCpf");
                    titulo.className = "alert d-none";
                }
                if (data == "ErroTell") {
                    var titulo = document.getElementById("Cadtell");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("Cadtelefone");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("Cadtell");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("Cadtelefone");
                    titulo.className = "alert d-none";
                }
                if (data == "ClienteCadastrado") {
                    Swal.fire({
                        customClass: {
                            popup: 'alertCustom',
                            confirmButton: 'btnColor',
                            title: 'CustomColor',
                            content: 'CustomColor'
                        },
                        icon: 'success',
                        titleText: 'Sucesso!',
                        text: 'Você esta Cadastrado',
                        buttonsStyling: false

                    });
                    Limpar();
                }
                if (data == "FalhaCadastrado") {
                    Swal.fire({
                        customClass: {
                            popup: 'alertCustom',
                            confirmButton: 'btnColor',
                            title: 'CustomColor',
                            content: 'CustomColor'
                        },
                        icon: 'error',
                        titleText: 'Falha!',
                        text: 'Falha no Cadastro',
                        buttonsStyling: false

                    });
                }


            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function () {
    $('#buscarProdutos').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroProduto") {
                    $('#mensagem').text("Digite o nome do produto que deseja buscar!");
                    $('#vazio').modal('show');
                    return;
                }
                if (data == "ErroNaoExiste") {
                    $('#mensagem').text("Nenhum produto encontrado!");
                    $('#vazio').modal('show');
                    return;
                }
                if (data != "ErroProduto" && data != "ErroNaoExiste") {
                    $('#respostaBusca').html(data);
                }


            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora


