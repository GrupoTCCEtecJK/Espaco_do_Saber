<?php include ("../headerAluno.php"); ?>

 <section class="p-4 p-md-5">
                <h2  class="h3 fw-bold mb-4 text-center">Escolha como vai estudar hoje!</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-4 p-3 text-center">
                                <div class="card-body">
                                    <i class="bi bi-book fs-1 mb-3 text-success"></i>
                                    <h5 class="card-title fw-semibold">Aulas</h5>
                                    <p class="card-text text-muted">Acesse aulas e materiais organizados por disciplina e tema.</p>
                                    <a href="../aulas/paginaAulas.php" class="btn btn-success rounded-pill mt-3 px-4">Explorar</a>
                                </div>              
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-4 p-3 text-center">
                            <div class="card-body">
                                <i class="bi bi-pencil-square fs-1 mb-3 text-info"></i>
                                <h5 class="card-title fw-semibold">Simulados</h5>
                                <p class="card-text text-muted">Pratique com simulados de provas passadas e teste seus conhecimentos.</p>
                                <a href="../../testes/index.php" class="btn btn-info rounded-pill mt-3 px-4">Resolver</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-4 p-3 text-center">
                            <div class="card-body">
                                <i class="bi bi-robot fs-1 mb-3 text-secondary"></i>
                                <h5 class="card-title fw-semibold">Heleno</h5>
                                <p class="card-text text-muted">Tire suas dúvidas e aprofunde-se nos estudos com nossa IA.</p>
                                <a href="#" class="btn btn-secondary rounded-pill mt-3 px-4">Conversar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 rounded-4 p-3 text-center">
                            <div class="card-body">
                                <i class="bi bi-clock fs-1 mb-3 text-danger"></i>
                                <h5 class="card-title fw-semibold">Pomodoro</h5>
                                <p class="card-text text-muted">Gerencie seu tempo de estudo e pausas para máxima produtividade.</p>
                                <a href="../pomodoro/pomodoro.php" class="btn btn-danger rounded-pill mt-3 px-4">Iniciar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
  function myFunction() {
    var element = document.body;
    element.dataset.bsTheme = element.dataset.bsTheme == "light" ? "dark" : "light";
  }
</script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>