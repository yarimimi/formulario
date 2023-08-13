<?php 
{
$servidor = "localhost"; 
$usuario = "root";
$senha = "";
$db = "formulario";

$link = mysqli_connect($servidor, $usuario, $senha, $db);


if (mysqli_connect_error()) {
    echo "Error na conexao: " . mysqli_connect_error;
}

if (!mysqli_query ($link , "INSERT INTO biografias(id, nome,idade,
profissao,resumo,foto) VALUES (NULL, '". '$nome' . "' , '" . '$idade'. "',
'". '$profissao' . "', '". '$resumo' . "', '". '$foto' . "')")) {
    echo ("descrisao do erro: ". mysqli_error($link));
}

mysqli_close($link);


echo "<html><body>";
echo "<p style='text-align:centre'>os dados foram registrados com 
sucesso!</p>";
echo"</body></html>";

}
?>