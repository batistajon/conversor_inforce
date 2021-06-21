<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    </head>
    <body class="d-flex text-center h-100 text-white bg-dark flex-column" id="main">
        <div class="row">
            <div class="col-8">
                <div class="card m-5 bg-dark">
                    <div id="header" class="card-header">
                        <img src="https://inforce.com.br/wp-content/uploads/2017/03/logo.png" alt="">
                    </div>
                    <div class="card-body">
                        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                            <div class="px-3 conteudo flex-column justify-content-center">
                                <h1 class="mb-3">Faça a sua cotação.</h1>
                                <p class="lead mb-3">Selecione a moeda que você deseja cotar. Insira os códigos das moedas sempre com 3 caracteres em letras maiúsculas. As moedas possíveis para cotação, com seus respectivos códigos são: </p>
                                <p class="lead"> Real - BRL, Dólar - USD e Euro - EUR.</p>
                                <form action="" method="get">
                                    <div class="row justify-content-center mt-4">
                                        <input type="text" class="form-control w-25 m-1" id="moedaBase" placeholder="Moeda base Ex.: USD">
                                        <input type="text" class="form-control w-25 m-1" id="moedaParaConverter" placeholder="Moeda a converter. Ex.: BRL">
                                        <input type="text" class="form-control w-25 m-1" id="valorParaConverter" placeholder="Valor a converter. Ex.: 15.00">
                                    </div>
                                    <button class="btn btn-success btn-lg mt-5" id="converter" type="submit">Converter</button>
                                </form>
                                <p id="resposta"></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        Jonathas Batista
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>
