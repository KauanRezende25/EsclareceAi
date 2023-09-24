function mostrar()
{
    var imputPass= document.getElementById('icone_senha');
    var btn = document.getElementById('senhabtn');

    if(imputPass.type === 'password')
    {
        imputPass.setAttribute('type', 'text');
        btn.classList.replace('bi-eye','bi-eye-slash');
        
    }
    else
    {
        imputPass.setAttribute('type', 'password');
        btn.classList.replace('bi-eye-slash','bi-eye');
    }
}

function validarSenha(){
    var senha = document.getElementById("senha").value;

        if(senha == "" || senha.length <= 5){
            document.getElementById("erroSenha").innerHTML = "<span style = 'color: #ff0000; font-size:10px;'>Mínimo de 6 caracteres </span><br><br>"
        }

            else{
                document.getElementById("erroSenha").innerHTML = "<span style = 'color : #00ff00;'>Senha válida</span>"
            }

}
function confereSenha(){
        const senha = document.querySelector('input[name=senha]');
        const confirma = document.querySelector('input[name=confirma]');

        if(confirma.value === senha.value){
            confirma.setCustomValidity('');
        }
        else{
            confirma.setCustomValidity('Senhas não conferem');
        }
}




