
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pergunte ao Heleno</title>

<link rel="stylesheet" href="style.css?v=1.0">

</head>
<body>


<div class="sidebar">
    <div class="perfil text-center py-3">
        <img src="home.png" alt="Foto do Heleno">
        <p class="fw-bold mb-0"></p>
    </div>

   <div class="list-group list-group-flush">

    <a href="../aulas/paginaAulas.php" class="list-group-item list-group-item-action py-3">
        <i class="bi bi-chat-dots"></i> Aulas
    </a>

    <a href="../../testes/index.php" class="list-group-item list-group-item-action py-3">
        <i class="bi bi-folder"></i> Simulados

    <a href="../pomodoro/pomodoro.php" class="list-group-item list-group-item-action py-3">
        <i class="bi bi-gear"></i> Pomodoro
    </a>

    <hr>

    <a href="../homeAluno/homeAluno.php" class="list-group-item list-group-item-action py-3">
        <i class="bi bi-arrow-left-circle"></i> Voltar
    </a>

</div>

</div>


<!-- CONTEÚDO DO CHAT -->
<div class="conteudo">
    <div class="chat-page">

        <h1 class="title">Pergunte ao Heleno!</h1>

        <div class="chat-container">

            <div class="chat-header">
                <img src="home.png" alt="Heleno" class="chat-avatar">
                <span class="chat-name">Heleno</span>
            </div>

            <div id="resposta" class="chat-box"></div>

            <div class="chat-input-container">
                <textarea id="mensagem" placeholder="Digite sua pergunta..."></textarea>
                <button class="enviar" onclick="enviarPergunta()">Enviar</button>
            </div>

        </div>
    </div>
</div>

<script>
async function enviarPergunta() {
  const input = document.getElementById('mensagem');
  const respostaDiv = document.getElementById('resposta');
  const pergunta = input.value.trim();

  if (!pergunta) return;

  const userMessage = document.createElement('div');
  userMessage.className = 'mensagem usuario';
  userMessage.textContent = pergunta;
  respostaDiv.appendChild(userMessage);

  const loadingMessage = document.createElement('div');
  loadingMessage.className = 'mensagem ia';
  loadingMessage.textContent = 'Pensando...';
  respostaDiv.appendChild(loadingMessage);
  respostaDiv.scrollTop = respostaDiv.scrollHeight;

  input.value = '';

  try {
      const response = await fetch('chat.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ pergunta })
      });

    const text = await response.text();
    console.log("DEBUG:", text);

    try {
        const data = JSON.parse(text);
        loadingMessage.textContent = data.resposta || "Sem resposta";
    } catch {
        loadingMessage.textContent = "ERRO: O servidor não retornou JSON.";
    }

  } catch (error) {
      loadingMessage.textContent = "Erro ao se conectar com o servidor.";
  }

  respostaDiv.scrollTop = respostaDiv.scrollHeight;
}
</script>

</body>
</html>
