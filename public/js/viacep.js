let formulario_endereco = {
    cep : document.getElementById('cep'),
    logradouro : document.getElementById('logradouro'),
    bairro : document.getElementById('bairro'),
    cidade : document.getElementById('cidade'),
    uf : document.getElementById('uf'),
    complemento : document.getElementById('complemento'),
    numero : document.getElementById('numero')
}

formulario_endereco.cep.addEventListener('change', async (e) => {
    iniciar_loading_formulario();
    var validacep = /^[0-9]{8}$/;
    if(!validacep.test(formulario_endereco.cep.value)) {
        finalizar_loading_formulario();
        //exibir cep inválido
        return;
    }
    var script = document.createElement('script');
    script.src = 'https://viacep.com.br/ws/'+ formulario_endereco.cep.value + '/json/?callback=preencher_formulario';
    document.body.appendChild(script);
});
function preencher_formulario(dados) {
    if ("erro" in dados) {
        finalizar_loading_formulario();
        //exibir cep inválido
        return;
    }
    finalizar_loading_formulario();
    formulario_endereco.logradouro.value = dados.logradouro;
    formulario_endereco.bairro.value = dados.bairro;
    formulario_endereco.uf.value = dados.uf;
    formulario_endereco.cidade.value = dados.localidade;
    formulario_endereco.complemento = dados.complemento;
    formulario_endereco.numero.focus();
}
function iniciar_loading_formulario()
{
    for (let input in formulario_endereco) {
        if(input === 'cep') continue;
        formulario_endereco[input].value = '...';
        formulario_endereco[input].setAttribute('disabled', 'disabled');
    }
}
function finalizar_loading_formulario()
{
    for (let input in formulario_endereco) {
        if(input === 'cep') continue;
        formulario_endereco[input].value = '';
        formulario_endereco[input].removeAttribute('disabled');
    }
}

