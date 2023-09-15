<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagem = $_FILES["imagem"];
    $pdf = $_FILES["pdf"];

    if ($imagem["error"] === 0 && $pdf["error"] === 0) {

        $diretorioDestino = "uploads/";
        $caminhoImagem = $diretorioDestino . $imagem["name"];
        $caminhoPDF = $diretorioDestino . $pdf["name"];

        move_uploaded_file($imagem["tmp_name"], $caminhoImagem);
        move_uploaded_file($pdf["tmp_name"], $caminhoPDF);

        echo '<h2>Imagem</h2>';
        echo '<img src="' . $caminhoImagem . '" alt="Imagem">';
        echo '<br>';

        echo '<h2>PDF</h2>';
        echo '<a href="' . $caminhoPDF . '" target="_blank">Baixar PDF</a>';
    } else {
        echo "Ocorreu um erro durante o upload dos arquivos.";
    }
}
?>
