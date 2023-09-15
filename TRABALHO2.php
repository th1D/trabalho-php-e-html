<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arquivo = $_FILES["arquivo"];

    if ($arquivo["error"] === 0) {
        $nomeTemporario = $arquivo["tmp_name"];

        if (is_uploaded_file($nomeTemporario)) {
            $diretorioDestino = "uploads/"; 
            $caminhoCompleto = $diretorioDestino . $arquivo["name"];

            if (move_uploaded_file($nomeTemporario, $caminhoCompleto)) {
                echo "Arquivo enviado e movido com sucesso!";
            } else {
                echo "Erro ao mover o arquivo para o destino.";
            }
        } else {
            echo "O arquivo não foi enviado por POST.";
        }
    } else {
        echo "Erro durante o upload do arquivo.";
    }
}
?>
