<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Эмуляция файловой системы</title>
  <link rel="stylesheet" href="style/console.css">
</head>
<body>
  <div class="console-container">
    <div id="console">
      <div>Эмуляция файловой системы. Введи "help" для списка команд.</div>
    </div>
    <div id="fileViewer">
      <button id="closeViewer">Закрыть</button>
      <div id="fileContent"></div>
    </div>
    <input id="input" type="text" placeholder="Введи команду...">
  </div>
  <script src="scripts/console.js"></script>
</body>
</html>
