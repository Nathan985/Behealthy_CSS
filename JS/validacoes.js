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
                    window.location.href = "../View/View_adm.php";
                }
                if(data == "SucessoFunc"){
                    window.location.href = "../View/view_funcionario.php";
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
                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadEmailCadastrado");
                    titulo.className = "alert d-none";

                    Register();
                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadEmail");
                    titulo.className = "alert";
                }
                else if (data == "ErroEmailCadastrado") {


                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadEmail");
                    titulo.className = "alert d-none";

                    Register();
                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadEmailCadastrado");
                    titulo.className = "alert";

                    // var titulo = document.getElementById("Mail_Cad");
                    // titulo.className = "input-field";
                    // var titulo = document.getElementById("CadEmail");
                    // titulo.className = "alert d-none";
                }
                else {
                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadEmail");
                    titulo.className = "alert d-none";

                    var titulo = document.getElementById("Mail_Cad");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadEmailCadastrado");
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
                if (data == "ErroNickCadastrado") {
                    var titulo = document.querySelector('#cadUsername');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#CadNickCadastrado');
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.querySelector('#cadUsername');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#CadNickCadastrado');
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
                if (data == "ErroCpfCadastrado") {
                    var titulo = document.getElementById("cadCPF");
                    titulo.className = "input-field invalid";
                    var titulo = document.getElementById("CadCpfCadastrado");
                    titulo.className = "alert";
                }
                else {
                    var titulo = document.getElementById("cadCPF");
                    titulo.className = "input-field";
                    var titulo = document.getElementById("CadCpfCadastrado");
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


//Funcionarios 
$(function () {
    $('#Register-fun').submit(function () {
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

                if (data == "ErroName") {
                    //
                    var titulo = document.querySelector('#Name_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Name_sml_fun');
                    titulo.className = "alert-fun";

                }
                else {
                    var titulo = document.querySelector('#Name_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Name_sml_fun');
                    titulo.className = "alert-fun d-none";
                }
                if (data == "ErroEmail") {
                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#E-mail_cad_sml_fun');
                    titulo.className = "alert-fun d-none";

                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#E-mail_sml_fun');
                    titulo.className = "alert-fun";
                }
                else if (data == "ErroEmailCadastrado") {
                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#E-mail_sml_fun');
                    titulo.className = "alert-fun d-none";

                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#E-mail_cad_sml_fun');
                    titulo.className = "alert-fun";
                }
                else {
                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#E-mail_sml_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#E-Mail_cad_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#E-mail_cad_sml_fun');
                    titulo.className = "alert-fun d-none";
                }
                //else{
                //     var titulo = document.querySelector('#Mail_fun');
                //     titulo.className = "input-field";
                //     var titulo = document.querySelector('#E-mail_cad_sml_fun');
                //     titulo.className = "alert d-none";
                //}
                if (data == "ErroSenha") {
                    var titulo = document.querySelector('#Pass_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Pass_sml_fun');
                    titulo.className = "alert-fun";
                }
                else {
                    var titulo = document.querySelector('#Pass_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Pass_sml_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroConfSenha") {
                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Pass_sml_unm_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Pass_sml_conf_fun');
                    titulo.className = "alert-fun";
                }
                else if (data == "ErroSenhasDiferentes") {
                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Pass_sml_unm_fun');
                    titulo.className = "alert-fun";

                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Pass_sml_conf_fun');
                    titulo.className = "alert d-none";
                }
                else {
                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Pass_sml_unm_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#CfPass_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Pass_sml_conf_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroUser") {
                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#User_cad_sml_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#User_sml_fun');
                    titulo.className = "alert-fun";
                }
                else if (data == "ErroUserCadastrado") {
                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#User_cad_sml_fun');
                    titulo.className = "alert-fun";

                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#User_sml_fun');
                    titulo.className = "alert d-none";
                }
                else {
                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#User_sml_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Username_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#User_cad_sml_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroCpf") {
                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Cpf_cad_sml_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Cp_smlf_fun');
                    titulo.className = "alert-fun";
                }
                else if (data == "ErrorCpfCadastrado") {
                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Cpf_cad_sml_fun');
                    titulo.className = "alert-fun";

                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Cp_smlf_fun');
                    titulo.className = "alert d-none";
                }
                else {
                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Cpf_cad_sml_fun');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Cpf_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Cp_smlf_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroTell") {
                    var titulo = document.querySelector('#tell_fun');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Phone_sml_fun');
                    titulo.className = "alert-fun";
                }
                else {
                    var titulo = document.querySelector('#tell_fun');
                    titulo.className = "input-field";
                    var titulo = document.querySelector('#Phone_sml_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "ErroCargo") {
                    var titulo = document.querySelector('#Cargo_fun');
                    titulo.className = "input-field input-select invalid";
                    var titulo = document.querySelector('#Cargo_sml_fun');
                    titulo.className = "alert-fun";
                }
                else {
                    var titulo = document.querySelector('#Cargo_fun');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Cargo_sml_fun');
                    titulo.className = "alert d-none";
                }
                if (data == "CadastroRealizado") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'center-end',
                        background: '#22242A',
                        showConfirmButton: false,
                        heightAuto: false,
                        width: '350px',
                        padding: '1.8rem',
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        customClass: {
                            content: 'CustomColor',
                            title: 'CustomText',
                            popup: 'CustomColor',
                            footer: 'CustomText'
                        },
                        icon: 'success',
                        title: 'Cadastro Realizado!',
                    })
                    title = document.querySelector('#Name_fun');
                    title.value = "";
                    title = document.querySelector('#E-Mail_cad_fun');
                    title.value = "";
                    title = document.querySelector('#Pass_fun');
                    title.value = "";
                    title = document.querySelector('#CfPass_fun');
                    title.value = "";
                    title = document.querySelector('#Username_fun');
                    title.value = "";
                    title = document.querySelector('#Cpf_fun');
                    title.value = "";
                    title = document.querySelector('#tell_fun');
                    title.value = "";
                    title = document.querySelector('#Cargo_sml_fun');
                    title.selectedIndex = 0;

                }

            }//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora


$(function () {
    $('#Register-Produto').submit(function () {
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

                if(data == "Erro Codigo"){
                    var titulo = document.querySelector('#Cod_Pdt');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Cod_cad_sml_pdt');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Cod_Pdt');
                    titulo.className = "input-field input-select invalid";
                    var titulo = document.querySelector('#Cod_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else if(data == "Codigo Existe"){
                    var titulo = document.querySelector('#Cod_Pdt');
                    titulo.className = "input-field input-select invalid";
                    var titulo = document.querySelector('#Cod_cad_sml_pdt');
                    titulo.className = "alert-fun";

                    var titulo = document.querySelector('#Cod_sml_pdt');
                    titulo.className = "alert d-none";
                }
                else{
                    var titulo = document.querySelector('#Cod_Pdt');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Cod_cad_sml_pdt');
                    titulo.className = "alert d-none";

                    var titulo = document.querySelector('#Cod_Pdt');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Cod_sml_pdt');
                    titulo.className = "alert d-none";
                }
                if(data == "Erro Nome"){
                    var titulo = document.querySelector('#Nome_Pdt');
                    titulo.className = "input-field input-select invalid";
                    var titulo = document.querySelector('#Nome_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else{
                    var titulo = document.querySelector('#Nome_Pdt');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Nome_sml_pdt');
                    titulo.className = "alert d-none";
                }
                if(data == "Erro Descricao"){
                    var titulo = document.querySelector('#Desc_Pdt');
                    titulo.classList.add('invalid-area');
                    var titulo = document.querySelector('#Desc_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else{
                    var titulo = document.querySelector('#Desc_Pdt');
                    titulo.className = "input-field-area";
                    var titulo = document.querySelector('#Desc_sml_pdt');
                    titulo.className = "alert d-none";
                }
                if(data == "Erro Imagem"){
                    var titulo = document.querySelector('#Foto_pdt');
                    titulo.className = "foto_pdt invalid-img";
                    var titulo = document.querySelector('#Cam_foto_pdt');
                    titulo.className = "Cam_IMG_pdt invalid-img-cam";
                    var titulo = document.querySelector('#Img_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else{
                    var titulo = document.querySelector('#Foto_pdt');
                    titulo.className = "foto_pdt";
                    var titulo = document.querySelector('#Cam_foto_pdt');
                    titulo.className = "Cam_IMG_pdt";
                    var titulo = document.querySelector('#Img_sml_pdt');
                    titulo.className = "alert-fun d-none";
                }
                if(data == "Erro Preco"){
                    var titulo = document.querySelector('#Preco_Pdt');
                    titulo.className = "input-field input-select invalid";
                    var titulo = document.querySelector('#Preco_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else{
                    var titulo = document.querySelector('#Preco_Pdt');
                    titulo.className = "input-field input-select";
                    var titulo = document.querySelector('#Preco_sml_pdt');
                    titulo.className = "alert d-none";
                }
                if(data == "Erro Estoque"){
                    var titulo = document.querySelector('#Estoque_Pdt');
                    titulo.className = "input-field invalid";
                    var titulo = document.querySelector('#Estoque_sml_pdt');
                    titulo.className = "alert-fun";
                }
                else{
                    var titulo = document.querySelector('#Estoque_Pdt');
                    titulo.className = "input-field ";
                    var titulo = document.querySelector('#Estoque_sml_pdt');
                    titulo.className = "alert d-none";
                }
                if(data== "Produto Cadastrado!"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'center-end',
                        background: '#22242A',
                        showConfirmButton: false,
                        heightAuto: false,
                        width: '350px',
                        padding: '1.8rem',
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        customClass: {
                            content: 'CustomColor',
                            title: 'CustomText',
                            popup: 'CustomColor',
                            footer: 'CustomText'
                        },
                        icon: 'success',
                        title: 'Produto Cadastrado!',
                    })
                    
                    $titulo = document.querySelector('#Cod_Pdt');
                    $titulo.value = ""; 
                    $titulo = document.querySelector('#Nome_Pdt');
                    $titulo.value = ""; 
                    $titulo = document.querySelector('#Desc_Pdt');
                    $titulo.value = ""; 
                    $titulo = document.querySelector('#Preco_Pdt');
                    $titulo.value = ""; 
                    $titulo = document.querySelector('#Estoque_Pdt');
                    $titulo.value = ""; 
                    $titulo = document.querySelector('#Foto_img_Pdt');
                    $titulo.src = "../img/icons8-produto-novo-100.png";
                }

            }//success
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