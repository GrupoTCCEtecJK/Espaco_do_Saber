<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pergunte ao Heleno</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

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

      const data = await response.json();
      loadingMessage.textContent = data.resposta || "Sem resposta";
  } catch (error) {
      loadingMessage.textContent = "Erro ao se conectar com o servidor.";
  }

  respostaDiv.scrollTop = respostaDiv.scrollHeight;
}
</script>

</body>
</html>
