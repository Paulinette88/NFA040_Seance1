<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Bienvenue 🌷</title>
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      color: #5c3c58;
      margin: 0;
      padding: 2rem;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .flower {
      font-size: 2rem;
    }

    ul {
      list-style: none;
      padding: 0;
      margin-top: 2rem;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    li {
      background-color: #ffe4ec;
      border: 2px dashed #da8ca5;
      margin: 10px 0;
      padding: 1rem;
      border-radius: 10px;
      transition: background 0.3s;
    }

    li:hover {
      background-color: #fdd3e6;
    }

    a {
      text-decoration: none;
      color: #b04173;
      font-weight: bold;
      font-size: 1.2rem;
    }

    footer {
      margin-top: 3rem;
      font-size: 0.9rem;
      color: #aa6c8c;
    }
  </style>
</head>
<body>

  <h1>🌸 Mes jolies pages 🌸</h1>
  <div class="flower">✿ ✿ ✿</div>

  <ul>
    <?php
      $fichiers = glob("*.{php,html}", GLOB_BRACE);
      foreach($fichiers as $fichier) {
        if ($fichier != basename(_FILE_)) {
          echo '<li><a href="' . htmlspecialchars($fichier) . '">' . htmlspecialchars($fichier) . '</a></li>';
        }
      }
    ?>
  </ul>

  <footer>Fait avec 💖 pour une dev web qui aime les fleurs</footer>

</body>
</html>
