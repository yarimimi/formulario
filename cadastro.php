

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Nova Biografia</title>
    <style>
        body {
            background-color: #d4eaff; /* Fundo celeste */
            font-family: Arial, sans-serif;
        }
        
        .container {
            background-color: #ffffff; /* Fundo branco para os conteúdos */
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            max-width: 400px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .form-botao {
            background-color: #007bff; /* Botão azul */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-botao:hover {
            background-color: #0056b3; /* Botão azul escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Nova Biografia</h1>
        
        <form action="salvar_biografia.php" method="post" enctype="multipart/form-data">
            <label class="form-label" for="foto">Foto:</label>
            <input class="form-input" type="file" name="foto" id="foto">
            
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-input" type="text" name="nome" id="nome">
            
            <label class="form-label" for="idade">Idade:</label>
            <input class="form-input" type="number" name="idade" id="idade">
            
            <label class="form-label" for="profissao">Profissão:</label>
            <input class="form-input" type="text" name="profissao" id="profissao">
            
            <label class="form-label" for="resumo">Resumo:</label><br>
            <textarea class="form-textarea" name="resumo" id="resumo" rows="4" cols="50"></textarea>
            
            <input class="form-botao" type="submit" value="Salvar">
        </form>
        
        <br><br>
        <a href="home.php">Voltar para a Página Principal</a>
    </div>
</body>
</html>

