<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <meta name="description" content="Crie seu currículo profissional de forma rápida e fácil.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg-light py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="mb-4 text-center fw-bold text-primary">Gerador de Currículo</h2>
                        <form action="gerar.php" method="POST" target="_blank">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nome completo</label>
                                <input type="text" name="nome" class="form-control" required placeholder="Digite seu nome completo">
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-2 mb-md-0">
                                    <label class="form-label fw-semibold">Data de nascimento</label>
                                    <input type="date" name="data_nascimento" class="form-control" required onchange="calcularIdade(this)">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Idade</label>
                                    <input type="text" name="idade" id="idade" class="form-control bg-light" readonly>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h5 class="fw-bold text-secondary mb-3">Experiência Profissional</h5>
                            <div id="experiencias" class="mb-2"></div>
                            <button type="button" class="btn btn-outline-primary btn-sm mb-3" onclick="adicionarCampo('experiencias', 'experiencia[]')">
                                + Adicionar Experiência
                            </button>
                            <hr class="my-4">
                            <h5 class="fw-bold text-secondary mb-3">Referências Pessoais</h5>
                            <div id="referencias" class="mb-2"></div>
                            <button type="button" class="btn btn-outline-primary btn-sm mb-3" onclick="adicionarCampo('referencias', 'referencia[]')">
                                + Adicionar Referência
                            </button>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg shadow">Gerar Currículo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>