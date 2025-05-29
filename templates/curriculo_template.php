<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Currículo Gerado</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <div class="curriculo-container">
        <h1 class="curriculo-titulo">
            <?= htmlspecialchars($nome) ?>
        </h1>
        <hr class="curriculo-hr-principal">
        <div class="curriculo-dados">
            <div class="curriculo-dado">
                <span class="curriculo-dado-label">Data de Nascimento:</span><br>
                <span><?= htmlspecialchars($data_nascimento) ?></span>
            </div>
            <div class="curriculo-dado">
                <span class="curriculo-dado-label">Idade:</span><br>
                <span><?= htmlspecialchars($idade) ?> anos</span>
            </div>
        </div>
        <hr class="curriculo-hr-secao">
        <h3 class="curriculo-secao-titulo">Experiência Profissional</h3>
        <ul class="curriculo-lista">
            <?php foreach ($experiencias as $exp): ?>
                <li><?= htmlspecialchars($exp) ?></li>
            <?php endforeach; ?>
        </ul>
        <hr class="curriculo-hr-secao">
        <h3 class="curriculo-secao-titulo">Referências Pessoais</h3>
        <ul class="curriculo-lista">
            <?php foreach ($referencias as $ref): ?>
                <li><?= htmlspecialchars($ref) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>