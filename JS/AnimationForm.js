
// INICIALIZAÇÃO DOS ELEMENTOS HTML.
var formL = document.querySelector('#Login');
var formR = document.querySelector('#Register');
var divBtn = document.querySelector('#btn');
var formR_2 = document.querySelector('#Page');
var bnt1 = document.querySelector('#Page1');
var bnt2 = document.querySelector('#Page2');
var btnElementLog = document.querySelector('#ElementLogin');
var btnElementCad = document.querySelector('#ElementRegister');
var pageClick = document.querySelector('#ElementClick');
var nextClick = document.querySelector('#ElementNext');
var backClick = document.querySelector('#ElementBack');
var btnBackClick = document.querySelector('#BtnBackElement');
/*
*
*
*/
pageClick.onclick = function(){

    formL.style.left = "-400px"
    formR.style.left = "-400px"
    formR_2.style.left = "450px"
    divBtn.style.left = "110px"
    bnt1.className = "paginas"
    bnt2.className = "paginas color-page"

}
nextClick.onclick = function(){

    formL.style.left = "-400px"
    formR.style.left = "-400px"
    formR_2.style.left = "450px"
    divBtn.style.left = "110px"
    bnt1.className = "paginas"
    bnt2.className = "paginas color-page"
}
btnElementCad.onclick = function (){

    formL.style.left = "-400px";
    formR.style.left = "50px"
    divBtn.style.left = "110px"
    formR_2.style.left = "450px"
    bnt1.className = "paginas color-page"

}
backClick.onclick = function(){

    formL.style.left = "-400px";
    formR.style.left = "50px"
    divBtn.style.left = "110px"
    formR_2.style.left = "450px"
    bnt1.className = "paginas color-page"

}
btnBackClick.onclick = function(){

    formL.style.left = "-400px";
    formR.style.left = "50px"
    divBtn.style.left = "110px"
    formR_2.style.left = "450px"
    bnt1.className = "paginas color-page"

}

btnElementLog.onclick = function(){

    formL.style.left = "50px";
    formR.style.left = "450px"
    divBtn.style.left = "0"
    formR_2.style.left = "900px"

}

function Register(){

    formL.style.left = "-400px";
    formR.style.left = "50px"
    divBtn.style.left = "110px"
    formR_2.style.left = "450px"
    bnt1.className = "paginas color-page"

}
function Login(){

    formL.style.left = "50px";
    formR.style.left = "450px"
    divBtn.style.left = "0"
    formR_2.style.left = "900px"

}
function Limpar(){
    var campos = document.querySelectorAll('#Register input');
    for(campo of campos){
        campo.value = '';
    }
    var select = document.querySelector('#Register select');
    select.selectedIndex = 0;
}