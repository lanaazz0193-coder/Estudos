async function buscarEndereco(cep) {

    try {

        var consultaCep = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        var consultaCepConvertida = await consultaCep.json();
        console.log(consultaCepConvertida);

        if (consultaCepConvertida.erro){
            throw new Error ('CEP não existente!')
        }
        return consultaCepConvertida;

    } catch (error) {
        console.log(error);
    }
}

let ceps = ['35188000', '35185000', '35188002'];
let conjuntoCeps = ceps.map(cep => buscarEndereco(cep));

Promise.all(conjuntoCeps).then(respostas => {
    console.log(respostas);
})