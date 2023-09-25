function mostrarSenha()
{
    var imputPass= document.getElementById('icone_senha');
    var btn = document.getElementById('btn-senha');

    if(imputPass.type === 'password')
    {
        imputPass.setAttribute('type', 'text');
        btn.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
        
    }
    else
    {
        imputPass.setAttribute('type', 'password');
        btn.classList.replace('bi-eye-slash-fill','bi-eye-fill');
    }
}
function mostrarSenha2()
{
    var imputPass= document.getElementById('icone_senha');
    var btn = document.getElementById('btn-senha2');

    if(imputPass.type === 'password')
    {
        imputPass.setAttribute('type', 'text');
        btn.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
        
    }
    else
    {
        imputPass.setAttribute('type', 'password');
        btn.classList.replace('bi-eye-slash-fill','bi-eye-fill');
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




