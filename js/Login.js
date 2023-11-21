function mostrarSenha()
{
    const imputPass= document.getElementById('icone_senha');
    const btn = document.getElementById('btn-senha');

    if(imputPass.type === 'password')
    {
        imputPass.setAttribute('type', 'text');
        btn.classList.remove('bi-eye-fill');
        btn.classList.add('bi-eye-slash-fill');
        
    }
    else
    {
        imputPass.setAttribute('type', 'password');
        btn.classList.add('bi-eye-fill');
        btn.classList.remove('bi-eye-slash-fill');
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

