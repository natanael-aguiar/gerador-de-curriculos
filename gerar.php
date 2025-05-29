<?php
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$experiencias = $_POST['experiencia'] ?? [];
$referencias = $_POST['referencia'] ?? [];

ob_start();
include 'templates/curriculo_template.php';
$curriculo = ob_get_clean();

// Exibe o currículo já com o botão de imprimir centralizado
$curriculo = str_replace('</body>', '<div style="text-align:center; margin: 32px 0 0 0;"><button onclick="window.print()" class="btn btn-success" style="font-size:1.1rem; padding: 10px 32px; border-radius:2rem; margin-top:24px;">Imprimir Currículo</button></div></body>', $curriculo);
echo $curriculo;
