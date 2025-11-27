<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço do Saber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray min-vh-100">

    <nav class="navbar navbar-expand-lg bg-dark-blue px-3 shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center fw-semibold text-light" href="../homeAluno/homeAluno.php">
                <img src="../../img/icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Espaço do Saber
            </a>
            <form class="form-inline">
                <button class="btn btn-outline-light rounded-pill" type="button" onclick="myFunction()"><i class="bi bi-moon-fill"></i> Modo escuro</button>
                 <a href="novotcc/ProjetoTCC/cadastro/index.php"> <button class="btn btn-outline-light rounded-pill" type="button"><i class="bi bi-door-open"></i> Sair <button> </a>
            </form>
        </div>
    </nav>
    
    <div class="d-flex">
        <nav id="sidebarMenu" class="d-lg-block bg-dark text-light sidebar min-vh-100 p-3">
            <div class="position-sticky">
                <div class="perfil text-center py-3">
                    <img src="../../cadastro/img/cadastro.png"alt="Logo" width="80" height="80" class="rounded-circle mb-2" alt="Foto do usuário">
                    <p class="fw-bold mb-0">Usuário</p>
                </div>
                <div class="list-group list-group-flush">
                    
                    <a href="../aulas/paginaAulas.php" class="list-group-item list-group-item-action py-3">
                        <i class="bi bi-book me-2"></i> Aulas
                    </a>
                    <a href="../../testes/index.php" class="list-group-item list-group-item-action py-3">
                        <i class="bi bi-file-earmark-text me-2"></i> Simulados
                    </a>
                    <a href="../heleno/heleno.php" class="list-group-item list-group-item-action py-3">
                        <i class="bi bi-robot me-2"></i> Heleno
                    </a>
                    <a href="../pomodoro/pomodoro.php" class="list-group-item list-group-item-action py-3">
                        <i class="bi bi-clock me-2"></i> Pomodoro
                    </a>
                </div>
                <hr>
                <a href="../../cadastro/index.php" class="list-group-item list-group-item-action py-3">
                    <i class="bi bi-box-arrow-right me-2"></i> Sair
                </a>
            </div>
        </nav>
