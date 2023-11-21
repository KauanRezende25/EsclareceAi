function mostrarSenha2()
{
    const imputPass= document.getElementById('icone_senha2');
    const btn = document.getElementById('btn-senha2');

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