var senha = document.querySelector("#password");
var confirmaSenha = document.querySelector("#password1");
var senhaErro = document.querySelector("#senhaErro");

if (senha.value == "" && confirmaSenha.value == ""){
    senhaErro.style.display = "none";
}



function verificaSenha(){
    if (senha.value == confirmaSenha.value){
        senhaErro.style.display = "none";
        }  
    else{
        senhaErro.style.display = "block";
    }
}
confirmaSenha.addEventListener("input", verificaSenha);     