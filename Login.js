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
    const span = document.querySelectorAll('.span_required');

    if(span.length < 8 ){
        setError(2);
    }
    else{
        removeError(2);
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




