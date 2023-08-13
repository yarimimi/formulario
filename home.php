<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mini Sistema de Biografias (BIO)</title>
    <style>
        body {
            background-color: #d4eaff; /* Fundo celeste */
            font-family: Arial, sans-serif;
        }
        
        .container {
            background-color: #ffffff; /* Fundo branco para os conteúdos */
            border-radius: 10px;
            padding: 20px;
            margin: 60px auto;
            max-width: 800px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .titulo {
            text-align: center; /* Centralizar o título */
            margin-bottom: 20px;
        }

        .biografia {
            background-color: #f9f9f9; /* Fundo cinza claro para cada biografia */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centralizar o conteúdo */
        }

        .imagem-biografia {
            display: block;
            margin: 0 auto 10px;
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .botao-novo {
            display: block;
            background-color: #007bff; /* Botão azul */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .botao-novo:hover {
            background-color: #0056b3; /* Botão azul escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Grupo A</h1>
        
        <div class="biografia">
            <img class="imagem-biografia" src="exemplo1.jpg" alt="Foto de Marisol Lima">
            <h2>Marisol Lima</h2>
            <p>Idade: 31</p>
            <p>Profissão: Engenheira</p>
            <p>Resumo: Engenheira, estudou na Universidade X, aos 28 anos...</p><br>
        </div>
        
        <div class="biografia">
            <img class="imagem-biografia" src="exemplo2.jpg" alt="Foto de Paulo Ramirez">
            <h2>Paulo Ramirez</h2>
            <p>Idade: 29</p>
            <p>Profissão:  Arquiteto</p>
            <p>Resumo:  Graduado pela universidade e na cidade de São Paulo...</p>
        </div>
        
        <a class="botao-novo" href="cadastro.php">Adicionar Nova Biografia</a>
    </div>
</body>
</html>


