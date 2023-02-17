<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <title>Contato</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/quem-somos">Quem-somos</a></li>
                <li><a href="/projeto-laravel">Projeto Laravel</a></li>
                <li><a href="/framework">Framework</a></li>
            </ul>
        </nav>
    </header>

    <section>

        <h1>Projeto Laravel</h1>
    
        <h3> Para criar um projeto com Laravel, é necessario ter instalado no seu computador:</h3>
        <ul>
            <li>PHP</li>
            <li>Composer</li>
        </ul>
        <i>Lembre-se, para verificar sua versão, basta digitar no terminal <span>'nomeApp -v'</span>, por exemplo: <span>'composer -v'</span> </i>
    
        <p>Após verificar a versão ou instalar ambas ferramentas vamos iniciar nosso processo de criação do Projeto:</p>
        <ol>
            <li> Abra o Terminal / CMD / Prompt de Comando</li>
            <li> Digite <span>'cd\'</span> para acessar a 'raíz' de seu computador</li>
            <li>Insira o comando <span>'mkdir Laravel'</span> para criar uma pasta, onde iremos organizar e armazenar nosso Projeto </li>
            <li> Ainda no terminal, acessamos a pasta com o comando <span>'cd Laravel'</span> </li>
            <li> Agora, na pasta, iremos criar o Projeto Laravel com o comando <span>'composer create-project laravel/laravel example-app'</span></li>
            <li>Após terminar suas instalações e pendências, usar o mesmo comando <span>'cd'</span> para acessar a pasta recém criada </li>
            <li>E por último, iniciamos nosso servidor web <span> 'php artisan serve'</span>, que nos retornará uma URL, e ao acessa-lá, podemos ver nosso projeto em execução</li>
        </ol>
    </section>

</body>

</html>