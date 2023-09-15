
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeArquivo = $_FILES["arquivo"]["name"];
    $tipoArquivo = $_FILES["arquivo"]["type"];
    $tamanhoArquivo = $_FILES["arquivo"]["size"];
    $tempNomeArquivo = $_FILES["arquivo"]["tmp_name"];
    $erroArquivo = $_FILES["arquivo"]["error"];

    // Verifique se não houve erros durante o upload
    if ($erroArquivo === 0) {
        // Mova o arquivo temporário para o diretório desejado
        $diretorioDestino = "uploads/"; // Substitua pelo seu diretório de destino
        $caminhoCompleto = $diretorioDestino . $nomeArquivo;

        if (move_uploaded_file($tempNomeArquivo, $caminhoCompleto)) {
            echo "Arquivo enviado com sucesso!";
        } else {
            echo "Erro ao mover o arquivo para o destino.";
        }
    } else {
        echo "Erro durante o upload do arquivo.";
    }
}
?>
