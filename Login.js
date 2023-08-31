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

