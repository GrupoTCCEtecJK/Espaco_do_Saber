
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
    <link rel="stylesheet" href="style.css?v=1.0">
</head>
    <?php?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <title>Pomodoro</title>
</head>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço do Saber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<body data-bs-theme="light">

  <nav class="navbar navbar-expand-lg bg-dark-blue px- hadow">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center fw-semibold text-light" href="../homeAluno/homeAluno.php">
      <img src="../../img/icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
       Espaço do Saber
    </a>


  </div>
</nav>
<body>
<div class="pomodoro-page">
  <div class="timer-box">

    <img src="macaco.png" alt="Macaco fofo" class="monkey-img" />

    <h1>Vamos Focar!</h1>

    <div class="timer-display" id="timer">00:00</div>

    <div class="controls">
      <label>
        Foco:
        <input type="number" id="focusTime" value="25" min="1" /> min
      </label>
      <label>
        Pausa:
        <input type="number" id="breakTime" value="5" min="1" /> min
      </label>
    </div>

    <div class="buttons">
      <button onclick="startTimer()">▶ Iniciar</button>
      <button onclick="pauseTimer()">⏸ Pausar</button>
      <button onclick="resetTimer()">Resetar</button>
    </div>

  </div>
</div>

<script>
let timer;
let isRunning = false;
let timeLeft = 0;

function startTimer() {
  if (isRunning) return;

  const focusMinutes = parseInt(document.getElementById('focusTime').value) || 25;
  const breakMinutes = parseInt(document.getElementById('breakTime').value) || 5;

  if (timeLeft <= 0) {
    timeLeft = focusMinutes * 60;
  }

  isRunning = true;
  timer = setInterval(() => {
    if (timeLeft <= 0) {
      clearInterval(timer);
      isRunning = false;
      alert("Tempo de foco acabou! Hora da pausa 🍵");
      timeLeft = breakMinutes * 60;
      startTimer();
    } else {
      timeLeft--;
      updateTimerDisplay();
    }
  }, 1000);
}

function pauseTimer() {
  clearInterval(timer);
  isRunning = false;
}

function resetTimer() {
  clearInterval(timer);
  isRunning = false;
  timeLeft = 0;
  updateTimerDisplay();
}

function updateTimerDisplay() {
  const minutes = Math.floor(timeLeft / 60);
  const seconds = timeLeft % 60;
  document.getElementById('timer').textContent =
    `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}

updateTimerDisplay();
</script>

</body>
</html>