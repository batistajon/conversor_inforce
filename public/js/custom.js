const axios = window.axios;
const converterBtn = document.getElementById('converter');

converterBtn.addEventListener('click', function (event) {
    event.preventDefault();

    let moedaBase = document.getElementById('moedaBase').value;
    let moedaParaConverter = document.getElementById('moedaParaConverter').value;
    let valorParaConverter = document.getElementById('valorParaConverter').value;

    if(moedaBase == '') {
        moedaBase = 'US'
    }

    if(moedaParaConverter == '') {
        moedaParaConverter = 'BR'
    }

    const buscaConversao = async (moedaBase, moedaParaConverter, valorParaConverter) => {
        let loading = true;
        let resposta = document.getElementById('resposta');

        if(loading) {
            resposta.className = 'spinner-border text-success mt-5';
            resposta.innerText = '';
        }

        let response = await axios.get(`http://127.0.0.1:8000/api/v1/converter/${moedaBase}-${moedaParaConverter}/${valorParaConverter}`);         
        
        if(response.data?.cotacao) {
            resposta.className = 'alert alert-success mt-5';
            loading = false;
            return resposta.innerHTML = `
                                        A cotação de ${moedaBase} para ${moedaParaConverter} hoje é: ${response.data?.cotacao}. \n
                                        O valor total da cotação é: $${response.data?.resultado}.
                                    `;
        }

        if(response.data?.erro) {
            resposta.className = 'alert alert-danger mt-5';
            loading = false;
            return resposta.innerHTML = `${response.data?.erro} ${response.data?.tipo}`;
        }
    }

    buscaConversao(moedaBase, moedaParaConverter, valorParaConverter);
});