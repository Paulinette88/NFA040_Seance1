<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur le serveur Alwaysdata de Pauline</title>
    <style>
        body {
            background-image: url('https://paulinette88.alwaysdata.net/images/backgroundflower.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #FFC3C3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .welcome-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        li {
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(10px);
            animation: fadeInUp 0.6s ease forwards;
        }

        li:nth-child(1) { animation-delay: 0.1s; }
        li:nth-child(2) { animation-delay: 0.2s; }
        li:nth-child(3) { animation-delay: 0.3s; }
        li:nth-child(4) { animation-delay: 0.4s; }
        li:nth-child(5) { animation-delay: 0.5s; }
        li:nth-child(6) { animation-delay: 0.6s; }
        li:nth-child(7) { animation-delay: 0.7s; }
        li:nth-child(8) { animation-delay: 0.8s; }
        li:nth-child(9) { animation-delay: 0.9s; }
        li:nth-child(10) { animation-delay: 1.0s; }
        li:nth-child(11) { animation-delay: 1.1s; }
        li:nth-child(12) { animation-delay: 1.2s; }
        li:nth-child(13) { animation-delay: 1.3s; }
        li:nth-child(14) { animation-delay: 1.4s; }
        li:nth-child(15) { animation-delay: 1.5s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        a {
            text-decoration: none;
            color: #DB7B79;
            transition: color 0.3s;
        }

        a:hover {
            color: #000000;
        }

        .secret-link {
            color: inherit;
            text-decoration: none;
            font-weight: bold;
        }

        .secret-link:hover {
            color: #aaa;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenue sur la page de Pauline</h1>
        <p>Cette page vous sert de sommaire pour accéder à mes travaux<a href="perso/" class="secret-link" title="Coin secret">.</a></p>
        <ul>
            <?php
                $fichiers = scandir('.');
                $pages = array_filter($fichiers, function($fichier) {
                    return is_file($fichier) && preg_match('/\.(html|php)$/', $fichier) && $fichier !== 'index.php';
                });
                natcasesort($pages);
                foreach ($pages as $page) {
                    $titre = ucwords(str_replace(['_', '-'], ' ', pathinfo($page, PATHINFO_FILENAME)));
                    echo "<li><a href=\"$page\">$titre</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
