# Desafio Conversor de Moedas Inforce

![Badge](https://img.shields.io/badge/laravel-8.40-green)
![Badge](https://img.shields.io/badge/version-1.0.0-blue)
![Badge](https://img.shields.io/badge/Bootstrap-4.6.0-green)

## Sumário

<!--ts-->
   * Descrição
   * Instalação
   * Como usar
   * Back-end
   * Front-end
   * Tecnologias
   * Laravel license
<!--te-->

### Descrição

Repositório desenvolvido para o desafio de entrevista técnica para a vaga de Desenvolvedor PHP. Que consiste na criação de uma API REST com 1
endpoint que possibilite ao usuário fazer conversão de moedas. As
moedas que trabalharemos são Euro (EUR), Real (BRL) e Dólar (USD). Como payload para essa API, deve-se passar a
moeda base, a moeda para qual será a feita a conversão e o valor a ser convertido.

### Instalação

Como pré-requisito para o funcionamento do teste, é preciso ter instalados o [PHP 7.3](https://www.php.net/downloads.php#v7.3.28), ou superior, e o [Composer](https://getcomposer.org/).
    
* Primeiro usar o comando abaixo no terminal para realizar o clone do repositório:

    ```
    git clone https://github.com/batistajon/conversor_inforce.git
    ```

* Mudar para o diretório do projeto:

    ```
    cd conversor_inforce
    ```

* Atualizar o `composer.json` para a instalação de todas as dependencias:

    ```
    composer update
    ```

* Copiar o arquivo `.env.example` para um arquivo `.env` para configurar o ambiente:

    ```
    cp .env.example .env
    ```

* Gerar uma nova `key` para o projeto local:

    ```
    php artisan key:generate
    ```

* Inserir no arquivo `.env` a constante `API_KEY_COTACAO=b2cc1f507553ac750bad` para consulta a API de cotação atualizada externa.

* Iniciar o servidor de desenvolvimento, e acessar a url indicada no terminal:

    ```
    php artisan serve
    ``` 


### Como usar

Como indicado nas instruções de uso na página, insira o código com três caracteres em letras maiúsculas da moeda base, da moeda a qual deseja saber a cotação e o valor do montante. Caso não seja inserido nenhum valor de montante, será considerado o valor `1.00`.

Caso insira o código da moeda errado, será exibida uma mensagem de erro ao usuário indicando qual código foi digitado errado.

Se os dados enviados estiverem corretos, espera-se a resposta da cotação do dia e o resultado do montante enviado.

### Back-end

O back-end foi desenvolvido com o framework Laravel na versão 8.

O endpoint fornecido ao front-end é:
    
    http://127.0.0.1:8000/api/v1/converter/<MOEDA_BASE>-<MOEDA_A_CONVERTER>/<VALOR_A_CONVERTER>
    

O resultado da requisição acima é um `json`:
    
    {
        "cotacao":<cotacao>, 
        "resultado":<resultado>
    }
    

Exemplo de cotação no dia 21/06/2021 do montante de $15.00 Dólares para Real:

    http://127.0.0.1:8000/api/v1/converter/USD-BRL/15
    

O retorno dessa chamada será:

    {
        "cotacao":5.041095, 
        "resultado":75.62
    }
    

## Front-end

Foi utilizada a biblioteca `laravel/ui` com a instalação do scaffolding `bootstrap` para estilização da página.

Para realizar as chamadas à API do back-end foi utilizado componente HTTP client `axios` do gerenciador de pacotes javascript `npm`.

### Laravel License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Autor

<img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/64670588?v=4" width="100px;" alt=""/>

Feito por Jonathas Batista.

[![Twitter Badge](https://img.shields.io/badge/-@BatistaJon-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/BatistaJon)](https://twitter.com/BatistaJon) 
[![Linkedin Badge](https://img.shields.io/badge/-Jonathas%20Batista-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/jonbatista/)](https://www.linkedin.com/in/jonbatista/) 
[![Gmail Badge](https://img.shields.io/badge/-batista.jonathas@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:batista.jonathas@gmail.com)](mailto:batista.jonathas@gmail.com)